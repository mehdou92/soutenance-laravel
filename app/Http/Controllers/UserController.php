<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\User;


class UserController extends Controller
{

    public function index() {
        $tags = DB::table('tags')->select('name')->get();

        return view('user.index', ['tags' => $tags]);
    }

    public function list() {
        //$users = \App\Models\User::all();
        $users = User::all();
        //return view('list', compact('users'));
        return view('list', ['users' => $users]);
    }

    public function edit($id) {

        $users = User::find($id);
        return view('edit', compact('user', 'id'));

    }
    public function update(Request $request, $id) {

        $user = User::find($id);
        $user -> first_name = $request->get('first_name');
        $user -> last_name = $request->get('last_name');
        $user -> username = $request->get('username');
        $user -> email = $request->get('email');
        $user -> location = $request->get('location');
        $user -> tag1 = $request->get('tag1');
        $user -> tag2 = $request->get('tag2');
        $user -> tag3 = $request->get('tag3');
        $user -> save();
        return redirect('users');

    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        $user = Redis::get('user:profile:'.$id);

        return view('profile', ['user' => $user]);
    }
}
