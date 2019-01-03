<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;

    protected $fillable = ['lesson_id', 'day_num', 'time_num'];



    public function lesson(){
      return $this->belongsTo('App\Lesson');
    }
}
