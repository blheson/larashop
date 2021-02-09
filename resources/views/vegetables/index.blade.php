@extends('layout.app')
@section('content')
  <!-- veg section -->
{{$vegetables}}
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
      @forelse($vegetables as $vegetable)
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/p1.png" alt="">
            </div>
            <div class="detail-box">
              <a href="vegetables/{{$vegetable->id}}">
                {{$vegetable->title}}
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> {{$vegetable->new_price}}
                </h6>
              </div>
            </div>
          </div>
        </div>
        @empty
        <p>No product</p>
    @endforelse
        <!-- <div class="col-md-6 col-lg-4">
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
        </div> -->
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end veg section -->
@endsection