@extends('front.master')
@section('content')

    <!-- Product-->

       @forelse($products as $product)
          <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">Featured Products</h3>
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">22% Off</div><a class="product-thumb" href="shop-single.html"><img src="{{url('images',$product->image)}}" alt="Product"></a>
              <h3 class="product-title"><a href="{{url('/product_details')}}/<?php echo $product->id; ?>">{{$product->pro_name}}</a></h3>
              <h4 class="product-price">
                <del>${{$product->pro_price}}</del>${{$product->spl_price}}
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!"><a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="add-to-cart">Add to Cart</a></button>
              </div>
            </div>
          </div>
       </section>  
        @empty
            <h3>No Shirts</h3>
            @endforelse

@endsection