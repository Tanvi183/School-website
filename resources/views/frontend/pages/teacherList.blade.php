@extends('frontend.layouts.master')
@section('title','TEACHER LIST ')
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
</style>
@endpush
@section('content')
    <section>
        <div class="container">
            <div class="section-title mb-30">
                <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase text-theme-colored title-border m-0">our teachers </h4>
                </div>
                </div>
            </div>
            <!-- Teacher Start -->
            <div class="teacher-area pt-50 pb-90">
                <div class="container">
                    <div class="row">
                        @foreach($teachers as $teacher)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-teacher mb-45">
                                <div class="single-teacher-img">
                                    @if($teacher->image != null)
                                        <a href="#"><img src="{{ 'https://hnp.ntechbangla.com/'.$teacher->image }}" style="height: 200px;width: 170px;margin: 0 auto;display: block;" alt="teacher"></a>
                                    @else
                                        <a href="#"><img src="{{ asset('default/profile.png') }}" style="height: 200px;width: 170px;margin: 0 auto;display: block;" alt="teacher"></a>
                                    @endif
                                </div>
                                <div class="single-teacher-content text-center">
                                    <h2><a href="#">{{ $teacher->name }}</a></h2>
                                    <h4>{{ $teacher->designation }}</h4>
                                    <!-- <ul>
                                        <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a href="teacher.html#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                        <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Teacher End -->
        </div>
    </section>
@endsection

@push('js')
@endpush
