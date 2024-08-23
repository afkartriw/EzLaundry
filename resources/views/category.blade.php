@extends('layouts.frontend')
@section('content')

	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shop Category</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->


	  

	<!-- ================ trending product section start ================= -->  
  <section class="section-margin calc-60px">
    <div class="container">
      <div class="section-intro pb-60px">
        <p>Barang </p>
        <h2>Bahan<span class="section-intro__style"> Laundry</span></h2>
      </div>
      <div class="row">
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
  </section>
  <!-- ================ trending product section end ================= -->  
@endsection
