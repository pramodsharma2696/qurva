@extends('master')
@section('contents')
<style type="text/css">
    .blog-post-single {
    margin-bottom: 30px;
}
</style>

<section class="page-banner-area" style="background-image:url(assets/images/banner-1.jpg)">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-content text-center">
                        <h1>Blog</h1>
                        <p><a href="#">Home</a> <span> &gt; </span>Blog</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
        </div>
    </section>

    <section class="testimonial-area two">
        <div class="container">
            <div class="row">
                <!--start sec-heading-->
                <div class="col-lg-8 offset-lg-2">
                    <div class="sec-heading text-center">
                        <h2>Blog</h2>
                    </div>
                </div>
                <!--end sec-heading-->
            </div>
             <div class="row">
                <div class="col-md-4">
                    <div class="blog-post-single">
                        <div class="post-media">
                            <img src="uploads/account-2.jpg" class="img_res" alt="image">
                        </div>
                        <div class="blog-post-content">                           
                            <h3><a href="#">Lorem Ipsum is simply dummy </a></h3>
                            <p>Lorem Ipsum is simply dummy of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-single">
                        <div class="post-media">
                            <img src="uploads/account-2.jpg" class="img_res" alt="image">
                        </div>
                        <div class="blog-post-content">                           
                            <h3><a href="#">Lorem Ipsum is simply dummy </a></h3>
                            <p>Lorem Ipsum is simply dummy of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-single">
                        <div class="post-media">
                            <img src="uploads/account-2.jpg" class="img_res" alt="image">
                        </div>
                        <div class="blog-post-content">                           
                            <h3><a href="#">Lorem Ipsum is simply dummy </a></h3>
                            <p>Lorem Ipsum is simply dummy of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog-post-single">
                        <div class="post-media">
                            <img src="uploads/account-2.jpg" class="img_res" alt="image">
                        </div>
                        <div class="blog-post-content">                           
                            <h3><a href="#">Lorem Ipsum is simply dummy </a></h3>
                            <p>Lorem Ipsum is simply dummy of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog-post-single">
                        <div class="post-media">
                            <img src="uploads/account-2.jpg" class="img_res" alt="image">
                        </div>
                        <div class="blog-post-content">                           
                            <h3><a href="#">Lorem Ipsum is simply dummy </a></h3>
                            <p>Lorem Ipsum is simply dummy of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog-post-single">
                        <div class="post-media">
                            <img src="uploads/account-2.jpg" class="img_res" alt="image">
                        </div>
                        <div class="blog-post-content">                           
                            <h3><a href="#">Lorem Ipsum is simply dummy </a></h3>
                            <p>Lorem Ipsum is simply dummy of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
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