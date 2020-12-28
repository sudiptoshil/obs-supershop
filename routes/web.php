<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

// Route::get('test', 'Admin\PermissionController@index');
// Route::get('test/{id}', 'Admin\PermissionController@GetByParentId');

//Role
Route::get('role', 'Admin\RoleController@index')->name('role.index');
Route::get('role-create', 'Admin\RoleController@create')->name('role.create');
Route::get('role-edit/{id}/edit', 'Admin\RoleController@edit')->name('role.edit');
Route::post('role', 'Admin\RoleController@store')->name('role.store');
Route::put('role/{id}', 'Admin\RoleController@update')->name('role.update');
Route::delete('role/{id}', 'Admin\RoleController@destroy')->name('role.destroy');

//Permission
//Role
Route::get('permission', 'Admin\PermissionController@index')->name('permission.index');
// Route::get('permission-by-id/{id}', 'Admin\PermissionController@GetByParentId');
Route::get('permission-create', 'Admin\PermissionController@create')->name('permission.create');
Route::get('permission-edit/{id}/edit', 'Admin\PermissionController@edit')->name('permission.edit');
Route::post('permission', 'Admin\PermissionController@store')->name('permission.store');
Route::put('permission/{id}', 'Admin\PermissionController@update')->name('permission.update');
Route::delete('permission/{id}', 'Admin\PermissionController@destroy')->name('permission.destroy');

//Invoice Parameter
Route::get('invoice-parameter', 'Admin\InvoiceParameterController@index')->name('invoice-parameter.index');
Route::post('invoice-parameter/{id}', 'Admin\InvoiceParameterController@update'); //->name('invoice-parameter.update');

//Branch
Route::get('branch', 'Admin\BranchController@index');
Route::post('branch', 'Admin\BranchController@store');
// Route::get('branch-dropdown', 'Admin\BranchController@getAllBranch');
Route::get('branch/{id}/edit', 'Admin\BranchController@edit');
// Route::post('branch/{id}', 'Admin\BranchController@update');
Route::get('get-branch', 'Admin\BranchController@getAllBranch');

//Warehouse
Route::get('warehouse', 'Admin\WarehouseController@index');
Route::post('warehouse', 'Admin\WarehouseController@store');
// Route::get('warehouse-dropdown', 'Admin\WarehouseController@getAllBranch');
Route::get('warehouse/{id}/edit', 'Admin\WarehouseController@edit');
// Route::post('warehouse/{id}', 'Admin\WarehouseController@update');

//Store
Route::get('store', 'Admin\StoreController@index');
Route::post('store', 'Admin\StoreController@store');
Route::get('store/{id}/edit', 'Admin\StoreController@edit');

//***** Demo *******//
Route::namespace ('Demo')->group(function () {
    Route::get('/demoIndex', 'Demo@index');
    Route::get('/demoBlankPage', 'Demo@demoBlankPage');
    Route::get('/demoForgotPassword', 'Demo@demoForgotPassword')->name("demoForgotPassword");
    Route::get('/demoFormBasicInputs', 'Demo@demoFormBasicInputs');
    Route::get('/demoFormHorizontalInputs', 'Demo@demoFormHorizontalInputs');
    Route::get('/demoFormInputGroups', 'Demo@demoFormInputGroups');
    Route::get('/demoFormVertical', 'Demo@demoFormVertical');
    Route::get('/demoTableBasic', 'Demo@demoTableBasic');
    Route::get('/demoTableDatatables', 'Demo@demoTableDatatables');
    Route::get('/demoTabs', 'Demo@demoTabs');
    Route::get('/demoUikit', 'Demo@demoUikit');
    Route::get('/demoLogin', 'Demo@demoLogin')->name('demoLogin');
});
//***** end Demo *******//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


    // for type mamagement ************//
Route::namespace ('Admin')->group(function () {
    Route::get('/manage-type', 'TypeController@index')->name('manage-type');
    Route::get('/add-type', 'TypeController@add_type')->name('add-type');
    Route::post('/save-type', 'TypeController@save_type')->name('save-type');
});
    // Setting management ****************//
Route::namespace ('Admin')->group(function () {
    Route::get('/type/{idx}', 'SettingController@index')->name('type');
    Route::get('/add-setting/{idx}', 'SettingController@add_setting')->name('add-setting');
    Route::post('/save-setting', 'SettingController@save_setting')->name('save-setting');
    Route::get('/edit-setting/{id}', 'SettingController@edit_setting')->name('edit-setting');
    Route::patch('/update-setting/{id}', 'SettingController@update_setting')->name('update-setting');
});
