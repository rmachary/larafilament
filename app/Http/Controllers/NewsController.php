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
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable',  // Validate image type
            'published_at' => 'required|date',
        ]);


        // Create a new instance of the News model
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->image = $request->image;
        $news->published_at = $request->published_at;


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/news/';
            $file->move($path, $filename);
            $news->image = $path . $filename;
        }

        $news->save();

        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }


    // Create a new instance of the News model
    // $news = new News();
    // $news->title = $request->title;
    // $news->content = $request->content;

    // Handle file upload if an image is provided
    // if ($request->hasFile('image')) {
    //     // Get the image content as a binary string
    //     $imageContent = file_get_contents($request->file('image')->getRealPath());

    //     // Save the binary content to the database
    //     $news->image = $imageContent;  // Store the image as binary data
    // }

    // // Save the publication date and other fields
    // $news->published_at = $request->published_at;
    // $news->save();  // Save the news entry to the database

    // // Redirect to the index page with a success message
    // return redirect()->route('news.index')->with('success', 'News created successfully.');}





    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'published_at' => 'required|date',
    //     ]);

    //     $news = new News();
    //     $news->title = $request->title;
    //     $news->content = $request->content;

    //     if ($request->hasFile('image')) {
    //         $news->image = $request->file('image')->store('news_images', 'public');
    //     }

    //     $news->published_at = $request->published_at;
    //     $news->save();

    //     return redirect()->route('news.index')->with('success', 'News created successfully.');
    // }
    // public function store(Request $request)
    // {
    // //     // Validate input data
    // //     $request->validate([
    // //         'title' => 'required|string|max:255',
    // //         'content' => 'required|string',
    // //         'image' => 'required|image',  // Image validation
    // //         'published_at' => 'required|date',
    // //     ]);

    //     // Initialize variable to store image path
    //     $imageName = null;

    //     // Handle file upload
    //     if ($request->hasFile('image')) {
    //         // Store the image in the 'storage/app/public/images' directory
    //         $imagePath = $request->file('image')->store('public/images');

    //         // Get only the filename (hashed name) and store it in the database
    //         $imageName = $request->file('image')->hashName();
    //     }

    //     // Save the news item with the image filename (if available)
    //     $news = new News();
    //     $news->title = $request->input('title');
    //     $news->content = $request->input('content');
    //     $news->image = $imageName ? 'public/storage/'.$imagePath : null;  // Conditionally store the image path
    //     $news->published_at = $request->input('published_at');
    //     $news->save();

    //     return redirect()->route('news.index')->with('success', 'News item created successfully.');
    // }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $news = News::findOrFail($id);
    //     return view('news.edit', compact('news'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'required|date',
        ]);

        $news->title = $request->title;
        $news->content = $request->content;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $news->image = $request->file('image')->store('news_images', 'public');
        }

        $news->published_at = $request->published_at;
        $news->save();

        return redirect()->route('news.index')->with('success', 'News updated successfully.');

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
