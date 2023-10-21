<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('contact.create');
    }

    public function contact_insert(Request $request){
        $request->validate([
            'email' => 'required|max:255' ,
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'phone' => 'required|digits_between:10,14',
        ]);

        return redirect()->back()->withSuccess('validate completed');
    }
}
