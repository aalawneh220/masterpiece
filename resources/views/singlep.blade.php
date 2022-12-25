@extends('master')

@section('content')
        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                  <div class="breadcrumb-text">
                    <p>See more Details</p>
                    <h1>Single Product</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end breadcrumb section -->
      
          <!-- single product -->
          <div class="single-product mt-150 mb-150">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <div class="single-product-img">
                    <img src= {{$single['image']}} alt="" />
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="single-product-content">
                    <h3>pet have polyphenols</h3>
                    <p class="single-product-pricing"> {{$single['price']}}</p>
                    <p>
                      {{$single['description']}}
                    </p>
                    <div class="single-product-form">
                      <form action="index.html">
                        <input type="number" placeholder="0" />
                      </form>
                      <a href="cart.html" class="cart-btn"
                        >
                        <i class="fas fa-shopping-cart"></i> Add to Cart</a
                      >
                      <p><strong>Categories: </strong>{{ $single['category'] }}</p>

                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                      <li>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="fab fa-google-plus-g"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end single product -->
      
          <!-- logo carousel -->
          <div class="logo-carousel-section">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                      <img src="assets/img/Royal-Canin-Logo.svg.png" alt="" />
                    </div>
                    <div class="single-logo-item">
                      <img src="assets/img/Whiskas-Logo.png" alt="" />
                    </div>
                    <div class="single-logo-item">
                      <img src="assets/img/belcando-logo.png" alt="" />
                    </div>
                    <div class="single-logo-item">
                      <img src="assets/img/Logo_HappyPet_Fahne.png" alt="" />
                    </div>
                    <div class="single-logo-item">
                      <img src="assets/img/np.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end logo carousel -->
      
@endsection