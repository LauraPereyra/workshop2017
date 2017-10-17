<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/catalog', 'CatalogController@index');

Route::get('/catalog/dataTable', 'CatalogController@indexDataTable');

/*ruta magazine*/

Route::get('/', 'MagazineController@index');

/*Toys routes*/

Route::get('/toy/create','ToysController@create');
Route::post('/toy/store','ToysController@store');

/*Supplier Order routes*/

Route::get('/supplierorder', [
    'uses' => 'SupplierOrderController@Index',
    'as' => 'supplierorder.index'
]);

Route::post('/supplierorder/store', [
    'uses' => 'SupplierOrderController@store',
    'as'   => 'supplierorder.store'
]);

Route::get('supplierorder/create', [
    'uses' => 'SupplierOrderController@create',
    'as'   => 'supplierorder.create'
]);

Route::get('supplierorder/{id}/destroy', [
    'uses' => 'SupplierOrderController@destroy',
    'as'   => 'supplierorder.destroy'
]);

Route::get('supplierorder/{id}/edit', [
    'uses' => 'SupplierOrderController@edit',
    'as'   => 'supplierorder.edit'
]);

Route::put('supplierorder/{id}', [
    'uses' => 'SupplierOrderController@update',
    'as'   => 'supplierorder.update'
]);

/*Supplier routes*/

Route::get('/supplier', [
    'uses' => 'SupplierController@index',
    'as' => 'supplier.index'

]);

Route::post('/supplier/store', [
    'uses' => 'SupplierController@store',
    'as'   => 'supplier.store'
]);

Route::get('supplier/create', [
    'uses' => 'SupplierController@create',
    'as'   => 'supplier.create'
]);

Route::get('supplier/{id}/destroy', [
    'uses' => 'SupplierController@destroy',
    'as'   => 'supplier.destroy'
]);

Route::get('supplier/{id}/edit', [
    'uses' => 'SupplierController@edit',
    'as'   => 'supplier.edit'
]);

Route::put('supplier/{id}', [
    'uses' => 'SupplierController@update',
    'as'   => 'supplier.update'
]);