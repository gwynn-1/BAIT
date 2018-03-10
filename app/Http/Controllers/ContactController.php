<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $req){
        return view('contact',['title'=>'Contact']);
    }
}
