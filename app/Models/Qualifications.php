<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualifications extends Model
{
    protected $table = 'qualifications';
    protected $primaryKey = 'qualification_id';
    public $incrementing = true;
    protected $keyType = 'unsignedBigInteger';
    protected $fillable = ['teacher_id', 'qualification_id', 'description'];

    public function teachers()
    {
        return $this->hasOne(Teachers::class, 'teacher_id', 'person_id');
    }
}
