<?php

namespace App\Http\Controllers\Frontend;

use App\CategoriesModel;
use App\DiagnosticCenterModel;
use App\DoctorsModel;
use App\HospitalsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PageContentModel;
use App\DoctorsReviewModel;
use App\HospitalReviewModel;
use App\DiagnosticReviewsModel;

class PageController extends Controller
{
    public function index(){
        $top_text = PageContentModel::where('key','top-text')->where('page','home')->first();
        $banner_image = PageContentModel::where('key','banner-image')->where('page','home')->value('image');
        $book_free = PageContentModel::where('key','book-free')->where('page','home')->get();
        $get_in_touch_image = PageContentModel::where('key','get-in-touch-image')->where('page','home')->value('image');
        $doctor_image = PageContentModel::where('key','doctor-image')->where('page','home')->value('image');
        $medicals = HospitalsModel::where("status","Active")->take(18)->orderBy('id','DESC')->get();
        $doctors = DoctorsModel::where("status","Active")->take(24)->orderBy('id','DESC')->get();
        $trust_us = PageContentModel::where('key','trust-us')->where('page','home')->first();
        $trust_us_list = PageContentModel::where('key','trust-us-list')->where('page','home')->get();
        $doctorCat = CategoriesModel::whereHas('getDoctors')->where('status','Active')->inRandomOrder()->take(4)->get();
        $digoCat = CategoriesModel::whereHas('getDiagnostics')->where('status','Active')->inRandomOrder()->take(4)->get();
        return view('frontend.pages.index',compact('top_text','book_free','doctorCat','digoCat',
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
        if(!empty($request->get('category_id'))){
            $doctors->where('category_id',$request->get('category_id'));
        }
        $doctors = $doctors->orderBy('id','DESC')->paginate(6);
        $doctor_list = DoctorsModel::where('status','Active')->get();
        return view('frontend.pages.doctor-list',compact('doctors','doctor_list'));
    }
    public function doctorDetails($id){
        $info = DoctorsModel::where('id', $id)->first();
        return view('frontend.pages.doctor-details',compact('info'));
    }
    public function doctorReviewSubmit(Request $request){
        $data = $request->except('_token');
        DoctorsReviewModel::create($data);
        $avg = DoctorsReviewModel::where('doctor_id',$request->doctor_id)->avg('rating');
        DoctorsModel::where("id",$request->doctor_id)->update([
           "avg_rating"=>$avg
        ]);
        return redirect()->back()->with('success','Review submited successfully.');
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
        if(!empty($request->get('category_id'))){
            $hospitals->where('category_id',$request->get('category_id'));
        }
        $hospitals = $hospitals->orderBy('id','DESC')->paginate(6);  
        $hospital_list = HospitalsModel::where('status','Active')->get();
        return view('frontend.pages.hospital-list',compact('hospitals','hospital_list'));
    }
    public function hospitalDetails($id){
        $info = HospitalsModel::where('id', $id)->first();
        return view('frontend.pages.hospital-details',compact('info'));
    }
    public function hospitalReviewSubmit(Request $request){
        $data = $request->except('_token');
        HospitalReviewModel::create($data);
        $avg = HospitalReviewModel::where('hospital_id',$request->hospital_id)->avg('rating');
        HospitalsModel::where("id",$request->hospital_id)->update([
           "avg_rating"=>$avg
        ]);
        return redirect()->back()->with('success','Review submited successfully.');
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
        if(!empty($request->get('category_id'))){
            $diagnostics->where('category_id',$request->get('category_id'));
        }
        $diagnostics = $diagnostics->orderBy('id','DESC')->paginate(6);  
        $diagnostic_list = DiagnosticCenterModel::where('status','Active')->get();
        return view('frontend.pages.diagnostic-list',compact('diagnostics','diagnostic_list'));
    }
    public function diagnosticDetails($id){
        $info = DiagnosticCenterModel::where('id', $id)->first();
        return view('frontend.pages.diagnostic-details',compact('info'));
    }
    public function diagnosticReviewSubmit(Request $request){
        $data = $request->except('_token');
        DiagnosticReviewsModel::create($data);
        $avg = DiagnosticReviewsModel::where('diagnostic_id',$request->diagnostic_id)->avg('rating');
        DiagnosticCenterModel::where("id",$request->diagnostic_id)->update([
           "avg_rating"=>$avg
        ]);
        return redirect()->back()->with('success','Review submited successfully.');
    }
}
