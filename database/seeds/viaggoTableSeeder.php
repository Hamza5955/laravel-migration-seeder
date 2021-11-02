<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\viagio;

class viaggoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $new_viaggio = new viagio();
            $new_trip->daparture = $faker->city();
            $new_trip->destination = $faker->city();
            $new_viaggio->cuntray = $faker->state();
            $new_viaggio->phone = $faker->numberBetween(128389393, 53748332287);
            $new_viaggio->return_date = $faker->date();
            $new_viaggio->save();
        }
    }
}
