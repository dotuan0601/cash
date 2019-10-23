@extends('admin_template')


@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Salon Mới</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" method="post" action="{{ route('admin.salon.store') }}">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="box-body">

                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Tên</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="name" placeholder="Tên"
                                       type="text" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Mô tả</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="summary" placeholder="Tên"
                                       type="text" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Địa điểm</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="location" placeholder="Đia điểm"
                                       type="text" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Tổng số chỗ</label>

                            <div class="col-md-5">
                                <input class="form-control"  name="max_slot" placeholder="Tổng số chỗ"
                                       type="number" required value="1">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Số điện thoại</label>

                            <div class="col-md-5">
                                <input class="form-control"  name="phone" placeholder="Số điện thoại"
                                       type="text" >
                            </div>

                        </div>

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
    <script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '{{route('unisharp.lfm.show')}}?type=Images',
            filebrowserImageUploadUrl: '{{route('unisharp.lfm.upload')}}?type=Images&_token=',
            filebrowserBrowseUrl: '{{route('unisharp.lfm.show')}}?type=Files',
            filebrowserUploadUrl: '{{route('unisharp.lfm.show')}}?type=Files&_token='
        };
    </script>
    <script>
        var domain = "";
        $('#lfm').filemanager('image', {prefix: domain});

        /*   $('#lfm').filemanager('image');*/
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        /*   CKEDITOR.replace('description', options);
           CKEDITOR.replace('summary', options);*/

    </script>

@endsection
