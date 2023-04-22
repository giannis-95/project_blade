<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for($i=0; $i<50; $i++){
            User::create([
                'name' => app(Faker::class)->name ,
                'email' => app(Faker::class)->email ,
                'email_verified_at' => null ,
                'password' => Hash::make(app(Faker::class)->text) ,
                'remember_token' => null ,
            ]);
        }

        User::create([
            'name' => 'john' ,
            'email' => 'giannispappas95@gmail.com' ,
            'email_verified_at' => null ,
            'password' => Hash::make('ironmaiden') ,
            'remember_token' => null ,
        ]);

    }
}
