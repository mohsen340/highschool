<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Post;
use App\TeacherInfo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function dashboard(){
      return view('admin.dashboard');
    }

    public function students(){
      $students = User::where('role', '=', 'parent')->get();
      return view('admin.students', compact('students'));
    }


    public function teachers(){
      $teachers = User::where('role', '=', 'teacher')->get();
      return view('admin.teachers', compact('teachers'));
    }


    public function teacherRegister(Request $request){
      $this->validate($request,[
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'national_code' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'degree' => 'required|string|max:255',
        'experience' => 'required|string|max:255',
        'lesson' => 'required|string|max:255',
      ]);

      $user = User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'national_code' => $request->national_code,
        'father_name' => '',
        'birth_date' => ' ',
        'role' => 'teacher',
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);


      $degree = $request->degree;
      $experience = $request->experience;

      $teacher_info = TeacherInfo::create([
        'teacher_id'=>$user->id,
        'degree'=>$degree,
        'experience'=>$experience,
      ]);

      $one = $request->one;
      $two = $request->two;
      $three = $request->three;
      $four = $request->four;
      $lesson_name = $request->lesson;

      if($one == 'on'){
        $lesson = Lesson::create([
          'teacher_id'=>$user->id,
          'grade_id'=>1,
          'name'=>$lesson_name,
        ]);
      }

      if($two == 'on'){
        $lesson = Lesson::create([
          'teacher_id'=>$user->id,
          'grade_id'=>2,
          'name'=>$lesson_name,
        ]);
      }

      if($three == 'on'){
        $lesson = Lesson::create([
          'teacher_id'=>$user->id,
          'grade_id'=>3,
          'name'=>$lesson_name,
        ]);
      }
      if($four == 'on'){
        $lesson = Lesson::create([
          'teacher_id'=>$user->id,
          'grade_id'=>4,
          'name'=>$lesson_name,
        ]);
      }

      return redirect('admin-teachers');

    }


    public function post(){
      return view('admin.post');
    }

    public function postCreate(Request $request){
      $this->validate($request,[
        'title' => 'required|string|max:255',
        'content' => 'required|string|max:2000',
      ]);

      $image = $request->file('image');
      $file_extension = $image->getClientOriginalExtension();
      $dir = FileHelper::getFileDirName('images/posts');
      $file_name = FileHelper::getFileNewName();
      $image_name = $file_name . '.' . $file_extension;
      $file_path = $dir . '/' . $file_name . '.' . $file_extension;
      $image->move($dir, $image_name);

      $post = Post::create([
        'title'=>$request->title,
        'image_path'=>$file_path,
        'content'=>$request->get('content'),
      ]);


      return redirect('/admin-post');
    }


    public function schedule(){
      return view('admin.schoolSchedule');
    }

    public function studentsSchedule(){
      return view('admin.studentsSchedule');
    }


    public function classSchedule($id){
      return view('admin.classSchedule');
    }
}
