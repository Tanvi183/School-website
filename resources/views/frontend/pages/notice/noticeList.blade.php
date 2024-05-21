@extends('frontend.layouts.master')
@section('title','NOTICE LIST ')
@push('css')
    <style>
        .title-border{
            font-size: 20px;
            font-weight: 700;
            font-family: kalpurush ,'Open Sans', sans-serif, 'Playfair Display', serif !important;
            color: #00a3c8 !important;
            padding-top: 45px;
            position: relative;
            left: 2%;
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
                All Notice </h4>
            </div>
            </div>
        </div>
        <div class="teacher-area  pb-105" style="padding-top:20px;">
            <!-- <h3 class="text-center">All Notice</h3> -->

            <div class="container" style="padding-left: 15px;">
                <div class="row">
                    <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                        <div class="col-sm-12 col-lg-12 col-xl-12 maxw100flex-992">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="my_dashboard_review mb40">
                                        <div class="property_table">
                                            <div class="table-responsive mt0">
                                                <table class="table">
                                                    <thead class="thead-light table-striped table-bordered">
                                                        <tr style="color: #000;    font-weight: bold;">
                                                            <th style="width: 5%">Sl</th>
                                                            <th style="width: 50%">Notice</th>
                                                            <th style="width: 20%">Publish Date</th>
                                                            <th style="width: 10%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($allNotice as $data)
                                                        <tr style="color: #000">
                                                            <td>{{$loop->index+1}}</td>
                                                            <td><a style="color:#000000;" href="{{URL::to('notice-show',$data->id)}}">{{ $data->title }}</a> </td>
                                                            <td>{{ $data->date }}</td>
                                                            <td><span><a style="color: #fff;background: #bf1d1d;padding: 3px;font-weight: bold;" href="{{URL::to('notice-show',$data->id)}}">Read More</a></span></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection

@push('js')
@endpush
