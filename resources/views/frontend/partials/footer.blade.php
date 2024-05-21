<?php $info=DB::table('primary_infos')->first(); ?>
<div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-widget">
                                <h3>আমাদের ফেসবুক পেজ</h3>
                                <div class="fb-page" data-href="https://www.facebook.com/Harinarayanpurunionhighschool" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Harinarayanpurunionhighschool" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Harinarayanpurunionhighschool">Harinarayanpur Union High School</a></blockquote></div>
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="u6m43ve8"></script>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 pl-30">
                            <div class="single-widget">
                                <h3>মেনু</h3>
                                <ul>
                                    <li><a style="color: blanchedalmond;" href="{{ URL::to('/') }}">Home</a></li>
                                    <li><a style="color: blanchedalmond;" href="{{ URL::to('about-us') }}">About Us</a></li>
                                    <li><a style="color: blanchedalmond;" href="{{ URL::to('contact-us') }}">Contact Us</a></li>
                                    <li><a style="color: blanchedalmond;" href="{{ URL::to('login') }}">Login</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 pt-4 pt-lg-0">
                            <div class="single-widget">
                                <h3>দ্রুত যোগাযোগ</h3>
                                <p>{{ $info->address_bn }}</p>
                                <p>{{ $info->mobile_no }}</p>
                                <p>{{ $info->email }}<br>www.hnpschoolnoa.edu.bd</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 pt-4 pt-lg-0">
                            <div class="single-widget">
                                <h3>ভিজিটিং কাউন্টার</h3>
                                <a href='https://dissertation-writingservice.com/'></a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=0944e990f2c6c48f6a3e2acd55b4f18bc18c8c4a'></script>
                                    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/891458/t/0"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p>Copyright © <a style="color:red;"  target="_blank" href="#">nTechBangla</a> 2021. All Right Reserved By <a  style="color:red;" href="#" target="_blank">Harinarayanpur Union High School.</a></p>
                        </div>
                    </div>
                </div>
            </div>
