@extends('frontend.layouts.master')
@section('title','NOTICE ')
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
            width: 105px;
        }
    </style>
@endpush
@section('content')
    <section>
        <div class="container">
            <!-- Banner Area Start -->
            <div class="section-title mb-10">
                <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase text-theme-colored title-border m-0">
                        {{ $singleNotice->title }}</h4>
                </div>
                </div>
            </div>
            <!-- Banner Area End -->

            <!-- Single notice Start -->
            <div class="teacher-area pb-105" style="padding-top:20px">
                <div class="container">

                    <section class="full-content" style="    padding-bottom: 100px;">
                        <p style="color: black;font-size: 14px;margin-bottom: 1rem;    text-align: center;display:block">

                        <?php echo $singleNotice->description ?>
                        </p>
                        @if($singleNotice->pdf != '')
                        <div class="image-section text-center">
                        <a href="https://hnp.ntechbangla.com/{{$singleNotice->pdf}}" target="_blank" class="btn btn-primary" > <i class="fa fa-eye"></i> View Notice </a>
                        <a href="https://hnp.ntechbangla.com/{{$singleNotice->pdf}}" download class="btn btn-success" > <i class="fa fa-download"></i> Download</a>
                        </div>
                        @endif
                    </section>
                </div>
            </div>
            <!-- Single notice End -->
        </div>
    </section>
@endsection

@push('js')
@endpush
