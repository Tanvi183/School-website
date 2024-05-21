<?php $info=DB::table('primary_infos')->first(); ?>
@extends('frontend.layouts.master')
@section('title','CONTACT US ')
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
                        <h4 class="text-uppercase text-theme-colored title-border m-0">
                        Contact Us </h4>
                    </div>
                    </div>
                </div>
                <!-- Contact Start -->
                <div class="contact-area pt-20 pb-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <div class="contact-contents text-center">
                                    <div class="single-contact mb-65">
                                        <div class="contact-icon">
                                            <img src="{{ asset('frontend/images') }}/contact/contact1.png" alt="contact">
                                        </div>
                                        <div class="contact-add">
                                            <h3>address</h3>
                                            <p>Maijdee Court, Noakhali Sadar<br> Noakhali</p>
                                        </div>
                                    </div>
                                    <div class="single-contact mb-65">
                                        <div class="contact-icon">
                                            <img src="{{ asset('frontend/images') }}/contact/contact2.png" alt="contact">
                                        </div>
                                        <div class="contact-add">
                                            <h3>address</h3>
                                            <p>{{ $info->mobile_no }}</p>
                                        </div>
                                    </div>
                                    <div class="single-contact">
                                        <div class="contact-icon">
                                            <img src="{{ asset('frontend/images') }}/contact/contact3.png" alt="contact">
                                        </div>
                                        <div class="contact-add">
                                            <h3>address</h3>
                                            <p>{{ $info->email }}</p>
                                            <p>www.hnpschoolnoa.edu.bd</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="reply-area">
                                    <h3>অভিযোগ ও পরামর্শ</h3>
                                    <form id="contact-form" action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Name</p>
                                                <input type="text" name="con_name">
                                            </div>
                                            <div class="col-md-12">
                                                <p>Email</p>
                                                <input type="text" name="con_email">
                                            </div>
                                            <div class="col-md-12">
                                                <p>Subject</p>
                                                <input type="text" name="con_subject">
                                                <p>Massage</p>
                                                <textarea name="con_message" cols="15" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <button class="reply-btn" type="submit"><span>send message</span></button>
                                        <p class="form-message"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->
                <div class="map-area">
                    <!-- google-map-area start -->
                    <div class="google-map-area">
                        <!--  Map Section -->
                        <div id="contacts" class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.411722437819!2d91.0946581142793!3d22.86124432807657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754a4f8a7da8bcf%3A0xebd3a653a6068498!2sHarinarayanpur%20Union%20High%20School!5e0!3m2!1sen!2sbd!4v1638360287838!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@push('js')
@endpush
