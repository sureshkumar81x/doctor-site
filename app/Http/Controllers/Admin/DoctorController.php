<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DoctorsModel;
use DataTables;
use App\CategoriesModel;
use App\SubcategoriesModel;

class DoctorController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            $data = DoctorsModel::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $url_update = route('admin::editDoctor', ['id' => $data->id]);
                    $url_delete = "'".route('admin::deleteDoctor', ['id' => $data->id])."'";
                    $edit='<span id="status_'.$data->id.'">';
                    if($data->status=='Active'){
                        $edit .='<a class="btn btn-xs btn-info"
                                            href="javascript:status('.$data->id.','.$data->status.');" title="Status">
                                             <i class="fas fa-check"></i>
                                         </a>';
                    } else{
                        $edit .='<a class="btn btn-xs btn-danger"
                                            href="javascript:status('.$data->id.','.$data->status.');" title="Status">
                                             <i class="fas fa-ban"></i>
                                         </a>';
                    }
                    $edit.='</span>&nbsp';
                    $edit .= '<a href="' . $url_update . '" class="btn btn-xs btn-primary fancybox fancybox.iframe" title="Edit"><i class="fas fa-edit"></i></a>'.
                                        '&nbsp;<a data-toggle="modal" data-target="#confirmDelete"  class="btn btn-xs btn-danger" title="Delete" onclick="getDeleteRoute(' . $url_delete . ')"> <i class="fas fa-trash"></i></a>';
                    return $edit;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('admin.doctor.index');
    }

    public function add(){
        $categories = CategoriesModel::where("status","Active")->get();
        return view('admin.doctor.add',compact('categories'));
    }
    public function save(Request $request)
        {
           // dd($request->all());
            $msg = [
                'category_id.required' => 'Select category',
                'subcategory_id.required' => 'Select subcategory',
                'name.required' => 'Enter Name',
                'phone.required' => 'Enter Phone',
                'address.required' => 'Enter Address',
                'description.required' => 'Enter Description',
                'profile_image.required' => 'Select image.',
            ];
            $this->validate($request, [
                'category_id' => 'required',
                'subcategory_id' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'description' => 'required',
                'profile_image' => 'required',
            ], $msg);
            $data = $request->except('_token','profile_image');
            $image = $request->file('profile_image');
            $imageName =  rand(111111,99999) . '_' .time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/doctor');
            $image->move($destinationPath,$imageName);
            $data['profile_image']=$imageName;
            DoctorsModel::create($data);
            return redirect()->back()->with('success','Doctor Added Successfully !!!');
        }
        public function edit($id){
            $info = DoctorsModel::where('id', $id)->first();
            $categories = CategoriesModel::where("status","Active")->get();
            $sub_categories = SubcategoriesModel::where("category_id",$info->category_id)->where("status","Active")->get();
            return view('admin.doctor.edit', compact('info','categories','sub_categories'));
        }

    public function update(Request $request,$id)
    {
        $msg = [
            'category_id.required' => 'Select category',
            'subcategory_id.required' => 'Select subcategory',
            'name.required' => 'Enter Name',
            'phone.required' => 'Enter Phone',
            'address.required' => 'Enter Address',
            'description.required' => 'Enter Description',
        ];
        $this->validate($request, [
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
        ], $msg);
        $data = $request->except('_token','profile_image');
        $data['profile_image'] = DoctorsModel::where('id',$id)->value('profile_image');
        if($request->hasFile('profile_image')){
            $image = $request->file('profile_image');
            $imageName =  rand(111111,99999) . '_' .time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/doctor');
            $file = $destinationPath.'/'.$data['profile_image'];
            if(file_exists($file)){
                unlink($file);
            }
            $image->move($destinationPath,$imageName);
            $data['profile_image']=$imageName;
        }
        DoctorsModel:: where('id',$id)->update($data);
        return redirect()->back()->with('success', 'Doctor Updated Successfully !!!');
    }

    public function status(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        if($status=='Active'){
            DoctorsModel::where('id',$id)->update([
                'status' => 'Inactive',
            ]);
            $st='Inactive';
            $html='<a class="btn btn-xs btn-danger" href="javascript:status('.$id.','.$st.');" title="Status">
                                             <i class="fas fa-ban"></i>
                                         </a>';
            return json_encode(array('id'=>$id,'html'=>$html));
        }
        else{
            DoctorsModel::where('id',$id)->update([
                'status' => 'Active',
            ]);
            $st='Active';
            $html='<a class="btn btn-xs btn-info" href="javascript:status('.$id.','.$st.');" title="Status">
                                             <i class="fas fa-check"></i>
                                         </a>';
            return json_encode(array('id'=>$id,'html'=>$html));
        }

    }

    public function delete($id)
    {
        $profile_image = DoctorsModel::where('id',$id)->value('profile_image');
        $destinationPath = public_path('uploads/doctor');
        $file = $destinationPath.'/'.$profile_image;
        if(file_exists($file)){
            unlink($file);
        }
        DoctorsModel:: where('id', $id)->delete();
        return redirect()->back()->with('success', 'Categories Deleted Successfully !!!');
    }
}
