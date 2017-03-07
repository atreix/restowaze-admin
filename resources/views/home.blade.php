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
            <input type="hidden" id="detail-page" value="{{ url('/detail') }}" />
            <div class="results-wrapper">
                <div class="form search-form inputs-underline">
                    <form method="get" action="{{ url('/') }}">

                        <div class="section-title">
                            <h2>Search</h2>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="address-autocomplete" name="keyword" placeholder="Enter keyword">
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="municipality">
                                        <option value="0">Location</option>
                                        @foreach ($municities as $key => $municity)
                                        <option value="{{ $municity }}">{{ $municity }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="category">
                                        <option value="0">Category</option>
                                        @foreach ($categories as $key => $category)
                                        <option value="{{ $category }}">{{ $category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="results">
                    <div class="tse-scrollable">
                        <div class="tse-content">
                            <div class="section-title">
                                <h2>Search Results<span class="results-number">{{ count($getResults) }}</span></h2>
                            </div>
                            <div class="results-content">
                                @if (!empty($getResults))
                                    @foreach ($getResults as $getResult)
                                        <div class="result-item" data-id="{{ $getResult['id'] }}">
                                            <a href="{{ url('/detail', $getResult['id']) }}" class=""><h3>{{ $getResult['title'] }}</h3>
                                                <div class="result-item-detail">
                                                    <div class="image" style="background-image: url({{ url('/') }}/app/{{ $getResult['image-primary'] }})">

                                                    </div>
                                                    <div class="description"><h5><i class="fa fa-map-marker"></i>{{ $getResult['location'] }}</h5>
                                                        <div class="rating-passive" data-rating="{{ $getResult['rating'] }}">
                                                            <!--<span class="reviews">12</span>-->
                                                        </div>
                                                        <div class="label label-default">{{ $getResult['category'] }}</div>
                                                        <p>{{ $getResult['description'] }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
            <div class="container">
                <div class="center">
                    <div class="section-title">
                        <div class="center">
                            <h2>Recently Added Places</h2>
                            <h3 class="subtitle"></h3>
                        </div>
                    </div>
                    <!--end section-title-->
                </div>
                <!--end center-->
                <div class="row">
                    @foreach ($details as $detail)
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="{{ $detail['id'] }}">
                            <a href="{{ url('/detail', $detail['id']) }}">
                                <div class="description">
                                    <!--<figure>Average Price: $8 - $30</figure>-->
                                    <div class="label label-default">{{ $detail['category'] }}</div>
                                    <h3>{{ $detail['name'] }}</h3>
                                    <h4>{{ $detail['location'] }}</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                        <img src="{{ url('/') }}/app/{{ $detail['primary_photo'] }}" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="{{ $detail['rating'] }}">
                                    <span class="stars"></span>
                                    <span class="reviews">{{ $detail['review'] }}</span>
                                </div>
                                <!--<div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>-->
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    @endforeach
                </div>
                <!--end row-->
                <!--<div class="center">
                    <a href="listing.html" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all listings</a>
                </div>-->
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
                            <h2>Recently Rated Restaurants</h2>
                        </div>
                        <!--end section-title-->
                        <div class="row">
                        @if($recentRatedItems)
                            @foreach ($recentRatedItems as $recentRatedItem)
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
                                        <div class="image bg-transfer" style="background-image: url('../assets/img/items/2.jpg');">
                                            <img src="{{ url('../assets/img/items/2.jpg') }}" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="1">
                                            <span class="stars">
                                                <figure class="active fa fa-star"></figure>
                                                <figure class="active fa fa-star"></figure>
                                                <figure class="active fa fa-star"></figure>
                                            </span>
                                            <span class="reviews">13</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="section-title">
                            <h2>Latest User</h2>
                        </div>
                        <div class="testimonials center box">
                            <div class="owl-carousel owl-loaded owl-drag" data-owl-items="1" data-owl-nav="0" data-owl-dots="1">

                            <div class="owl-stage-outer owl-height" style="height: 245px;">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 526px;">
                                    <div class="owl-item active" style="width: 263px;">
                                        <blockquote>

                                            <div class="image">
                                                <div class="bg-transfer">
                                                    <img src="{{ Gravatar::src($recentUser['email'] ? $recentUser['name'] : 'restowaze@gmail.com') }}" class="user-image" alt="User Image">
                                                </div>
                                            </div>

<!--
                                    <div class="image">
                                        <div class="bg-transfer" style="background-image: url(&quot;assets/img/person-01.jpg&quot;);">
                                            <img src="assets/img/person-01.jpg" alt="">
                                        </div>
                                    </div>
-->
                                            <h3>{{ !empty($recentUser['name']) ? $recentUser['name'] : $recentUser['firstname'] }}</h3>
                                            <h4></h4>
                                            <p></p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                           </div>
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
