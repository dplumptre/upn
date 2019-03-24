@extends('layouts.app_outside')
@section('content')


<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-6.jpg);">
        <div class="container">
            <h2>Contact Us</h2>
          
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact Us</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                    <div id="map"></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2>Stay <span>Connected</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis do eiusmod tempor indunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <form id="contact-form" action="assets/php/mail.php" method="post">
                        <input name="name" placeholder="Name*" type="text">
                        <input name="email" placeholder="Email*" type="email">
                        <input name="subject" placeholder="Subject*" type="text">
                        <textarea name="message" placeholder="Message"></textarea>
                        <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection