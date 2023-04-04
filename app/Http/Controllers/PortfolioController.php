<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Portfolio::all();
        return view('portfolios.index', compact('data'));
        // return view('portfolios.index', [
        //     'dataList' => $data
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_file' => 'required'
        ]);

        $imagePath = $request->file('image_file')->store('uploads');

        $newPortfolio = new Portfolio();
        $newPortfolio->title = $request->title;
        $newPortfolio->description = $request->description;
        $newPortfolio->image_file = $request->image_file;
        $newPortfolio->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
