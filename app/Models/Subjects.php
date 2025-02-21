<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $table = 'subjects';
    protected $primaryKey = 'subject_id';
    public $incrementing = true;
    protected $keyType = 'unsignedInteger';
    protected $fillable = [
        'subject_id',
        'subject_name',
        'description',
    ];

    /* Relationships */
    public function semesters()
    {
        return $this->belongsToMany(Semesters::class, 'semesters_subjects', 'subject_id', 'semester_id');
    }

    public function students()
    {
        return $this->belongsToMany(Students::class, 'students_subjects', 'subject_id', 'student_id');
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'classes_subjects', 'subject_id', 'class_id');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teachers::class, 'teachers_subjects', 'subject_id', 'teacher_id');
    }
}
