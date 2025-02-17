<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Person extends Model
{
    protected $table = 'people';
    protected $primaryKey = 'person_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable =  [
        'person_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
        'roles'
    ];
    protected $hidden = [
        'password'
    ];
    public function students()
    {
        return $this->hasOne(Students::class);
    }
    protected function firstName()
    {
        return Attribute::make(
            set: fn($value) => ucwords(strtolower($value))
        );
    }
    protected function lastName()
    {
        return Attribute::make(
            set: fn($value) => ucwords(strtolower($value))
        );
    }
    protected function password(): Attribute
    {
        return Attribute::make(
            set: fn($value) => bcrypt($value)
        );
    }
}
