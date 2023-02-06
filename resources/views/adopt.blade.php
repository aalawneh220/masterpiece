@extends('master')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Organic Information</p>
                        <h1>Adopt Pet Available </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- latest news -->
    <div class="latest-news mt-150 mb-150">
        <div class="container">
            <div class="row">
                @foreach ($ppp as $pp)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="single-news.html">
                                <div class="latest-news-bg" style="background-image: url({{ $pp['image'] }}) !important;">
                                </div>
                            </a>
                            <div class="news-text-box">
                                <h3>
                                    <a href="single-news.html">{{ $pp['name'] }}</a>
                                </h3>
                                <p class="blog-meta">
                                    @php
                                        $user = App\Models\User::find($pp['user_id']);

                                    @endphp
                                    <span class="author"><i class="fas fa-user"></i>
                                        {{ $user != null ? $user['name'] : 'admin' }}</span>
                                    <span class="date"><i class="fas fa-calendar"></i> {{ $pp['created_at'] }}</span>
                                    <span class="date"><i class="fas fa-phone"></i> {{ $pp['phone'] }}</span>
                                </p>
                                <p class="excerpt">
                                    {{ $pp['desc'] }}
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="pagination-wrap">
                                <ul>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a class="active" href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->

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
    <!-- end logo carousel -->
@endsection
