<?php

use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
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
// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
// Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');

Route::post('/customers/register', [CustomerAuthController::class, 'register'])->name('customers.register');
Route::group(['middleware' => ['auth:customer']], function () {
    
    // Send custom response in case customer sent through implicit binding does not exist
    Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show')
    ->missing(function (Request $request) {
        $response = [
            'status' => 404,
            'message' => 'Customer does not exist',
        ];
        return response()->json($response, 404);
    });

Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update')
    ->missing(function (Request $request) {
        $response = [
            'status' => 404,
            'message' => 'Customer does not exist',
        ];
        return response()->json($response, 404);
    });
    
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy')
    ->missing(function (Request $request) {
        $response = [
            'status' => 404,
            'message' => 'Customer does not exist',
        ];
        return response()->json($response, 404);
    });
});