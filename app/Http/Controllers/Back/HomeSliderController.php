<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;


class HomeSliderController extends Controller
{
    

    public function index()
    {
        $sliders = HomeSlider::orderBy('sort_order')->get();
        return view('back.dashboard.homesliders', compact('sliders'));
    }



    public function edit(HomeSlider $homeSlider)
    {
        
        return view('back.dashboard.editabout',compact('homeslider'));
    }
}
