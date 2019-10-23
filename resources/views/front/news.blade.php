@extends('front.layout.template')

@section('main-content')
    <div class="breadcrumb-zio breadcurmb-news">
        <div class="container">
            <div class="row breadcrumb-text">
                <!--
                <div class="col-md-6">
                    <h1 class="text-yellow">Ưu đãi giờ vàng</h1>
                    <div class="hr my-4"></div>
                    <p class="text-white">GIẢM GIÁ 10% CHO KHÁCH HÀNG ĐẶT LỊCH VÀO KHUNG GIỜ VÀNG !!!!</p>
                </div>
                <div class="col-md-6"></div>
            -->
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row blog-content">
            <div class="col-md-8">
                <h2 class="blog-title">Blog tóc đẹp</h2>
                <div class="hr my-4"></div>
                <div class="blog">
                    @foreach($posts as $post)
                    <div class="blog-item">
                        <a href="{{route('news_detail',['slug'=>$post->slug])}}">
                            <img src="{{$post->feather_image}}" />
                            <h1>{{$post->title}}</h1>
                            <p>{{$post->summary}}</p>
                            <p class="blog-time"><i class="fa fa-calendar text-yellow"></i> {{$post->created_at->format('d/m/Y')}} <i class="fa fa-eye text-yellow"></i> 8184</p>
                        </a>
                    </div>
                    @endforeach

            {{--    <ul class="pagination pagi-1">
                    <li><a href="#" class="prev">&laquo</a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li> <a href="#">2</a></li>
                    <li> <a href="#">...</a></li>
                    <li> <a href="#">9</a></li>
                    <li> <a href="#">10</a></li>
                    <li><a href="#" class="next">&raquo;</a></li>
                </ul>--}}
                        @include('front.layout.pagination', ['paginator' => $posts])


              </div>
            </div>
            <div class="col-md-4">
                <h2 class="blog-title">Xem nhiều nhất</h2>
                <div class="hr my-4"></div>
                @foreach($favoritePosts as $favPost)
                <div class="zio-blog-title">
                    <a href="{{route('news_detail',['slug'=>$favPost->slug])}}">
                        <img src="{{$favPost->feather_image}}" class="img-responsive" />
                        <h1>{{$favPost->title}}</h1>
                        <p>{{$favPost->summary}}.</p>
                    </a>
                </div>
                @endforeach
             {{--   <div class="zio-blog-title">
                    <a href="#">
                        <img src="{{asset('front_components/img/news-02.jpg')}}" class="img-responsive" />
                        <h1>#22: Cách phối màu tóc tự làm</h1>
                        <p>Stylist Minh Thành đã thành công trong việc tạo những kiểu dáng độc đáo cho những bạn nữ....</p>
                    </a>
                </div>--}}
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script>
        $(document ).ready(function() {
            $(".js-scroll-trigger").removeClass('active');
            $("#ablog").addClass('active');
        });
    </script>
@endsection