<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDescriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function() {
//      Route::get('products',['as' => 'products', function() {
//      return App\Models\Product::all();
// }]);
     Route::resource('products', ProductController::class)
        ->only(['index', 'store', 'update' ]);
    Route::resource('products.descriptions', ProductDescriptionController::class)
        ->only(['index', 'show' ]);
});