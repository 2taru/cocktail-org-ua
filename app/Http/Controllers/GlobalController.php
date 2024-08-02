<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function showHomepage()
    {
        return view('homepage');
    }

    public function showInstruction()
    {
        return view('instruction');
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showPricing()
    {
        return view('pricing');
    }

    public function showAbout()
    {
        return view('about');
    }
}
