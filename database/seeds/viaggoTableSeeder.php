<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\viagio;
class viaggoTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_trip = new viagio();
            $new_trip->departure = $faker->city();
            $new_trip->destination = $faker->city();
            $new_trip->cuntray = $faker->state();
            $new_trip->phone = $faker->numberBetween(128389393, 53748332287);
            $new_trip->return_date = $faker->date();
            $new_trip->co2_reting =("");
            $new_trip->save();
        }
    }
}
