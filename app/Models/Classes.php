<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'class_id';
    public $incrementing = true;
    protected $keyType = 'unsignedInteger';
    protected $fillable = [
        'class_id',
        'class_name',
        'max_students',
        'desciption'
    ];

    /* Relationships */
    public function teachers()
    {
        return $this->belongsToMany(Teachers::class, 'teachers_classes', 'class_id', 'teacher_id');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subjects::class, 'classes_subjects', 'class_id', 'subject_id');
    }
    public function students()
    {
        return $this->belongsToMany(Students::class, 'students_classes', 'class_id', 'student_id');
    }
}
