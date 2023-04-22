<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => app(Faker::class)->name ,
            'email' => app(Faker::class)->email ,
            'email_verified_at' => null ,
            'password' => Hash::make(app(Faker::class)->text) ,
            'remember_token' => null ,
        ]);

        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request ,$id)
    {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->save();

        return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
