@extends('frontend.layouts.master')
@section('title','GALLERY')
@push('css')
<style>
    .hover-item {
        background-color: #FFF;
    }

    .hover-item:hover {
        box-sizing: border-box;
        border: 1px solid;
        padding: 1px;
        box-shadow: 1px 1px;
    }
</style>
@endpush
@section('content')
    <section>
        <div class="container mt-40 mb-40">
            <h3 class="text-center" style="color:red; font-size: 23px;">{{ $classwiseSub->class->bn_name }}</h3>
            <div class="row mt-50">
                @foreach ($classwiseSub->subjects as $subjectId => $sub)
                    <a class="single-class col-lg-2 col-md-3 col-sm-4 mb-30" style="min-height: 150px; display: inline-grid;" href="{{ url('class-video?class_id='. $classwiseSub->class->id.'&subject_id='. $subjectId) }}">
                        <div class="hover-item" style="background: #ffffff; box-shadow: 1px 1px 11px #262121; border: 1px solid #302a2a42; min-height: 100px; border-radius: 3px;">
                            <i class="fa fa-book" aria-hidden="true" style="text-align: center;  color: #2e91af;font-size: 25px;padding-top: 10px; margin-left: 40%;"></i>
                            <h4 class="pt-20" style="text-align: center; font-size: 21px;color: #17181a; ">{{ $sub }}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@push('js')
@endpush
