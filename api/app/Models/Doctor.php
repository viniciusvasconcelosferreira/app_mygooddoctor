<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $primaryKey = 'crm';

    protected $keyType = 'integer';

    public $incrementing = false;

    protected $fillable = [
        'name',
        'gender',
        'education',
        'email',
        'phone',
        'mobile_phone',
        'department'
    ];

    public function specialties()
    {
        return $this->hasMany(Specialty::class);
    }

    public function patient()
    {
        return $this->hasOne(Patient::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
