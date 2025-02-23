<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $table = 'teachers';

    protected $primaryKey = 'person_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'person_id',
        'experience_year',
        'qualification',
        'description',
        'department_id',
    ];

    public function classes()
    {
        return $this->belongsToMany(teachers::class, 'teachers_classes', 'class_id', 'subject_id');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subjects::class, 'teachers_subjects', 'teacher_id', 'subject_id');
    }
    public function quanlifications()
    {
        return $this->hasMany(Qualifications::class);
    }
    public function positions()
    {
        return $this->belongsToMany(Positions::class, 'teachers_position', 'teacher_id', 'position_id');
    }
}
