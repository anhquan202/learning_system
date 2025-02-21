<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semesters extends Model
{
    protected $table = 'semesters';
    protected $primaryKey = 'semester_id';
    public $incrementing = true;
    protected $keyType = 'unsignedBigInteger';
    protected $fillable = [
        'semester_id',
        'student_code',
        'start_time',
        'end_time',
        'description'
    ];
    public function students()
    {
        return $this->belongsToMany(Students::class, 'students_semester', 'semester_id', 'student_id');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subjects::class, 'semesters_subjects', 'semester_id', 'subject_id');
    }
}
