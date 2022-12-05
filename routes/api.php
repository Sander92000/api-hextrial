<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/products', function (){
    $products = [
        [
            'id' => 1,
            'description' => 'Product 1',
            'price' => 10.25
        ],
        [
            'id' => 2,
            'description' => 'Product 2',
            'price' => 13.25
        ],
        [
            'id' => 3,
            'description' => 'Product 3',
            'price' => 8.29
        ],
        [
            'id' => 4,
            'description' => 'Product 4',
            'price' => 1.62
        ],
        [
            'id' => 5,
            'description' => 'Product 5',
            'price' => 5.00
        ],
    ];
    return json_encode($products);
});