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

    </head>

    <body>
        <section>
            <div class="bg-gradient-primary">
                <div class="container col-lg-6">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                        </div>

                                        <form actio="{{ route('register.save') }}" method="POST" class="user">
                                            @csrf

                                            <!-- Name -->
                                            <div class="form-group">
                                                <input name="name" type="text"
                                                    class="form-control form-control-user mt-2" id="exampleInputName"
                                                    placeholder="Name" value="{{ old('name') }}">
                                            </div>

                                            <!-- Email -->
                                            <div class="form-group">
                                                <input name="email" type="email"
                                                    class="form-control form-control-user mt-2" id="exampleInputEmail"
                                                    placeholder="Email Address" value="{{ old('email') }}">
                                            </div>

                                            <!-- Password -->
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input name="password" type="password"
                                                        class="form-control form-control-user mt-2"
                                                        id="exampleInputPassword" placeholder="Password">
                                                </div>

                                                <!-- Confirm Password -->
                                                <div class="col-sm-6">
                                                    <input name="password_confirmation" type="password"
                                                        class="form-control form-control-user mt-2"
                                                        id="exampleRepeatPassword" placeholder="Repeat Password">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-user btn-block mt-4">Register
                                                Account</button>
                                        </form>

                                        <div class="text-end">
                                            <a class="small" style="text-decoration: none" href="/login">Already have an
                                                account?
                                                <button class="btn btn-danger">Login!</button> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

</body>

</html>
