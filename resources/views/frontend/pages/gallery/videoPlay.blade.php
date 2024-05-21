@extends('frontend.layouts.master')
@section('title','video-gallery')
@push('css')
    <style>
        .title-border{
            font-size: 20px;
            font-weight: 700;
            font-family: kalpurush ,'Open Sans', sans-serif, 'Playfair Display', serif !important;
            color: #00a3c8 !important;
            padding-top: 45px;
            position: relative;
            left: 1%;
        }
        .title-border::before{
            background-color: #00A3C8;
            bottom: -2px;
            content: "";
            height: 2px;
            position: absolute;
            width: 65px;
        }
        #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}
    </style>
@endpush
@section('content')
  <!-- Gallery Grid 3 -->
  <section>
    <div class="container">
        <div class="section-title mb-30">
            <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase text-theme-colored title-border m-0">Video Gallery</h4>
            </div>
            </div>
        </div>
        <!-- Photo gallery Start -->
        <div class="row">
            <div class="col-md-8" style="margin-bottom: 10%;">
                <iframe style="width: 100%; height:120%;" src="{{ $data->url }}" allowfullscreen autoplay="1"></iframe>
            </div>
            <div class="col-md-4">
                @foreach($sideVideo as $item)
                            <div class="col-lg-12 col-md-12">
                                <div class="single-event mb-35">
                                    {{-- comment pourson --}}
                                    <a style="display: block;" href="{{ URL::to('gallery-video-play',$item->id) }}">
                                        <div class="event-content text-start" style="background: #fff; padding: 8px;">
                                            <div class="col-md-5" style="float: left">
                                                <img src="{{ asset($item->image) }}" style="height: 90px;width: 110px;" alt="{{ $item->title }}">
                                                <i id="#myImg" style="color: rgb(243, 10, 10);position: absolute;right: 29%;font-size: 30px;margin-top: 25px;" class="fa fa-youtube-play"></i>
                                            </div>
                                            <div class="col-md-7" style="float: right">
                                                <p>{{ $item->title }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                @endforeach
            </div>
        </div>
        <!-- Photo gallery End -->
        <div class="col-lg-12 col-md-12 col-sm-12 mb-50">
            <div class="container">
                <div class="row">
                    @foreach($bottomVideo as $singleItem)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            @if($singleItem->image != null)
                                <a href="{{ URL::to('gallery-video-play',$singleItem->id) }}"><img src="{{ asset($singleItem->image) }}" style="height: 100%; width: 100%;margin: 0 auto;display: block; border-radius: 6px;" alt="Photo">
                                    <i style="overflow: hidden; position: absolute; margin-top: -10%;margin-left: 8%; font-size: 40px; color: rgb(243, 10, 10);" class="fa fa-youtube-play"></i>
                                </a>
                            @else
                                <a href="#"><img src="{{ asset('default/profile.png') }}" style="height: 100%; width: 100%; margin: 0 auto;display: block;" alt="Photo"></a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </section>

@endsection

@push('js')
@endpush


{{-- @foreach($gallery as $data)
<div class="flip-card">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            @if($data->image != null)
                <a href="{{ URL::to('gallery-video-play',$data->id) }}"><img src="{{ $data->image }}" style="height: 100%; width: 100%;margin: 0 auto;display: block;" alt="Photo">
                    <i style="overflow: hidden; position: absolute; bottom: 40%; font-size: 50px; text-align: center; left: 40%; color: white;" class="fa fa-play-circle"></i>
                </a>
            @else
                <a href="#"><img src="{{ asset('default/profile.png') }}" style="height: 100%; width: 100%; margin: 0 auto;display: block;" alt="Photo"></a>
            @endif
        </div>
    </div>
</div>
@endforeach --}}

{{-- <iframe src="{{ $playVideo->url }}" title="{{ $playVideo->title }}"></iframe> --}}
                        {{-- <div class="notice-right-wrapper mb-25 pb-25" style="padding-top: 70px;">
                            <!-- <h3>TAKE A VIDEO TOUR</h3> -->
                            <div class="notice-video" style="background:url({{asset('frontend/images/school/harinarayanpur.png')}});">
                                <div class="video-icon video-hover">

                                </div>
                            </div>
                        </div> --}}
