<?php

namespace Database\Seeders;

use App\Models\Proccese;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProcceseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for($i=0; $i<200; $i++){
            Proccese::create([
                'average_id' => rand(1,100) ,
                'name' => app(Faker::class)->name
            ]);
        }
    }
}
