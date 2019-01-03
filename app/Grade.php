<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];


    public function students(){
      return $this->belongsToMany('App\User', 'user_grade', 'grade_id', 'user_id');
    }

    public function lessons(){
      return $this->hasMany('App\Lesson');
    }

    public function schedules(){
      $lessons = $this->hasMany('App\Lesson')->get();
      $schedules = array();
      foreach ($lessons as $lesson){
        if(sizeof($lesson->schedules) > 0){
          $schedules [] = $lesson->schedules;
        }
      }
      return $schedules;
    }
}
