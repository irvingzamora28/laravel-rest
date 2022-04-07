<?php

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

// Send custom response in case customer sent through implicit binding does not exist
Route::get('/customers/{customer}', [CustomerController::class, 'show'])
    ->name('customers.show')
    ->missing(function (Request $request) {
        $response = [
            'status' => 404,
            'message' => 'Customer does not exist',
        ];
        return response()->json($response, 404);
    });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
