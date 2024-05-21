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
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
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
                <h4 class="text-uppercase text-theme-colored title-border m-0">
                Photo Gallery</h4>
            </div>
            </div>
        </div>
        <!-- Photo gallery Start -->
        <div class="teacher-area col-md-12 col-sm-12 mb-50">
            <div class="container">
                <div class="row">
                    @foreach($gallery as $data)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            {{-- <img id="myImg" src="img_snow.jpg" alt="Snow" style="width:100%;max-width:300px"> --}}
                            @if($data->image != null)
                                <a href="#"><img id="myImg" src="{{ $data->image }}" style="height: 100%; width: 100%;margin: 0 auto;display: block; width:100%;max-width:300px" alt="Photo"></a>
                            @else
                                <a href="#"><img id="myImg" src="{{ asset('default/profile.png') }}" style="height: 100%; width: 100%; margin: 0 auto;display: block; width:100%;max-width:300px" alt="Photo"></a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Photo gallery End -->
    </div>
  </section>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="{{ $data->caption }}"></div>
    </div>

@endsection

@push('js')
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
    </script>
@endpush
