<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mark extends Model
{
    use SoftDeletes;

    protected $fillable = ['lesson_id', 'user_id', 'mark', 'week_num'];


    public function lesson(){
      return $this->belongsTo('App\Lesson');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }
}
