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
                                <h3 class="card-title">Diagnostic Gallery</h3>
                            </div>
                            <div class="row">
                                @foreach ($images as $row)
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <img src="{{url('/')}}/uploads/diagnostic/{{$row->image}}" height="100px" width="100px" alt="white sample">
                                        <a href="{{route('admin::diagnosticGalleryDelete',$row->id)}}"  class="btn btn-xs btn-danger" title="Delete"> <i class="fas fa-trash"></i></a>
                                    </div>
                                @endforeach
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
                            <form class="form-horizontal" action="{{route('admin::diagnosticGallerySave',$id)}}" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gallery Image</label>
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