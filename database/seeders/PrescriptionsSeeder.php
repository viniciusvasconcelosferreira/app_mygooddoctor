<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Prescriptions;
use Illuminate\Database\Seeder;

class PrescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patients = Patient::all();

        foreach ($patients as $patient) {
            Prescriptions::factory()->create([
                'patient_id' => $patient->id
            ]);
        }

    }
}
