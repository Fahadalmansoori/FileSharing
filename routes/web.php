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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/signup', 'Auth\RegisterController@getRegistrationForm')->name('signup');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/search', 'SearchController@searchFiles')->name('search');

Route::group(['prefix' => '/account', 'middleware' => 'auth', 'as' => 'account'], function () {
    Route::get('/', 'Accounts\AccountController@index')->name('.index');
    Route::get('/update-details/{user}', 'Accounts\AccountController@update')->name('.update');
    Route::post('/update-details/{user}', 'Accounts\AccountController@store')->name('.update');
    Route::get('/change-password/{user}', 'Accounts\AccountController@changePassword')->name('.changePassword');
});

/*
Route to view the PDF for tutors only
*/
Route::group(['prefix' => '/review', 'middleware' => ['auth','tutor'], 'as' => 'upload'], function () {
    Route::get('/{file}', 'AdminController@review')->name('.review');
});


Route::group(['prefix' => '/superAdmin', 'middleware' => ['auth','admin'], 'as' => 'superAdmin'], function () {
    Route::get('/', 'SuperadminController@index')->name('.index');
    Route::get('/users', 'SuperadminController@getAllUsers')->name('.allUsers');
    Route::post('/addRole/{user}', 'SuperadminController@addRole')->name('.addRole');
});



Route::group(['prefix' => '/admin', 'middleware' => ['auth','tutor'], 'as' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('.index');
    Route::get('/approvedbyme/{user}', 'AdminController@ApprovedByMe')->name('.approvedby');
    Route::get('/declinedbyme/{user}', 'AdminController@getDeclinedByMe')->name('.declinedby');
    Route::get('/uploadedbyme/{user}', 'AdminController@getUploadedByMe')->name('.uploadedby');
    Route::get('/create', 'AdminController@create')->name('.create');
    Route::post('/create', 'AdminController@store')->name('.store');
    Route::post('/submit/{file}', 'AdminController@SubmitFileAnduploads')->name('.submitAll');

    Route::get('/pending/{user}', 'AdminController@getPendingfiles')->name('.pending');
});



Route::group(['prefix' => '/user', 'middleware' => 'auth', 'as' => 'user'], function () {
    Route::get('/files/owned/{user}', 'UserController@Owned')->name('.files.owned');
    Route::get('/files/purchased/{user}', 'UserController@Purchased')->name('.files.purchased');
});

/*
School Routes
*/

Route::group(['prefix' => 'school', 'middleware' => 'auth', 'as' => 'school'], function () {
    Route::get('/all', 'SchoolController@fetch')->name('.fetch');
    Route::get('/courses/{school}', 'SchoolController@GetCourses')->name('.courses');
});

/*
Course Routes
*/

Route::group(['prefix' => '/course', 'middleware' => 'auth', 'as' => 'course'], function () {
    Route::get('/', 'CourseController@index')->name('.index');
    Route::get('/page/{course}', 'CourseController@show')->name('.page');
});

/*
Module Routes
*/

Route::group(['prefix' => '/module', 'middleware' => 'auth', 'as' => 'module'], function () {
    Route::get('/', 'ModuleController@index')->name('.index');
    Route::get('/page/{module}', 'ModuleController@show')->name('.page');
});


/*
File Routes
*/

Route::group(['prefix' => '/file', 'middleware' => 'auth', 'as' => 'file'], function () {
     Route::get('/page/{file}', 'FileController@show')->name('.page');
    Route::get('/owned', 'FileController@Owned')->name('.owned');
    Route::get('/purchased', 'FileController@Purchased')->name('.purchased');
    Route::get('/create', 'FileController@create')->name('.create');
    Route::post('/create', 'FileController@store')->name('.store');
    Route::post('/submit/{file}', 'FileController@SubmitFileAnduploads')->name('.submitAll');
    Route::get('/approve/{file}', 'FileController@approve')->name('.approve');
    Route::get('/decline/{file}', 'FileController@decline')->name('.decline');
    Route::get('/edit/{file}', 'FileController@edit')->name('.edit');
    Route::post('/edit/{file}', 'FileController@update')->name('.update');
    Route::get('/request/{file}', 'FileController@request')->name('.request');
});


/*
Upload Routes
*/

Route::group(['prefix' => 'upload', 'middleware' => 'auth', 'as' => 'upload'], function () {
    Route::get('/{file}/upload', 'UploadController@create')->name('.create');
    Route::post('/{file}/upload', 'UploadController@store')->name('.store');
    Route::delete('/destroy/{upload}', 'UploadController@destroy')->name('.destroy');
    Route::get('/{file}', 'UploadController@review')->name('.read');
    Route::get('/{file}/download', 'UploadController@download')->name('.download');
});
