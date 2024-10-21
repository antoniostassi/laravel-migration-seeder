<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate(); // svuota la tabella dai suoi elementi;
        for ($i=0; $i < 10; $i++) { 
            # code...
            $train = new Train();

            $train->company = fake()->company();
            $train->dep_station = fake()->city();
            $train->arr_station = fake()->city();
            $train->arrival_time = fake()->time();
            $train->departure_time = fake()->time();
            $train->train_code = fake()->bothify('??###');
            $train->train_cabs_num = rand(1, 100);
            $train->on_time = fake()->boolean(50);
            $train->cancelled = fake()->boolean();

            $train->save();
        }
    }
}
