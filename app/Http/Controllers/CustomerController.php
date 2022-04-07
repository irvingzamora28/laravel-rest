<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\RegisterCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CustomerResource::collection(Customer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RegisterCustomerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterCustomerRequest $request)
    {
        $validated = $request->validated();

        // Get current date
        $currDateTime = Carbon::now();

        $customer = Customer::create(array_merge($validated, ['date_reg'  =>  $currDateTime->toDateTimeString(),]));

        return CustomerResource::make($customer);
    }

    /**
     * Display the specified resource.
     *
     * @param Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return CustomerResource::make($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update([
            'name'  => $request->input('name')
        ]);

        return CustomerResource::make($customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        
        return response(null, 204);
    }
}