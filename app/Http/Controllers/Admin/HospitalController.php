<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\CategoriesModel;
use App\HospitalsGallery;
use App\HospitalsModel;
use App\SubcategoriesModel;
use Str;
class HospitalController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            $data = HospitalsModel::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $url_update = route('admin::editHospital', ['id' => $data->id]);
                    $url_delete = "'".route('admin::deleteHospital', ['id' => $data->id])."'";
                    $url_gallery = route('admin::hospitalGallery', ['id' => $data->id]);
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
                    $edit .= '<a href="' . $url_update . '" class="btn btn-xs btn-primary fancybox fancybox.iframe" title="Edit"><i class="fas fa-edit"></i></a>&nbsp;';
                    $edit .= '<a href="' . $url_gallery . '" class="btn btn-xs btn-info fancybox fancybox.iframe" title="Gallery"><i class="fas fa-image"></i></a>'.
                                        '&nbsp;<a data-toggle="modal" data-target="#confirmDelete"  class="btn btn-xs btn-danger" title="Delete" onclick="getDeleteRoute(' . $url_delete . ')"> <i class="fas fa-trash"></i></a>';
                    return $edit;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('admin.hospital.index');
    }

    public function add(){
        $categories = CategoriesModel::where("status","Active")->get();
        return view('admin.hospital.add',compact('categories'));
    }
    public function save(Request $request)
        {
           // dd($request->all());
            $msg = [
                'category_id.required' => 'Select category',
                'name.required' => 'Enter Name',
                'phone.required' => 'Enter Phone',
                'address.required' => 'Enter Address',
                'description.required' => 'Enter Description'
            ];
            $this->validate($request, [
                'category_id' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'description' => 'required',
            ], $msg);
            $request['slug'] = Str::slug($request->name);
            $data = $request->except('_token','image');
            $data['image']=null;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName =  rand(111111,99999) . '_' .time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/hospital');
                $image->move($destinationPath,$imageName);
                $data['image']=$imageName;
            }
            HospitalsModel::create($data);
            return redirect()->back()->with('success','Hospital Added Successfully !!!');
        }
        public function edit($id){
            $info = HospitalsModel::where('id', $id)->first();
            $categories = CategoriesModel::where("status","Active")->get();
            $sub_categories = SubcategoriesModel::where("category_id",$info->category_id)->where("status","Active")->get();
            return view('admin.hospital.edit', compact('info','categories','sub_categories'));
        }

    public function update(Request $request,$id)
    {
        $msg = [
            'category_id.required' => 'Select category',
            'name.required' => 'Enter Name',
            'phone.required' => 'Enter Phone',
            'address.required' => 'Enter Address',
            'description.required' => 'Enter Description',
        ];
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
        ], $msg);
        $request['slug'] = Str::slug($request->name);
        $data = $request->except('_token','image');
        $data['image'] = HospitalsModel::where('id',$id)->value('image');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName =  rand(111111,99999) . '_' .time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/hospital');
            $file = $destinationPath.'/'.$data['image'];
            if(file_exists($file)){
                unlink($file);
            }
            $image->move($destinationPath,$imageName);
            $data['image']=$imageName;
        }
        HospitalsModel:: where('id',$id)->update($data);
        return redirect()->back()->with('success', 'Hospital Updated Successfully !!!');
    }

    public function status(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        if($status=='Active'){
            HospitalsModel::where('id',$id)->update([
                'status' => 'Inactive',
            ]);
            $st='Inactive';
            $html='<a class="btn btn-xs btn-danger" href="javascript:status('.$id.','.$st.');" title="Status">
                                             <i class="fas fa-ban"></i>
                                         </a>';
            return json_encode(array('id'=>$id,'html'=>$html));
        }
        else{
            HospitalsModel::where('id',$id)->update([
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
        $image = HospitalsModel::where('id',$id)->value('image');
        $destinationPath = public_path('uploads/hospital');
        $file = $destinationPath.'/'.$image;
        if(file_exists($file)){
            unlink($file);
        }
        HospitalsModel:: where('id', $id)->delete();
        return redirect()->back()->with('success', 'Hospital Deleted Successfully !!!');
    }
    public function gallery($id){
        $images = HospitalsGallery::where('hospital_id',$id)->get();
        return view('admin.hospital.gallery',compact('images','id'));
     }
     public function gallerySave(Request $request,$id)
     {
         $msg = [
             'image.required' => 'Select image',
         ];
         $this->validate($request, [
             'image' => 'required',
         ], $msg);
         $data['hospital_id']=$id;
         $image = $request->file('image');
         $imageName =  rand(111111,99999) . '_' .time().'.'.$image->getClientOriginalExtension();
         $destinationPath = public_path('uploads/hospital');
         $image->move($destinationPath,$imageName);
         $data['image']=$imageName;
         HospitalsGallery::create($data);
         return redirect()->back()->with('success', 'Gallery image uploaded.');
     }
     public function galleryDelete($id)
     {
         $image = HospitalsGallery::where('id',$id)->value('image');
         $destinationPath = public_path('uploads/hospital');
         $file = $destinationPath.'/'.$image;
         if(file_exists($file)){
             unlink($file);
         }
         HospitalsGallery:: where('id', $id)->delete();
         return redirect()->back()->with('success', 'Image Deleted Successfully !!!');
     }
}
