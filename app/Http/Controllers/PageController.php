<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function homepage()
    {
        $articles = ['notizia', 'cronana', 'sport'];
        return view('homepage', ['articles' => $articles]);
    }

    public function about()
    {
        return view('about');
    }

    public function service($service)
    {
        return view('detail', ['service' => $service]);
    }
}
