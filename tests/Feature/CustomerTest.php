<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;

    public function test_createuser()
    {
        $response = $this->post('api/customers', ["yes"]);
        $response->assertStatus(201); 
    }

    public function test_getuser()
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

    public function test_updateuser()
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

    public function test_deleteuser()
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
