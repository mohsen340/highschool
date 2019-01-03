<?php

namespace App\Http\Controllers;

use App\Grade;
use App\HomeWork;
use App\Lesson;
use App\Mark;
use App\Schedule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
    $this->middleware('teacher');
  }

  public function dashboard(){
    $teacher = Auth::user();
    $info = $teacher->teacherInfo;
    $lesson = $teacher->teacherLessons()->first()->name;
    return view('teacher.dashboard', compact(['teacher', 'info', 'lesson']));
  }

  public function classesHomework(){
    return view('teacher.classesHomework');
  }

  public function classHomework($id){
    $teacher = Auth::user();
    $grade = Grade::find($id);
    $lesson = $teacher->teacherLessons()->where('grade_id', '=', $id)->first();
    return view('teacher.classHomework', compact(['grade', 'lesson']));
  }

  public function classHomeworkCreate(Request $request){

    $homework = HomeWork::create([
      'lesson_id'=>$request->lesson_id,
      'content'=>$request->get('content'),
    ]);

    $lesson = Lesson::find($request->lesson_id);
    return redirect(route('teacher-class-homework', $lesson->grade_id));
  }


  public function classesMarks(){
    $grade1_students = Grade::find(1)->students;
    $grade2_students = Grade::find(2)->students;
    $grade3_students = Grade::find(3)->students;
    $grade4_students = Grade::find(4)->students;

    return view('teacher.classesMarks', compact('grade1_students', 'grade2_students', 'grade3_students', 'grade4_students'));
  }

  public function studentMarks($id){
    $student = User::find($id);
    $grade = $student->grade()->first();
    $teacher = Auth::user();
    $lesson = $teacher->teacherLessons()->where('grade_id', '=', $grade->id)->first();
    $marks = Mark::where('lesson_id', '=', $lesson->id)->where('user_id', '=', $student->id)->get();
    return view('teacher.studentMarks', compact('marks', 'lesson', 'student'));
  }

  public function studentInsertMarks(Request $request){
    $student_id = $request->student_id;
    $lesson_id = $request->lesson_id;
    $marks = $request->marks;
    $old_marks = Mark::where('lesson_id', '=', $lesson_id)->where('user_id', '=', $student_id)->get();
    foreach ($old_marks as $mark){
      DB::table('marks')->delete($mark->id);

    }
    $i=0;
    foreach ($marks as $mark) {
      Mark::create([
        'lesson_id'=>$lesson_id,
        'user_id'=>$student_id,
        'mark'=>$mark,
        'week_num'=>$i,
      ]);
      $i++;
    }

    return redirect(route('teacher-student-marks', $student_id));
  }


  public function schedule(){
    $teacher = Auth::user();
    $schedules = $teacher->teacherSchedules();
//    return $schedules;

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


//    return $day0;
    return view('teacher.teacherSchedule', compact(['day0', 'day1', 'day2', 'day3', 'day4']));
  }
}
