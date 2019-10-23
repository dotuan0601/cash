@extends('admin_template')

@section('htmlheader_title')
    Chỉnh sửa Video
@endsection

@section('contentheader_title')
    Chỉnh sửa Video
@endsection

@section('contentheader_description')
    Quản lý Video
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

                <form class="form-horizontal" method="post" action="{{ route('admin.video.update',['id'=>$post->id]) }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="box-body">

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
                            <label for="description" class="col-md-2 control-label">IFrame</label>

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

@endsection