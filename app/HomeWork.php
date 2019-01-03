<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeWork extends Model
{
    use SoftDeletes;

    protected $fillable = ['lesson_id', 'content'];


    public function lesson(){
      return $this->belongsTo('App\Lesson');
    }
}
