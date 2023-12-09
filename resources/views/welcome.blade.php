@extends('layout.app')

@section('title')
    Sell Karo
@endsection

@section('content')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Karo</title>
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="https://cashforphone.in/assets/css/main.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add Bootstrap CSS and JavaScript links -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+6fuF5aP5f6u0t8f5dK5f5kLeqq9HJQ1s3O5C5F5f5e5u5E5V5u5t5D5B5U5L5B5u5V5u5T5E5V5u5T5E5V5u5T5E5="
        crossorigin="anonymous"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-7J5uVOkXw5Rho4vb5b7fRTf/7f5F4v5f5n5v5i5s5I5P5u5T5E5u5t5D5B5U5L5B5u5V5u5T5E5V5u5T5E5="
        crossorigin="anonymous"></script> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <style>
        li>a {
            text-decoration: none;
            list-style: none;
            font-size: 15px;
            color: white;
        }

        li {
            list-style: none;
        }

        /* .icon {
            background-color: #eb7c15;
        } */

        @media(min-width:100px) and (max-width:325px) {
            .navbar-toggler {
                margin-left: 40px;
            }

            .mx {
                margin-right: 7px;
            }
        }

        @media(min-width:325px) and (max-width:480px) {
            .navbar-toggler {
                margin-left: 90px;
            }

            .mx {
                margin-right: 7px;
            }
        }

        ul a {
            text-decoration: none;
        }

        .ml-auto {
            margin-left: auto !important;
        }

        /* Move logo to the left */

        .navbar-brand {
            margin-right: auto !important;
        }
    </style>

</head>


<body>
    <!-- ======================carsoul================ -->
    <section>
        <div id="search-section" style="display: block;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 py-5">


                        <!-- Search Field -->
                        <h1 style="display:none"></h1>
                        <input id="search-box" class="form-control col-lg3 py-3"
                            placeholder="What are you looking to sell ?" type="text" style="font-size: 20px">
                        <div id="suggesstion-box" style="display: none;">
                            <ul>
                                <li><a>iphone 5</a></li>
                                <li><a>Mi 5</a></li>
                            </ul>
                        </div>
                        {{-- <h5 style="display:none">e.g:- Samsung J7 , iPhone8 etc...</h5> --}}

                    </div>
                </div>
            </div>
        </div>

    </section>


    <section>
        <div class="page-question">
            <div class="container-fluid">
                <div class="page-question-text mx-4 mt-4 py-4">
                    What does your phone need today ?
                </div>
            </div>
        </div>
    </section>

    {{-- =-=-=-=-= Categories =-=-=-=-=-=-= --> --}}
    <section class="custom-padding gray categories">
        <!-- Main Container -->
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <!-- Category -->
                <div class="col-md-4 col-sm-8">
                    <a href="">
                        <div class="box">
                            <img alt="img" src="https://cashforphone.in/assets/images/hand.png"
                                style="height:94px;width:90px;">
                            <h4>Sell Device</h4>
                            <strong>Sell your device with us </strong>
                        </div>
                    </a>
                </div>
                <!-- Category -->
                <div class="col-md-4 col-sm-8">
                    <a href="/product">
                        <div class="box">
                            <img alt="img" src="https://cashforphone.in/assets/images/hand.png"
                                style="height:94px;width:90px;">
                            <h4>Repair Device</h4>
                            <strong> Get your device repaired with us </strong>
                        </div>
                    </a>
                </div>
                <!-- Category -->
                <div class="col-md-4 col-sm-8">
                    <a href="">
                        <div class="box">
                            <img alt="img" src="https://cashforphone.in/assets/images/hand.png"
                                style="height:94px;width:90px;">
                            <h4>Buy Device</h4>
                            <strong> Buy a new device from us </strong>
                        </div>
                    </a>
                </div>

                <!-- Row End -->
            </div>
            <!-- Main Container End -->
    </section>


    <!-- =-=-=-=-=-=-= Categories =-=-=-=-=-=-= -->
    <section class="section-padding white">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>How It <span class="heading-color"> Works</span></h1>
                    </div>
                </div>
                <!-- Middle Content Box -->
                <div class="col-xs-12 col-md-12 col-sm-12 ">
                    <div class="row">
                        <div class="how-it-work text-center">
                            <div class="how-it-work-icon"> <i class="flaticon-people"></i> </div>
                            <h4>Get Your Device Valuation</h4>
                            <p>
                                Download the Cashforphone app , create an account ,
                                answer a couple of questions about your overall phone condition and get the best price.
                            </p>
                        </div>
                        <div class="how-it-work text-center ">
                            <div class="how-it-work-icon"> <i class="flaticon-people-2"></i> </div>
                            <h4>Schedule Pickup</h4>
                            <p>
                                If satisfied with the price , choose a time slot of your convenience & payment mode.
                                Our field agent will give you a visit at your chosen time.
                            </p>
                        </div>
                        <div class="how-it-work text-center">
                            <div class="how-it-work-icon "> <i class="flaticon-heart-1"></i> </div>
                            <h4>Get Paid</h4>
                            <p>
                                Get paid in cash or online transfer for your used phones. We accept cash , credit card ,
                                debit card and bank transfer for repair and sell.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Middle Content Box End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>


    <section class="bg-secondary">
        <div class="app-download-section style-2">
            <!-- app-download-section-wrapper -->
            <div class="app-download-section-wrapper">
                <!-- app-download-section-container -->
                <div class="app-download-section-container">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 py-4">
                                <div class="mobile-image-content"> <img
                                        src="https://cashforphone.in/assets/images/hand.png" style="height: 500px"
                                        alt=""> </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 mt-5">
                                <div class="app-text-section">
                                    <h5>Download our app</h5>
                                    <h3>Get Our App For Your Mobile</h3>
                                    <ul>
                                        <li>Find a large number of devices here</li>
                                        <li>Find your phone details by just opening app and get price by auto-detection
                                        </li>
                                        <li>Browse a device to know how much price can it be sold for</li>
                                        <li>Browse a device to know how much price can it be repaired for</li>
                                    </ul>
                                    <div class="app-download-btn">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <!-- Windows Store -->
                                                <a href="" title="Google Play"
                                                    class="btn border app-download-button">
                                                    <span class="app-store-btn">
                                                        <i class="fa fa-android"></i>
                                                        <span>
                                                            <span>Download From</span>
                                                            <span>Google Play </span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <!-- /Windows Store -->
                                            </div>
                                            <div class="col-md-6 col-sm-12  col-xs-12">
                                                <!-- Windows Store -->
                                                <a href="" title="Apple Store"
                                                    class="btn border app-download-button"> <span
                                                        class="app-store-btn">
                                                        <i class="fa fa-apple"></i>
                                                        <span>
                                                            <span>Download From</span> <span>Apple Store </span> </span>
                                                    </span>
                                                </a>
                                                <!-- /Windows Store -->
                                            </div>
                                            <!-- Windows Store -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /app-download-section-container -->
            </div>
            <!-- /download-section-wrapper -->
        </div>
        <!-- =-=-=-=-=-=-= App Download Section End =-=-=-=-=-=-= -->
    </section>

    <section class="custom-padding gray">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                        <h3 class="main-title text-left">
                            Testimonials
                        </h3>
                    </div>
                </div>
                <!-- Middle Content Box -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="testimonial-slider owl-carousel owl-theme ">

                            <div class="item ">

                                <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box" style="background-color: white;">
                                        <!-- Ad Img -->

                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <!--                                       <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>-->
                                            <!-- Ad Title -->
                                            <p>“<i>I had an amazing experience with cashforphone.There was no bargaining
                                                    on the price shown on the website.Got paid instantly.</i>”</p>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Dhanesh</li>
                                                <li class="hidden"><i class="fa fa-leanpub"></i> Web designer </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box" style="background-color: white;">
                                        <!-- Ad Img -->

                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <!--                                       <div class="category-title"> <span><a href="#">Mobile Phones</a></span> </div>-->
                                            <!-- Ad Title -->
                                            <p>“<i>Cashforphone offered best price for my used iPhone 7.
                                                    I sold instantly on its website with no hassle. Good customer
                                                    service also.
                                                </i>”</p>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Nakul</li>
                                                <li class="hidden"><i class="fa fa-leanpub"></i> Graphics designer
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                            </div>
                            <div class="item">

                                <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box" style="background-color: white;">
                                        <!-- Ad Img -->

                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <!--                                       <div class="category-title"> <span><a href="#">Real Estate</a></span> </div>-->
                                            <!-- Ad Title -->
                                            <p>“<i>Cashforphone's website is easy to navigate and
                                                    has almost all phone brands. I got my One plus 3T
                                                    repaired. Good service!</i>”</p>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Luv</li>
                                                <li class="hidden"><i class="fa fa-leanpub "></i> Web Developer </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Middle Content Box End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>

    <script>
        $(document).ready(function() {
            $(".testimonial-slider").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                },
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
            });
        });
    </script>

   @endsection

</body>

</html>
