<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function list() {
        //$users = \App\Models\User::all();
        $users = User::all();
        //return view('list', compact('users'));
        return view('list', ['users' => $users]);
    }

    public function edit() {
        
    }
    public function update() {

    }
}
