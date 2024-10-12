<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index() {
        // Fetching news items from the News model
        $newsItems = News::all();  // Fetches all news records from the `news` table

        // Passing the newsItems to the view
        return view('news.index', compact('newsItems'));
    }

    // public function index()
    // {
    //     $newsItems = News::orderBy('published_at', 'desc')->get();
    //     return view('news.index', ['newsItems' => $newsItems]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }
    // public function store(Request $request)
    // {
    //     // Validate the input data
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //         'image' => 'nullable',  // Validate image type
    //         'published_at' => 'required|date',
    //     ]);


    //     // Create a new instance of the News model
    //     $news = new News();
    //     $news->title = $request->title;
    //     $news->content = $request->content;
    //     $news->image = $request->image;
    //     $news->published_at = $request->published_at;


    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $path = '/storage/new_image/';
    //         $file->move($path, $filename);
    //         $news->image = $path . $filename;
    //     }

    //     $news->save();

    //     return redirect()->route('news.index')->with('success', 'News created successfully.');
    // }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'published_at' => 'required|date',
        ]);

        // Handle image upload to 'storage/new_image'
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('new_image', 'storage');
            $validatedData['image'] = $imagePath;
        }

        News::create($validatedData);

        return redirect()->route('news.index')->with('success', 'News created successfully');
    }




    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }


    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $news = News::findOrFail($id);

    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'published_at' => 'required|date',
    //     ]);

    //     $news->title = $request->title;
    //     $news->content = $request->content;
    //     $news->image = $request->image;

    //     if ($request->hasFile('image')) {
    //         // Delete the old image if it exists
    //         if ($news->image) {
    //             Storage::disk('public')->delete($news->image);
    //         }
    //         $news->image = $request->file('image')->store('news_images', 'public');
    //     }

    //     $news->published_at = $request->published_at;
    //     $news->save();

    //     return redirect()->route('news.index')->with('success', 'News updated successfully.');

    // }

    public function update(Request $request, News $news)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'nullable|image|max:2048',
        'published_at' => 'required|date',
    ]);

    // Handle image upload to 'storage/new_image' if a new image is provided
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('new_image', 'storage');
        $validatedData['image'] = $imagePath;
    }

    $news->update($validatedData);

    return redirect()->route('news.index')->with('success', 'News updated successfully');
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        // Delete the image if it exists
        if ($news->image) {
            if (Storage::exists($news->image)) {
                Storage::delete($news->image);
            }
        }
        $news->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully.');

    }
}
