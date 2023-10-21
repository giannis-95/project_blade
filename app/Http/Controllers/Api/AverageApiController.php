<?php

namespace App\Http\Controllers\Api;

use App\Models\Average;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AverageApiController{

    public function index(){
        $averages = Average::all();
        return $averages;
    }

    public function show($id){
        $average = Average::find($id);
        return $average;
    }

    public function create(Request $request){
        $first_value = $request->input('first_value');
        $second_value = $request->input('second_value');
        $average_value = $request->input('average_value');


        $average = Average::create([
            'user_id' => 51,
            'first_value' => $first_value ,
            'second_value' => $second_value ,
            'average_value' => $average_value,
        ]);
        return $average;
    }

    public function update(Request $request ,$id){
        $average = Average::find($id);

        $average->first_value = $request->input('first_value');
        $average->second_value = $request->input('second_value');
        $average->average_value = $request->input('average_value');

        $average->save();

        return $average;
    }

    public function delete($id){
        $average = Average::find($id);
        $average->delete();
    }
}
