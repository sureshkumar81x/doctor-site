<?php

namespace App\Http\Controllers\Frontend;

use App\DiagnosticCenterModel;
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
        return view('frontend.pages.index',compact('top_text','book_free',
        'banner_image','get_in_touch_image','doctor_image','medicals','doctors','trust_us','trust_us_list'));
    }
    public function doctors(Request $request){
        $doctors = DoctorsModel::where('status','Active');  
        if(!empty($request->get('keyword'))){
          $doctors->where('name','like','%'.$request->get('keyword').'%');
        }
        if(!empty($request->get('location'))){
            $doctors->where('address','like','%'.$request->get('location').'%');
        }
        if(!empty($request->get('doctor_id'))){
            $doctors->where('id',$request->get('doctor_id'));
        }
        $doctors = $doctors->paginate(6);
        $doctor_list = DoctorsModel::where('status','Active')->get();
        return view('frontend.pages.doctor-list',compact('doctors','doctor_list'));
    }
    public function hospitals(Request $request){
        $hospitals = HospitalsModel::where('status','Active');
        if(!empty($request->get('keyword'))){
            $hospitals->where('name','like','%'.$request->get('keyword').'%');
        }
        if(!empty($request->get('location'))){
            $hospitals->where('address','like','%'.$request->get('location').'%');
        }
        if(!empty($request->get('hospital_id'))){
            $hospitals->where('id',$request->get('hospital_id'));
        }
        $hospitals = $hospitals->paginate(6);  
        $hospital_list = HospitalsModel::where('status','Active')->get();
        return view('frontend.pages.hospital-list',compact('hospitals','hospital_list'));
    }
    public function diagnostics(Request $request){
        $diagnostics = DiagnosticCenterModel::where('status','Active');
        if(!empty($request->get('keyword'))){
            $diagnostics->where('name','like','%'.$request->get('keyword').'%');
        }
        if(!empty($request->get('location'))){
            $diagnostics->where('address','like','%'.$request->get('location').'%');
        }
        if(!empty($request->get('diagnostic_id'))){
            $diagnostics->where('id',$request->get('diagnostic_id'));
        }
        $diagnostics = $diagnostics->paginate(6);  
        $diagnostic_list = DiagnosticCenterModel::where('status','Active')->get();
        return view('frontend.pages.diagnostic-list',compact('diagnostics','diagnostic_list'));
    }
}
