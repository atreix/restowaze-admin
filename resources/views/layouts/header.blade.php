<body class="homepage">
    <input type="hidden" id="map-restaurantsx" name="map-restaurantsx" value="assets/external/data.php" />
    <input type="hidden" id="map-restaurants" name="map-restaurants" value="http://127.0.0.1:9003/get-restaurants" />
    <div class="page-wrapper">
        <header id="page-header">
            <nav>
                <div class="left">
                    <a href="{{ env('restowaze_path') }}" class="brand">
                        <img src="{{ asset('/assets/img/rw-logo.png') }}" alt="">
                    </a>
                </div>
                <div class="right">
                    <div class="secondary-nav">
                        @if (Auth::check())
                        <a href="{{ url('/logout') }}">Sign Out</a>
                        @else
                        <a href="{{ route('sign-in') }}">Sign In</a>
                        <a href="{{ route('registration') }}" class="promoted">Register</a>
                        @endif
                    </div>
                </div>
            </nav>
        </header>
