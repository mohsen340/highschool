<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Lesson;
use App\Post;
use App\Schedule;
use App\TeacherInfo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
      $grade = Grade::find($id);
      $lessons = $grade->lessons;
      $schedules = $grade->schedules();

//      return $lessons;
//      return $schedules;

      $day0 = array();
      $day1 = array();
      $day2 = array();
      $day3 = array();
      $day4 = array();

      foreach ($schedules as $schedule1) {
        foreach ($schedule1 as $schedule) {
          switch ($schedule->day_num) {
            case 0:
              $day0 [] = $schedule;
              break;
            case 1:
              $day1 [] = $schedule;
              break;
            case 2:
              $day2 [] = $schedule;
              break;
            case 3:
              $day3 [] = $schedule;
              break;
            case 4:
              $day4 [] = $schedule;
              break;
          }
        }
      }

      $size0 = sizeof($day0);
      $size1 = sizeof($day1);
      $size2 = sizeof($day2);
      $size3 = sizeof($day3);
      $size4 = sizeof($day4);

      for ($i=0 ; $i<4-$size0 ; $i++){
        $schedule = new Schedule();
        $schedule->lesson_id = 0;
        $schedule->day_num = -1;
        $schedule->time_num = -1;
        $day0 [] = $schedule;
      }
      for ($i=0 ; $i<4-$size1 ; $i++){
        $schedule = new Schedule();
        $schedule->lesson_id = 0;
        $schedule->day_num = -1;
        $schedule->time_num = -1;
        $day1 [] = $schedule;
      }
      for ($i=0 ; $i<4-$size2 ; $i++){
        $schedule = new Schedule();
        $schedule->lesson_id = 0;
        $schedule->day_num = -1;
        $schedule->time_num = -1;
        $day2 [] = $schedule;
      }
      for ($i=0 ; $i<4-$size3 ; $i++){
        $schedule = new Schedule();
        $schedule->lesson_id = 0;
        $schedule->day_num = -1;
        $schedule->time_num = -1;
        $day3 [] = $schedule;
      }
      for ($i=0 ; $i<4-$size4 ; $i++){
        $schedule = new Schedule();
        $schedule->lesson_id = 0;
        $schedule->day_num = -1;
        $schedule->time_num = -1;
        $day4 [] = $schedule;
      }

//      return $day2;

      return view('admin.classSchedule', compact(['lessons', 'grade',
        'day0', 'day1', 'day2', 'day3', 'day4']));
    }


    public function scheduleInsert(Request $request){
      $grade = Grade::find($request->grade_id);
      $schedules = $grade->schedules();
      foreach ($schedules as $schedule1){
        foreach ($schedule1 as $schedule){
          DB::table('schedules')->delete($schedule->id);
        }
      }

      $schedules = $request->schedule;

      $day_num = 0;
      foreach ($schedules as $schedule) {

        $time_num = 0;
        foreach ($schedule as $item) {
          if ($item !== null) {
            Schedule::create([
              'lesson_id' => $item,
              'day_num' => $day_num,
              'time_num' => $time_num,
            ]);
          }
          $time_num++;
        }

        $day_num++;
      }

      return redirect(route('admin-class-schedule', $grade->id));




    }
}
