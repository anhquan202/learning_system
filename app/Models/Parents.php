<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';
    protected $primaryKey = 'person_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable =  [
        'person_id',
        'relationship'
    ];
    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id', 'person_id');
    }
    public function students()
    {
        return $this->belongsToMany(Students::class, 'parents_students', 'parent_id', 'student_id');
    }
}
