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
}
