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




Route::get('/',function (){
    return view('site.home');
})->name('site-home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//test
Route::get('/t1',function(){
  $users = \App\Grade::find(1)->students;
  return json_encode($users);
});


//site route

Route::get('/post',function(){
    return view('site.post');
});





//admin route
Route::get('/admin-dashboard','AdminController@dashboard')->name('admin-dashboard');
Route::get('/admin-students', 'AdminController@students')->name('admin-students');
Route::get('/admin-teachers', 'AdminController@teachers')->name('admin-teachers');
Route::post('/admin-teacher-register', 'AdminController@teacherRegister')->name('admin-teacher-register');
Route::get('/admin-post', 'AdminController@post')->name('admin-post');
Route::post('/admin-post-create', 'AdminController@postCreate')->name('admin-post-create');
Route::get('/admin-schedule', 'AdminController@schedule')->name('admin-schedule');
Route::get('/admin-students-schedule', 'AdminController@studentsSchedule')->name('admin-students-schedule');


Route::get('/admin-class-schedule', 'AdminController@classSchedule')->name('admin-class-schedule');


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

Route::get('/teacher-schedule',function (){
  return view('teacher.teacherSchedule');
})->name('teacher-schedule');





//student route
Route::get('/student-dashboard',function (){
    return view('student.dashboard');
})->name('student-dashboard');

Route::get('/parent-dashboard',function (){
    return view('parent.dashboard');
})->name('parent-dashboard');

Route::get('/parent-student-marks',function (){
    return view('parent.studentMarks');
})->name('parent-student-marks');

Route::get('/parent-student-workbook',function (){
    return view('parent.studentWorkbook');
})->name('parent-student-workbook');

Route::get('/parent-student-homework',function (){
    return view('parent.studentHomework');
})->name('parent-student-homework');

Route::get('/parent-student-schedule',function (){
    return view('parent.studentSchedule');
})->name('parent-student-schedule');




