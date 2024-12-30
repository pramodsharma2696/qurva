@extends('master')
@section('contents')
<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>Register</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>Register</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
        </div>
    </section>
<section class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 login-form-wrap">
                    <h3>Hi, Welcome back!</h3>
                    <div class="form-group">
                        <input type="text" placeholder="Username or Email Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Re-Password" class="form-control">
                    </div>
                    <div class="form-check">
                        <div class="checkbox">
                            <input type="checkbox" class="form-check-input" id="signed">
                            <label class="form-check-label" for="signed">Keep me signed in</label>
                        </div>
                        <div class="forgot-pass">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="login-btn text-center">
                        <a href="#">Register now</a>
                    </div>
                    <div class="new-registration text-center">
                        <span>Don't have an account?</span>
                        <a href="#">Registration Now </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="newsletter-area two" style="background: #2289e6;">
        <div class="container">
            <div class="row">
                <!--start sec-heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="sec-heading text-center">
                        <h2 class="text-white">Join Our Exclusive Community</h2>
                        <p class="text-white">Hey! Are you tired of missing out on the latest updates? <br>Subscribe to our community now and stay in the loop</p>
                    </div>
                </div>
                <!--end sec-heading-->
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="subscribe-form">
                        <form>
                            <input type="email" placeholder="Your email address">
                            <button type="submit">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection