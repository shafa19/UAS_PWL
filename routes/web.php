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

Route::get('/', 'Home2Controller@home');
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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage-dashboard', 'Home2Controller@manage');
Route::get('/manage-course', 'CourseController@index')->name('manage-course');
Route::get('/manage-service', 'ServiceController@index')->name('manage-service');
Route::get('/manage-classroom', 'ClassroomController@index')->name('manage-classroom');
Route::get('/manage-schedule', 'ScheduleController@index')->name('manage-schedule');