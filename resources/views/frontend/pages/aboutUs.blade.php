<?php $info=DB::table('primary_infos')->first(); ?>
@extends('frontend.layouts.master')
@section('title','ABOUT US ')
@push('css')
    <style>
        .title-border{
            font-size: 20px;
            font-weight: 700;
            font-family: kalpurush ,'Open Sans', sans-serif, 'Playfair Display', serif !important;
            color: #00a3c8 !important;
            padding-top: 45px;
            position: relative;
            left: 6%;
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
                        <h4 class="text-uppercase text-theme-colored title-border m-0">
                        About Us </h4>
                    </div>
                    </div>
                </div>
                <!-- About Start -->
                <div class="about-area mb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <article class="post clearfix mb-0">
                                    <div class="about-content" style="width: 90%;margin: 0 auto; font-family: kalpurush ,'Open Sans', sans-serif, 'Playfair Display', serif !important;">
                                        <h2 style="font-family: kalpurush ,'Open Sans', sans-serif, 'Playfair Display', serif !important; text-align: center;">স্বাগতম <span>হরিনারায়নপুর ইউনিয়ন উচ্চ বিদ্যালয়</span></h2>
                                        <p style="">{!! $info->long_description ?? '' !!}</p>
                                        <p style="">{!! $info->long_description_bangla ?? '' !!}</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->
            </div>
        </section>
@endsection

@push('js')
@endpush


