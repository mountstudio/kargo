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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->name('admin.')/*->middleware('admin')*/->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin');
    Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');

//CRUD for roles
    Route::get('/role/datatable', 'Admin\RoleController@datatableData')->name('role.datatable.data');
    Route::post('/role/{role}/assign/permissions', 'Admin\RoleController@assignPermissions')->name('role.assign.permission');
    Route::resource('role', 'Admin\RoleController');

//CRUD for permissions
    Route::get('/permission/datatable', 'Admin\PermissionController@datatableData')->name('permission.datatable.data');
    Route::resource('permission', 'Admin\PermissionController');

//CRUD for users
    Route::get('/user/datatable', 'Admin\UserController@datatableData')->name('user.datatable.data');
    Route::resource('user', 'Admin\UserController');

//CRUD for clients
    Route::get('/client/datatable', 'Admin\ClientController@datatableData')->name('client.datatable.data');
    Route::resource('client', 'Admin\ClientController');

//CRUD for products
    Route::get('/product/datatable', 'Admin\ProductController@datatableData')->name('product.datatable.data');
    Route::resource('product', 'Admin\ProductController');

//CRUD for attributes
    Route::get('/attribute/datatable', 'Admin\AttributeController@datatableData')->name('attribute.datatable.data');
    Route::resource('attribute', 'Admin\AttributeController');

//CRUD for orders
    Route::get('/order/datatable', 'Admin\OrderController@datatableData')->name('order.datatable.data');
    Route::resource('order', 'Admin\OrderController');

//CRUD for orders
    Route::get('/box/datatable', 'Admin\BoxController@datatableData')->name('box.datatable.data');
    Route::resource('box', 'Admin\BoxController');

//CRUD for orders
    Route::get('/city/datatable', 'Admin\CityController@datatableData')->name('city.datatable.data');
    Route::resource('city', 'Admin\CityController');

//CRUD for orders
    Route::get('/package/datatable', 'Admin\PackageController@datatableData')->name('package.datatable.data');
    Route::resource('package', 'Admin\PackageController');

//CRUD for orders
    Route::get('/packed/datatable', 'Admin\PackedController@datatableData')->name('packed.datatable.data');
    Route::resource('packed', 'Admin\PackedController');
});
