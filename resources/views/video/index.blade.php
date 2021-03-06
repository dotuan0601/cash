@extends('admin_template')

@section('htmlheader_title')
    Danh sách Video
@endsection

@section('contentheader_title')
    Danh sách Video
@endsection

@section('contentheader_description')
   Quản lý Video
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách tin bài</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="index-box" class="table table-striped">
                        <thead>
                        <tr>


                            <th>Tiêu đề</th>
                            <th>Mô Tả</th>
                            <th>IFrame</th>
                            <th>Độ ưu tiên</th>
                            <th>Tác động</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($posts as $post)
                            <tr>

                                <td>{{$post->title}}</td>
                                <td>{{$post->summary}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->priority}}</td>
                                <td>
                                
                                    <a href="{{ route('admin.video.edit', ['id' => $post->id]) }}"
                                       class="btn btn-flat btn-info">
                                        <i class="fa fa-search"></i> Sửa
                                    </a>


                                    <form class="inline" method="POST"  onsubmit="return confirm('Bạn có chắc chắn muốn xóa nội dung này không?');"
                                          action="{{ route('admin.video.destroy', ['id' => $post->id]) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <button class="btn btn-flat btn-danger" type="submit">
                                            <i class="fa fa-trash"></i> Xóa
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
               {{-- <div class="box-footer clearfix no-border">
                    <a href="{{ route('admin.post.create') }}" class="btn btn-flat btn-primary">Thêm bài viết mới</a>
                </div>--}}
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('script')
    @parent


    <script>

        $(document).ready(function() {
            // Setup - add a text input to each footer cell

            // DataTable
            var table = $('#index-box').DataTable();

            // Apply the search

            $('#index-box').parent('div').addClass('table-responsive')
        } );
    </script>
@endsection


