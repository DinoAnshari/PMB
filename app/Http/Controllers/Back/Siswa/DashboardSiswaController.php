<?php

namespace App\Http\Controllers\Back\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Timeline;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardSiswaController extends Controller
{
    public function index()
    {
        $timelines = Timeline::all();
        $faqs = Faq::where('is_active', 1)->get();
        $sekolah = Auth::user()->sekolah;
        return view('back.siswa.index', compact('sekolah', 'timelines', 'faqs'));
    }
}
