<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $collection = collect([
            '1' ,
            '2' ,
            '3' ,
            '4' ,
            '5'
        ]);

        $prices = $collection->tojson();

        Price::create([
            'prices' => $prices
        ]);
    }
}
