<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomerAuthenticatedTest extends TestCase
{
    use RefreshDatabase;

    use DatabaseMigrations;

    protected $headers = [];
    protected $scopes = [];
    protected $customer;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
        $this->artisan('passport:install', ['--no-interaction' => true,]);

        // Setup request authentication
        $this->customer = Customer::factory()->create();
        $token = $this->customer->createToken('TestToken', $this->scopes)->accessToken;
        $this->headers['Accept'] = 'application/json';
        $this->headers['Authorization'] = 'Bearer ' . $token;
    }

    public function test_register_customer()
    {
        $response = $this->post('api/customers/register', [
            'dni'       => '1235',
            'name'      => 'Joh',
            'email'     => 'email1@email.com',
            'last_name' => 'Doe',
            'address'   => 'Federick St 412',
            'date_reg'  =>  '0000-00-00 00:00:00',
            'id_reg'    => 1,
            'id_com'    => 11,
        ]);
        $response->assertStatus(201);
    }

    public function test_authenticated_get_customer()
    {
        $response = $this->post('api/customers', [
            'dni'       => '11111',
            'name'      => 'Joh',
            'email'     => 'email11@email.com',
            'last_name' => 'Doe',
            'address'   => 'Federick St 412',
            'date_reg'  =>  '0000-00-00 00:00:00',
            'id_reg'    => 1,
            'id_com'    => 11,
        ]);
        $response = $this->withHeaders($this->headers)->get('api/customers/1');
        $response->assertStatus(200);
    }

    public function test_authenticated_get_customers()
    {
        $response = $this->withHeaders($this->headers)->get('api/customers');
        $response->assertStatus(200); 
    }

    public function test_authenticated_update_customer()
    {
        $response = $this->withHeaders($this->headers)->put('api/customers/1?name=New Name');
        $response->assertStatus(200); 
    }

    public function test_authenticated_delete_customer()
    {
        $response = $this->withHeaders($this->headers)->delete('api/customers/1');
        $response->assertStatus(200); 
    }
}
