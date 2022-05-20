<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DoctorsModel;
use App\DiagnosticCenterModel;
use App\HospitalsModel;

class DashboardController extends Controller
{
    public function dashboard(){
        $doctor = DoctorsModel::count();
        $diagnostic = DiagnosticCenterModel::count();
        $hospital = HospitalsModel::count();
        return view('admin.dashboard.index',compact('doctor','diagnostic','hospital'));
    }
}
