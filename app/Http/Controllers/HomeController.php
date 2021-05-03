<?php

namespace App\Http\Controllers;

use App\Article;
use App\Slider;
use App\Logo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['sliders'] = Slider::all();
        $data['articles'] = Article::take(3)->get();
        $data['logo'] = Logo::all();
        return view('welcome', $data);
    }
}
