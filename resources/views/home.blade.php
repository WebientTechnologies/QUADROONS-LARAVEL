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
            height: 300px;
            position: relative;
            width: 100vw;
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
            right: 0;
            top: calc(25% + 40px);
            width: 100%;
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
            background-color: #dc0909;
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
            min-width: 161px;
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
                <div class="main-banner"><img src="/img/banner2.jpeg" width="100%" height="100%"> 
                    <div class="search-bar">
                    <div class="search-bar-box">
                        <h1 class="search-bar_title">Find fabrics for
                            <span class="fade-enter-active fade-enter-to"> home</span>
                        </h1> 
                        <div class="search-bar_wrapper"><input type="search" placeholder="Search fabrics by keywords..." required="required" class="input search-bar_input"> <button class="button button_searchBar"><span>Find a Fabric</span></button>
                        </div> <a href="/register?type=3" class="search-bar_link">I want to sell fabrics</a></div></div> 
                </div>
                <div class="home-page-content-section">
                    <!-- Add these dropdowns above the search bar -->
                    <form action="{{ route('home') }}" method="get">
                        <!-- Add these dropdowns above the search bar -->
                        <div class="filter-section">
                            <label for="category">Category:</label>
                            <select name="category" id="category" class="filter-dropdown">
                                <option value="">All</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>

                            <label for="subcategory">Subcategory:</label>
                            <select name="subcategory" id="subcategory" class="filter-dropdown">
                                <option value="">All</option>
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->category_name }}</option>
                                @endforeach
                            </select>

                            <label for="unitType">Unit Type:</label>
                            <select name="unitType" id="unitType" class="filter-dropdown">
                                <option value="">All</option>
                                @foreach($unitTypes as $unitType)
                                    <option value="{{ $unitType->id }}">{{ $unitType->unit_type }}</option>
                                @endforeach
                            </select>

                            <button type="submit" class="button button_applyFilter">Apply Filter</button>
                        </div>
                    </form>

                    <div class="container">
                        <div class="row">
                            @foreach($products as $index => $product)
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
            const searchButton = document.querySelector('.button_searchBar');
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
