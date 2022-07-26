<?php

namespace App\Http\Controllers;

use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        

        return view('users.index', compact('users'));
    }

    public function show($id){

        
        if(!$user = User::find($id))
            return redirect()->route('users.index');

        $title = 'Usuario ' . $user->name;

        return view('users.show', compact('user', 'title'));
    }
    
    public function create()
    {
        
    }
}