<div class="col-md-3 col-sm-3">
    <aside class="sidebar">
        <section>
            <h2>Search Filter</h2>
            <form class="form inputs-underline">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Enter keyword">
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <select class="form-control selectpicker" name="location">
                        <option value="">Location</option>
                            <option value="1">New York</option>
                            <option value="2">Washington</option>
                            <option value="3">London</option>
                            <option value="4">Paris</option>
                    </select>
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <select class="form-control selectpicker" name="category">
                        <option value="">Category</option>
                            <option value="1">Restaurant</option>
                            <option value="2">Event</option>
                            <option value="3">Adrenaline</option>
                            <option value="4">Sport</option>
                            <option value="5">Wellness</option>
                    </select>
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <div class="ui-slider" id="price-slider" data-value-min="10" data-value-max="400" data-value-type="price" data-currency="$" data-currency-placement="before">
                        <div class="values clearfix">
                            <input class="value-min" name="value-min[]" readonly>
                            <input class="value-max" name="value-max[]" readonly>
                        </div>
                        <div class="element"></div>
                    </div>
                    <!--end price-slider-->
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary pull-right">Search Now<i class="fa fa-search"></i></button>
                </div>
                <!--end form-group-->
            </form>
        </section>
        <section>
            <h2>Recent Items</h2>
            <div class="item" data-id="1">
                <a href="detail.html">
                    <div class="description">
                        <figure>Average Price: $8 - $30</figure>
                        <div class="label label-default">Restaurant</div>
                        <h3>Marky’s Restaurant</h3>
                        <h4>63 Birch Street</h4>
                    </div>
                    <!--end description-->
                    <div class="image bg-transfer">
                        <img src="{{ url('/assets/img/items/1.jpg') }}" alt="">
                    </div>
                    <!--end image-->
                </a>
                <div class="controls-more">
                    <ul>
                        <li><a href="#">Add to favorites</a></li>
                        <li><a href="#">Add to watchlist</a></li>
                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                    </ul>
                </div>
            </div>
            <!--end item-->
            <div class="item" data-id="2">
                <a href="detail.html">
                    <div class="description">
                        <div class="label label-default">Restaurant</div>
                        <h3>Ironapple</h3>
                        <h4>4209 Glenview Drive</h4>
                    </div>
                    <!--end description-->
                    <div class="image bg-transfer">
                        <img src="{{ url('/assets/img/items/2.jpg') }}" alt="">
                    </div>
                    <!--end image-->
                </a>
                <div class="controls-more">
                    <ul>
                        <li><a href="#">Add to favorites</a></li>
                        <li><a href="#">Add to watchlist</a></li>
                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                    </ul>
                </div>
                <!--end controls-more-->
            </div>
            <!--end item-->
            <div class="item" data-id="15">
                <figure class="ribbon">Top</figure>
                <a href="detail.html">
                    <div class="description">
                        <figure>Happy hour: 18:00 - 19:00</figure>
                        <div class="label label-default">Bar & Grill</div>
                        <h3>Bambi Planet Houseboat Bar& Grill </h3>
                        <h4>3857 Losh Lane</h4>
                    </div>
                    <!--end description-->
                    <div class="image bg-transfer">
                        <img src="{{ url('../assets/img/items/3.jpg') }}" alt="">
                    </div>
                    <!--end image-->
                </a>
                <div class="controls-more">
                    <ul>
                        <li><a href="#">Add to favorites</a></li>
                        <li><a href="#">Add to watchlist</a></li>
                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                    </ul>
                </div>
                <!--end controls-more-->
            </div>
            <!--end item-->
        </section>
    </aside>
    <!--end sidebar-->
</div>
<!--end col-md-3-->
