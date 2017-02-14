@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('restowaze-path') }}">Home</a></li>
        <li><a href="#">Restaurant</a></li>
        <li class="active">Details</li>
    </ol>

    <div class="row">
        <div class="col-md-9 col-sm-9">
            <section class="page-title">
                <div class="pull-left">
                    <h1>{{ $name }}</h1>
                    <h3>{{ $address }}</h3>
                    <div class="rating-passive" data-rating="4">
                        <span class="stars"></span>
                        <span class="reviews">6</span>
                    </div>
                </div>
                <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-star"></i>Write a review</a>
            </section>

            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <section class="">
                        <div class="gallery detail">
                            <div class="owl-carousel owl-loaded owl-drag" data-owl-nav="0" data-owl-dots="1">
                                <div class="owl-stage-outer owl-height" style="height: 360px;">
                                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 2775px;">
                                    <div class="owl-item active" style="width: 555px;">
                                        <div class="image">
                                            <div class="bg-transfer" style="background-image: url('/restaurant-logo/image-1.jpg');">
                                                <img src="{{ url('/restaurant-logo/image-1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 555px;">
                                        <div class="image">
                                            <div class="bg-transfer" style="background-image: url('/restaurant-logo/image-2.jpg');">
                                                <img src="{{ url('/restaurant-logo/image-2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="owl-item" style="width: 555px;">
                                            <div class="image">
                                                <div class="bg-transfer" style="background-image: url('/restaurant-logo/image-3.jpg');">
                                                    <img src="{{ url('/restaurant-logo/image-3.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 555px;">
                                            <div class="image">
                                                <div class="bg-transfer" style="background-image: url('/restaurant-logo/image-4.jpg');">
                                                    <img src="{{ url('/restaurant-logo/image-4.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <div class="owl-prev"></div>
                                    <div class="owl-next"></div>
                                </div>
                                <div class="owl-dots">
                                    <div class="owl-dot active"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <section>
                            <h2>About this Restaurant</h2>
                            <p>
                                {{ $description }}
                            </p>
                        </section>
                    </section>

                    <section class="box">
                        <h2>Opening Hours</h2>
                        <dl>
                            <dt>Monday</dt>
                            <dd>08:00am - 11:00pm</dd>
                            <dt>Tuesday</dt>
                            <dd>08:00am - 11:00pm</dd>
                            <dt>Wednesday</dt>
                            <dd>12:00am - 11:00pm</dd>
                            <dt>Thursday</dt>
                            <dd>08:00am - 11:00pm</dd>
                            <dt>Friday</dt>
                            <dd>03:00pm - 02:00am</dd>
                            <dt>Saturday</dt>
                            <dd>03:00pm - 02:00am</dd>
                            <dt>Sunday</dt>
                            <dd>Closed</dd>
                        </dl>
                    </section>

                    <section>
                        <h2>Reviews</h2>
                        <div class="review">
                            <div class="image">
                                <div class="bg-transfer"><img src="{{ url('/assets/img/person-02.jpg') }}" alt=""></div>
                            </div>
                            <div class="description">
                                <figure>
                                    <div class="rating-passive" data-rating="4">
                                        <span class="stars"></span>
                                        <span class="reviews">6</span>
                                    </div>
                                    <span class="date">09.05.2016</span>
                                </figure>
                                <p>Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis</p>
                            </div>
                        </div>
                        <!--end review-->
                        <div class="review">
                            <div class="image">
                                <div class="bg-transfer"><img src="{{ url('/assets/img/person-01.jpg') }}" alt=""></div>
                            </div>
                            <div class="description">
                                <figure>
                                    <div class="rating-passive" data-rating="5">
                                        <span class="stars"></span>
                                        <span class="reviews">6</span>
                                    </div>
                                    <span class="date">09.05.2016</span>
                                </figure>
                                <p>Vestibulum vel est massa. Integer pellentesque non augue et accumsan. Maecenas molestie elit nibh,
                                    vel vestibulum leo condimentum quis. Duis ac orci a magna auctor vehicula.
                                </p>
                            </div>
                        </div>
                        <!--end review-->
                    </section>

                    <section id="write-a-review">
                        <h2>Write a Review</h2>
                        <form class="clearfix form inputs-underline" method="post" action="{{ route('write-review', $id) }}">
                            <div class="box">
                                <div class="comment">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="comment-title">
                                                <h4>Review your experience</h4>
                                            </div>
                                            <!--end title-->
                                            <div class="form-group">
                                                <label for="name">Title of your review<em>*</em></label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Beautiful place!" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Your Message<em>*</em></label>
                                                <textarea class="form-control" id="message" rows="8" name="message" required="" placeholder="Describe your experience"></textarea>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group pull-right">
                                                <button type="submit" class="btn btn-primary btn-rounded">Send Review</button>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-8-->
                                        <div class="col-md-5">
                                            <div class="comment-title">
                                                <h4>Rating</h4>
                                            </div>
                                            <!--end title-->
                                            <dl class="visitor-rating">
                                                <dt>Comfort</dt>
                                                <dd class="star-rating active" data-name="comfort"></dd>
                                                <dt>Location</dt>
                                                <dd class="star-rating active" data-name="location"></dd>
                                                <dt>Facilities</dt>
                                                <dd class="star-rating active" data-name="facilities"></dd>
                                                <dt>Staff</dt>
                                                <dd class="star-rating active" data-name="staff"></dd>
                                                <dt>Value for money</dt>
                                                <dd class="star-rating active" data-name="value"></dd>
                                            </dl>
                                        </div>
                                        <!--end col-md-4-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end comment-->
                            </div>
                            <!--end review-->
                        </form>
                        <!--end form-->
                    </section>
                </div>
                <!--end col-md-6-->
                <div class="col-md-4 col-sm-12">
                    <section>
                        <div class="detail-sidebar">
                            <section class="shadow">
                                <div class="map height-250px" id="map-detail"></div>
                                <!--end map-->
                                <div class="content">
                                    <div class="vertical-aligned-elements">
                                        <div class="element">
                                            <!--<img src="{{ url('/restaurant-logo/chowking_logo-2_116x40.png') }}" alt="">-->
                                            [LOGO HERE]
                                        </div>
                                        <!--<div class="element text-align-right"><a href="#" class="btn btn-primary btn-rounded btn-xs">Claim</a></div>-->
                                    </div>
                                    <hr>
                                    <address>
                                        <figure><i class="fa fa-map-marker"></i>{{ $address }}</figure>
                                        <figure><i class="fa fa-envelope"></i><a href="#">{{ $email }}</a></figure>
                                        <figure><i class="fa fa-phone"></i>{{ $phone_number }}</figure>
                                        <figure><i class="fa fa-globe"></i><a href="#">{{ $website }}</a></figure>
                                    </address>
                                </div>
                            </section>
                        </div>
                        <!--end detail-sidebar-->
                    </section>
                    <section>
                        <h2>Features</h2>
                        <ul class="tags">
                            <li>Wi-Fi</li>
                            <li>Parking</li>
                            <li>TV</li>
                            <li>Alcohol</li>
                            <li>Vegetarian</li>
                            <li>Take-out</li>
                            <li>Balcony</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
        @include('sidebar-search-filter')
    </div>
</div>
@endsection
