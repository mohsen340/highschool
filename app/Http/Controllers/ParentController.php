<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParentController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
      $this->middleware('parent');
    }


    public function dashboard(){
      $user = Auth::user();
      $grade = $user->grade()->first();
//      return $grade;
      return view('parent.dashboard', compact(['user', 'grade']));
    }


    public function schedule(){
      $user = Auth::user();
      $schedules = $user->schedules();
//      return $schedules;
//      return $user->lessons;

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


//    return $day1;


      return view('parent.studentSchedule', compact(['day0', 'day1', 'day2', 'day3', 'day4']));
    }


    public function marks(){
      $student = Auth::user();
      $lessons = $student->lessons;
      $marks = array();
      foreach ($lessons as $lesson){
        if(sizeof( $lesson->marks()->where('user_id', '=', $student->id)->get() )  > 0) {
          $marks [] = $lesson->marks()->where('user_id', '=', $student->id)->get();
        }
      }
//      return $marks;

      return view('parent.studentMarks', compact('marks'));
    }


    public function homework(){
      $student = Auth::user();
      $lessons = $student->lessons;
      $homeworks = array();
      foreach ($lessons as $lesson){
        if (sizeof($lesson->homeWorks) > 0) {
          $homeworks [] = $lesson->homeWorks;
        }
      }

//      return $homeworks[0][0]->lesson;
      return view('parent.studentHomework', compact('homeworks'));
    }
}
