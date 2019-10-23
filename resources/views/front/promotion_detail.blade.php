@extends('front.layout.template')
@section('meta-data')
    <meta property="og:url" content="{{route('promotion_detail',['slug'=>$post->slug])}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{$post->title}}"/>
    <meta property="og:description" content="{{$post->summary}}"/>
    <meta property="og:image" content="{{$post->feather_image}}"/>
    <meta property="fb:app_id"          content="353754261682969" />



@endsection
@section('main-content')
    <div class="breadcrumb-zio breadcurmb-khuyenmai">
        <div class="container">
            <div class="row breadcrumb-text">
               <!--  <div class="col-md-10">
                    <h1><a href="" class="text-yellow">Video: Uốn tạo kiểu Godlen Masteryt</a></h1>
                    <div class="hr my-4"></div>
                    <p class="text-white">GIẢM GIÁ 10% CHO KHÁCH HÀNG ĐẶT LỊCH VÀO KHUNG GIỜ VÀNG !!!!</p>
                    <a class="btn btn-border-yel" href="{{route('booking')}}">Đặt lịch ngay</a>
                </div>
                <div class="col-md-2"></div> -->
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row blog-content">
            <div class="col-md-8 blog-content-detail">
                <h1>{{$post->title}}</h1>
{{--
                <p class="blog-time"><i class="fa fa-calendar text-yellow"></i> Áp dụng đến hết ngày 6/9/2018</p>
--}}
               {!! $post->description !!}
                <div class="ckps-author-like-share">
                    <div class="text-left mb-3">
                        Chia sẻ:
                        <div class="fb-share-button"
                             data-href="{{route('promotion_detail',['slug'=>$post->slug])}}"
                             data-layout="button_count">
                        </div>
                        <!-- Icon-only Branded Twitter button -->
                     {{--   <a class="share-btn share-btn-branded share-btn-twitter"
                           href=""
                           title="Share on Twitter">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">Twitter</span>
                        </a>

                        <!-- Icon-only Branded Facebook button -->
                        <a class="share-btn share-btn-branded share-btn-facebook"
                           href=""
                           title="Share on Facebook">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">Facebook</span>
                        </a>

                        <!-- Icon-only Branded Google+ button -->
                        <a class="share-btn share-btn-branded share-btn-googleplus"
                           href=""
                           title="Share on Google+">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">Google+</span>
                        </a>

                        <!-- Icon-only Branded Reddit button -->
                        <a class="share-btn share-btn-branded share-btn-reddit"
                           href=""
                           title="Share on Reddit+">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">Reddit</span>
                        </a>

                        <!-- Icon-only Branded Tumblr button -->
                        <a class="share-btn share-btn-branded share-btn-tumblr"
                           href=""
                           title="Share on Tumblr">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">Tumblr</span>
                        </a>

                        <!-- Icon-only Branded LinkedIn button -->
                        <a class="share-btn share-btn-branded share-btn-linkedin"
                           href=""
                           title="Share on LinkedIn">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">LinkedIn</span>
                        </a>

                        <!-- Icon-only Branded Pinterest button -->
                        <a class="share-btn share-btn-branded share-btn-pinterest"
                           href=""
                           title="Share on Pinterest">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">Pinterest</span>
                        </a>

                        <!-- Icon-only Branded StumbleUpon button -->
                        <a class="share-btn share-btn-branded share-btn-stumbleupon"
                           href=""
                           title="Share on StumbleUpon">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">StumbleUpon</span>
                        </a>

                        <!-- Icon-only Branded Delicious button -->
                        <a class="share-btn share-btn-branded share-btn-delicious"
                           href=""
                           title="Share on Delicious">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">Delicious</span>
                        </a>

                        <!-- Icon-only Email button -->
                        <a class="share-btn share-btn-email"
                           href=""
                           title="Share via Email">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">Email</span>
                        </a>

                        <!-- Icon-only More/share button -->
                        <a class="share-btn share-btn-more"
                           href=""
                           title="More share options">
                            <span class="share-btn-icon"></span>
                            <span class="share-btn-text-sr">More</span>
                        </a>--}}
                    </div>
                </div>

                <h2 class="blog-title-1">Bình luận</h2>

                    <div class="fb-comments" data-href="{{route('promotion_detail',['slug'=>$post->slug])}}" data-numposts="5"></div>



                <h2 class="blog-title-1 mb-3">Bài viết được quan tâm</h2>



                <div class="owl-carousel owl-carousel-blog-more owl-theme">
                    @foreach($favoritePosts as $favorPost)
                        <div class="carousel-item">
                            <a href="{{route('promotion_detail',['slug'=>$favorPost->slug])}}">
                                <div class="zio-blog-title">
                                    <a href="{{route('news_detail',['slug'=>$favorPost->slug])}}">
                                        <img src="{{$favorPost->feather_image}}" class="img-responsive" />
                                        <h1>{{$favorPost->title}}</h1>
                                        <p>{{$favorPost->summary}}</p>
                                    </a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-md-4">
                <h2 class="blog-title">Tin liên quan</h2>
                <div class="hr my-4"></div>
                @foreach($relatedPosts as $relatedPost)
                    <div class="zio-blog-title">
                        <a href="{{route('news_detail',['slug'=> $relatedPost->slug])}}">
                            <img src="{{$relatedPost->feather_image}}" class="img-responsive" />
                            <h1>{{$relatedPost->title}}</h1>
                            <p>{{$relatedPost->summary}}</p>
                        </a>
                    </div>
                 @endforeach

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