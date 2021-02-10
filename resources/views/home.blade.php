@extends('layout.app')
@section('slider')
<!-- slider section -->
<section class="slider_section">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <h5>
                                    01
                                </h5>
                                <h1>
                                Fresh <br />
                                    Vegetables
                                </h1>
                                <a href="vegetables" class="">
                                    buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <h5>
                                    02
                                </h5>
                                <h1>
                                    Fresh <br />
                                    Vegetables
                                </h1>
                                <a href="vegetables/2/fresh-vegetables" class="">
                                    buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
        </ol>
    </div>
</section>
<!-- end slider section -->
@endsection
@section('content')
<!-- veg section -->
<section class="veg_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our Vegetables
            </h2>
            <p>
                which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
            </p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <div class="img-box">
                        <img src="images/p1.png" alt="">
                    </div>
                    <div class="detail-box">
                        <a href="">
                            Vegetable
                        </a>
                        <div class="price_box">
                            <h6 class="price_heading">
                                <span>$</span> 10.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <div class="img-box">
                        <img src="images/p2.png" alt="">
                    </div>
                    <div class="detail-box">
                        <a href="">
                            Vegetable
                        </a>
                        <div class="price_box">
                            <h6 class="price_heading">
                                <span>$</span> 10.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <div class="img-box">
                        <img src="images/p3.png" alt="">
                    </div>
                    <div class="detail-box">
                        <a href="">
                            Vegetable
                        </a>
                        <div class="price_box">
                            <h6 class="price_heading">
                                <span>$</span> 10.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <div class="img-box">
                        <img src="images/p4.png" alt="">
                    </div>
                    <div class="detail-box">
                        <a href="">
                            Vegetable
                        </a>
                        <div class="price_box">
                            <h6 class="price_heading">
                                <span>$</span> 10.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <div class="img-box">
                        <img src="images/p5.png" alt="">
                    </div>
                    <div class="detail-box">
                        <a href="">
                            Vegetable
                        </a>
                        <div class="price_box">
                            <h6 class="price_heading">
                                <span>$</span> 10.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <div class="img-box">
                        <img src="images/p6.png" alt="">
                    </div>
                    <div class="detail-box">
                        <a href="">
                            Vegetable
                        </a>
                        <div class="price_box">
                            <h6 class="price_heading">
                                <span>$</span> 10.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <div class="img-box">
                        <img src="images/p7.png" alt="">
                    </div>
                    <div class="detail-box">
                        <a href="">
                            Vegetable
                        </a>
                        <div class="price_box">
                            <h6 class="price_heading">
                                <span>$</span> 10.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <div class="img-box">
                        <img src="images/p8.png" alt="">
                    </div>
                    <div class="detail-box">
                        <a href="">
                            Vegetable
                        </a>
                        <div class="price_box">
                            <h6 class="price_heading">
                                <span>$</span> 10.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <div class="img-box">
                        <img src="images/p9.png" alt="">
                    </div>
                    <div class="detail-box">
                        <a href="">
                            Vegetable
                        </a>
                        <div class="price_box">
                            <h6 class="price_heading">
                                <span>$</span> 10.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="">
                View More
            </a>
        </div>
    </div>
</section>
<!-- end veg section -->
<!-- about section -->
<section class="about_section ">
    <div class="about_bg_box">
        <img src="images/about-bg.jpg" alt="">
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 ml-auto ">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            We Provide <br>
                            Fresh Vegetables
                        </h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad ex, sequi amet similique necessitatibus quas minus repudiandae quae culpa optio ipsum quibusdam praesentium saepe qui dolore voluptate iure sit aut.
                    </p>
                    <a href="" class="mt_20">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about section -->
<!-- contact section -->
<section class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Contact <span>Us</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form_container contact-form">
                    <form action="contact" method="post">
                    @csrf
                        <div>
                            <input type="text" name="name" placeholder="Your Name" required/>
                        </div>
                        <div>
                            <input  type="text" name="phone" placeholder="Phone Number" required/>
                        </div>
                        <div>
                            <input  type="email" name="email" placeholder="Email" required/>
                        </div>
                        <div>
                            <input  type="text" name="message" class="message-box" placeholder="Message" />
                        </div>
                        <div class="btn_box">
                            <button>
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->
<!-- client section -->
<section class="client_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                What Says Our Customers
            </h2>
        </div>
        <div class="col-md-9 col-lg-7 mx-auto px-0">
            <div class="box">
                <div class="b-1">
                    <div class="client_id">
                        <div class="img-box">
                            <img src="images/client-1.jpg" alt="">
                        </div>
                        <div class="name">
                            <h5>
                                Maya Jonas
                            </h5>
                            <h6>
                                Housewife
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="client_detail">
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="client_id">
                    <div class="img-box">
                        <img src="images/client-2.jpg" alt="">
                    </div>
                    <div class="name">
                        <h5>
                            Helen Law
                        </h5>
                        <h6>
                            Housewife
                        </h6>
                    </div>
                </div>
                <div class="client_detail">
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="">
                View More
            </a>
        </div>
    </div>
</section>
<!-- end client section -->
@endsection