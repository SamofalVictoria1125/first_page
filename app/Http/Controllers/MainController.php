<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function like(){
        return view('fav');
    }

    public function account(){
        return view('account');
    }

    public function cataloge(){
        return view('cataloge');
    }

    public function account1(){
        return view('account1');
    }



}
