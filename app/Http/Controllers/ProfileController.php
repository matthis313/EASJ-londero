<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        $data['pagetitle'] = 'Profiler';
        $data['users'] = $users;
        return view('profile.index')->with($data);
    }

    public function show($id) 
    {
        $user = User::find($id);
        $data['user'] = $user;
        return view('profile.show')->with($data);
    }
}
