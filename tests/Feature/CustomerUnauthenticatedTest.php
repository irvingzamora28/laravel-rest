<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomerUnauthenticatedTest extends TestCase
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

        $this->headers['Accept'] = 'application/json';
        $this->headers['Authorization'] = 'Bearer false';
    }

    public function test_unauthenticated_get_customer()
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
        $response->assertStatus(401);
    }

    public function test_unauthenticated_get_customers()
    {
        $response = $this->withHeaders($this->headers)->get('api/customers');
        $response->assertStatus(401); 
    }

    public function test_unauthenticated_update_customer()
    {
        $response = $this->withHeaders($this->headers)->put('api/customers/1?name=New Name');
        $response->assertStatus(401); 
    }

    public function test_unauthenticated_delete_customer()
    {
        $response = $this->withHeaders($this->headers)->delete('api/customers/1');
        $response->assertStatus(401); 
    }
}
