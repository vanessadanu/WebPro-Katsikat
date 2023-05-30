<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Portfolio::all(); // select * from Portfolio
        
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
        return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_file_url' => 'required',
            'image_file_url.*' => 'mimes:jpg,jpeg,png|max:2000'
        ]);

        // $filename = $request->file('image_file')->getClientOriginalName();
        // $imagePath = $request->file('image_file')->move(public_path('assets\images'), $filename);

        $imagePath = $request->file('image_file_url')->store('uploads', ['disk' => 'public']);

        $newPortfolio = new Portfolio();
        $newPortfolio->title = $request->title;
        $newPortfolio->description = $request->description;
        $newPortfolio->image_file_url = '/storage/' . $imagePath;
        $newPortfolio->save();
        
        return redirect()->route('portfolios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Portfolio::find($id);
        return view('portfolios.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Portfolio::findOrFail($id);

        return view('portfolios.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->save();

        return redirect()->route('portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return redirect()->route('portfolios.index');
    }
}
