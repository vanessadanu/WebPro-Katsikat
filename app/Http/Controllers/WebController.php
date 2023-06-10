<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Category;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(Request $request){
        $data = Portfolio::all();
        $categories = Category::all();

        return view('welcome', compact(
            'data',
            'categories',
        ));
    }

    public function home(Request $request){
        return view('home');
    }
}
