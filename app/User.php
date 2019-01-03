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
      $grade = $this->grade()->first();
      return $grade->lessons();
    }

    public function teacherInfo(){
      return $this->hasOne('App\TeacherInfo', 'teacher_id');
    }

    public function teacherLessons(){
      return $this->hasMany('App\Lesson', 'teacher_id');
    }

    public function teacherSchedules(){
      $lessons = $this->hasMany('App\Lesson', 'teacher_id')->get();
      $schedules = array();
      foreach ($lessons as $lesson){
        if(sizeof($lesson->schedules) > 0){
          $schedules [] = $lesson->schedules;
        }
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
      $lessons = $this->lessons;
      foreach ($lessons as $lesson){
        if(sizeof($lesson->schedules) > 0) {
          $schedules [] = $lesson->schedules;
        }
      }
      return $schedules;
    }



}
