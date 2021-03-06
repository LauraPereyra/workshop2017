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


/*ruta magazine*/

Route::get('/', 'MagazineController@index');

//Route::get('/home', 'HomeController@index')->name('home');

/* --------- upload image  ---------- */
route::get('photo/{id}','ToysController@photo');
Route::post('photoproduct','ToysController@update_photo');

Route::get('/upload/{id}', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');
/* --------- upload image  ---------- */


/* Auth routes*/
Auth::routes();

Route::get('auth/login',[
    'uses'  => 'Auth\LoginController@showLoginForm',
    'as'    => 'auth.login'
]);

Route::post('auth/login',[
    'uses'  => 'Auth\LoginController@Login',
    'as'    => 'auth.login'
]);

Route::get('auth/logout',[
    'uses'  => 'Auth\LoginController@logout',
    'as'    => 'auth.logout'
]);


Route::group(['middleware' => 'auth'], function () {


    Route::group(['middleware' => 'admin'], function (){
        /*User routes*/
        Route::get('/user', [
            'uses' => 'UserController@index',
            'as' => 'user.index'
        ]);

        Route::post('/user/store', [
            'uses' => 'UserController@store',
            'as'   => 'user.store'
        ]);

        Route::get('user/create', [
            'uses' => 'UserController@create',
            'as'   => 'user.create'
        ]);

        Route::get('user/{id}/destroy', [
            'uses' => 'UserController@destroy',
            'as'   => 'user.destroy'
        ]);

        Route::get('user/{id}/edit', [
            'uses' => 'UserController@edit',
            'as'   => 'user.edit'
        ]);

        Route::put('user/{id}', [
            'uses' => 'UserController@update',
            'as'   => 'user.update'
        ]);

        /*Toys routes*/
        Route::get('/toy/list','ToysController@index');
        Route::get('/toy/create','ToysController@create');
        Route::post('/toy/store','ToysController@store');
        Route::get('/toy/{id}','ToysController@show');
        Route::post('/toy/update','ToysController@update');
        Route::get('toydelete/{id}','ToysController@destroy');

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

        /*Warehouse routes*/

        Route::get('/warehouse', [
            'uses' => 'WarehouseController@index',
            'as'   => 'warehouse.index'

        ]);

        Route::post('/warehouse/store', [
            'uses' => 'WarehouseController@store',
            'as'   => 'warehouse.store'
        ]);

        Route::get('warehouse/create', [
            'uses' => 'WarehouseController@create',
            'as'   => 'warehouse.create'
        ]);

        Route::get('warehouse/{id}/destroy', [
            'uses' => 'WarehouseController@destroy',
            'as'   => 'warehouse.destroy'
        ]);

        Route::get('warehouse/{id}/edit', [
            'uses' => 'WarehouseController@edit',
            'as'   => 'warehouse.edit'
        ]);

        Route::put('warehouse/{id}', [
            'uses' => 'WarehouseController@update',
            'as'   => 'warehouse.update'
        ]);

        Route::get('warehouse/{id}/showstock', [
            'uses' => 'WarehouseController@showstock',
            'as'   => 'warehouse.stock'
        ]);

        /*Transfer routes*/
        Route::get('warehouse/transfer', [
            'uses' => 'WarehouseController@transfer',
            'as'   => 'warehouse.transfer'
        ]);
        Route::post('warehouse/maketransfer', [
            'uses' => 'WarehouseController@maketransfer',
            'as'   => 'warehouse.maketransfer'
        ]);

        Route::get('warehouse/kardex', [
            'uses' => 'WarehouseController@kardex',
            'as'   => 'warehouse.kardex'
        ]);

        Route::post('warehouse/showkardex', [
            'uses' => 'WarehouseController@showkardex',
            'as'   => 'warehouse.showkardex'
        ]);

        Route::get('warehouse/addtoyswarehouse', [
            'uses' => 'WarehouseController@addtoyswarehouse',
            'as'   => 'warehouse.addtoyswarehouse'
        ]);

        Route::post('warehouse/storetoyswarehouse', [
            'uses' => 'WarehouseController@storetoyswarehouse',
            'as'   => 'warehouse.storetoyswarehouse'
        ]);





        /*Sales routes*/

        Route::get('/sale', [
            'uses' => 'SaleController@index',
            'as'   => 'sale.index'
        ])->middleware('employee');

        //ROUTES SALES
        Route::get('/search/customer','SaleController@autocompleteCustomer')->name('search.customer.nit');
        Route::get('/search/toys','SaleController@autocompleteToys')->name('search.toys');
        Route::post('/sale/store', 'SaleController@store')->name('sale.store')->middleware('employee');
        Route::get('/sale/{idSale}', 'SaleController@show');
    });

    /*Default routes*/

    Route::get('/catalog', 'CatalogController@index');

    Route::get('/catalog/dataTable', 'CatalogController@indexDataTable');



});