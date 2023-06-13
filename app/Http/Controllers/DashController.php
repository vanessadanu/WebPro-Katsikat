<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        $data = Portfolio::all();
        
        return view('dash.index', compact('data'));
    }
}
