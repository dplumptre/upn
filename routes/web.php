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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



/*
|--------------------------------------------------------------------------
| USERS : HomeController
|--------------------------------------------------------------------------
|
| Here is the control for ordinary users
| 
|
*/

Route::prefix('home')->group(function () {

    Route::get('access-denied', 'HomeController@ad')->name('home.ad');

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/users', 'HomeController@users')->name('home.users');

});






/*
|--------------------------------------------------------------------------
| ADMIN : AdminController
|--------------------------------------------------------------------------
|
| Here is the control for admin users
|  they can check everything
|
*/



Route::prefix('admin')->group(function () {


    Route::get('add-role', 'AdminController@add_role')->name('admin.add.role');
    Route::get('{role}/edit-role', 'AdminController@edit_role')->name('admin.edit.role');
    Route::put('/{role}/update-role', 'AdminController@update_role')->name('admin.update.role');
    Route::post('store-role', 'AdminController@store_role')->name('admin.store.role');
    Route::get('view-role', 'AdminController@view_role')->name('admin.view.role');
    Route::get('{role}/delete-role', 'AdminController@delete_role')->name('admin.delete.role');

    

    Route::get('all_users', 'AdminController@all_users')->name('admin.all.users');
    Route::get('add-user', 'AdminController@add_user')->name('admin.add.user');
    Route::post('store_user', 'AdminController@store_user')->name('admin.store.user');
    Route::get('delete_user/{user}', 'AdminController@delete_user')->name('admin.delete.user');
    Route::get('edit_user/{user}', 'AdminController@edit_user')->name('admin.edit.user');
    Route::patch('update_user/{user}', 'AdminController@update_user')->name('admin.update.user');
   
  

});