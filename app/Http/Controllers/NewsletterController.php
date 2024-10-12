<?php

namespace App\Http\Controllers;


use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email input
        $request->validate([
            'email' => 'required|email|unique:newsletters,email'
        ]);

        // Store the email in the newsletters table
        Newsletter::create(['email' => $request->email]);

        return redirect()->back()->with('success', 'You have successfully subscribed to our newsletter!');
    }
}
