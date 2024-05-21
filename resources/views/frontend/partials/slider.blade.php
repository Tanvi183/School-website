<section style="margin-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="myCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @foreach($allSliders as $key => $slider)
                    <div class="carousel-item {{$key == 0?'active':''}} " data-bs-interval="10000">
                      <img style="height: 410px;" src="{{ asset($slider->image) }}" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: wheat;font-size: 30px;font-weight: bolder;">হরিনারায়নপুর ইউনিয়ন উচ্চ বিদ্যালয়</h1>
                        <h3 style="color: antiquewhite;font-size: 16px;">মাইজদী কোর্ট সদর নোয়াখালী</h3>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <i class="fa fa-angle-left"></i>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                   <i class="fa fa-angle-right"></i>
                  </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="notice_content" style="min-height: 410px;display: flex;">
                    <div class="card bg-light" style="padding-bottom: -15px;width: 100%;">
                        <div class="notice_content_heading btn btn-success">
                            <span>নোটিশ বোর্ড</span>
                        </div>
                        <div class="card-body notice_list">
                            <marquee width="100%" direction="up" height="300px" onmouseover="this.stop();" onmouseout="this.start();">
                                <ul>
                                    {{-- @foreach ($allNotice as $notice)
                                        <li style="padding-bottom: 10px;color: black;"><i style="color: red;font-size: 15px;font-weight: bold;" class="fa fa-angle-double-right"></i><a href="#">* {{ $notice->title }} *</a></li>
                                    @endforeach --}}
                                </ul>
                            </marquee>
                        </div>
                        <a href="{{ URL::to('notice-list') }}" style="float:right" class="show_notice btn btn-success">সকল নোটিশ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
