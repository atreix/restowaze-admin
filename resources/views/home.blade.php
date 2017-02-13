@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
    <!-- page content -->
    <div id="page-content">
        <div class="hero-section full-screen has-map has-sidebar">
            <div class="map-wrapper">
                <div class="map" id="map-homepage"></div>
            </div>
            <div class="results-wrapper">
                <div class="form search-form inputs-underline">
                    <form>
                        <div class="section-title">
                            <h2>Search</h2>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Enter keyword">
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="city">
                                        <option value="0">Location</option>
                                        @foreach ($locations as $key => $location)
                                        <option value="{{ $key + 1 }}">{{ $location }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="category">
                                        <option value="0">Category</option>
                                        @foreach ($categories as $key => $category)
                                        <option value="{{ $key + 1 }}">{{ $category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" data-ajax-response="map" data-ajax-data-file="" data-ajax-auto-zoom="1" class="btn btn-primary pull-right"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="results">
                    <div class="tse-scrollable">
                        <div class="tse-content">
                            <div class="section-title">
                                <h2>Search Results<span class="results-number"></span></h2>
                            </div>
                            <div class="results-content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="hero-section full-screen has-map has-sidebar">
            <div class="wrapper">
                <div class="inner">
                    <div class="container">
                        <div class="page-title center">
                            <h1>Best Deals in One Place</h1>
                            <h2>With Locations you can find the best deals in your location</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                                <div class="form search-form horizontal">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email" placeholder="What are you looking for?">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i class="arrow_right"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-wrapper">
                <div class="bg-transfer opacity-30"><img src="assets/img/background-01.jpg" alt=""></div>
                <div class="background-color background-color-black"></div>
            </div>
        </div>
        -->
    </div>
    <div class="block">
            <div class="container">
                <div class="center">
                    <div class="section-title">
                        <div class="center">
                            <h2>Nearby Places</h2>
                            <h3 class="subtitle">Fusce eu mollis dui, varius convallis mauris. Nam dictum id</h3>
                        </div>
                    </div>
                    <!--end section-title-->
                </div>
                <!--end center-->
                <div class="row">
                    @foreach ($details as $detail)
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="{{ $detail['id'] }}">
                            <a href="">
                                <div class="description">
                                    <!--<figure>Average Price: $8 - $30</figure>-->
                                    <div class="label label-default">{{ $detail['type'] }}</div>
                                    <h3>{{ $detail['title'] }}</h3>
                                    <h4>{{ $detail['location'] }}</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                        <img src="assets/img/items/1.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="{{ $detail['rating'] }}">
                                    <span class="stars"></span>
                                    <!--<span class="reviews">6</span>-->
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    @endforeach
                </div>
                <!--end row-->
                <div class="center">
                    <a href="listing.html" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all listings</a>
                </div>
            <!--end center-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <div class="section-title">
                            <h2>Recently Rated Items</h2>
                        </div>
                        <!--end section-title-->
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="item" data-id="2">
                                    <figure class="circle featured sale">-12%</figure>
                                    <a href="detail.html">
                                        <div class="description">
                                            <div class="label label-default">Restaurant</div>
                                            <h3>Ironapple</h3>
                                            <h4>4209 Glenview Drive</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer" style="background-image: url(&quot;assets/img/items/2.jpg&quot;);">
                                            <img src="assets/img/items/2.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="3">
                                            <span class="stars"><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="fa fa-star"></figure><figure class="fa fa-star"></figure></span>
                                            <span class="reviews">13</span>
                                        </div>
                                        <div class="controls-more">
                                            <ul>
                                                <li><a href="#">Add to favorites</a></li>
                                                <li><a href="#">Add to watchlist</a></li>
                                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                                            </ul>
                                        </div>
                                        <!--end controls-more-->
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end item-->
                            </div>
                            <!--<end col-md-4-->
                            <div class="col-md-5 col-sm-5">
                                <div class="item" data-id="3">
                                    <figure class="ribbon">Top</figure>
                                    <a href="detail.html">
                                        <div class="description">
                                            <figure>Starts at: 19:00</figure>
                                            <div class="label label-default">Event</div>
                                            <h3>Food Festival</h3>
                                            <h4>840 My Drive</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer" style="background-image: url(&quot;assets/img/items/4.jpg&quot;);">
                                            <img src="assets/img/items/4.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                        <div class="rating-passive" data-rating="5">
                                            <span class="stars"><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure></span>
                                            <span class="reviews">12</span>
                                        </div>
                                        <div class="controls-more">
                                            <ul>
                                                <li><a href="#">Add to favorites</a></li>
                                                <li><a href="#">Add to watchlist</a></li>
                                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                                            </ul>
                                        </div>
                                        <!--end controls-more-->
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end item-->
                            </div>
                            <!--<end col-md-5-->
                            <div class="col-md-3 col-sm-3">
                                <div class="item" data-id="4">
                                    <a href="detail.html">
                                        <div class="description">
                                            <div class="label label-default">Lounge</div>
                                            <h3>Cosmopolit</h3>
                                            <h4>2896 Ripple Street</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer" style="background-image: url(&quot;assets/img/items/5.jpg&quot;);">
                                            <img src="assets/img/items/5.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="5">
                                            <span class="stars"><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure></span>
                                            <span class="reviews">43</span>
                                        </div>
                                        <div class="controls-more">
                                            <ul>
                                                <li><a href="#">Add to favorites</a></li>
                                                <li><a href="#">Add to watchlist</a></li>
                                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                                            </ul>
                                        </div>
                                        <!--end controls-more-->
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end item-->
                            </div>
                            <!--<end col-md-3-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-md-9-->
                    <div class="col-md-3 col-sm-3">
                        <div class="section-title">
                            <h2>Client’s Word</h2>
                        </div>
                        <div class="testimonials center box">
                            <div class="owl-carousel owl-loaded owl-drag" data-owl-items="1" data-owl-nav="0" data-owl-dots="1">


                            <div class="owl-stage-outer owl-height" style="height: 245px;"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 526px;"><div class="owl-item active" style="width: 263px;"><blockquote>
                                    <div class="image">
                                        <div class="bg-transfer" style="background-image: url(&quot;assets/img/person-01.jpg&quot;);">
                                            <img src="assets/img/person-01.jpg" alt="">
                                        </div>
                                    </div>
                                    <h3>Jane Woodstock</h3>
                                    <h4>CEO at ArtBrands</h4>
                                    <p>Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque gravida lacus vel.</p>
                                </blockquote></div><div class="owl-item" style="width: 263px;"><blockquote>
                                    <div class="image">
                                        <div class="bg-transfer" style="background-image: url(&quot;assets/img/person-04.jpg&quot;);">
                                            <img src="assets/img/person-04.jpg" alt="">
                                        </div>
                                    </div>
                                    <h3>Peter Doe</h3>
                                    <h4>CEO at ArtBrands</h4>
                                    <p>Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus lectus. Aliquam laoreet purus in iaculis sodales.</p>
                                </blockquote></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                        </div>
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
    <!-- /page content -->
@endsection
