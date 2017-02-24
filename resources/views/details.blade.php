@extends('layouts.blank')

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
                    <h1>{{ $details['name'] }}</h1>
                    <h3>{{ $details['address'] }}</h3>
                    <div class="rating-passive" data-rating="4">
                        <span class="stars"></span>
                        <span class="reviews">{{ $details['review'] }}</span>
                    </div>
                </div>
                <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-star"></i>Write a review</a>
            </section>

            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <section>
                        <div class="gallery detail">
                            <div class="owl-carousel" data-owl-nav="0" data-owl-dots="1">
                            
                                @foreach ($galleries as $gallery)
                                <div class="image">
                                    <div class="bg-transfer" style="background-image: url({{ $gallery }});">
                                        <img src="{{ url('/') }}/app/{{ $gallery }}" alt="">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <section>
                        <section>
                            <h2>About this Restaurant</h2>
                            <p>
                                {{ $details['description'] }}
                            </p>
                        </section>
                    </section>
                    <section class="box">
                        <h2>Menu</h2>
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
                        @if (!empty($reviews))
                        @foreach ($reviews as $review)
                        <div class="review">
                            <div class="image">
                                <div class="bg-transfer"><img src="{{ Gravatar::src($review['from'] ? $review['from'] : 'restowaze@gmail.com') }}" class="user-image" alt="User Image"></div>
                            </div>
                            <div class="description">
                                <figure>
                                    <div class="rating-passive" data-rating="{{ $review['rating'] }}">
                                        <span class="stars"></span>
                                        <span class="reviews">{{ $count_review[$review['from']] }}</span>
                                    </div>
                                    <span class="user">by : {{ $review['from'] }}</span>
                                    <span class="date">{{ date('m.d.Y', strtotime($review['created_at'])) }}</span>
                                </figure>
                                <p>
                                    <strong> {{ title_case($review['subject']) }} </strong>
                                    {{ $review['message'] }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                       
                        <!--end review-->
                    </section>
                    <input type="hidden" id="latitude" value="{{ $details['latitude'] }}" />
                    <input type="hidden" id="longitude" value="{{ $details['longitude'] }}" />
                    <section id="write-a-review">
                        <h2>Write a Review</h2>
                        <form class="clearfix form inputs-underline" method="POST" action="{{ route('write-review', $details['id']) }}">
                        {!! csrf_field() !!}
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
                                        <!--<div class="element">
                                            <img src="{{ url('/restaurant-logo/chowking_logo-2_116x40.png') }}" alt="">
                                            [LOGO HERE]
                                        </div>-->
                                        <div class="element text-align-right"><a href="{{ url('/get-direction') }}" class="btn btn-primary btn-rounded btn-xs">Get direction</a></div>
                                    </div>
                                    <hr>
                                    <address>
                                        <figure><i class="fa fa-map-marker"></i>{{ $details['address'] }}</figure>
                                        <figure><i class="fa fa-envelope"></i><a href="#">{{ $details['email'] }}</a></figure>
                                        <figure><i class="fa fa-phone"></i>{{ $details['phone_number'] }}</figure>
                                        <figure><i class="fa fa-globe"></i><a href="{{ $details['website'] }}"> visit our page </a></figure>
                                    </address>
                                </div>
                            </section>
                        </div>
                        <!--end detail-sidebar-->
                    </section>
                    <section>
                        <h2>Opening hours</h2>
                        <ul class="tags">
                            @foreach ($details['openinghours'] as $opening)
                            <li>{{ $opening }}</li>
                            @endforeach
                        </ul>
                    </section>
                </div>
            </div>
        </div>
        @include('sidebar-search-filter')
    </div>
</div>
@endsection
