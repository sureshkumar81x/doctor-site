<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\CategoriesModel;
use App\DiagnosticCenterModel;
use App\DiagnosticGalleryModel;
use App\SubcategoriesModel;

class DiagnosticController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            $data = DiagnosticCenterModel::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $url_update = route('admin::editDiagnostic', ['id' => $data->id]);
                    $url_gallery = route('admin::diagnosticGallery', ['id' => $data->id]);
                    $url_delete = "'".route('admin::deleteDiagnostic', ['id' => $data->id])."'";
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
        return view('admin.diagnostic.index');
    }

    public function add(){
        $categories = CategoriesModel::where("status","Active")->get();
        return view('admin.diagnostic.add',compact('categories'));
    }
    public function save(Request $request)
        {
           // dd($request->all());
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
            $data = $request->except('_token','image');
            $data['image']=null;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName =  rand(111111,99999) . '_' .time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/diagnostic');
                $image->move($destinationPath,$imageName);
                $data['image']=$imageName;
            }
            DiagnosticCenterModel::create($data);
            return redirect()->back()->with('success','Diagnostic Added Successfully !!!');
        }
        public function edit($id){
            $info = DiagnosticCenterModel::where('id', $id)->first();
            $categories = CategoriesModel::where("status","Active")->get();
            $sub_categories = SubcategoriesModel::where("category_id",$info->category_id)->where("status","Active")->get();
            return view('admin.diagnostic.edit', compact('info','categories','sub_categories'));
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
        $data = $request->except('_token','image');
        $data['image'] = DiagnosticCenterModel::where('id',$id)->value('image');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName =  rand(111111,99999) . '_' .time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/diagnostic');
            $file = $destinationPath.'/'.$data['image'];
            if(file_exists($file)){
                unlink($file);
            }
            $image->move($destinationPath,$imageName);
            $data['image']=$imageName;
        }
        DiagnosticCenterModel:: where('id',$id)->update($data);
        return redirect()->back()->with('success', 'Diagnostic Updated Successfully !!!');
    }

    public function status(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        if($status=='Active'){
            DiagnosticCenterModel::where('id',$id)->update([
                'status' => 'Inactive',
            ]);
            $st='Inactive';
            $html='<a class="btn btn-xs btn-danger" href="javascript:status('.$id.','.$st.');" title="Status">
                                             <i class="fas fa-ban"></i>
                                         </a>';
            return json_encode(array('id'=>$id,'html'=>$html));
        }
        else{
            DiagnosticCenterModel::where('id',$id)->update([
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
        $image = DiagnosticCenterModel::where('id',$id)->value('image');
        $destinationPath = public_path('uploads/diagnostic');
        $file = $destinationPath.'/'.$image;
        if(file_exists($file)){
            unlink($file);
        }
        DiagnosticCenterModel:: where('id', $id)->delete();
        return redirect()->back()->with('success', 'Categories Deleted Successfully !!!');
    }
    public function gallery($id){
        $images = DiagnosticGalleryModel::where('diagnostic_id',$id)->get();
        return view('admin.diagnostic.gallery',compact('images','id'));
     }
     public function gallerySave(Request $request,$id)
     {
         $msg = [
             'image.required' => 'Select image',
         ];
         $this->validate($request, [
             'image' => 'required',
         ], $msg);
         $data['diagnostic_id']=$id;
         $image = $request->file('image');
         $imageName =  rand(111111,99999) . '_' .time().'.'.$image->getClientOriginalExtension();
         $destinationPath = public_path('uploads/diagnostic');
         $image->move($destinationPath,$imageName);
         $data['image']=$imageName;
         DiagnosticGalleryModel::create($data);
         return redirect()->back()->with('success', 'Gallery image uploaded.');
     }
     public function galleryDelete($id)
     {
         $image = DiagnosticGalleryModel::where('id',$id)->value('image');
         $destinationPath = public_path('uploads/diagnostic');
         $file = $destinationPath.'/'.$image;
         if(file_exists($file)){
             unlink($file);
         }
         DiagnosticGalleryModel:: where('id', $id)->delete();
         return redirect()->back()->with('success', 'Image Deleted Successfully !!!');
     }
}
