<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    protected $fillable = [
        'first_name', 'last_name', 'father_name', 'national_code', 'birth_date', 'email', 'role', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];





    public function lessons(){
      return $this->belongsToMany('App\Lesson', 'user_lesson', 'user_id', 'lesson_id');
    }

    public function teacherInfo(){
      return $this->hasOne('App\TeacherInfo', 'teacher_id');
    }

    public function teacherLessons(){
      return $this->hasMany('App\Lesson', 'teacher_id');
    }

    public function teacherSchedule(){
      $schedules = array();
      $lessons = $this->teacherLessons()->get();
      foreach ($lessons as $lesson){
        $schedules [] = $lesson->schedules;
      }

      return $schedules;
    }

    public function grade(){
      return $this->belongsToMany('App\Grade', 'user_grade', 'user_id', 'grade_id');
    }

    public function marks(){
      return $this->hasMany('App\Mark');
    }


    public function homeWorks(){
      $lessons = $this->lessons()->get();
      $homeWorks = array();
      foreach ($lessons as $lesson){
        $homeWorks [] = $lesson->homeWorks;
      }

      return $homeWorks;
    }


    public function schedules(){
      $schedules = array();
      $lessons = $this->lessons()->get();
      foreach ($lessons as $lesson){
        $schedules [] = $lesson->schedules;
      }
      return $schedules;
    }



}
