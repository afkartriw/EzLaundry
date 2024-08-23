@extends('layouts.frontend')
@section('content')

<main class="site-main">
    
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/home/01.png" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>EZ LAUNDRY</h4>
              <h1>Bersih Tanpa Ribet, Laundry Bersama Kami!</h1>
              <p>Selamat datang di tempat di mana kebersihan bertemu kemudahan! Di laundry kami, kami menghadirkan pengalaman cuci pakaian tanpa repot yang memberikan hasil bersih tanpa masalah !</p>
              <a class="button button-hero" href="{{ url('/category') }}">Shop</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->
    <section class="section-margin mt-0">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel__slide">
          <img src="img/home/det1.png" alt="" class="img-fluid">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>JASA</h3>
            <p>Laundry</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/det2.png" alt="" class="img-fluid">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>JUAL</h3>
            <p>Alat Laundry</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/det3.png" alt="" class="img-fluid">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>Info</h3>
            <p>Kerjasama</p>
          </a>
        </div>
      </div>
    </section>
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->  
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Barang Populer di pasaran</p>
          <h2>Produk<span class="section-intro__style"> Terbaik</span></h2>
        </div>
        
        <div class="row"><!-- catalog product2 -->
        @if(isset($products))
            @foreach($products as $product)
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="card text-center card-product">
                <div class="card-product__img">
                    <img class="card-img" src="{{$product->image_name}}" alt="Product" >
                    <ul class="card-product__imgOverlay">
                    <li><button><i class="ti-search"></i></button></li>
                    <li>
                        <!-- yang ini akan dibuat component vue -->
                        <button product-id="{{$product->id}}" 
                          user-id="{{auth()->user()->id ?? 0}}">
                          <i class="ti-shopping-cart"></i>
                        </button> 
                          <add-to-cart product-id="{{$product->id}}" 
                            user-id="{{auth()->user()->id ?? 0}}"
                          /> <!-- yang ini dibuat component vue -->
                    </li> 
                    
                    <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                </div>
                <div class="card-body">
                    <p>Accessories</p>
                    <h4 class="card-product__title"><a href="{{ url('/details') }}">{{$product->name}}</a></h4>
                    <p class="card-product__price">$ {{$product->price}}</p>
                </div>
                </div>
            </div>
            @endforeach
        @endif
        </div>
      </div>
    </section>
    <!-- ================ trending product section end ================= -->  


    <!-- ================ offer section start ================= --> 
    <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="offer__content text-center">
              <h3>Up To 50% Off</h3>
              <h4>Winter Sale</h4>
              <p>Him she'd let them sixth saw light</p>
              <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ offer section end ================= --> 

    <!-- ================ Subscribe section start ================= --> 
    <section class="subscribe-position">
      <div class="container">
        <div class="subscribe text-center">
          <h3 class="subscribe__title">Get Update From Anywhere</h3>
          <p>Bearing Void gathering light light his eavening unto dont afraid</p>
          <div id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
              <div class="form-group ml-sm-auto">
                <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
                <div class="info"></div>
              </div>
              <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>

            </form>
          </div>
          
        </div>
      </div>
    </section>
    <!-- ================ Subscribe section end ================= --> 

    

  </main>

<!-- Add this at the end of your Blade file, just before the closing </body> tag -->

<!-- for testing component -->
<!-- <script>
  const app = Vue.createApp({});
  app.component('test-component', {
    template: '<div>Hello from Vue!</div>'
  });
  app.mount('#app');
</script>

<test-component></test-component> -->

@endsection
