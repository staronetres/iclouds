@extends('front.master')


@section('content')

  <div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Contacts</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Contacts</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-2x mb-2">
        <div class="row">
          <div class="col-md-7">
            <div class="display-3 text-muted opacity-75 mb-30">Customer Service</div>
          </div>
          <div class="col-md-5">
            <ul class="list-icon">
              <li> <i class="icon-mail"></i><a class="navi-link" href="mailto:customer.service@unishop.com">customer.service@unishop.com</a></li>
              <li> <i class="icon-bell"></i>+1(080) 44 357 260</li>
              <li> <i class="icon-clock"></i>1 - 2 business days</li>
            </ul>
          </div>
        </div>
        <hr class="margin-top-2x">
        <div class="row margin-top-2x">
          <div class="col-md-7">
            <div class="display-3 text-muted opacity-75 mb-30">Tech Support</div>
          </div>
          <div class="col-md-5">
            <ul class="list-icon">
              <li> <i class="icon-mail"></i><a class="navi-link" href="mailto:support@unishop.com">support@unishop.com</a></li>
              <li> <i class="icon-bell"></i>00 33 169 7720</li>
              <li> <i class="icon-clock"></i>1 - 2 business days</li>
            </ul>
          </div>
        </div>
        <h3 class="margin-top-3x text-center mb-30">Outlet Stores</h3>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30">
              <div class="google-map" data-height="250" data-address="514 S. Magnolia St. Orlando, FL 32806, USA" data-zoom="15" data-disable-controls="true" data-scrollwheel="false" data-marker="img/map-marker.png" data-marker-title="We are here!" data-styles="[{&quot;featureType&quot;:&quot;administrative.country&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;hue&quot;:&quot;#ff0000&quot;}]}]"></div>
              <div class="card-block">
                <ul class="list-icon">
                  <li> <i class="icon-map"></i>514 S. Magnolia St. Orlando, FL 32806, USA</li>
                  <li> <i class="icon-bell"></i>+1(786) 322 560 40</li>
                  <li> <i class="icon-mail"></i><a class="navi-link" href="mailto:orlando.store@unishop.com">orlando.store@unishop.com</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30">
              <div class="google-map" data-height="250" data-address="44 Shirley Ave. West Chicago, IL 60185, USA" data-zoom="15" data-disable-controls="true" data-scrollwheel="false" data-marker="img/map-marker.png" data-marker-title="We are here!" data-styles="[{&quot;featureType&quot;:&quot;administrative.country&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;hue&quot;:&quot;#ff0000&quot;}]}]"></div>
              <div class="card-block">
                <ul class="list-icon">
                  <li> <i class="icon-map"></i>44 Shirley Ave. West Chicago, IL 60185, USA</li>
                  <li> <i class="icon-bell"></i>+1(847) 252 765 33</li>
                  <li> <i class="icon-mail"></i><a class="navi-link" href="mailto:chicago.store@unishop.comm">chicago.store@unishop.com</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30">
              <div class="google-map" data-height="250" data-address="89 Clinton Dr. Holbrook, NY 11741, USA" data-zoom="13" data-disable-controls="true" data-scrollwheel="false" data-marker="img/map-marker.png" data-marker-title="We are here!" data-styles="[{&quot;featureType&quot;:&quot;administrative.country&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;hue&quot;:&quot;#ff0000&quot;}]}]"></div>
              <div class="card-block">
                <ul class="list-icon">
                  <li> <i class="icon-map"></i>89 Clinton Dr. Holbrook, NY 11741, USA</li>
                  <li> <i class="icon-bell"></i>+1(212) 477 690 000</li>
                  <li> <i class="icon-mail"></i><a class="navi-link" href="mailto:newyork.store@unishop.com">newyork.store@unishop.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Site Footer-->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- Contact Info-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Get In Touch With Us</h3>
                <p class="text-white">Phone: 00 33 169 7720</p>
                <ul class="list-unstyled text-sm text-white">
                  <li><span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>
                  <li><span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>
                </ul>
                <p><a class="navi-link-light" href="#">support@unishop.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Mobile App Buttons-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- About Us-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">About Us</h3>
                <ul>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">About Unishop</a></li>
                  <li><a href="#">Our Story</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Our Blog</a></li>
                </ul>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Account / Shipping Info-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">Account &amp; Shipping Info</h3>
                <ul>
                  <li><a href="#">Your Account</a></li>
                  <li><a href="#">Shipping Rates & Policies</a></li>
                  <li><a href="#">Refunds & Replacements</a></li>
                  <li><a href="#">Taxes</a></li>
                  <li><a href="#">Delivery Info</a></li>
                  <li><a href="#">Affiliate Program</a></li>
                </ul>
              </section>
            </div>
          </div>
          <hr class="hr-light mt-2 margin-bottom-2x">
          <div class="row">
            <div class="col-md-7 padding-bottom-1x">
              <!-- Payment Methods-->
              <div class="margin-bottom-1x" style="max-width: 615px;"><img src="img/payment_methods.png" alt="Payment Methods">
              </div>
            </div>
            <div class="col-md-5 padding-bottom-1x">
              <div class="margin-top-1x hidden-md-up"></div>
              <!--Subscription-->
              <form class="subscribe-form" action="//rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544" method="post" target="_blank" novalidate>
                <div class="clearfix">
                  <div class="input-group input-light">
                    <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                  </div>
                  <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                </div><span class="form-text text-sm text-white opacity-50">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</span>
              </form>
            </div>
          </div>
          <!-- Copyright-->
          <p class="footer-copyright">© All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i><a href="http://rokaux.com/" target="_blank"> &nbsp;by rokaux</a></p>
        </div>
      </footer>
    </div>





@endsection('content')
