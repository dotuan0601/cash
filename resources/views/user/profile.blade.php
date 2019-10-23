@extends('admin_template')

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Chỉnh sửa tài khoản</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post"
                      action="{{ Route::currentRouteName() === 'admin.user.edit' ? route('admin.user.update', ['id' => $user->id]) : route('admin.user.profile')}}">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="userName" class="col-md-2 control-label">Tài khoản</label>

                            <div class="col-md-10">
                                <input class="form-control" id="userName" name="name" placeholder="User Name"
                                       type="text" value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="userEmail" class="col-md-2 control-label">Email</label>

                            <div class="col-md-10">
                                <input class="form-control" id="userEmail" name="email" placeholder="Email"
                                       type="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <div class="checkbox">
                                    <label>
                                        <input id="userChangePassword" type="checkbox">
                                        Đổi mật khẩu
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group hidden">
                            <label for="userPassword" class="col-md-2 control-label">Mật khẩu</label>

                            <div class="col-md-10">
                                <input class="form-control" id="userPassword" name="password"
                                       placeholder="Leave empty if unchanged" type="password">
                            </div>
                        </div>
                        <div class="form-group hidden">
                            <label for="userPasswordAgain" class="col-md-2 control-label">Nhập lại mật khẩu</label>

                            <div class="col-md-10">
                                <input class="form-control" id="userPasswordAgain" name="password_confirmation"
                                       placeholder="Password Confirmation" type="password">
                            </div>
                        </div>
                    {{--    <div class="form-group">
                            <label for="userRole" class="col-md-2 control-label">Role</label>

                            <div class="col-md-10">
                                    <textarea class="plain-text form-control" id="userRole" name="role"
                                              placeholder="Separated by new line" required>{{ $user->role }}</textarea>
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


@section('script')
    @parent
    <script>
        $(function () {
            $('#userChangePassword').change(function () {
                if (this.checked) {
                    $('#userPassword').parents('.form-group').removeClass('hidden');
                    $('#userPasswordAgain').parents('.form-group').removeClass('hidden');
                } else {
                    $('#userPassword').val('');
                    $('#userPassword').parents('.form-group').addClass('hidden');

                    $('#userPasswordAgain').val('');
                    $('#userPasswordAgain').parents('.form-group').addClass('hidden');
                }
            });
        });
    </script>

@endsection