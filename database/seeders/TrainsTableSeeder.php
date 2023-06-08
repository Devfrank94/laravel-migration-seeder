<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for($i = 0; $i < 30; $i++){
        $new_train = new Train();
        $new_train->agency = $faker->randomElement(['Agency1', 'Agency2', 'Agency3']);
        $new_train->departure_station = $faker->city();
        $new_train->arrival_station = $faker->city();
        $new_train->departure_time = $faker->date() . ' '. $faker->time();
        $new_train->arrival_time = $faker->date() . ' '. $faker->time();
        $new_train->train_code = $faker->isbn10();
        $new_train->number_of_carriages = rand(3,10);
        $new_train->in_time = rand(0,1);
        $new_train->deleted = rand(0,1);
        // dump($new_train);
        
        }
    }
}
