<?php

namespace App\Http\Controllers;

use App\Grade;
use App\HomeWork;
use App\Lesson;
use App\Mark;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    return view('teacher.studentMarks', compact('marks', 'lesson'));
  }
}
