<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Slide;

class PageController extends Controller
{
    public function getIndex() {
        return view ('pages.homepage');
    }

    //Banner-Slider
    public function getSlide() {
        $slide = Slide::all();
        // $new_product = Product::where('new', 1) -> paginate(4);
        // $promotion_product = Product::where('promotion_price', '<>', 0) -> paginate(8);
        return view('pages.homepage', compact('slide'));
    }

}
