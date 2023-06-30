<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
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
        $articles = Article::all(); // select * from Article

        return view('articles.index', compact('articles'));
        // return view('articles.index', [
        //     'dataList' => $data
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_file_url' => 'required|array',
            'image_file_url.*' => 'required|image|mimes:jpg,jpeg,png|max:2000',
        ]);

        $images = [];

        if ($request->hasFile('image_file_url')) {
            foreach ($request->file('image_file_url') as $image) {
                $imagePath = $image->store('carousel', ['disk' => 'public']);
                $images[] = '/storage/' . $imagePath;
            }
        }

        $newArticle = new Article();
        $newArticle->title = $request->title;
        $newArticle->description = $request->description;
        $newArticle->image_file_url = json_encode($images); // Store the array of image URLs as a JSON string
        $newArticle->save();

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Article successfully added.'
        ]);

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Article::find($id);

        return view('articles.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Article::findOrFail($id);

        return view('articles.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_file_url' => 'nullable|array',
            'image_file_url.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2000',

        ]);

        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->description = $request->description;

        if ($request->hasFile('image_file')) {
            // delete old image
            File::delete($article->image_file_url);

            // and store new image
            $imagePath = $request->file('image_file')->store('carousel', ['disk' => 'public']);
            $article->image_file_url = $imagePath;
        }

        $article->save();

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Article updated successfully'
        ]);

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Article = Article::findOrFail($id);

        File::delete($Article->image_file_url);
        $Article->delete();

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Article successfully deleted'
        ]);

        return redirect()->route('articles.index');
    }
}
