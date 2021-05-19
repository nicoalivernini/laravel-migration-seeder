<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $holiday = new Holiday();
        $holiday->people = $faker->numberBetween(0, 50);
        $holiday->duration = $faker->numberBetween(0, 50);
        $holiday->country = $faker->state();
        $holiday->typology = $faker->randomElement(['Adventure', 'Relax', 'SPA']);
        $holiday->category = $faker->randomElement(['Sea', 'Mountain', 'Hill', 'Forest', 'Desert']);
        $holiday->cost = $faker->randomFloat(2, 100, 5000);
        $holiday->save();
      }
    }
}
