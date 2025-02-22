<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Students extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'person_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'person_id',
        'student_code',
        'student_status',
        'suspended_start',
        'suspended_end',
        'description'
    ];

    /* Relationships*/
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    public function parents()
    {
        return $this->belongsToMany(Parents::class, 'parents_students', 'parent_id', 'student_id');
    }
    public function semesters()
    {
        return $this->belongsToMany(Semesters::class, 'students_semesters', 'student_id', 'semester_id');
    }
    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'students_classes', 'student_id', 'class_id');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subjects::class, 'students_subjects', 'student_id', 'semester_id');
    }

    // Generate automaticly student_code
    protected function studentCode()
    {
        $year = date('Y');
        return Attribute::make(
            get: fn() => "{$year}" . rand(1000, 9999),
        );
    }
}
