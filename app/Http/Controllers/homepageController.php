<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    //home page
    public function home(){
        return view('pages.home');
    }
}
