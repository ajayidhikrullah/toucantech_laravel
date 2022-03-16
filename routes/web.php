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

Route::get('/', 'MemberController@create')->name('member.create');


Route::group(['prefix' => 'member'], function(){
    Route::get('/', 'MemberController@index')->name('member.index');
    Route::post('/store', 'MemberController@store')->name('member.store');
});

Route::group(['prefix' => 'school'], function(){
    Route::get('/', 'SchoolController@index')->name('school.index');
    Route::get('/create', 'SchoolController@create')->name('school.create');
    Route::post('/store', 'SchoolController@store')->name('school.store');
    Route::get('/member/{id}', 'SchoolController@members')->name('school.members');
});

//delete a member row
Route::get('/member/{id}', 'SchoolController@delete')->name('member');