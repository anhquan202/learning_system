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
    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    protected function studentCode()
    {
        $year = date('Y');
        return Attribute::make(
            get: fn() => "{$year}" . rand(1000, 9999),
        );
    }
}
