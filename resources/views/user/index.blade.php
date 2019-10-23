@extends('admin_template')

@section('htmlheader_title')
    Danh sách tài khoản
@endsection

@section('contentheader_title')
   Danh sách tài khoản
@endsection

@section('contentheader_description')
    Quản lý tài khoản
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Quản lý tài khoản</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="index-box" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tài khoản</th>
                            <th>Email</th>

                            <th>Ngày tạo</th>
                            <th>Ngày sửa</th>
                            <th>Tác động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>

                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td>

                                    <a href="{{ route('admin.user.edit', ['id' => $user->id]) }}"
                                       class="btn btn-flat btn-warning">
                                        <i class="fa fa-edit"></i> Sửa
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->

                <div class="box-footer clearfix no-border">
                    <a href="{{ route('admin.user.create') }}" class="btn btn-flat btn-primary">Thêm mới tài khoản</a>
                </div>

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('script')
    @parent


    <script>
        $(function () {
            $('#index-box').DataTable();
            $('#index-box').parent('div').addClass('table-responsive')
        });
    </script>
@endsection


