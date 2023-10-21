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
                'firstname' => app(Faker::class)->name ,
                'email' => app(Faker::class)->email ,
                'email_verified_at' => null ,
                'password' => Hash::make(app(Faker::class)->text) ,
                'remember_token' => null ,
                'lastname' => app(Faker::class)->lastname ,
                'phone' => rand(1000000000,9999999999) ,
            ]);
        }

        User::create([
            'firstname' => 'john' ,
            'email' => 'giannispappas95@gmail.com' ,
            'email_verified_at' => null ,
            'password' => Hash::make('ironmaiden') ,
            'remember_token' => null ,
            'lastname' => 'pappas',
            'phone' => rand(1000000000,9999999999) ,
        ]);

    }
}
