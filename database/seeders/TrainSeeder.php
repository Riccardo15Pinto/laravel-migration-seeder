<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder


{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $train = new Train();
            $train->company = $faker->company();
            $train->departure = $faker->city();
            $train->destination = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->pnr = $faker->randomNumber(5, true);
            $train->train_carriage = $faker->randomNumber(2, true);
            $train->in_time = $faker->numberBetween(0, 1);
            $train->deleted = $faker->numberBetween(0, 1);

            $train->save();
        }
    }
}
