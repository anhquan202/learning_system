<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semesters extends Model
{
    protected $table = 'semesters';
    protected $primaryKey = 'semester_id';
    public $incrementing = true;
    protected $keyType = 'unsignedInteger';
    protected $fillable = [
        'semester_id',
        'student_code',
        'start_time',
        'end_time',
        'description'
    ];
}
