<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = Doctor::all();

        foreach ($doctors as $doctor) {
            Patient::factory()->create([
                'doctor_crm' => $doctor->crm
            ]);
        }

    }
}
