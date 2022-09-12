<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    protected $primaryKey = 'crm';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'crm',
        'cpf',
        'rg',
        'gender',
        'education',
        'address',
        'phone',
        'mobile_phone',
        'department',
        'description',
        'social',
        'birth_date'
    ];

    public function specialty()
    {
        return $this->hasMany(Specialty::class);
    }

    public function patient()
    {
        return $this->hasMany(Patient::class);
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
