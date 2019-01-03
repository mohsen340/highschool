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
use Illuminate\Http\Request;





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'SiteController@homePage')->name('site-home');
Route::get('/post-show/{id}', 'SiteController@postShow')->name('post-show');





//admin route
Route::get('/admin-dashboard','AdminController@dashboard')->name('admin-dashboard');
Route::get('/admin-students', 'AdminController@students')->name('admin-students');
Route::get('/admin-teachers', 'AdminController@teachers')->name('admin-teachers');
Route::post('/admin-teacher-register', 'AdminController@teacherRegister')->name('admin-teacher-register');
Route::get('/admin-post', 'AdminController@post')->name('admin-post');
Route::post('/admin-post-create', 'AdminController@postCreate')->name('admin-post-create');
Route::get('/admin-schedule', 'AdminController@schedule')->name('admin-schedule');
Route::get('/admin-students-schedule', 'AdminController@studentsSchedule')->name('admin-students-schedule');
Route::get('/admin-class-schedule/{id}', 'AdminController@classSchedule')->name('admin-class-schedule');
Route::post('/admin-class-schedule-insert', 'AdminController@scheduleInsert')->name('admin-class-schedule-insert');



//Route::get('/admin-teachers-schedule',function (){
//    return view('admin.teachersSchedule');
//})->name('admin-teachers-schedule');





//teacher route
Route::get('/teacher-dashboard', 'TeacherController@dashboard')->name('teacher-dashboard');
Route::get('/teacher-classes-homework', 'TeacherController@classesHomework')->name('teacher-classes-homework');
Route::get('/teacher-class-homework/{id}', 'TeacherController@classHomework')->name('teacher-class-homework');
Route::post('/teacher-class-homework-create', 'TeacherController@classHomeworkCreate')->name('teacher-class-homework-create');
Route::get('/teacher-classes-Marks', 'TeacherController@classesMarks')->name('teacher-classes-marks');
Route::get('/teacher-student-marks/{id}', 'TeacherController@studentMarks')->name('teacher-student-marks');
Route::post('/teacher-student-marks-insert', 'TeacherController@studentInsertMarks')->name('teacher-student-marks-insert');
Route::get('/teacher-schedule', 'TeacherController@schedule')->name('teacher-schedule');





//student route


Route::get('/parent-dashboard', 'ParentController@dashboard')->name('parent-dashboard');
Route::get('/parent-student-schedule', 'ParentController@schedule')->name('parent-student-schedule');
Route::get('/parent-student-marks', 'ParentController@marks')->name('parent-student-marks');

Route::get('/parent-student-homework', 'ParentController@homework')->name('parent-student-homework');






