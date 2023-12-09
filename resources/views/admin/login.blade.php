@extends('layout.app')
@section('title')
    Sell Karo
@endsection

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sell Karo</title>
        <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Include SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

        <!-- Include SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    </head>

    <body>
       
        <section>
            <div class="bg-gradient-primary">

                <div class="container">

                    <!-- Outer Row -->
                    <div class="row justify-content-center">

                        <div class="col-xl-6 col-lg-12 col-md-9">

                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                                </div>

                                                <!-- Display validation errors -->
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <form method="POST" action="{{ route('login') }}" class="user">
                                                    @csrf

                                                    <div class="form-group">
                                                        <input name="email" type="email"
                                                            class="form-control form-control-user" id="exampleInputEmail"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Enter Email Address..."
                                                            value="{{ old('email') }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <input name="password" type="password"
                                                            class="form-control form-control-user mt-4"
                                                            id="exampleInputPassword" placeholder="Password">
                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-primary btn-user btn-block mt-4">
                                                        Login
                                                    </button>
                                                    
                                                </form>

                                                <hr>

                                                <div class="text-center">
                                                    <a class="small" href="/register">
                                                        Create an Account!
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js') }}">
                </script>
                <script
                    src="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
                </script>

                <!-- Core plugin JavaScript-->
                <script
                    src="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}">
                </script>

                <!-- Custom scripts for all pages-->
                <script src="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/js/sb-admin-2.min.js') }}"></script>

            </div>
        </section>

        <script>
            $(document).ready(function () {
                // Intercept form submission
                $('form').submit(function (e) {
                    e.preventDefault();
        
                    // Perform AJAX login
                    $.ajax({
                        url: '{{ route('login.action') }}', // Change to the actual route
                        type: 'POST',
                        dataType: 'json',
                        data: $(this).serialize(),
                        success: function (response) {
                            // Show SweetAlert on success
                            Swal.fire({
                                icon: 'success',
                                title: response.success,
                                showConfirmButton: false,
                                timer: 1500
                            });
        
                            // Redirect or perform additional actions if needed
                            setTimeout(function () {
                                window.location.href = '/';
                            }, 1500);
                        },
                        error: function (xhr) {
                            // Handle errors if needed
                            console.log(xhr);
                        }
                    });
                });
            });
        </script>
        
    @endsection

    </body>

    </html>
