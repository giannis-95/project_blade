<?php

namespace App\Models\Repositories;

use App\Models\User;
use App\Models\Average;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AverageRepository{

    public function insert(array $data){
        $user = User::find(Auth::user()->id);

        $average = new Average([
            'first_value' => $data['firstValue'],
            'second_value' => $data['secondValue'],
            'average_value' => $data['averageValue'],
        ]);

        $user->prices()->save($average);

        $prices = collect([$data['prices']]);

        Price::create([
            'prices' => $prices->toJson()
        ]);
    }

    public function update(array $data , $id){
        $price = Average::find($id);
        $price->first_value = $data['firstValue'];
        $price->second_value = $data['secondValue'];
        $price->average_value = $data['averageValue'];

        $price->save();
    }

    public function delete($id){
        $price = Average::find($id);
        $price->delete();
    }
}
