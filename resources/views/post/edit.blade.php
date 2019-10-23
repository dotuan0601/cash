@extends('admin_template')

@section('htmlheader_title')
    Chỉnh sửa tin bài
@endsection

@section('contentheader_title')
    Chỉnh sửa tin bài
@endsection

@section('contentheader_description')
    Quản lý tin bài
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Chỉnh sửa tin bài</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" method="post" action="{{ route('admin.post.update',['id'=>$post->id]) }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="feather_image" class="col-md-2 control-label">Ảnh đại diện</label>


                            <div class="col-md-5">
                                <input class="form-control col-md-10 " id="feather_image" name="feather_image"
                                       placeholder="featherImage" value="{{$post->feather_image}}"
                                       type="text">

                            </div>
                            <div class="col-md-2">
                                <a id="lfm" data-input="feather_image" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Chọn ảnh
                                </a>
                            </div>
                            <div class="col-md-3">
                                <img id="holder" src="{{$post->feather_image}}" style="margin-top:15px;max-height:100px;">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-md-2 control-label">Tiêu đề</label>

                            <div class="col-md-5">
                                <input class="form-control" id="newsTitle" name="title" placeholder="title"
                                       value="{{$post->title}}" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="summary" class="col-md-2 control-label">Tóm tắt</label>

                            <div class="col-md-10">
                                <textarea id="summary" name="summary" class="form-control" required>{!! $post->summary!!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-md-2 control-label">Nội dung</label>

                            <div class="col-md-10">
                                <textarea id="description" name="description" class="form-control" required>{!! $post->description !!}</textarea>
                            </div>
                        </div>

                     {{--   <div class="form-group">
                            <label for="categoryParent" class="col-md-2 control-label">Chuyên mục</label>
                            <div class="col-md-5">
                                <select class="form-control" id="categoryID" name="category_id">

                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                                @if($post->category_id == $category->id) selected @endif>
                                            /{{$category->path}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
--}}
                        <!-- /.box-body -->
                        <div class="form-group">
                            <label for="title" class="col-md-2 control-label">Độ Ưu Tiên</label>

                            <div class="col-md-5">
                                <input class="form-control" id="postTitle" name="priority" placeholder="Độ Ưu Tiên"
                                       type="number" required value="{{$post->priority}}">
                            </div>
                        </div>
                        <div class="box-footer clearfix no-border">
                            <button type="submit" class="btn btn-flat btn-primary">Cập nhật</button>
                        </div>
                        <!-- /.box-footer -->
                    </div>
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

        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('description', options);
        $(".form-horizontal").submit( function(e) {

            var messageLength = CKEDITOR.instances['description'].getData().replace(/<[^>]*>/gi, '').length;

            if( !messageLength ) {

                alert( 'Please enter a message for description' );

                e.preventDefault();

            }

        });
        CKEDITOR.on('instanceReady', function (ev) {
            ev.editor.dataProcessor.htmlFilter.addRules( {
                elements : {
                    img: function( el ) {
                        // Add bootstrap "img-responsive" class to each inserted image
                        el.addClass('img-responsive');
                        delete el.attributes.style;
                        // Remove inline "height" and "width" styles and
                        // replace them with their attribute counterparts.
                        // This ensures that the 'img-responsive' class works
                        var style = el.attributes.style;

                        if (style) {
                            // Get the width from the style.
                            var match = /(?:^|\s)width\s*:\s*(\d+)px/i.exec(style),
                                width = match && match[1];

                            // Get the height from the style.
                            match = /(?:^|\s)height\s*:\s*(\d+)px/i.exec(style);
                            var height = match && match[1];

                            // Replace the width
                            if (width) {
                                el.attributes.style = el.attributes.style.replace(/(?:^|\s)width\s*:\s*(\d+)px;?/i, '');
                                el.attributes.width = width;
                            }

                            // Replace the height
                            if (height) {
                                el.attributes.style = el.attributes.style.replace(/(?:^|\s)height\s*:\s*(\d+)px;?/i, '');
                                el.attributes.height = height;
                            }
                        }

                        // Remove the style tag if it is empty
                        if (!el.attributes.style)
                            delete el.attributes.style;
                    }
                }
            });
        });

    </script>
@endsection