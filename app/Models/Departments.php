<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'unsignedBigInteger';
    protected $fillable = [
        'name',
        'description',
    ];
}
