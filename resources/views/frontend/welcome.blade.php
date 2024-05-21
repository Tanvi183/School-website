@extends('frontend.layouts.master')
@section('title','HOME ')
@push('css')
    <style>
        .corner_content_heading_edit{
            background: #b1acac;
            padding: 5px;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            margin: 0px -1.8% 0px -1.8%;
            border-radius: 4px;
        }
        .corner_content_heading_edit h2{
            font-size: 22px;
            padding-top: 7px;
            margin-left: 15px;
        }
        .corner-section-edit::before{
            background: #606060 none repeat scroll 0 0;
            content: "";
            height: 1px;
            position: absolute;
            width: 25%;
            margin-top: 90px;
            margin-left: -10.5%;
        }

    </style>
@endpush
@section('content')
@include('frontend.partials.slider')
<!-- About Start -->
<div class="about-area" style="padding-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-9" style="background: #f7f3f3">
                <div class="about-content">
                    <div class="corner_content_heading_edit">
                        <h2>স্বাগতম <span>হরিনারায়নপুর ইউনিয়ন উচ্চ বিদ্যালয়</span></h2>
                    </div>
                    <p style="text-align: justify; display: block;"> <?php echo $info->long_description?> </p>
                </div>
                <div class="event-area two text-center" style="padding-top: 8%;">
                    <div class="section-title corner-section-edit">
                        <img src="{{ asset('frontend/images') }}/icon/section.png" alt="section-title">
                        <h2>আমাদের সকল কর্নার</h2>
                    </div>

                    <div class="row">
                        @foreach($allPanelBox as $box)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-event mb-35">
                                {{-- comment pourson --}}
                                <a style="display: block;" href="{{ $box->url }}">
                                    <div class="event-content text-start" style="background: #fff; padding: 8px;">
                                        <h4 style="font-family: kalpurush ,'Open Sans', sans-serif, 'Playfair Display', serif !important;"><a href="{{ $box->url }}">{{ $box->name }}</a></h4>
                                        <div class="col-md-5" style="float: left">
                                            <img src="{{ asset($box->image) }}" style="height: 90px;width: 110px;" alt="event">
                                        </div>
                                        <div class="col-md-7" style="float: right">
                                            @if(count($box->subPanel)>0)
                                            <ul>
                                                @foreach($box->subPanel as $subPanel)
                                                    <li style="width: 100%;"><i style="color: red;font-size: 15px;font-weight: bold;" class="fa fa-angle-double-right"></i>{{ $subPanel->name }}</li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- <div class="event-img">
                <a href="{{ $box->url }}"><img src="{{ asset($box->image) }}"  style="height: 130px;" alt="event"></a>
            </div>
            <div class="event-content text-start">
                <h4><a  style="color: red;" href="{{ $box->url }}">{{ $box->name }}</a></h4>
                @if(count($box->subPanel)>0)
                <ul>
                    @foreach($box->subPanel as $subPanel)
                        <li style="width: 100%;"><i style="color: red;font-size: 15px;font-weight: bold;" class="fa fa-angle-double-right"></i>{{ $subPanel->name }}</li>
                    @endforeach
                </ul>
                @endif
            </div> --}}

            <div class="col-md-3">
                @foreach($allMessages as $message)
                <div class="card" style="margin-top: 5px;">
                    <h3 class="btn btn-success" style="width: 100%;">{{ $message->designation_bn }}</h3>
                    <img style="margin: 0 auto;display: block;height: 135px;width: 150px;" src="{{ asset($message->image) }}" alt="about">
                    <div class="card-body">
                        <h5 style="text-align: center;padding: 10px;padding-bottom: 0;">{{ $message->name }}</h5>
                        <p style="text-align: center;font-size: 12px;">{{ $message->designation_bn }}</p>
                        <p style="text-align: center;font-size: 12px;">{{ $message->title_bn }}</p>
                        <p style="text-align: center;font-size: 12px;">{{ $message->short_message_bn }}</p>
                    </div>
                </div>
                @endforeach

                <div class="link_content" style="margin-top: 5px;">
                    <div class="card bg-light" style="padding-bottom: 15px;">
                        <div class="notice_content_heading btn btn-success">
                            <span>গুরুর্তপূর্ন লিঙ্ক সমূহ</span>
                        </div>
                        <div class="card-body" style="padding-bottom: 0;">
                            <ul>
                                @foreach($importantLinks as $links )
                                    <li><i class="fa fa-angle-double-right"></i><a href="{{ $links->link }}" target="_blank"> {{ $links->name }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About End -->

<!-- Event Area Start -->
{{-- <div class="event-area two text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="section-title">
                    <img src="{{ asset('frontend/images') }}/icon/section.png" alt="section-title">
                    <h2>আমাদের সকল কর্নার</h2>
                </div>
                <div class="row">
                    @foreach($allPanelBox as $box)
                    <div class="col-lg-6">
                        <div class="single-event mb-35">
                            <div class="event-img">
                                <a href="{{ $box->url }}"><img src="{{ asset($box->image) }}"  style="height: 130px;" alt="event"></a>
                            </div>
                            <div class="event-content text-start">
                                <h4><a  style="color: red;" href="{{ $box->url }}">{{ $box->name }}</a></h4>
                                @if(count($box->subPanel)>0)
                                <ul>
                                    @foreach($box->subPanel as $subPanel)
                                        <li style="width: 100%;"><i style="color: red;font-size: 15px;font-weight: bold;" class="fa fa-angle-double-right"></i>{{ $subPanel->name }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <div class="link_content">
                    <div class="card bg-light" style="padding-bottom: 15px;">
                        <div class="notice_content_heading btn btn-success">
                            <span>গুরুর্তপূর্ন লিঙ্ক সমূহ</span>
                        </div>
                        <div class="card-body" style="padding-bottom: 0;">
                            <ul>
                                @foreach($importantLinks as $links )
                                    <li><i class="fa fa-angle-double-right"></i><a href="{{ $links->link }}" target="_blank"> {{ $links->name }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Notice Start -->
<section class="notice-area two" style="padding-top:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="notice-right-wrapper mb-25 pb-25" style="padding-top: 70px;">
                    <!-- <h3>TAKE A VIDEO TOUR</h3> -->
                    <div class="notice-video" style="background:url({{asset('frontend/images/school/harinarayanpur.png')}});">
                        <div class="video-icon video-hover">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CpmH047iZ4A">
                                <i class="zmdi zmdi-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="notice-left-wrapper">
                    <h3>School Map</h3>
                    <div class="notice-left" style="padding: 0; background-color: none">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.411722437819!2d91.0946581142793!3d22.86124432807657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754a4f8a7da8bcf%3A0xebd3a653a6068498!2sHarinarayanpur%20Union%20High%20School!5e0!3m2!1sen!2sbd!4v1638268487049!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Notice End -->
@endsection

@push('js')

<script type="text/javascript">
   var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel)
</script>
@endpush
