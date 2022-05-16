@extends('admin.layouts.adminlayout')
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Sliders</a></li>
            <li class="active">Manage Sliders</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Manage Sliders</h1>
        <!-- end page-header -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            {{--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>--}}
                        </div>
                        <h4 class="panel-title">Sliders</h4>
                    </div>
                    <div style="padding: 10px;"><a  class="btn btn-success  fancybox fancybox.iframe"  style="float: right;margin-bottom: 10px" href="{{route('addSlider')}}"><i class="fa fa-plus"></i> Add</a></div>
                    <div class="panel-body">
                        <table id="Datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td> <img src="{{url('/')}}/uploads/slider_images/{{$row->image}}" height="100px" width="100px"/></td>
                                    <td>{{$row->status}}</td>
                                    <td>
                                        <a href="{{route('editSlider',$row->id)}}" class="fancybox fancybox.iframe"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="{{route('deleteSlider',$row->id)}}"> <button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    @push('scripts')
        <script type="text/javascript">
            $('#Datatable').DataTable();
            function init() {
                $(document).find('.fancybox').fancybox({
                    helpers: {title: null},
                    width: 800,
                    height: 600,
                    fitToView : true,
                    autoSize : true,
                    padding: 0,
                    openEffect: 'elastic',
                    afterClose : function() {
                        var oTable = $('#Datatable').dataTable();
                        oTable.fnDraw(false);
                    }
                });
            }
        </script>
    @endpush
@endsection