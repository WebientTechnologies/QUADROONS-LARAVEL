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

        .about-page-content-section{
            text-rendering: optimizeSpeed;
            color: #000;
            font-family: Montserrat,Times New Roman,serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.25;
            text-shadow: none;
            box-sizing: border-box;
            margin: 0 auto;
            width: 1400px;
            padding: 0 50px;
        }

        .breadcrumb {
            align-items: center;
            display: flex;
            gap: 15px;
            padding: 22px 60px;
        }



        .breadcrumb-item:before {
            border-bottom: 2px solid #dc0909;
            border-right: 2px solid #dc0909;
            bottom: 5px;
            content: "";
            display: inline-block;
            height: 6px;
            position: absolute;
            right: -10px;
            transform: rotate(-45deg);
            width: 6px;
        }

        .breadcrumb-item:before {
            border-bottom: 2px solid #dc0909;
            border-right: 2px solid #dc0909;
            bottom: 5px;
            content: "";
            display: inline-block;
            height: 6px;
            position: absolute;
            right: -10px;
            transform: rotate(-45deg);
            width: 6px;
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
        .container{
            -webkit-text-size-adjust: 100%;
            line-height: 1.15;
            font-family: Montserrat,sans-serif;
            font-size: 14px;
            font-weight: 400;
            box-sizing: border-box;
            margin: 0 auto;
            max-width: 1440px;
            padding: 0 30px;
        }
        .content-holder{
            -webkit-text-size-adjust: 100%;
            font-family: Montserrat,sans-serif;
            font-size: 14px;
            font-weight: 400;
            box-sizing: border-box;
            line-height: 30px;
            margin: 0 auto;
            max-width: 970px;
            padding-bottom: 98px;
            padding-top: 45px;
        }
        .form-box{
            -webkit-text-size-adjust: 100%;
            font-family: Montserrat,sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 30px;
            box-sizing: border-box;
            margin: 0 auto;
            max-width: 630px;
            margin-top: 40px
        }
        .form-group{
            -webkit-text-size-adjust: 100%;
            font-family: Montserrat,sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 30px;
            box-sizing: border-box;
        }
        .input-col{
            -webkit-text-size-adjust: 100%;
            font-family: Montserrat,sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 30px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        .form-control{
            -webkit-text-size-adjust: 100%;
            font-family: inherit;
            font-size: 100%;
            margin: 0;
            overflow: visible;
            box-sizing: border-box;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            line-height: 24px;
            outline: 0;
            padding: 7px 15px;
            width: 200%;
        }
        .submit-col{
            -webkit-text-size-adjust: 100%;
            font-family: Montserrat,sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 30px;
            box-sizing: border-box;
            text-align: center;
        }
        .btn{
            -webkit-text-size-adjust: 100%;
            margin: 0;
            overflow: visible;
            box-sizing: border-box;
            border: 0;
            -webkit-appearance: button;
            background: #ff0000;
            border-radius: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,.1);
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: Montserrat,sans-serif;
            font-size: 14px;
            font-weight: 500;
            line-height: 30px;
            min-width: 170px;
            outline: none;
            padding: 5px;
            text-align: center;
            transition: all .3s ease;
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
                <div class="main-banner"><img src="/img/contact.jpeg" width="100%" height="100%"> 
                <div aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li aria-current="page" class="breadcrumb-item active"><a href="/" class="router-link-active">Home</a></li>
                            <!-- <li aria-current="page" class="breadcrumb-item active"><img src="/img/ra2.png" width="5%" height="5%"></li> -->
                            <li aria-current="page" class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div>
                </div>
                <div class="container">
                <div class="content-holder">
                    <div class="form-box">
                        <form method="post" class="form-group" action="https://stocko.pro/help/send">
                            <input type="hidden" name="_token" value="jIq7PlwBr8ERfW029NiA5lW88jgxJ16C5AP56pmP">                            <div class="input-col">
                                <label>
                                    <p>Your Name:</p>
                                    <input type="text" name="name" value="" class="form-control" placeholder="Enter Your name" required="">
                                                                    </label>
                            </div>
                            <div class="input-col">
                                <label>
                                    <p>Your E-mail:</p>
                                    <input type="email" name="email" value="" class="form-control" placeholder="Enter your E-mail" required="">
                                                                    </label>
                            </div>
                            <div class="input-col">
                                <label>
                                    <p>Describe your issue</p>
                                    <textarea name="message_text" rows="3" class="form-control" placeholder="Enter question or describe issue"> </textarea>
                                                                    </label>
                            </div>
                            <div class="submit-col">
                                <input type="submit" class="btn" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


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
