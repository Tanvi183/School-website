@extends('frontend.layouts.master')
@section('title','GALLERY')
@push('css')
<style>
    .hover-item {
        background-color: #FFF;
        overflow: hidden;
    }

    .hover-item:hover {
        box-sizing: border-box;
        border: 1px solid;
        padding-top: 1px;
        box-shadow: 1px 1px;
        overflow: hidden;
    }
</style>
@endpush
@section('content')
    <section>
        <div class="container mt-50 mb-60">
            <h3 class="text-center" style="color:red; font-size: 23px;">সকল ক্লাস</h3>
            <div class="row mt-50" style="margin-left: 10%;">
                @foreach ($allClass as $class)
                    <a href="{{ URL::to('class-wise-subject', $class->id) }}" class="single-class col-lg-2 col-md-3 col-sm-4 mb-20" style="min-height: 150px; display: inline-grid;">
                        <div class="hover-item" style="background: #ffffff; box-shadow: 1px 1px 11px #262121; border: 1px solid #302a2a42; min-height: 100px; border-radius: 3px;">
                            <i class="fa fa-book" aria-hidden="true" style="text-align: center;  color: #2e91af;font-size: 30px;padding-top: 20px; margin-left: 40%;"></i>
                            <h4 class="pt-20" style="text-align: center; font-size: 25px;color: #17181a;">{{ $class->bn_name }}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@push('js')
@endpush
