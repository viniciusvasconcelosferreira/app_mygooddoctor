<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'cpf',
        'rg',
        'phone',
        'mobile_phone',
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
}
