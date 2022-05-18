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
                                <h3 class="card-title">Edit Diagnostic</h3>
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
                            <form class="form-horizontal" action="{{route('admin::updateDiagnostic',$info->id)}}" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Category</label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="category_id" id="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                  <option value="{{$category->id}}" @if($category->id==$info->category_id) selected @endif>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Sub Category</label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="subcategory_id" id="subcategory_id">
                                                <option value="">Select Subategory</option>
                                                @foreach($sub_categories as $category)
                                                  <option value="{{$category->id}}" @if($category->id==$info->subcategory_id) selected @endif>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Diagnostic Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="name" value="{{$info->name}}"
                                                   placeholder="Enter Diagnostic Name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Diagnostic Phone</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="phone" value="{{$info->phone}}"
                                                   placeholder="Enter Diagnostic Phone"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Diagnostic Address</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="address" value="{{$info->address}}"
                                                   placeholder="Enter Diagnostic Address"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" name="description"
                                                   placeholder="Enter Description">{{$info->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Diagnostic Previous Image</label>
                                        <div class="col-md-6">
                                            <img src="{{url('/')}}/uploads/diagnostic/{{$info->image}}" width="100px" height="100px" alt="no image" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Diagnostic Image</label>
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
    @push('scripts')
      <script>
          $("#category_id").on("change", function(){
                $.ajax({
                    type: "post",
                    url: '{{route('admin::getSubcategories')}}',
                    data: {
                        _token: '<?php echo csrf_token();?>',
                        category_id : $(this).val(),
                    },
                    success: function (data) {
                        var resp = JSON.parse(data);
                        $('#subcategory_id').html(resp.html);
                    }

                });
          });
          
      </script>
    @endpush
@endsection