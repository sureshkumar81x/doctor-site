<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CategoriesModel;
use App\SubcategoriesModel;
use DataTables;

class CategoriesController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            $data = CategoriesModel::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('action', function ($data) {
                    $url_update = route('admin::editCategory', ['id' => $data->id]);
                    $url_subcategory = route('admin::subCategory', ['id' => $data->id]);
                    $url_delete = "'".route('admin::deleteCategory', ['id' => $data->id])."'";
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
                    '&nbsp;<a href="' . $url_subcategory . '" class="btn btn-xs btn-primary" title="Sub Categories">Sub Categories</a>'.
                                        '&nbsp;<a data-toggle="modal" data-target="#confirmDelete"  class="btn btn-xs btn-danger" title="Delete" onclick="getDeleteRoute(' . $url_delete . ')"> <i class="fas fa-trash"></i></a>';
                    return $edit;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('admin.category.index');
    }

    public function add(){
        return view('admin.category.add');
    }
    public function save(Request $request)
        {
           // dd($request->all());
            $msg = [
                'name.required' => 'Enter Category  Name',
            ];
            $this->validate($request, [
                'name' => 'required',
            ], $msg);
            $name = $request->get('name');
            CategoriesModel::create([
                'name' => $name,
                'status' => 'Active'
            ]);
            return redirect()->back()->with('success','Category Added Successfully !!!');
        }
        public function edit($id){
            $info = CategoriesModel::where('id', $id)->first();
            return view('admin.category.edit', compact('info'));
        }

    public function update(Request $request,$id)
    {
        $msg = [
            'name.required' => 'Enter Category Name',
        ];
        $this->validate($request, [
            'name' => 'required',
        ], $msg);
        $name = $request->get('name');
        CategoriesModel:: where('id',$id)->update([
            'name' => $name
        ]);

        return redirect()->back()->with('success', 'Category Updated Successfully !!!');
    }

    public function status(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        if($status=='Active'){
            CategoriesModel::where('id',$id)->update([
                'status' => 'Inactive',
            ]);
            $st='Inactive';
            $html='<a class="btn btn-xs btn-danger" href="javascript:status('.$id.','.$st.');" title="Status">
                                             <i class="fas fa-ban"></i>
                                         </a>';
            return json_encode(array('id'=>$id,'html'=>$html));
        }
        else{
            CategoriesModel::where('id',$id)->update([
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
        CategoriesModel:: where('id', $id)->delete();
        return redirect()->back()->with('success', 'Categories Deleted Successfully !!!');
    }

    public function subCategory($category_id)
    {
        if(request()->ajax()) {
            $data = SubcategoriesModel::where('category_id', $category_id)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('action', function ($data) {
                    $url_update = route('admin::editSubCategory', ['id' => $data->id]);
                    $url_delete = "'".route('admin::deleteSubCategory', ['id' => $data->id])."'";
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
        return view('admin.sub_category.index',compact('category_id'));
    }

    public function addSubCategory($category_id){
        return view('admin.sub_category.add',compact('category_id'));
    }
    public function saveSubCategory(Request $request)
        {
           // dd($request->all());
            $msg = [
                'name.required' => 'Enter Subcategory  Name',
            ];
            $this->validate($request, [
                'name' => 'required',
            ], $msg);
            $name = $request->get('name');
            $category_id = $request->get('category_id');
            SubcategoriesModel::create([
                'name' => $name,
                'category_id' => $category_id,
                'status' => 'Active'
            ]);
            return redirect()->back()->with('success','Subcategory Added Successfully !!!');
        }
        public function editSubCategory($id){
            $info = SubcategoriesModel::where('id', $id)->first();
            return view('admin.sub_category.edit', compact('info'));
        }

    public function updateSubCategory(Request $request,$id)
    {
        $msg = [
            'name.required' => 'Enter Category Name',
        ];
        $this->validate($request, [
            'name' => 'required',
        ], $msg);
        $name = $request->get('name');
        SubcategoriesModel:: where('id',$id)->update([
            'name' => $name
        ]);

        return redirect()->back()->with('success', 'Subcategory Updated Successfully !!!');
    }

    public function statusSubCategory(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        if($status=='Active'){
            SubcategoriesModel::where('id',$id)->update([
                'status' => 'Inactive',
            ]);
            $st='Inactive';
            $html='<a class="btn btn-xs btn-danger" href="javascript:status('.$id.','.$st.');" title="Status">
                                             <i class="fas fa-ban"></i>
                                         </a>';
            return json_encode(array('id'=>$id,'html'=>$html));
        }
        else{
            SubcategoriesModel::where('id',$id)->update([
                'status' => 'Active',
            ]);
            $st='Active';
            $html='<a class="btn btn-xs btn-info" href="javascript:status('.$id.','.$st.');" title="Status">
                                             <i class="fas fa-check"></i>
                                         </a>';
            return json_encode(array('id'=>$id,'html'=>$html));
        }

    }

    public function deleteSubCategory($id)
    {
        SubcategoriesModel:: where('id', $id)->delete();
        return redirect()->back()->with('success', 'Subcategories Deleted Successfully !!!');
    }
    public function getSubcategories(Request $request){
       $subcategories = SubcategoriesModel::where('id', $request->category_id)->where('status','Active')->get();
       $html = "<option value=''>Select subcategory</option>";
       foreach($subcategories as $row){
           $html .= "<option value='$row->id'>$row->name</option>";
       }
       return json_encode(['status'=>'success','html'=>$html]);
    }
}
