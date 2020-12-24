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
Route::get('/course/{id}', 'CourseController');
Route::get('/services', 'ServiceController');
Route::get('/schedules', 'ScheduleController');
Route::get('/classrooms', 'ClassroomController');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
