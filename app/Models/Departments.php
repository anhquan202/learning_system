<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    protected $primaryKey = 'department_id';
    protected $incrementing = true;
    protected $keyType = 'unsignedBigInteger';
    protected $fillable = [
        'name',
        'description',
    ];

    /* Relationship*/
    public function teachers()
    {
        return $this->hasMany(Teachers::class);
    }
}
