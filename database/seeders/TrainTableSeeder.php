<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->randomElement(['Trenitalia', 'Italo', 'Trenonord']);
            $newTrain->departure_station = $faker->randomElement(['Milano', 'Roma', 'Torino', 'Bologna', 'Palermo', 'Padova']);
            $newTrain->arrival_station = $faker->randomElement(['Milano', 'Roma', 'Torino', 'Bologna', 'Palermo', 'Padova']);
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time('H:i:s', '15:00:00');
            $newTrain->train_code = $faker->randomNumber(8, true);
            $newTrain->number_carriages = $faker->randomDigitNotNull();
            $newTrain->in_time = $faker->randomElement([true, false]);
            $newTrain->cancelled = $faker->randomElement([true, false]);
        }
    }
}
