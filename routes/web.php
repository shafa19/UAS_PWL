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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Home1Controller@home');
Route::get('/home', 'Home2Controller@home');
Route::get('/success', 'Home2Controller@daftarsukses');

Route::get('/course', 'MainCourseController');
Route::get('/course/add', 'CourseController@add');
Route::post('/course/create', 'CourseController@create');
Route::get('/course/edit/{id}', 'CourseController@edit');
Route::post('/course/update/{id}', 'CourseController@update');
Route::get('/course/delete/{id}', 'CourseController@delete');
Route::get('/course/print_pdf', 'CourseController@print_pdf');
Route::get('/course/{id}', 'CourseController');

Route::get('/services', 'ServiceController');
Route::get('/service/add', 'ServiceController@add');
Route::post('/service/create', 'ServiceController@create');
Route::get('/service/edit/{id}', 'ServiceController@edit');
Route::post('/service/update/{id}', 'ServiceController@update');
Route::get('/service/delete/{id}', 'ServiceController@delete');
Route::get('/service/print_pdf', 'ServiceController@print_pdf');

Route::get('/schedules', 'ScheduleController');
Route::get('/schedule/add', 'ScheduleController@add');
Route::post('/schedule/create', 'ScheduleController@create');
Route::get('/schedule/edit/{id}', 'ScheduleController@edit');
Route::post('/schedule/update/{id}', 'ScheduleController@update');
Route::get('/schedule/delete/{id}', 'ScheduleController@delete');
Route::get('/schedule/print_pdf', 'ScheduleController@print_pdf');

Route::get('/classrooms', 'ClassroomController');
Route::get('/classroom/add', 'ClassroomController@add');
Route::post('/classroom/create', 'ClassroomController@create');
Route::get('/classroom/edit/{id}', 'ClassroomController@edit');
Route::post('/classroom/update/{id}', 'ClassroomController@update');
Route::get('/classroom/delete/{id}', 'ClassroomController@delete');
Route::get('/classroom/print_pdf', 'ClassroomController@print_pdf');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Halaman Kelola
Route::get('/manage-dashboard', 'Home2Controller@manage');
Route::get('/manage-course', 'CourseController@index')->name('manage-course');
Route::get('/manage-service', 'ServiceController@index')->name('manage-service');
Route::get('/manage-classroom', 'ClassroomController@index')->name('manage-classroom');
Route::get('/manage-schedule', 'ScheduleController@index')->name('manage-schedule');


Route::get('/pendaftaran', 'StudentController@add');
Route::post('/pendaftaran/create', 'StudentController@create');
Route::get('/student/edit/{id}', 'StudentController@edit');
Route::post('/student/update/{id}', 'StudentController@update');
Route::get('/student/delete/{id}', 'StudentController@delete');
Route::get('/student/print_pdf', 'StudentController@print_pdf');

Route::get('/user/add', 'UserController@add');
Route::post('/user/create', 'UserController@create');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/update/{id}', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@delete');
Route::get('/user/print_pdf', 'UserController@print_pdf');
Route::get('/manage-student', 'StudentController@index')->name('manage-student');
Route::get('/manage-user', 'UserController@index')->name('manage-user');
