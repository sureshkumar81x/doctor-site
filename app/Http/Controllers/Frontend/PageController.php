<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PageContentModel;

class PageController extends Controller
{
    public function index(){
        $top_text = PageContentModel::where('key','top-text')->where('page','home')->first();
        return view('frontend.pages.index',compact('top_text'));
    }
}
