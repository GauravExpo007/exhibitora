<?php

namespace App\Http\Controllers;

use App\Support\ExhibitionServices;

class HomeController extends Controller
{
    public function index()
    {
        $services = array_slice(ExhibitionServices::all(), 0, 6);
        return view('pages.home', compact('services'));
    }
}
