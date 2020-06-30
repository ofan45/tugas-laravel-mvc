<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }


    public function save_post(Request $req){
        $fnama = $req["fnama"];
        $lnama = $req["lnama"];
        return view('welcome',['fnama' => $fnama], ['lnama' => $lnama], ['lnama' => $lnama] );
    }
}
