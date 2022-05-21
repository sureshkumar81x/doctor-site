@extends('admin.layouts.adminlayout')
@section('title',"Admin : Manage Content")
@section('content')
    <!-- begin #content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Content</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin::dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Manage Content</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Content List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="Datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Sl No</th>
                                <th>key</th>
                                <th>Image</th>
                                <th>page</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('scripts')
        <script type="text/javascript">
            $('#Datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('admin::manageContent',$page)}}',
                columns: [
                    {data: 'id', name: 'id', 'visible': false},
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
                    {data: 'key', name: 'key'},
                    {data: 'image', name: 'image'},
                    {data: 'page', name: 'page'},
                    {data: 'action', name: 'action', orderable: false, searchable: true}
                ],
                "order": [[0,'asc']],
                "pageLength": 10,
                "fnDrawCallback": function () {
                    init();
                }

            });
            function init() {
                $(document).find('.fancybox').fancybox({
                    helpers: {title: null},
                    width: 550,
                    height: 600,
                    fitToView: true,
                    autoSize: true,
                    padding: 0,
                    openEffect: 'elastic',
                    afterClose: function () {
                        var oTable = $('#Datatable').dataTable();
                        oTable.fnDraw(false);
                    }
                });
            }
        </script>
    @endpush
@endsection