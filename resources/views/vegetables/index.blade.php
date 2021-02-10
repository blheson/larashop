@extends('layout.app')
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
      @forelse($vegetables as $vegetable)
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/p1.png" alt="">
            </div>
            <div class="detail-box">
              <a href="vegetables/{{$vegetable->id}}/{{$vegetable->title}}">
                {{$vegetable->title}}
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <!-- <span>$</span>  -->
                  {{price($vegetable->new_price)}}
                </h6>
              </div>
            </div>
          </div>
        </div>
        @empty
        <p class="text-center" style="font-size: 18px;">No product</p>
        <div>
        <a href="/vegetables" class="btn btn-sm btn-danger">clear</a></div>
    @endforelse
      </div>
      <!-- <div class="btn-box">
        <a href="">
          View More
        </a>
      </div> -->
      <!-- //pagination -->
      <div>
      {{$vegetables}}
      </div>
    </div>
  </section>

  <!-- end veg section -->
@endsection