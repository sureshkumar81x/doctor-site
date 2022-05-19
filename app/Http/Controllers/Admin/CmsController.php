<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PageContentModel;
use DataTables;

class CmsController extends Controller
{
    public function index($page)
    {
        if(request()->ajax()) {
            $data = PageContentModel::where("page",$page)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $url_update = route('admin::editContent', ['id' => $data->id]);
                    $edit = '<a href="' . $url_update . '" class="btn btn-xs btn-primary fancybox fancybox.iframe" title="Edit"><i class="fas fa-edit"></i></a>';
                    return $edit;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('admin.page_content.index',compact('page'));
    }
    public function edit($id){
        $info = PageContentModel::where('id', $id)->first();
        return view('admin.page_content.edit', compact('info'));
    }

    public function update(Request $request,$id)
    {
        $info = PageContentModel::where('id',$id)->first();
        $msg = [
            'title.required' => 'Enter title.',
            'description.required' => 'Enter Description.',
            'content.required' => 'Enter Contents',
            'image.required' => 'Select Image.',
        ];
        $validation = [];
        if(!empty($info->title)){
            $validation = array_merge($validation,[
                'title' => 'required' 
            ]);
        }
        if(!empty($info->description)){
            $validation = array_merge($validation,[
                'description' => 'required' 
            ]);
        }
        if(!empty($info->content)){
            $validation = array_merge($validation,[
                'content' => 'required' 
            ]);
        }
        if(!empty($info->image)){
            $validation = array_merge($validation,[
                'image' => 'required' 
            ]);
        }
        $this->validate($request, $validation, $msg);
        $data = $request->except('_token','image');
        $data['image'] = PageContentModel::where('id',$id)->value('image');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName =  rand(111111,99999) . '_' .time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/content');
            $file = $destinationPath.'/'.$data['image'];
            if(file_exists($file)){
                unlink($file);
            }
            $image->move($destinationPath,$imageName);
            $data['image']=$imageName;
        }
        PageContentModel:: where('id',$id)->update($data);
        return redirect()->back()->with('success', 'Content Updated Successfully !!!');
    }
}
