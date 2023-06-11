<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = Profile::all();
        
        return view('admin.profile', compact('data'));
    }
}
