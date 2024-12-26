@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Contact</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__shape">
                <span class="page-header__shape-item page-header__shape-item--1"><img src="{{ asset('') }}assets/images/header/2.png"
                        alt="shape-icon"></span>
            </div>
        </div>
    </div>
</section>
<!-- ================> Page header end here <================== -->


<!-- ===============>> Contact section start here <<================= -->
<div class="contact padding-top padding-bottom">
    <div class="container">
        <div class="contact__wrapper">
            <div class="row g-5">
                <div class="col-md-7">
                    <div class="contact__info" data-aos="fade-right" data-aos-duration="1000">
                        <div class="contact__social">
                            <h3>let’s <span>get in touch</span>
                                with us</h3>
                            <ul class="social">
                                <li class="social__item">
                                    <a href="https://www.facebook.com/profile.php?id=61560663703190" class="social__link social__link--style1 active"><i class="fab fa-facebook-f"></i></a>
                                </li>

                                <li class="social__item">
                                    <a href="https://www.instagram.com/qorvamarkets/" class="social__link social__link--style1"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="social__item">
                                    <a href="https://www.youtube.com/@Qorvamarkets" class="social__link social__link--style1"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li class="social__item">
                                    <a href="https://x.com/QorvaMarkets" class="social__link social__link--style1"><i class="fab fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__details">
                            <div class="contact__item" data-aos="fade-right" data-aos-duration="1000">
                                <div class="contact__item-inner">
                                    <div class="contact__item-thumb">
                                        <span><img src="assets/images/contact/1.png" alt="contact-icon" class="dark"></span>
                                    </div>
                                    <div class="contact__item-content">

                                        <p>
                                            971508596279
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact__item" data-aos="fade-right" data-aos-duration="1100">
                                <div class="contact__item-inner">
                                    <div class="contact__item-thumb">
                                        <span><img src="assets/images/contact/2.png" alt="contact-icon" class="dark"></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <p>
                                            info@qorvamarkets.com
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="contact__item" data-aos="fade-right" data-aos-duration="1200">
                                <div class="contact__item-inner">
                                    <div class="contact__item-thumb">
                                        <span><img src="assets/images/contact/3.png" alt="contact-icon" class="dark"></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <p>
                                            Physical Address : Office 210 Al-Nasar Sports Club Dubai, UAE.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="contact__item" data-aos="fade-right" data-aos-duration="1200">
                                <div class="contact__item-inner">
                                    <div class="contact__item-thumb">
                                        <span><img src="assets/images/contact/3.png" alt="contact-icon" class="dark"></span>
                                    </div>
                                    <div class="contact__item-content">

                                        <p class="mb-2">
                                            Registered Address : Qorva Markets LTD, Bonovo Road – Fomboni,<br>
                                            Island of Mohéli – Comoros Union
                                        </p>
                                        <p>Registration Number: HT00324027</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" data-aos="fade-left" data-aos-duration="1000">
                <div class="contact__form">
                        <form action="https://thetork.com/" data-aos="fade-left" data-aos-duration="1000">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div>
                                        <label for="name" class="form-label">Name</label>
                                        <input class="form-control" type="text" id="name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="email" class="form-label">Email</label>
                                        <input class="form-control" type="email" id="email" placeholder="Email here">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="textarea" class="form-label">Message</label>
                                        <textarea cols="30" rows="5" class="form-control" id="textarea"
                                            placeholder="Enter Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="trk-btn trk-btn--border trk-btn--primary mt-4 d-block">contact us
                                now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact__shape">
        <span class="contact__shape-item contact__shape-item--1"><img src="assets/images/contact/4.png"
                alt="shape-icon"></span>
        <span class="contact__shape-item contact__shape-item--2"> <span></span> </span>
    </div>
</div>
<!-- ===============>> Contact section start here <<================= -->




@endsection