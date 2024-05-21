@extends('frontend.layouts.master')
@section('title','Video Class')
@push('css')
@endpush
@section('content')

    <section>
        <div class="container mt-40 mb-40">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10" style="float:left;overflow: hidden;">
                    <h3 class="text-center" style="color:red; font-size: 23px;"">{{ $classVideo->class->bn_name }} / {{ $classVideo->subject->subject_name_bn }}</h3>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2" style="margin-top: 4px;overflow: hidden;">
                     <a href="{{ URL::to('class-wise-subject', $classVideo->class->id) }}" class="btn btn-success btn-sm"> <i class="fa fa-backward"></i>  Back</a>
                </div>
            </div>
            <div class="row mt-50">
                @foreach ($classVideo->allData as $video)
                    @if(substr($video->link,0,7)=='<iframe')
                    <div class="single-class col-lg-2 col-md-3 col-sm-4 mb-30" style="min-height: 150px; display: inline-grid;">
                        <div class="hover-item" style="background: #ffffff; box-shadow: 1px 1px 11px #262121; border: 1px solid #302a2a42; min-height: 100px; border-radius: 3px;">
                            <p class="text-center mt-10">{{$video->chapter}} </p>
                            <p class="text-center">{{$video->topic}} </p>
                            <button style="margin-left: 25%;margin-top: 5%;" type="button" class="btn btn-danger btn-xs" onclick="youtubePlay({{$video->id}})" data-toggle="modal" data-target="#myModal-{{$video->id}}">
                                <i class="fa fa-youtube-play"></i> Play
                            </button>
                        </div>
                    </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal-{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 style="float: left;" class="modal-title" id="myModalLabel">{{$video->chapter}}</h4>
                                <button style="font-size: 30px;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <style>
                                    iframe{width:100%;}
                                </style>
                                {!! $video->link !!}
                            </div>

                        </div>
                    </div>
                </div>
                @else
                 @continue
                @endif
                @endforeach
            </div>
        </div>
    </section>

    @push('js')
        <script>
            $('.modal').on('hidden.bs.modal', function () {
                    var id = $(this).attr('id');
                    var src = $('#'+id+' iframe')[0].src;
                    src = src.replace("autoplay=1", "autoplay=0");
                    $('#'+id+' iframe')[0].src = src
                })
            function youtubePlay(id){
                    var src = $('#myModal-'+id+' iframe')[0].src;
                    if(src.indexOf("autoplay=")<0){
                        if(src.indexOf("?") < 0 ){
                            $('#myModal-'+id+' iframe')[0].src+= "?autoplay=1";
                        }else{
                            $('#myModal-'+id+' iframe')[0].src+= "&autoplay=1";
                        }
                    }else{
                        src = src.replace("autoplay=0", "autoplay=1");
                        $('#myModal-'+id+' iframe')[0].src = src
                    }
                }
        </script>
    @endpush

@endsection

