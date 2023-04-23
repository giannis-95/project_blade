<?php

namespace App\Http\Controllers\Api;

use App\Models\Average;
use Illuminate\Http\Request;

class AverageApiController{

    public function index(){
        $averages = Average::all();
        return $averages;
    }

    public function show($id){
        $average = Average::find($id);
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
        $a = 1;
        $average = Average::find($id);
        $average->delete();
    }
}
