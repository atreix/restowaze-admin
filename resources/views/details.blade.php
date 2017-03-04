@extends('layouts.blank')

@section('main_container')
   <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('restowaze-path') }}">Home</a></li>
            <li><a href="#">Restaurant</a></li>
            <li class="active">Details</li>
        </ol>
        <section class="page-title">
            <div class="pull-left">
                <h1>{{ $details['name'] }}</h1>
                <h3>{{ $details['address'] }}</h3>
                <div class="rating-passive" data-rating="{{ $details['rating'] }}">
                    <span class="stars"></span>
                    <span class="reviews">{{ $details['review_count'] }}</span>
                </div>
            </div>
            <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-star"></i>Write a review</a>
        </section>
    </div>
    <section>
        <div class="gallery detail">
            <div class="owl-carousel" data-owl-items="3" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-margin="2" data-owl-nav-container="#gallery-nav">
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
    <div class="container">
            <input type="hidden" id="latitude" value="{{ $details['latitude'] }}" />
            <input type="hidden" id="longitude" value="{{ $details['longitude'] }}" />
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <div id="gallery-nav"></div>
                    <section>
                        <h2>About this restaurant</h2>
                        <p>
                            {{ $details['description'] }}
                        </p>
                    </section>
                    <section class="box">
                        @if (!empty($menus))
                        <h2>Menu</h2>
                        <dl>
                            @foreach ($menus as $menu)
                            <div class="panel-body">
                                <div class="wrapper">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3"><strong>Title </strong></div>
                                        <div class="col-md-6 col-sm-6"><strong>Description</strong></div>
                                        <div class="col-md-3 col-sm-3"><strong>Meal Type</strong></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            {{ $menu['name'] }}
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            {{ $menu['description'] }}  <small class="text text-danger"> PHP {{ $menu['price'] }}</small> 
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            {{ $menu['type'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </dl>
                        @endif
                    </section>
                    <section>
                        <h2>Reviews</h2>
                        @if (!empty($reviews))
                        @foreach ($reviews as $review)
                        <div class="review">
                            <div class="image">
                                <div class="bg-transfer"><img src="{{ Gravatar::src($review['email'] ? $review['name'] : 'restowaze@gmail.com') }}" class="user-image" alt="User Image"></div>
                            </div>
                            <div class="description">
                                <figure>
                                    <div class="rating-passive" data-rating="{{ $review['rating'] }}">
                                        <span class="stars"></span>
                                        <span class="reviews">{{ $count_review[$review['email']] }}</span>
                                    </div>
                                    <span class="user">by : {{ $review['name'] }}</span>
                                    <span class="date">on : {{ date('m.d.Y', strtotime($review['created_at'])) }}</span>
                                </figure>
                                <p>
                                    <strong> {{ title_case($review['title']) }} </strong>
                                    {{ $review['message'] }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </section>
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
                                            <div class="form-group">
                                                <label for="name">Your name<em>*</em></label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your first name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Your email address<em>*</em></label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Your valid email address" required="">
                                            </div>
                                             <div class="form-group">
                                                <label for="title">Title of your review<em>*</em></label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter an appropriate title" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Your Message<em>*</em></label>
                                                <textarea class="form-control" id="message" rows="8" name="message" required="" placeholder="Describe your experience"></textarea>
                                            </div>
                                            <div class="form-group pull-right">
                                                <button type="submit" class="btn btn-primary btn-rounded">Send Review</button>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="comment-title">
                                                <h4>Rating</h4>
                                            </div>
                                            <dl class="visitor-rating">
                                                <dt>Comfort</dt>
                                                <dd class="star-rating active" max-rating="5" data-name="comfort"></dd>
                                                <dt>Location</dt>
                                                <dd class="star-rating active" max-rating="5" data-name="location"></dd>
                                                <dt>Facilities</dt>
                                                <dd class="star-rating active" max-rating="5" data-name="facilities"></dd>
                                                <dt>Staff</dt>
                                                <dd class="star-rating active" max-rating="5" data-name="staff"></dd>
                                                <dt>Value for money</dt>
                                                <dd class="star-rating active" data-name="value"></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="detail-sidebar">
                        <section class="shadow">
                            <div class="map height-250px" id="map-detail"></div>
                            <div class="content">
                                <div class="vertical-aligned-elements">
                                    <div class="element text-align-right"><a href="https://www.google.com/maps?saddr=My+Location&daddr={{ $details['latitude'] }},{{ $details['longitude'] }}
" class="btn btn-primary btn-rounded btn-xs">Get direction</a></div>
                                </div>
                                <hr>
                                <address>
                                    <figure><i class="fa fa-map-marker"></i>{{ $details['address'] }}</figure>
                                    <figure><i class="fa fa-envelope"></i><a href="#">{{ $details['email'] }}</a></figure>
                                    <figure><i class="fa fa-phone"></i>{{ $details['phone_number'] }}</figure>
                                    <figure><i class="fa fa-globe"></i><a href="{{ $details['website'] }}"> Visit our page </a></figure>
                                </address>
                            </div>
                        </section>
                        <section>
                            @if (!empty($details['openinghours']))
                            <h2>Opening hours</h2>
                            <ul class="tags">
                                @foreach ($details['openinghours'] as $opening)
                                <li>{{ $opening }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
