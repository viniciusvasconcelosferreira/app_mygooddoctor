<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DoctorSeeder::class,
            PatientSeeder::class,
            AppointmentSeeder::class,
            UserSeeder::class,
            PrescriptionsSeeder::class
        ]);
    }
}
