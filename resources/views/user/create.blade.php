@extends('admin_template')

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới tài khoản</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{ route('admin.user.store') }}">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="userName" class="col-md-2 control-label">Tài khoản</label>

                            <div class="col-md-10">
                                <input class="form-control" id="username" name="name" placeholder="UserName"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="userEmail" class="col-md-2 control-label">Email</label>

                            <div class="col-md-10">
                                <input class="form-control" id="userEmail" name="email" placeholder="Email"
                                       type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="col-md-2 control-label">Mật khẩu</label>

                            <div class="col-md-10">
                                <input class="form-control" id="userPassword" name="password" placeholder="Password"
                                       type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="userPasswordAgain" class="col-md-2 control-label">Nhập lại mật khẩu</label>

                            <div class="col-md-10">
                                <input class="form-control" id="userPasswordAgain" name="password_confirmation"
                                       placeholder="Password Confirmation"
                                       type="password">
                            </div>
                        </div>
                       {{-- <div class="form-group">
                            <label for="categoryParent" class="col-md-2 control-label">Quyền</label>
                            <div class="col-md-10">
                                <textarea class="plain-text form-control" id="userRole" name="role"
                                          placeholder="Separated by new line" required></textarea>
                            </div>
                        </div>--}}

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix no-border">
                        <button type="submit" class="btn btn-flat btn-primary">Cập nhật</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection