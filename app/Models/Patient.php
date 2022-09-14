<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'address',
        'cpf',
        'rg',
        'phone',
        'mobile_phone',
        'blood_type'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function user()
    {
        return $this->morphOne(User::class, 'profile');
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescriptions::class);
    }
}
