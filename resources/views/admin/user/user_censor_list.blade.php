@extends('admin.layouts.app_dashboard')
@section('title', 'Tài khoản')

@section('content')

    <div class="content">
        <div class="container-fluid">
            @if(session('mess_add'))
                <script>
                    setTimeout(function () {
                        $('#success_cate').slideUp(5000)
                    });
                </script>

                <div class="alert alert-success" id="success_cate">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('mess_add') }}</span>
                </div>
            @endif
            @if(session('mess_update'))
                <script>
                    setTimeout(function () {
                        $('#success_cate').slideUp(5000)
                    });
                </script>

                <div class="alert alert-success" id="success_cate">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('mess_update') }}</span>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body col-md-12 text-center">
                            <a href="{{ route('user_list') }}" class="btn btn-success col-md-3" style="color: #ffffff">
                                <i class="material-icons">perm_identity</i> Danh sách tài khoản
                            </a>

                            <a href="{{ route('admin_list') }}" class="btn btn-success col-md-3" style="color: #ffffff">
                                <i class="material-icons">perm_identity</i> Danh sách admin
                            </a>

                            <a href="{{ route('censor_list') }}" class="btn btn-success col-md-3" style="color: #ffffff">
                                <i class="material-icons">perm_identity</i> Danh sánch kiểm dịch viên
                            </a>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">perm_identity</i>
                            </div>
                            <h4 class="card-title">Danh sách tài khoản</h4>

                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6"></div>
                            </div>
                            <a href="{{ route('user_add') }}"
                               class="float-right pull-right btn btn-success">Thêm mới tài khoản
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="toolbar">
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
        </div>
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatables').DataTable({

                // "lengthMenu": true,
                pageLength: 0,
                lengthMenu: [5, 10, 20, 50],
                order: [[0, 'desc']],
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/dashboard/user/allCensor',

                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {
                        data: 'image', name: 'image',
                        render: function (data, type, full, meta) {
                            return "<img src=\"/image_upload/user/" + data + "\" width=\"50\" style=\"border-radius: 8px;\" />";
                        }
                    },
                    // {data: 'image', name: 'image'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, className: "text-right"}
                ]
            });
        });

    </script>
@endsection
