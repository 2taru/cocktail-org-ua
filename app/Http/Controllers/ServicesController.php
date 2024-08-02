<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function showBackendService()
    {
        return view('backend-service');
    }

    public function showFrontendService()
    {
        return view('frontend-service');
    }

    public function showGuestService()
    {
        return view('guest-service');
    }

    public function showPRROService()
    {
        return view('prro-service');
    }
}
