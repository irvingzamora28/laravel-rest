<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\RegisterCustomerRequest;
use App\Http\Requests\Customer\UpdateCustomerRequest;
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
        return CustomerResource::collection(Customer::where('status', 'A')->get());
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
     * @param  UpdateCustomerRequest  $request
     * @param Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update([
            'name'  => $request->input('name'),
            'status'  => $request->input('status')
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
        $customer->update([ 'status'  => 'trash' ]);
        $customer->delete();

        return CustomerResource::make($customer);
    }

    /**
     * Return response indicating customer record was not found
     *
     * @param Request $request
     * @return void
     */
    public function missingCustomerResponse(Request $request)
    {
        $response = [
            'status' => 404,
            'message' => 'Registro no existe',
        ];
        return response()->json($response, 404);
    }
}
