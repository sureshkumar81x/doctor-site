<?php

namespace App\Http\Controllers\Frontend;

use App\DoctorsModel;
use App\HospitalsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PageContentModel;

class PageController extends Controller
{
    public function index(){
        $top_text = PageContentModel::where('key','top-text')->where('page','home')->first();
        $banner_image = PageContentModel::where('key','banner-image')->where('page','home')->value('image');
        $book_free = PageContentModel::where('key','book-free')->where('page','home')->get();
        $get_in_touch_image = PageContentModel::where('key','get-in-touch-image')->where('page','home')->value('image');
        $doctor_image = PageContentModel::where('key','doctor-image')->where('page','home')->value('image');
        $medicals = HospitalsModel::where("status","Active")->take(18)->get();
        $doctors = DoctorsModel::where("status","Active")->take(24)->get();
        $trust_us = PageContentModel::where('key','trust-us')->where('page','home')->first();
        $trust_us_list = PageContentModel::where('key','trust-us-list')->where('page','home')->get();
        $bottom_get_in_touch = PageContentModel::where('key','bottom-get-in-touch')->where('page','home')->value('image');
        return view('frontend.pages.index',compact('top_text','book_free',
        'banner_image','get_in_touch_image','doctor_image','medicals','doctors','trust_us','trust_us_list','bottom_get_in_touch'));
    }
}
