<!DOCTYPE html>
<html lang="zxx">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .icon-bar {
            position: fixed;
            top: 90%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            z-index: 10001;
            right: 20px;
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 10px;
            transition: all 0.3s ease;
            color: white;
            font-size: 40px;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 10002;
        }

        li>a {
            text-decoration: none;
            list-style: none;
            font-size: 15px;
            color: white;
        }

        li {
            list-style: none;
        }

        @media (min-width: 100px) and (max-width: 325px) {
            .navbar-toggler {
                margin-left: 40px;
            }

            .mx {
                margin-right: 7px;
            }
        }

        @media (min-width: 325px) and (max-width: 480px) {
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

        .brand {
            padding: 20px;
            background-color: #f5f5f5;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }
    </style>
</head>

<body>

    <div class="icon-bar">
        <a href="#" onclick="showPopup()">
            <i class="fa fa-mobile btn btn-warning"></i>
        </a>
    </div>

    <div class="popup" id="popup">
        <p>Send us your number - We will give you a call</p>
        <button onclick="hidePopup()">X</button>
        <hr>
        Your Name
        <input class="form-control col-lg-6 mt-3" placeholder="Your Name" type="text">
        Phone Number <span class="text-danger">*</span>
        <input class="form-control col-lg-6 mt-3" placeholder="Phone number (10 digit only)" type="text">
        <button class="btn btn-warning mt-4">Submit</button>
    </div>

    <section class="section_height text-white" style="height: 40px;  background-color: #0b0141">
        <div class="topbar container-fluid">
            <div class="row">
                <div class="d-flex mr-auto mt-1 col-lg-8">
                    <div class="col-lg-6 mx">
                        <p>
                            <i class="fa fa-phone-square" aria-hidden="true"></i>+91 9087654321
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-1">
                    <ul>

                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/2021_Facebook_icon.svg"
                            alt="facebook" title="facebook" style="width: 30px" class="rounded-5" />

                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png"
                            alt="Instagram" title="Instagram" style="width: 30px" class="rounded-5" />

                        <img src="assets/images/logo/2.jpg" alt="Twitter" title="Twitter" style="width: 30px"
                            class="rounded-5" />

                        <img src="assets/images/logo/pinterest.jpg" alt="pinterest" title="pinterest"
                            style="width: 30px" class="rounded-5" />

                        <img src="assets/images/logo/youtube.jpg" alt="YouTube" title="YouTube" style="width: 30px"
                            class="rounded-5" />

                    </ul>
                </div>

            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-white p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">

            </a>

            <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse" style="font-size: 20px">
                <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-dark" href="/">Home</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active text-dark" href="/">Sell</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active text-dark" href="/product">Repair</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link active text-dark" href="/">Refer and Earn</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active text-dark" href="/">Contact</a>
                    </li>

                    <li>
                        <a href="/" class="btn btn-warning text-white">PARTNER WITH US</a>
                    </li>
                    <li>
                        <a href="/" class="btn btn-warning text-white mx-2">FEEDBACK</a>
                    </li>
                    @guest
                        <li class="nav-item mx-2">
                            <a class="nav-link active text-dark" href="/login">Login</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                </svg> <span>{{ auth()->user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth


                </ul>
            </div>
        </div>
    </nav>

    <div class="content">

        @yield('content')


    </div>

    <footer class="footer-area text-white " style=" background-color: #090230;">
        <!--Footer Upper-->
        <div class="footer-content">
            <div class="container">
                <div class="row clearfix">
                    <!--Two 4th column-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-sm-12 col-xs-12 column">
                                <div class="footer-widget about-widget mt-4">
                                    <div class="logo">
                                        <a href=""><img alt="" class="img-responsive"
                                                src=""></a>
                                    </div>
                                    <div class="text">
                                        <p>We buy, sell and repair used phone at best price.</p>
                                    </div>
                                    <ul class="contact-info">
                                        <li><span class="icon fa fa-map-marker mx-2"></span> Address <br /></li>
                                        <li>
                                            {{-- <a href=""> --}}
                                            <span class="icon fa fa-phone mx-2"></span> Number
                                            {{-- </a> --}}
                                        </li>
                                        <li>
                                            {{-- <a href="mailto:"> --}}
                                            <span class="icon fa fa-envelope-o mx-2"></span>Email
                                            {{-- </a> --}}
                                        </li>
                                        <!--<li><a href="tel:+919958320322"><span class="icon fa fa-fax"></span> 9958320322</a></li>-->
                                    </ul>
                                    <div class="social-links-two clearfix">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/2021_Facebook_icon.svg"
                                            alt="facebook" title="facebook" style="width: 30px" class="rounded-5" />
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png"
                                            alt="Instagram" title="Instagram" style="width: 30px"
                                            class="rounded-5" />
                                        <img src="assets/images/logo/2.jpg" alt="Twitter" title="Twitter"
                                            style="width: 30px" class="rounded-5" />
                                        <img src="assets/images/logo/pinterest.jpg" alt="pinterest" title="pinterest"
                                            style="width: 30px" class="rounded-5" />
                                        <img src="assets/images/logo/youtube.jpg" alt="YouTube" title="YouTube"
                                            style="width: 30px" class="rounded-5" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Two 4th column End-->
                    <!--Two 4th column-->
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="col-lg-7 col-sm-6 col-xs-12 column">

                            </div>
                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">
                                    <div class="heading-panel mt-4">
                                        <h3 class="main-title text-left"> Quick Links</h3>
                                    </div>
                                    <ul>

                                        <li>
                                            {{-- <a href=""> --}}
                                            About Us
                                            {{-- </a> --}}
                                        </li>
                                        <li>
                                            {{-- <a href=""> --}}
                                            Contact Us
                                            {{-- </a> --}}
                                        </li>
                                        <li>
                                            {{-- <a href=""> --}}
                                            FAQ'S
                                            {{-- </a> --}}
                                        </li>
                                        <li>
                                            {{-- <a href=""> --}}
                                            Privacy Policy
                                            {{-- </a> --}}
                                        </li>
                                        <li>
                                            {{-- <a href=";"> --}}
                                            Blog
                                            {{-- </a> --}}
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Two 4th column End-->
                </div>
            </div>
        </div>
        <!--Footer Bottom-->
        <hr>
        <div class="footer-copyright">
            <div class="container clearfix">
                <!--Copyright-->
                <div class="copyright text-center">
                    <div class="row">
                        <p class="fs-6 text-center">
                            © 2023 Sell Karo | Design By
                            <a href="https://bloomitsolutions.com/" style="text-decoration:none" target="">Bloom
                                It Solutions</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function showPopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'block';
        }

        function hidePopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'none';
        }


        document.getElementById('logout-form').addEventListener('submit', function(event) {
            event.preventDefault();
            window.location.replace('{{ route('login') }}'); // Adjust 'home' to your actual home route
        });
    </script>


</body>

</html>
