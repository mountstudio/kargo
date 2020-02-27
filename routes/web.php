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
});
