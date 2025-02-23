<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $table = 'positions';

    protected $primaryKey = 'position_id';
    public $incrementing = true;
    protected $keyType = 'unsignedBigInteger';

    protected $fillable = [
        'person_id',
        'position_name',
        'description',
    ];

    public function teachers()
    {
        return $this->belongsToMany(Teachers::class, 'teachers_positions', 'position_id', 'teacher_id');
    }
}
