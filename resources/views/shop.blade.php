@extends('master')
@section('search')
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <form action="/search" method="GET">
                                @csrf
                                <input name="search" type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('search-icon')
    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
@endsection

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <br>
    <br>
    <div class="a">
        <h1>product overview</h1>
    </div>
    <br><br>
    <!-- products -->
    <section class="ftco-section ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-10 order-md-last">
                    <div class="row">
                        @foreach ($product as $item)
                            <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
                                <div class="product d-flex flex-column">
                                    <a href="#" class="img-prod"><img class="img-fluid" src={{ $item['image'] }}
                                            alt="Colorlib Template">
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3">
                                        <div class="d-flex">
                                            <div class="cat">
                                                <span>{{ $item['category'] }}</span>
                                            </div>
                                            <div class="rating">
                                                <p class="text-right mb-0">
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                </p>
                                            </div>
                                        </div>
                                        <h3><a href="#">{{ $item['name'] }}</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span>{{ $item['price'] }} JD</span></p>
                                        </div>
                                        <p class="bottom-area d-flex px-3">
                                        <form action="/add" method="post" style="display: none" id="{{ $item['id'] }}">
                                            @csrf
                                            <input type="text" name="price" value="{{ $item['price'] }}">
                                            <input type="text" name="product_id" value="{{ $item['id'] }} ">
                                        </form>
                                        <a href="#" class="add-to-cart text-center py-2 mr-1"
                                            onclick="addToCart('{{ 'add-' . $item['id'] }}')">
                                            <span>Add
                                                to cart <i class="ion-ios-add ml-1"></i></span></a>
                                        <a href="/singlep/{{ $item['id'] }}" class="buy-now text-center py-2"> Show
                                            Details<span><i class="ion-ios-cart ml-1"></i></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="sidebar">

                    </div>
                    <div class="sidebar-box-2">
                        <h2 class="heading">Price Range</h2>
                        <form action="/filter" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="guests">Price from:</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <div class="col-md-10">
                                                <select name="filter" id="filter" class="form-control">
                                                    <option value="50-100">Select Filter</option>
                                                    <option value="50-100">50 - 100</option>
                                                    <option value="100-200">100 - 200</option>
                                                    <option value="200-300">200 - 300</option>
                                                    <option value="300-400">300 - 400</option>
                                                </select>
                                                <button class="btn btn-warning" type="submit">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- end products -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="assets/img/Royal-Canin-Logo.svg.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/Whiskas-Logo.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/belcando-logo.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/Logo_HappyPet_Fahne.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/np.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function addToCart(id) {
            const paramsArray = id.split('-');
            const forms = document.getElementById(paramsArray[1])
            forms.submit();
            console.log(forms);
        }
    </script>
    <!-- end logo carousel -->
@endsection
