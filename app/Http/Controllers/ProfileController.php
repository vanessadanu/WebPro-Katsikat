<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = User::all();
        
        return view('profile.index', compact('data'));
    }
}
