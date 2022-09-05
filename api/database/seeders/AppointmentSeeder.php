<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();

        foreach ($doctors as $doctor) {
            Appointment::factory()->create([
                'doctor_crm' => $doctor->crm
            ]);
        }

        foreach ($patients as $patient) {
            Appointment::where('patient_id', null)->update([
                'patient_id' => $patient->id
            ]);
        }

    }
}
