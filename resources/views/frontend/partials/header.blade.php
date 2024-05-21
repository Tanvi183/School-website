        <?php $info=DB::table('primary_infos')->first(); ?>
            <div class="header-top">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-8 col-sm-9">
		                    <div class="header-top-left">
		                        <p>এম.পি.ও কোড : {{ $info->school_mpo_code }} | বিদ্যালয় কোড : {{ $info->school_code }} | EIIN : {{ $info->school_eiin_code }} | কেন্দ্র কোড : ৩০০</p>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-3">
		                    <div class="header-top-right text-md-end text-center">
		                        <ul>
		                            <li><a style="right: 20%; background: red; padding: 5px 10px; border-radius: 5px; font-size: 14px; font-weight: 600; font-family: 'Open Sans', sans-serif; color: #fff; text-transform: uppercase; line-height: 68px; position: relative; z-index: 1;" href=" https://hnp.ntechbangla.com/" target="_blank">
                                        <i class="fa fa-sign-in"></i>
                                        My App LogIn
                                        </a>
                                    </li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
			<div class="header-area two header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-6">
							<div class="logo" style="padding: 0; float: left;">
								<a href="{{ URL::to('/') }}"><img src="{{ asset('frontend/images') }}/logo/icon.png" alt="eduhome" /></a>
							</div>
                            <div class="school_name">
                                <h1 style="font-size: 16px;">হরিনারায়নপুর ইউনিয়ন উচ্চ বিদ্যালয়</h1>
                                <h3>মাইজদী কোর্ট সদর নোয়াখালী</h3>
                            </div>
						</div>
						<div class="col-md-8 col-sm-8 col-6">
                            <div class="content-wrapper text-end">
                                <!-- Main Menu Start -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="{{ URL::to('/') }}">HOME</a></li>
                                            <li><a href="{{ URL::to('about-us') }}">ABOUT</a></li>
                                            <li><a href="{{ URL::to('notice-list') }}">Notice</a></li>
                                            <li><a href="#">GALLERY</a>
                                                <ul>
                                                    <li><a href="{{ URL::to('gallery-photo') }}">PHOTO GALLERY</a></li>
                                                    <li><a href="{{ URL::to('gallery-video') }}">VIDEO GALLERY</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ URL::to('teacher-list') }}">TEACHER LIST</a></li>
                                            <li><a href="{{ URL::to('online-class') }}">Online Class</a></li>
                                            <li><a href="{{ URL::to('contact-us') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--Search Form Start-->
                                <!-- <div class="search-btn">
                                    <ul class="header-search search-toggle">
                                        <li class="search-menu">
                                            <i class="fa fa-search"></i>
                                        </li>
                                    </ul>
                                    <div class="search">
                                        <div class="search-form">
                                            <form id="search-form" action="##">
                                                <input type="search" placeholder="Search here..." name="search" />
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                                <!--End of Search Form-->
                                <!-- Main Menu End -->
                            </div>
						</div>
                        <div class="col-12">
                            <div class="mobile-menu hidden-sm"></div>
                        </div>
					</div>
				</div>
			</div>
