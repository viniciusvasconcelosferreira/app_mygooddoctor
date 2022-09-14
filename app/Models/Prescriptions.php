<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prescriptions extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'clinic_name',
        'medication_name',
        'dosage',
        'period',
        'way_use',
        'observation',
        'date',
        'patient_id'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
