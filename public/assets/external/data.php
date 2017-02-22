<?php

echo json_encode(
[
    [
        'id' => 1,
        'latitude' => 14.6763222,
        'longitude' => 120.5321418,
        'featured' => 1,
        'title' => "Fortune Hong Kong Seafood Restaurant",
        'location' => "One Magnolia Place, Capitol Drive, San Jose, Balanga City, 2100, Bataan, Philippines",
        'city' => 1,
        'phone' => "361-492-2356",
        'email' => "hello@markys.com",
        'website' => "http://www.markys.com",
        'category' => "Restaurant",
        'rating' => "4",
        'reviews_number' => "6",
        'marker_image' => "assets/img/items/1.jpg",
        'gallery' => array(
            "assets/img/items/1.jpg",
            "assets/img/items/2.jpg",
            "assets/img/items/12.jpg"
        ),
        'tags' => array(
            "Wi-Fi",
            "Parking",
            "TV",
            "Vegetarian"
        ),
        'additional_info' => "Average price $30",
        'url' => "{{ url('/detail', 1) }}",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis, arcu non hendrerit imperdiet, metus odio scelerisque elit, sed lacinia odio est ac felis. Nam ullamcorper hendrerit ullamcorper. Praesent quis arcu quis leo posuere ornare eu in purus. Nulla ornare rutrum condimentum. Praesent eu pulvinar velit. Quisque non finibus purus, eu auctor ipsum.",
        'reviews' => array(
            [
                'author_name' => "Jane Doe",
                'author_image' => "assets/img/person-01.jpg",
                'date' => '09.05.2016',
                'rating' => 4,
                'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
            ],
            [
                'author_name' => "Norma Brown",
                'author_image' => "assets/img/person-02.jpg",
                'date' => '09.05.2016',
                'rating' => 4,
                'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
            ]
        ),
        'opening_hours' => array(
            "08:00am - 11:00pm",
            "08:00am - 11:00pm",
            "12:00am - 11:00pm",
            "08:00am - 11:00pm",
            "03:00pm - 02:00am",
            "03:00pm - 02:00am",
            "Closed"
        ),
    ],

    [
        'id' => 2,
        'latitude' => 14.679667,
        'longitude' => 120.541293,
        'featured' => 0,
        'title' => "The Plaza Hotel Balanga City",
        'location' => "J.P. Rizal Street, Poblacion, City of Balanga, 2100 Bataan, Philippines",
        'city' => 1,
        'contact' => "989-410-0777",
        'category' => "Restaurant",
        'rating' => "3",
        'reviews_number' => "12",
        'marker_image' => "assets/img/items/2.jpg",
        'gallery' => array(
            "assets/img/items/2.jpg",
            "assets/img/items/4.jpg",
            "assets/img/items/12.jpg"
        ),
        'additional_info' => "",
        'url' => "detail.html",
        'description' => "Aliquam vel turpis sagittis, semper tellus eget, aliquam turpis. Cras aliquam, arcu",
        'today_menu' => array(
            [
                'meal_type' => "Starter",
                'meal' => "Smoked Salmon, Classic Condiments, Brioche"
            ],
            [
                'meal_type' => "Soup",
                'meal' => "Roasted Golden Beets, Goat Cheese, Hazelnut Granola"
            ],
            [
                'meal_type' => "Main course",
                'meal' => "Napoleon of Rabbit Loin, Braised Leek, Fava Bean Puree"
            ]
        ),
        'reviews' => array(
            [
                'author_name' => "Jane Doe",
                'author_image' => "assets/img/person-01.jpg",
                'date' => '09.05.2016',
                'rating' => 4,
                'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
            ],
            [
                'author_name' => "Norma Brown",
                'author_image' => "assets/img/person-02.jpg",
                'date' => '09.05.2016',
                'rating' => 4,
                'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
            ]
        ),
    ],

    [
        'id' => 3,
        'address' => "Aguirre St., Poblacion ( beside St. Joseph 's Cathedral), Balanga City, Bataan, Philippines",
        'featured' => 0,
        'latitude' => 14.679781,
        'longitude' => 120.540335,
        'title' => "Max's Restaurant",
        'location' => "Aguirre St., Poblacion",
        'city' => 1,
        'contact' => "<i class='fa fa-phone'></i>323-843-4729",
        'category' => "Restaurant",
        'rating' => "5",
        'reviews_number' => "15",
        'marker_image' => "assets/img/items/4.jpg",
        'gallery' => array(
            "assets/img/items/4.jpg",
            "assets/img/items/2.jpg",
            "assets/img/items/12.jpg"
        ),
        'tags' => array(
            "Wi-Fi",
            "Parking",
            "TV",
            "Vegetarian"
        ),
        'ribbon' => "Last Tickets!",
        'additional_info' => "Starts at 19:00",
        'url' => "detail.html",
        'description' => "Sed ac dolor auctor, elementum lacus vitae, efficitur magna. Quisque sed semper tellus",
    ],
]
);
