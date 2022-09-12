<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    private $doctor;

    public function __construct(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }

    public function profile_overview()
    {
        $patients = auth()->user()->profile->patient;

        return view('profile.overview', compact('patients'));
    }
}
