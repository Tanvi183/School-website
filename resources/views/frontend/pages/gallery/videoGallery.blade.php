@extends('frontend.layouts.master')
@section('title','GALLERY')
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
        .flip-card {
            height: 250px;
            margin-bottom: 20px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);
        }
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
        <div class="teacher-area col-md-12 col-sm-12">
            <div class="container">
                <div class="row">
                    @foreach($gallery as $data)
                        <div class="flip-card col-md-3">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    @if($data->image != null)
                                        <a href="{{ URL::to('gallery-video-play',$data->id) }}"><img src="{{ $data->image }}" style="height: 100%; width: 100%;margin: 0 auto;display: block; border-radius: 6px;" alt="Photo">
                                            <i style="overflow: hidden; position: absolute; bottom: 40%; font-size: 50px; text-align: center; left: 40%; color: rgb(230, 40, 40);" class="fa fa-youtube-play"></i>
                                        </a>
                                    @else
                                        <a href="#"><img src="{{ asset('default/profile.png') }}" style="height: 100%; width: 100%; margin: 0 auto;display: block;" alt="Photo"></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Photo gallery End -->
    </div>
  </section>

@endsection

@push('js')
@endpush
