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


Route::get('/', 'MagazineController@index');

Route::get('/catalog', 'CatalogController@index');

Route::get('/catalog/dataTable', 'CatalogController@indexDataTable');

Route::get('/supplierorder', 'SupplierOrderController@index');

Route::get('/supplierorder/dataTable', 'SupplierOrderController@indexDataTable');