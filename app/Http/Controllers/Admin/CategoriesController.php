<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CategoriesModel;
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
                    // '<a href="' . $url_subcategory . '" class="btn btn-xs btn-primary" title="Sub Categories">Sub Categories</a>'.
                                        '<a data-toggle="modal" data-target="#confirmDelete"  class="btn btn-xs btn-danger" title="Delete" onclick="getDeleteRoute(' . $url_delete . ')"> <i class="fas fa-trash"></i></a>';
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
                'name.required' => 'Enter Your  Name',
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
}
