<?php

namespace App\Http\Controllers;

use App\Support\ExhibitionServices;

class ServiceController extends Controller
{
    public function index()
    {
        $services = ExhibitionServices::all();
        return view('pages.services', compact('services'));
    }

    public function show(string $slug)
    {
        $services = ExhibitionServices::all();
        abort_unless(isset($services[$slug]), 404);
        $service = $services[$slug];
        $related = collect($services)->reject(fn ($item, $key) => $key === $slug)->take(3);
        return view('services.show', compact('service', 'related'));
    }
}
