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
}
