<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use App\Models\TrainingClass;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function ($user) {
            $faker = Faker::create('id_ID');

            $rand = rand(1, 7);
            for ($i = 1; $i <= $rand; $i++) {
                Enrollment::create([
                    'user_id' => $user->id,
                    'class_id' => rand(1, 100),
                    'status' => 'working'
                ]);
            }
            $rand = rand(1, 7);
            for ($i = 1; $i <= $rand; $i++) {

                $date = $faker->dateTimeBetween($startDate = 'now', $endDate = '+15 days')->format('Y-m-d');
                Enrollment::create([
                    'user_id' => $user->id,
                    'elearning_id' => rand(1, 100),
                    'start_date' => date('m/d/Y', strtotime($date)),
                    'end_date' => date('m/d/Y', strtotime($date . ' + ' . random_int(1, 10) . ' days')),
                    'status' => 'working'
                ]);
            }
        });
    }
}
