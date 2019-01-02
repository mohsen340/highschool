<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherInfo extends Model
{
    use SoftDeletes;

    protected $fillable = ['teacher_id', 'degree', 'experience'];
}
