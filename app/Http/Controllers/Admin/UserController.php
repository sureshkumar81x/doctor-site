<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            $data = User::where('user_type','User')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('email', function ($data) {
                    return $data->email;
                })
                ->addColumn('action', function ($data) {
                    $url_update = route('admin::editUser', ['id' => $data->id]);
                    $url_delete = "'".route('admin::deleteUser', ['id' => $data->id])."'";
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
                    $edit .= '<a href="' . $url_update . '" class="btn btn-xs btn-primary fancybox fancybox.iframe" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a data-toggle="modal" data-target="#confirmDelete"  class="btn btn-xs btn-danger" title="Delete" onclick="getDeleteRoute(' . $url_delete . ')"> <i class="fas fa-trash"></i></a>';
                    return $edit;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('admin.user.index');
    }

    public function add(){
        return view('admin.user.add');
    }
    public function save(Request $request)
        {
           // dd($request->all());
            $msg = [
                'name.required' => 'Enter Your  Name',
                'email.required' => 'Enter Your Email',
            ];
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
            ], $msg);
            $name = $request->get('name');
            $email = $request->get('email');
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt('123456'),
                'user_type' =>'User',
                'status' => 'Active'
            ]);
            return redirect()->back()->with('success','User Added Successfully !!!');
        }
        public function edit($id){
            $userById = User::where('id', $id)->first();
            return view('admin.user.edit', compact('userById'));
        }

    public function update(Request $request,$id)
    {
        $msg = [
            'name.required' => 'Enter Your Name',
            'email.required' => 'Enter Your Email',
        ];
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ], $msg);
        $name = $request->get('name');
        $email = $request->get('email');
            User:: where('id',$id)->update([
                'name' => $name,
                'email' => $email,
            ]);

            return redirect()->back()->with('success', 'User Updated Successfully !!!');
    }

    public function status(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        if($status=='Active'){
            User::where('id',$id)->update([
                'status' => 'Inactive',
            ]);
            $st='Inactive';
            $html='<a class="btn btn-xs btn-danger" href="javascript:status('.$id.','.$st.');" title="Status">
                                             <i class="fas fa-ban"></i>
                                         </a>';
            return json_encode(array('id'=>$id,'html'=>$html));
        }
        else{
            User::where('id',$id)->update([
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
        User:: where('id', $id)->delete();
        return redirect()->back()->with('success', 'User Deleted Successfully !!!');
    }



}
