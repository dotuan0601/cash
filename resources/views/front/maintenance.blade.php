@extends('front.layout.template')
@section('main-content')
    <section class="ckps-underConstruction masthead-da text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 underConstruction-pages text-center">
                    <img src="{{asset('front_components/img/tools.svg')}}" width="150" style="margin-top: 40%" />
                    <h1 class="text-white">WEBSITE<br/>
                        UNDER CONSTRUCTION</h1>
                    <p class="mb-5">Tính năng này hiện đang được phát triển và sẽ được cập nhật trong thời gian sớm nhất</p>
                    <p ><a rel="canonical" href="{{route('home')}}"  class="text-white"><i class="fa fa-home"></i><br/>Quay trở về trang chủ</a></p>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
@endsection