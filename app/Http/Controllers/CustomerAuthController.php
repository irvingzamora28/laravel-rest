<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\RegisterCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
    public function register(RegisterCustomerRequest $request)
    {
        $validated = $request->validated();
        
        // Get current date
        $currDateTime = Carbon::now();

        $customer = Customer::create(array_merge($validated, ['date_reg'  =>  $currDateTime->toDateTimeString(),]));

        $token = $customer->createToken('myapptoken')->plainTextToken;

        return response([
            'customer' => $customer,
            'token' => $token,
        ], 201);
        // return CustomerResource::make($customer);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        $response = [
            'status' => 200,
            'message' => 'Customer logged out',
        ];
        return response()->json($response, 200);
    }
}
