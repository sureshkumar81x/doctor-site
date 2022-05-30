@extends('admin.layouts.fancybox')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Sub Category Update</h3>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br/>
                            @endif
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <strong>{{Session::get('success')}}</strong>
                                </div>
                            @endif
                            <form class="form-horizontal" action="{{route('admin::updateSubCategory',$info->id)}}"
                                  method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="name"
                                                   value="{{$info->name}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">SubCategory Previous Image</label>
                                        <div class="col-md-6">
                                            <img src="{{url('/')}}/uploads/category/{{$info->image}}" width="100px" height="100px" alt="no image" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">SubCategory Image</label>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control" name="image"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group">
                                        <div class="col-md-12" style="text-align: center">
                                            <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end panel -->
                    </div>
                    <!-- end col-6 -->
                </div>
            </div>
        </section>
    </div>
@endsection