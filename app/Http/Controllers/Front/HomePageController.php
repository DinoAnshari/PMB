<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $latestVideo = Video::latest()->first();
        $faqs = Faq::where('is_active', 1)->get();
        return view('front.index', compact('sliders', 'latestVideo', 'faqs',));
    }
}
