 @extends('front.master')
@section('content')


<!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Checkout</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Checkout</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->


{{ $cartItems = Cart::content() }}


                          <?php $count =1;?>
                 







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
            
              
            </tbody>
          </table>
        </div>






                    <?php $count++;?>
                     @endforeach

      <?php // form start here?>

           <form action="{{url('/')}}/formvalidate" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="container padding-bottom-3x mb-2">
        <div class="row">
          <!-- Checkout Adress-->


          <div class="col-xl-9 col-lg-8">
            <div class="checkout-steps"><a href="checkout-review.html">4. Review</a><a href="checkout-payment.html"><span class="angle"></span>3. Payment</a><a href="checkout-shipping.html"><span class="angle"></span>2. Shipping</a><a class="active" href="checkout-address.html"><span class="angle"></span>1. Address</a></div>
            <h4>Billing Address</h4>
            <hr class="padding-bottom-1x">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-fn">Display Name</label>
                   <input id="firstname" type="text" name="fullname" placeholder="Display Name"  value="{{ old('firstname') }}" class="form-control">
                      <br>

                       <span style="color:red">{{ $errors->first('fullname') }}</span>
              </div>
              
            </div>
        </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-email">State Name</label>
                 <input id="lastname" type="text" name="state" placeholder="State Name" value="{{ old('state') }}" class="form-control">

                 <span style="color:red">{{ $errors->first('state') }}</span>

                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-phone">Pincode</label>
                 <input id="lastname" type="text" name="pincode" placeholder="Pincode" value="{{ old('pincode') }}" class="form-control">


                  <span style="color:red">{{ $errors->first('pincode') }}</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-company">City Name</label>
                   <input id="lastname" type="text" name="city" placeholder="City Name" value="{{ old('city') }}" class="form-control">
                      <br>
                       <span style="color:red">{{ $errors->first('city') }}</span>



                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-country">Country</label>
                  <select name="country" class="form-control" >
                    <option value="{{ old('country') }}" selected="selected">Select country</option>
                    <option value="United States">United States</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="UK">UK</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Ucrane">Ucrane</option>
                    <option value="Canada">Canada</option>
                    <option value="Dubai">Dubai</option>
                </select>
                <span style="color:red">{{ $errors->first('country') }}</span>



                    

                  
                         
                </div>
              </div>
            </div>
           
            <div class="row padding-bottom-1x">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-address1">Address 1</label>
                  <input class="form-control" type="text" id="checkout-address1">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-address2">Address 2</label>
                  <input class="form-control" type="text" id="checkout-address2">
                </div>
              </div>
            </div>
            <h4>Shipping Address</h4>
            <hr class="padding-bottom-1x">
            <div class="form-group">
              
               <span>
               <input type="radio" name="pay" value="COD" checked="checked" id="cash"> COD
                </span>

              <span>
              <input type="radio" name="pay" value="paypal" id="paypal"> PayPal
                 @include('front.paypal')
              </span>

                <input type="submit" value="COD" class="btn btn-primary" id="cashbtn"> 
                 </form>  

                 


            </div>
            <div class="checkout-footer">
              <div class="column"><a class="btn btn-outline-secondary" href="cart.html"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back To Cart</span></a></div>
              <div class="column"><a class="btn btn-primary" href="checkout-shipping.html"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>
            </div>
          </div>

          
          <!-- Sidebar          -->
          <div class="col-xl-3 col-lg-4">
            <aside class="sidebar">
              <div class="padding-top-2x hidden-lg-up"></div>
              <!-- Order Summary Widget-->
              <section class="widget widget-order-summary">
                <h3 class="widget-title">Order Summary</h3>
                <table class="table">
                  <tr>
                    <td>Cart Subtotal:</td>
                    <td class="text-medium">$289.68</td>
                  </tr>
                  <tr>
                    <td>Shipping:</td>
                    <td class="text-medium">$22.50</td>
                  </tr>
                  <tr>
                    <td>Estimated tax:</td>
                    <td class="text-medium">$3.42</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-lg text-medium">$315.60</td>
                  </tr>
                </table>
              </section>
              <!-- Featured Products Widget-->
              <section class="widget widget-featured-products">
                <h3 class="widget-title">Recently Viewed</h3>
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/01.jpg" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">Oakley Kickback</a></h4><span class="entry-meta">$155.00</span>
                  </div>
                </div>
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/02.jpg" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">Top-Sider Fathom</a></h4><span class="entry-meta">$90.00</span>
                  </div>
                </div>
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/03.jpg" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">Vented Straw Fedora</a></h4><span class="entry-meta">$49.50</span>
                  </div>
                </div>
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/04.jpg" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">Big Wordmark Tote</a></h4><span class="entry-meta">$29.99</span>
                  </div>
                </div>
              </section>
              <!-- Promo Banner-->
              <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                  <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                  <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-outline-white btn-sm" href="shop-grid-ls.html">Shop Now</a>
                </div>
              </section>
            </aside>
          </div>
        </div>

        <?php // form end here?>

      
      </div>



@endsection




@section('scripts')
    <script>

            $('#paypalbtn').hide();
          //  $('#cashbtn').hide();

            $(':radio[id=paypal]').change(function(){
                $('#paypalbtn').show();
                $('#cashbtn').hide();

            });

              $(':radio[id=cash]').change(function(){
                $('#paypalbtn').hide();
                $('#cashbtn').show();

            });
            </script>


     @endsection
