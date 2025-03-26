<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 15; $i++) {

            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->station_of_departure = $faker->city();
            $newTrain->station_of_arrival = $faker->city();
            $newTrain->departure_time = $faker->dateTimeThisYear();
            $newTrain->arrival_time = $faker->dateTimeThisYear();
            $newTrain->train_code = $faker->lexify($faker->numerify("??####"));
            $newTrain->number_of_carriage = $faker->numberBetween(0, 100);
            $newTrain->on_time = $faker->boolean();
            $newTrain->is_deleted = $faker->boolean();

            $newTrain->save();
        }
    }
}
