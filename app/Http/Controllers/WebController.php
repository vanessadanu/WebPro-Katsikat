<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Article;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(Request $request)
    {
        $data = Portfolio::all();
        $services = Service::all();
        $articles = Article::all();
        $count = $articles->count();

        return view('welcome', compact(
            'data',
            'services',
            'articles',
        ));
    }

    public function home(Request $request)
    {
        return view('home');
    }

    public function articles($id)
    {
        $selectedArticle = Article::find($id);

        return view('articles', compact('selectedArticle'));
    }
}
