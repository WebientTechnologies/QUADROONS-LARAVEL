<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        body {
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            overflow-x:hidden;
        }

        #page {
            background-color: #fff;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px; /* Adjust padding as needed */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow */
            background-color: #f8f9fa;
        }

        .page-header_left {
            text-rendering: optimizeSpeed;
            color: #000;
            font-family: Montserrat,Times New Roman,serif;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            font-size: 0;
            white-space: nowrap;
            box-sizing: border-box;
            gap: 48px;
            align-items: center;
            display: flex;
            justify-content: space-between;
        }

        .page-header_logo {
            text-rendering: optimizeSpeed;
            font-family: Montserrat,Times New Roman,serif;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            white-space: nowrap;
            color: #666;
            cursor: pointer;
            font-size: 12px;
            box-sizing: border-box;
            display: block;
            max-width: 100%;
            height: 50px;
            width: 100px;
        }

        .page-header_link{
            text-rendering: optimizeSpeed;
            font-family: Montserrat,Times New Roman,serif;
            line-height: 1.25;
            text-shadow: none;
            white-space: nowrap;
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            color: #000;
            font-size: 18px;
            font-weight: 550;
            text-decoration: none;
        }

        .button_catalog {
            /* Add your button styles here */
        }

        .page-header_right {
            display: flex;
            align-items: center;
        }

        .page-header_link {
            margin-right: 20px; /* Adjust margin as needed */
            /* Add your link styles here */
        }

        .button_signIn {
            /* Add your button styles here */
        }

        .page-header_help {
            display: flex;
            align-items: center;
        }

        .page-header_icon-help {
            /* Add styles for the help icon */
        }
        .main-banner {
            text-rendering: optimizeSpeed;
            color: #000;
            font-family: Montserrat, Times New Roman, serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            height: 100%;
            position: relative;
            width: 100vw;
            overflow: hidden;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            overflow: hidden;
        }

        .button_signIn {
            background-color: #ff0000; /* Red background color */
            color: #fff; /* White text color */
            padding: 10px 15px; /* Adjust padding as needed */
            border: none;
            border-radius: 5px; /* Add rounded corners */
            text-decoration: none;
            cursor: pointer;
            font-size: 16px; /* Adjust font size as needed */
        }

        .search-bar {
            text-rendering: optimizeSpeed;
            color: #000;
            font-family: Montserrat,Times New Roman,serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            bottom: 0;
            position: absolute;
            top: calc(35% + 40px);
            width: 100%;
            left: 17%;
            
        }

        .search-bar-box {
            text-rendering: optimizeSpeed;
            color: #000;
            font-family: Montserrat,Times New Roman,serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            margin: 0 auto;
            max-width: 1160px;
        }

        .search-bar_title {
            text-rendering: optimizeSpeed;
            color: #000;
            font-family: Montserrat,Times New Roman,serif;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            margin: 0;
            font-size: 30px;
            margin-bottom: 25px;
        }

        .search-bar_wrapper {
            text-rendering: optimizeSpeed;
            color: #000;
            font-family: Montserrat,Times New Roman,serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            display: flex;
        }

        .search-bar_input {
            box-sizing: border-box;
            font: inherit;
            background-color: #fff;
            border-radius: 7px 0 0 7px;
            color: #333;
            font-size: 1.2rem;
            margin: 0;
            padding: 15px;
            display: block;
            height: 50px;
            transition: all .3s;
            width: 604px;
            border: 0;
        }

        .button_searchBar {
            box-sizing: border-box;
            font: inherit;
            align-items: center;
            border: 1px solid #dc0909;
            color: #fff;
            cursor: pointer;
            display: flex;
            font-weight: 500;
            justify-content: center;
            padding: 12px;
            border-radius: 0 7px 7px 0;
            font-size: 16px;
            height: 50px;
            min-width: 64px;
        }

        .search-bar_link {
            text-rendering: optimizeSpeed;
            font-family: Montserrat,Times New Roman,serif;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            cursor: pointer;
            text-decoration: none;
            color: #666;
            display: block;
            font-size: 12px;
            margin-top: 10px;
        }

        .col-md-2_4 {
            flex: 0 0 20%; /* 20% width for each card in a row */
            max-width: 20%;
        }
            .card {
            display: flex;
            flex-direction: column; /* Change from row to column */
            height: 100%; /* Ensure each card takes the full height of the container */
        }

        .card-img-container {
            width: 100%; /* Make the image container take the full width of the card */
            height: 60%; /* Set a fixed height for the image container */
            overflow: hidden; /* Hide any overflow to maintain fixed height */
        }

        .card-img-container img {
            width: 100%;
            height: 100%; /* Make the image take the full height of its container */
            object-fit: cover;
        }

        .card-info-container {
            width: 100%; /* Make the info container take the full width of the card */
            padding: 1rem;
            box-sizing: border-box;
        }

        .home-page-content-section {
            padding: 60px 120px 0;
        }

        .container {
            max-width: 1160px; /* Limit the maximum width of the container */
            margin: 0 auto; /* Center the container on the page */
        }

        .custom-styling {
            text-rendering: optimizeSpeed;
            font-family: Montserrat, Times New Roman, serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            background: #fff;
            border-radius: 10px;
            color: #000;
            filter: drop-shadow(0 0 10px #EAEAEA);
            height: 291px;
            width: 198px;
            overflow: hidden;
        }
       
        .filter-section {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .filter-section label {
            font-weight: bold;
        }

        .filter-dropdown {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button_applyFilter {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button_applyFilter:hover {
            background-color: #45a049;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }

        .footer-menu {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .footer-menu-item {
            margin: 0 15px;
        }

        .social-icons {
            margin-bottom: 20px;
        }

        .social-icon {
            margin: 0 10px;
        }

        .footer-links a {
            margin: 0 10px;
            color: #333;
            text-decoration: none;
        }

        .copyright {
            margin-top: 20px;
            color: #777;
        }

        .category-section {
            margin-top: 20px; /* Adjust the space above the category section */
        }

        .subcategory-section {
            margin-top: 20px; /* Adjust the space above the category section */
        }
        .category-heading {
            font-size: 0.8em; /* Adjust the font size as needed */
            margin-bottom: 10px; /* Adjust the space below the heading */
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .all {
            font-size: 0.5em; /* Adjust the font size as needed */
            margin-bottom: 10px;
            margin-left: 15px;
        }

        .category-slider {
            overflow: hidden;
            position: relative;
        }

        .category-cards {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .category-card {
            flex: 0 0 auto;
            max-width: 128px;
            min-height: 146px;
            margin-right: 10px; /* Adjust the gap between cards */
            text-align: center;
        }
        .subcategory-cards{
            text-rendering: optimizeSpeed;
            color: #000;
            font-family: Montserrat,Times New Roman,serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            display: flex;
            gap: 20px;
            margin-top: 25px;
        }

        .industry-cards{
            text-rendering: optimizeSpeed;
            color: #000;
            font-family: Montserrat,Times New Roman,serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            display: flex;
            gap: 20px;
            margin-top: 25px;
        }

        .subcategory-card{
            text-rendering: optimizeSpeed;
            font-family: Montserrat,Times New Roman,serif;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            color: #666;
            font-size: 12px;
            text-decoration: none;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            overflow: hidden;
            position: relative;
            text-align: center;
        }

        .industry-card{
            text-rendering: optimizeSpeed;
            font-family: Montserrat,Times New Roman,serif;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            color: #666;
            font-size: 12px;
            text-decoration: none;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            overflow: hidden;
            position: relative;
            text-align: center;
        }

        .subcategory-text {
            font-size: 20px
        }

        .category-card img {
            max-width: 100%;
            max-height: 100%;
        }

        
        .slider-arrows {
            display: flex;
            align-items: center;
        }

        .slider-button {
            padding: 5px 10px;
            background-color: #ccc;
            text-decoration: none;
            color: #333;
            cursor: pointer;
            margin-left: 10px;
        }

        .button.button_showMore{
            text-rendering: optimizeSpeed;
            font-family: Montserrat,Times New Roman,serif;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            text-decoration: none;
            align-items: center;
            cursor: pointer;
            display: flex;
            font-weight: 500;
            justify-content: center;
            padding: 12px;
            border-radius: 10px;
            font-size: 16px;
            height: 50px;
            margin: 5px auto 0;
            max-width: 152px;
            box-shadow: 0 0 14px 0 #ececec;
            background-color: #dc0909;
            border: 1px solid #dc0909;
            color: #fff;
            margin-bottom:30px;
        }


    </style>
</head>
<body>
    <div id="page">
        <div class="page-header">
            <div class="page-header_left">
                <div>
                    <a href="/" aria-current="page" class="router-link-exact-active router-link-active">
                        <img src="/img/quad.png" alt="Stocko" class="page-header_logo">
                    </a>
                </div> 
            </div> 
            <div class="page-header_right">
                <a href="{{ url('/about') }}" class="page-header_link">About</a> 
                <a href="{{ url('/contact') }}" class="page-header_link">Contact</a>
                <a href="{{ url('/faq') }}" class="page-header_link">FAQ</a>   
                <a href="{{ url('/login') }}" class="button button_signIn">LogIn</a> 
            </div> 
        </div>
        <div class = "layout-wrapper">
            <div>
                <div class="main-banner">
                    <div class="slider">
                        <div class="slide">
                            <img src="/img/banner2.jpeg" alt="Slider Image 1" width="100%" height="100%">
                        </div>
                        <div class="slide">
                            <img src="/img/banner1.jpg" alt="Slider Image 2" width="100%" height="100%">
                        </div>
                        <div class="slide">
                            <img src="/img/bbb.jpg" alt="Slider Image 3" width="100%" height="100%">
                        </div>
                        <!-- Add more slides as needed -->
                    </div>

                    <div class="search-bar">
                        <div class="search-bar-box">
                            <div class="search-bar_wrapper">
                                <input type="search" placeholder="Search fabrics by keywords..." required="required" class="input search-bar_input">
                                <img src="/img/search-logo.jpg" alt="Find a Fabric" class="search-button" style="width: 64px; height: 50px; border: 1px solid #fff; cursor: pointer; border-radius: 0 7px 7px 0;" onclick="findFabric()">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-page-content-section">
                    <div class="category-section">
                        
                        <div class="subcategory-section">
                            
                            <div  class="category-heading"> <h2>Browse by Product<a href="{{ route('product') }}" class= "all">See All</a></h2></div>
                            
                                <div class="industry-cards">
                                    @foreach($industries as $industry)
                                        <div class="industry-card">
                                            <a href="{{ route('product', ['industry' => $industry->id]) }}" style = "text-decoration:none;">
                                                <img src="/img/{{$industry->image}}">
                                                <p class="subcategory-text">{{ $industry->name }}</p>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                        </div>

                        <div class="subcategory-section">
                                <div  class="category-heading"> <h2>Browse by Category<a href="{{ route('product') }}" class= "all">See All</a></h2> 
                                    <div clsss= "slider-arrows"> 
                                    <a class="button slider-button left">&lt;</a>
                                    <a class="button slider-button right">&gt;</a>
                                    </div>
                                </div>
                                <div class="category-slider">
                                    <div class="category-cards">
                                        @foreach($categories as $category)
                                            <div class="category-card">
                                                @php
                                                    $imageName = strtolower(str_replace(' ', '_', $category->category_name));
                                                @endphp
                                                <a href="{{ route('product', ['category' => $category->id]) }}" style = "text-decoration:none;">
                                                    <img src="/img/{{ $imageName }}.png" alt="{{ $category->category_name }}">
                                                    <p>{{ $category->category_name }}</p>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="subcategory-section">
                        <div  class="category-heading"> <h2>Browse by Usage<a href="{{ route('product') }}" class= "all">See All</a></h2></div>
                        
                            <div class="subcategory-cards">
                                @foreach($subcategories as $subcategory)
                                    <div class="subcategory-card">
                                        @php
                                            $imageName = strtolower(str_replace(' ', '_', $subcategory->category_name));
                                        @endphp
                                        <a href="{{ route('product', ['subcategory' => $subcategory->id]) }}" style = "text-decoration:none;">
                                            <img src="/img/{{ $imageName }}.jpg" alt="{{ $subcategory->category_name }}">
                                            <p class="subcategory-text">{{ $subcategory->category_name }}</p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                    <!-- Add these dropdowns above the search bar -->
                    <form action="{{ route('home') }}" method="get">
                        <!-- Add these dropdowns above the search bar -->
                        
                    </form>
                    <div class="subcategory-section">
                        <div  class="category-heading"> <h2>Ready to Ship Goods<a href="{{ route('product') }}" class= "all">See All</a></h2></div>
                        <div class="container">
                            <div class="row">
                                @foreach($products->take(5) as $index => $product)
                                    <div class="col-md-2_4 mb-4">
                                        <div class="card custom-styling">
                                            @php
                                                $productImage = $product->default_image ? $product->default_image : '/img/1.jpg';
                                            @endphp
                                            <div class="card-img-container">
                                                <img src="{{ $productImage }}" class="card-img-top" alt="Product Image">
                                            </div>
                                            <div class="card-info-container">
                                                <h5 class="card-title">{{ $product->name }}</h5>
                                                <p class="card-text">Price: {{ $product->price }}</p>
                                                <p class="card-text">{{ $product->description }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    @if(($index + 1) % 5 == 0)
                                        </div>
                                        <div class="row">
                                    @endif
                                @endforeach
                            </div>
                            <div class="text-center mt-3">
                                <a href="{{ route('product') }}" class="button button_showMore">Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.querySelector('.search-bar_input');
            const searchButton = document.querySelector('.search-button');
            searchButton.addEventListener('click', performSearch);

            searchInput.addEventListener('keyup', function (event) {
                if (event.key === 'Enter') {
                    performSearch();
                }
            });

            function performSearch() {
                const query = searchInput.value.toLowerCase().trim();

                const cards = document.querySelectorAll('.custom-styling');
                cards.forEach(card => {
                    const productName = card.querySelector('.card-title').textContent.toLowerCase();
                    card.style.display = productName.includes(query) ? 'flex' : 'none';
                });
            }
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryCards = document.querySelector('.category-cards');
        const sliderButtonLeft = document.querySelector('.slider-button.left');
        const sliderButtonRight = document.querySelector('.slider-button.right');
        let scrollAmount = 0;

        sliderButtonLeft.addEventListener('click', function () {
            scrollAmount += 150; // Adjust the scroll amount as needed
            if (scrollAmount > 0) {
                scrollAmount = 0;
            }
            categoryCards.style.transform = `translateX(${scrollAmount}px)`;
        });

        sliderButtonRight.addEventListener('click', function () {
            const cardWidth = document.querySelector('.category-card').offsetWidth;
            const maxScroll = (categoryCards.scrollWidth - categoryCards.clientWidth);
            scrollAmount -= 150; // Adjust the scroll amount as needed
            if (scrollAmount < -maxScroll) {
                scrollAmount = -maxScroll;
            }
            categoryCards.style.transform = `translateX(${scrollAmount}px)`;
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryCards = document.querySelector('.industry-cards');
        const sliderButtonLeft = document.querySelector('.slider-button.left');
        const sliderButtonRight = document.querySelector('.slider-button.right');
        let scrollAmount = 0;

        sliderButtonLeft.addEventListener('click', function () {
            scrollAmount += 150; // Adjust the scroll amount as needed
            if (scrollAmount > 0) {
                scrollAmount = 0;
            }
            categoryCards.style.transform = `translateX(${scrollAmount}px)`;
        });

        sliderButtonRight.addEventListener('click', function () {
            const cardWidth = document.querySelector('.industry-card').offsetWidth;
            const maxScroll = (categoryCards.scrollWidth - categoryCards.clientWidth);
            scrollAmount -= 150; // Adjust the scroll amount as needed
            if (scrollAmount < -maxScroll) {
                scrollAmount = -maxScroll;
            }
            categoryCards.style.transform = `translateX(${scrollAmount}px)`;
        });
    });
</script>

<script>
        $(document).ready(function () {
        let currentIndex = 0;
        const slides = $('.slide');
        const totalSlides = slides.length;

        function showSlide() {
            currentIndex++;
            if (currentIndex >= totalSlides) {
                currentIndex = 0;
            }

            const translateValue = -currentIndex * 100 + '%';
            $('.slider').css('transform', 'translateX(' + translateValue + ')');
        }

        setInterval(showSlide, 3000);
    });
</script>


<footer class="footer">
    <div class="container">
        <div class="footer-menu">
            <div class="footer-menu-item">
                <a href="{{ url('/about') }}">About</a>
            </div>
            <div class="footer-menu-item">
                <a href="{{ url('/contact') }}">Contact</a>
            </div>
            <div class="footer-menu-item">
                <a href="{{ url('/faq') }}">FAQ</a>
            </div>
        </div>

        <div class="social-icons">
            <!-- Add your social media icons or links here -->
            <a href="#" class="social-icon"><img src="/img/linkedin.png" alt="Linkdin"></a>
            <a href="#" class="social-icon"><img src="/img/twitter.png" alt="Twitter"></a>
            <!-- Add more social media icons as needed -->
        </div>

        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
        </div>

        <div class="copyright">
            &copy;All rights reserved.
        </div>
    </div>
</footer>
</body>
</html>
