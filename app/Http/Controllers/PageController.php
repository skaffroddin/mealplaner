<?php
// app/Http/Controllers/PageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about'); // Ensure 'about.blade.php' exists in the resources/views/pages directory
    }

    public function contact()
    {
        return view('pages.contact'); // Ensure 'contact.blade.php' exists in the resources/views/pages directory
    }
}
