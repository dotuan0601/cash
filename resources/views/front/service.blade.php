@extends('front.layout.template')

@section('main-content')
    <div class="breadcrumb-zio breadcurmb-service">
        <div class="container">
            <div class="row breadcrumb-text">
                <!-- <div class="col-md-6">
                    <h1>Dịch vụ</h1>
                    <div class="hr my-4"></div>
                    <p>Zio Booking là hệ thống đặt lịch salon trực truyến với chuỗi 10 salon tóc trên khắp Hà Nội. Chúng tôi cam kết mang đến những dịch vụ làm tóc tốt nhất hiện nay</p>
                </div>
                <div class="col-md-6"></div> -->
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row service-content">
            <div class="col-md-4">
                <ul class="nav nav-tabs tabs-left">
                    @foreach($services as $service)
                    <li><a id="nav{{$service->id}}" href="#tab{{$service->id}}" data-toggle="tab" @if($service == $services->first()) class="active" @endif><i class="{{$service->icon}}"></i>{{$service->name}}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="col-md-8">
                <!-- Tab panes -->
                <div class="tab-content">
                    @foreach($services as $service)
                    <div class="tab-pane  @if($service == $services->first()) active @endif "  id="tab{{$service->id}}">
                        <p><strong> {{$service->summary}} </strong></p>
                       {!! $service->description !!}
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document ).ready(function() {
            $(".js-scroll-trigger").removeClass('active');
            $("#aservice").addClass('active');
            if(window.location.hash) {
                var hash = window.location.hash.substring(1);
               $("#nav"+hash).click();
            } else {
                // Fragment doesn't exist
            }
        });
    </script>
@endsection