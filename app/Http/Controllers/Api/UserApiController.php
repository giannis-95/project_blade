<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;

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
            'firstname' => $request->input('firstname') ,
            'lastname' => $request->input('lastname') ,
            'phone' => $request->input('phone'),
            'email' => $request->input('email') ,
            'email_verified_at' => null ,
            'password' => $request->input('password') ,
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

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
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
