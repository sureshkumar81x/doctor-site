<?php

namespace App\Http\Controllers\Frontend;

use App\Faq;
use App\PageContents;
use App\Plans;
use App\Portfolio;
use App\Services;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }
}
