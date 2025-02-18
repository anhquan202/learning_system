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
}
