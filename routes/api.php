<?php

use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('customers', CustomerController::class);
Route::post('/customers/register', [CustomerAuthController::class, 'register'])->name('customers.register');

Route::group(['middleware' => ['auth:customer-api']], function () {

    // Send custom response in case customer sent through implicit binding does not exist
    Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show')
        ->missing([CustomerController::class, 'missingCustomerResponse']);


    Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update')
        ->missing([CustomerController::class, 'missingCustomerResponse']);


    Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy')
        ->missing([CustomerController::class, 'missingCustomerResponse']);
});
