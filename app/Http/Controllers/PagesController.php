<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function team(){
        return view('pages.team');
    }

    public function contact(){
        return view('pages.contact');
    }
}