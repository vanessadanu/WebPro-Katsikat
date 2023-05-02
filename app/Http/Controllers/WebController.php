<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(Request $request){
        $data = Portfolio::all();
        return view('welcome', compact('data'));
    }

    public function home(Request $request){
        return view('home');
    }
}
