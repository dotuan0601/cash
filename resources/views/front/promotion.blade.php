@extends('front.layout.template')

@section('main-content')
    <div class="breadcrumb-zio breadcurmb-khuyenmai">
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
                <h2 class="blog-title">ưu đãi - giảm giá</h2>
                <div class="hr my-4"></div>
                <div class="blog">
                    @foreach($posts as $post)
                    <div class="blog-item">
                        <a href="{{route('promotion_detail',['slug'=>$post->slug])}}">
                            <img src="{{$post->feather_image}}" />
                            <h1>{{$post->title}}</h1>
                            <p>{{$post->summary}}</p>
{{--
                            <p class="blog-time"><i class="fa fa-calendar text-yellow"></i> Áp dụng đến hết ngày 6/9/2018</p>
--}}
                        </a>
                    </div>
                    @endforeach

                </div>
                @include('front.layout.pagination', ['paginator' => $posts])

            </div>
            <div class="col-md-4">
                <h2 class="blog-title">ưu đãi tích điểm</h2>
                <div class="hr my-4"></div>
                @foreach($favoritePosts as $favPost)
                    <div class="zio-blog-title">
                        <a href="{{route('promotion_detail',['slug'=>$favPost->slug])}}">
                            <img src="{{$favPost->feather_image}}" class="img-responsive" />
                            <h1>{{$favPost->title}}</h1>
                            <p>{{$favPost->summary}}.</p>
                        </a>
                    </div>
                @endforeach
          {{--      <div class="zio-blog-title">
                    <a href="#">
                        <img src="{{asset('front_components/img/news-01.jpg')}}" class="img-responsive" />
                        <h1>#23: Giải pháp cho tóc dài</h1>
                        <p>Stylist Minh Thành đã thành công trong việc tạo những kiểu dáng độc đáo cho những bạn nữ....</p>
                    </a>
                </div>
                <div class="zio-blog-title">
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
            $("#apromotion").addClass('active');
        });
    </script>
@endsection