@extends('admin_template')



@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Chỉnh sửa banner </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" method="post" action="{{ route('admin.banner.update',['id'=>$banner->id]) }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="feather_image" class="col-md-2 control-label">Ảnh </label>


                            <div class="col-md-5">
                                <input class="form-control col-md-10 " id="feather_image" name="feather_image"
                                       placeholder="featherImage"
                                       type="text" value="{{$banner->feather_image}}">

                            </div>
                            <div class="col-md-2">
                                <a id="lfm" data-input="feather_image" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Chọn ảnh
                                </a>
                            </div>
                            <div class="col-md-3">
                                <img id="holder" src="{{$banner->feather_image}}"  style="margin-top:15px;max-height:100px;">
                            </div>
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Tên</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="name" placeholder="Tên"
                                       type="text" required value="{{$banner->name }}">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Mô tả</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="summary" placeholder="Tên"
                                       type="text" required value="{{$banner->summary }}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Liên Kết</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="link" placeholder="Tên"
                                       type="text" required value="{{$banner->link }}">
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
