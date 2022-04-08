<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;

    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_createcustomer()
    {
        $response = $this->post('api/customers', [
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

    public function test_getcustomer()
    {
        $response = $this->post('api/customers', [
            'dni'       => '1235',
            'name'      => 'Joh',
            'email'     => 'email1@email.com',
            'last_name' => 'Doe',
            'address'   => 'Federick St 412',
            'date_reg'  =>  '0000-00-00 00:00:00',
            'id_reg'    => 999,
            'id_com'    => 999,
        ]);
        $response = $this->get('api/customers/1235');
        $response->assertStatus(200); 
    }

    public function test_getusers()
    {
        $response = $this->get('api/customers');
        $response->assertStatus(200); 
    }

    public function test_updatecustomer()
    {
        $response = $this->post('api/customers', [
            'dni'       => '1235',
            'name'      => 'Joh',
            'email'     => 'email1@email.com',
            'last_name' => 'Doe',
            'address'   => 'Federick St 412',
            'date_reg'  =>  '0000-00-00 00:00:00',
            'id_reg'    => 999,
            'id_com'    => 999,
        ]);
        $response = $this->put('api/customers/1235?name=New Name');
        $response->assertStatus(200); 
    }

    public function test_deletecustomer()
    {
        $response = $this->post('api/customers', [
            'dni'       => '1235',
            'name'      => 'Joh',
            'email'     => 'email1@email.com',
            'last_name' => 'Doe',
            'address'   => 'Federick St 412',
            'date_reg'  =>  '0000-00-00 00:00:00',
            'id_reg'    => 999,
            'id_com'    => 999,
        ]);
        $response = $this->delete('api/customers/1235');
        $response->assertStatus(204); 
    }
}
