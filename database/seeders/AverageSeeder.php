<?php

namespace Database\Seeders;

use App\Models\Average;
use Illuminate\Database\Seeder;

class AverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for($i=0; $i<300; $i++){
            $first_value = rand(1,1000);
            $second_value = rand(1,1000);
            $average_value = ($first_value + $second_value)/2;

            Average::create([
                'user_id' => rand(1,51) ,
                'first_value' => $first_value ,
                'second_value' => $second_value ,
                'average_value' => $average_value ,
            ]);
        }
    }
}
