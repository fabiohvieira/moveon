<?php

use Illuminate\Support\Facades\Route;


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
    return view('layout/app');
});

Route::get('/login', function () {
    return view('layout/login');
});

Route::get('/lockscreen', function () {
    return view('layout/login');
});

Route::resources([

    'addressbook' => AddressBookController::class,
    'inventory/items' => ItemController::class,
    'purchase/order' => PurchaseOrderController::class,

]);
