<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newTrips = new Trip();
            $newTrips->country = $faker->state();
            $newTrips->airline = $faker->company();
            $newTrips->description = $faker->paragraph();
            $newTrips->votes = $faker->randomDigitNotNull();
            $newTrips->save();
        }
    }
}
