<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        return view('home');
    }

    // Method for rendering the about page
    public function about()
    {
        return view('about');
    }

    // Method for rendering the contact page
    public function contact()
    {
        return view('contact');
    }

    public function publication()
    {
        return view('publication');
    }

    public function accademic()
    {
        return view('accademic');
    }
    public function news()
    {
        return view('news');
    }

    public function faq()
    {
        return view('faq');
    }

    public function donation()
    {
        return view('donation');
    }



}
