 @extends('front.master')
@section('content')


 <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Cart</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Cart</li>
            </ul>
          </div>
        </div>
      </div>


      <?php if ($cartItems->isEmpty()) { ?>

             '<h1 align="center">Cart is Empty</h1>'


              <div align="center">  <img src="{{asset('dist/img/empty-cart.png')}}"/></div>
            <?php } else { ?>




      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <!-- Alert-->
       
        <!-- Shopping Cart-->


        {{$cartItems}}


         @if(session('status'))
        <div class="alert alert-success">

            {{session('status')}}
        </div>
        @endif

          @if(session('error'))
        <div class="alert alert-danger">

            {{session('error')}}
        </div>
        @endif
        <div class="table-responsive shopping-cart">
          <table class="table">
            <thead>
              <tr>
                <th>Product Name</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Item Price</th>
                <th class="text-center">Tax</th>
                <th class="text-center">Subtotal</th>
                <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="">Clear Cart</a></th>
              </tr>
            </thead>
            <tbody>

               @foreach($cartItems as $cartItem)
              <tr>

                <td>
                  <div class="product-item"><a class="product-thumb" href="{{url('/product_details')}}/{{$cartItem->id}}"><img src="{{url('images',$cartItem->options->img)}}"></a>
                    <div class="product-info">
                      <h4 class="product-title"><a href="shop-single.html">Unionbay Park</a></h4><span><em>Size:</em> 10.5</span><span><em>Color:</em> Dark Blue</span>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="count-input">
                   {!! Form::open(['url' => ['cart/update',$cartItem->rowId], 'method'=>'put']) !!}
                            

                              
                               <input type="hidden" name="rowId" id="rowId" value="{{$cartItem->rowId}}"/>
                               
                               <input type="hidden" name="proId" value="{{$cartItem->id}}"/>



                               <input type="number" size="2" value="{{$cartItem->qty}}" name="qty" id="upCart"
                                           autocomplete="off" style="text-align:center; max-width:50px; "  MIN="1" MAX="1000">



                                    
                                  <input type="submit" class="btn btn-primary" value="Update" styel="margin:5px">
                                {!! Form::close() !!}
                  </div>
                </td>
                <td class="text-center text-lg text-medium">${{$cartItem->price}}</td>

                <td class="text-center text-lg text-medium">${{$cartItem->tax}}</td>
                <td class="text-center text-lg text-medium">${{$cartItem->subtotal}}</td>
                <td class="text-center"><a class="remove-from-cart" href="{{url('/cart/remove')}}/<?php echo $cartItem->rowId; ?>" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>

         
        <div class="shopping-cart-footer">
          <div class="column">
            <form class="coupon-form" method="post">
              <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required>
              <button class="btn btn-outline-primary btn-sm" type="submit">Apply Coupon</button>
            </form>
          </div>
          <div class="column text-lg">Tax: <span class="text-medium">${{Cart::tax()}}</span></div>
          <div class="column text-lg">Total: <span class="text-medium">${{$cartItem->total}}</span></div>
        </div>
        <div class="shopping-cart-footer">
          <div class="column"><a class="btn btn-outline-secondary" href="shop-grid-ls.html"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>
          <div class="column"><a class="btn btn-primary" href="{{url('/')}}/checkout}}">Update Cart</a><a class="btn btn-success" href="{{url('/')}}/checkout}}">Checkout</a></div>
        </div>

         <a class="btn btn-default check_out" href="{{url('/')}}/checkout">Check Out</a>
        <!-- Related Products Carousel-->
        <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">You May Also Like</h3>
        <!-- Carousel-->
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
      
        </div>
      </div>


      <?php } ?>
      @endsection('content')