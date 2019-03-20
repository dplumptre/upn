@extends('layouts.app_outside')
@section('content')


<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider slider-height-2 bg-img align-items-center d-flex slider-overlay2-1 default-overlay" style="background-image:url(images/banner.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <!-- <div class="slider-content slider-content-2 slider-animated-2 text-center">
                            <h1 class="animated">Welcome to Glaxdu</h1>
                            <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>


      
    </div>
</div>
<div class="about-us pt-130 pb-130">
    <div class="container">
        <div class="section-title-3 section-shape-hm2-1 text-center mb-100">
            <h2>About <span>Us</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br> quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="row align-items-center">
           <div class="col-lg-7 col-md-12">
                <div class="about-img about-img-2 default-overlay mr-70">
                    <img src="assets/img/banner/banner-2.jpg" alt="">
                    <a class="video-btn video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                        <img src="assets/img/icon-img/video.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="about-content-2 pr-70">
                    <p>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut voluptatLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit.</p>
                    <img src="assets/img/banner/banner-3.jpg" alt="">
                    <div class="signature mt-30">
                        <img src="assets/img/icon-img/signature.png" alt="">
                    </div>
                    <div class="about-btn mt-45">
                        <a class="default-btn" href="about-us.html">ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="fun-fact-area bg-img pt-130 pb-100" style="background-image:url(images/fact.png);">
    <div class="container">
     
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">160</h2>
                        <span>OFFICIALS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">200</h2>
                        <span>MEMBERS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">0</h2>
                        <span>STATES</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="blog-event-area pt-130 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title-3 mb-45 mrg-bottom-small">
                    <h2>Our <span>OFFICIALS</span></h2>
                 </div>
                <div class="blog-active">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{ asset('images/hon/chair.png')}}" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">Testing is a great thing.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Adrin Azra</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 22</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar-o"></i> Jun, 24th 2018</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{ asset('images/hon/boss.png')}}" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">Learn English in ease.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Tayeb Jon</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 12</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar-o"></i> Feb, 10th 2017</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{ asset('images/hon/sec.png')}}" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">In publishing and graphic.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Md Tamim</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 20</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar-o"></i> Oct, 26th 2017</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title-3 mb-45 ml-70">
                    <h2><span>Up Coming</span> Event</h2>
                   
                </div>
                <div class="event-active-2 ml-70">
                    <div class="single-event single-event-2">
                        <div class="event-img">
                            <a href="event-details.html"><img src="assets/img/event/event-4.jpg" alt=""></a>
                            <div class="event-date-wrap">
                                <span class="event-date">1st</span>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="event-details.html">Meeting.</a></h3>
                            <p>Meeting of all officials will be communicated soon.</p>
                            <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Lagos, Nigeria</span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span>----</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-event single-event-2">
                        <div class="event-img">
                            <a href="event-details.html"><img src="assets/img/event/event-4.jpg" alt=""></a>
                            <div class="event-date-wrap">
                                <span class="event-date">1st</span>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="event-details.html">Social Sciences & Education.</a></h3>
                            <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                            <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Shuvastu ,Badda</span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span>10:30 am</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection