<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\RegisterCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
    public function register(RegisterCustomerRequest $request)
    {
        $validated = $request->validated();

        // Get current date
        $currDateTime = Carbon::now();
        $customer = Customer::create(array_merge($validated, ['date_reg'  =>  $currDateTime->toDateTimeString()]));
        $hash = hash('sha1', $customer->email . $currDateTime . Str::random(500));
        $token = $customer->createToken($hash)->accessToken;

        return CustomerResource::make($customer)->additional([
            'token' => $token,
        ]);
    }

    public function logout(Request $request)
    {
        $response = [
            'status' => 200,
            'message' => 'Customer logged out',
        ];
        return response()->json($response, 200);
    }
}
