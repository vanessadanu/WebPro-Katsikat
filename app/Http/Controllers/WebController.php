<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(Request $request){
        $data = Portfolio::all();
        $services = Service::all();

        return view('welcome', compact(
            'data',
            'services',
        ));
    }

    public function home(Request $request){
        return view('home');
    }
}
