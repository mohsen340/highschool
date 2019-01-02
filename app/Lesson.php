<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    protected $fillable = ['teacher_id', 'grade_id', 'name'];




    public function schedules(){
      return $this->hasMany('App\Schedule');
    }

    public function grade(){
      return $this->belongsTo('App\Grade');
    }

    public function marks(){
      return $this->hasMany('App\Marks');
    }

    public function homeWorks(){
      return $this->hasMany('App\HomeWork');
    }
}
