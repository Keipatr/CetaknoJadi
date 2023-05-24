<!DOCTYPE html>
<html lang="en">

<head>

    <title>Cetakno - Printing Provider</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta content="Codescandy" name="author">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M8S4MT3EYG');
    </script>

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon/logoTitleCetakno.ico">


    <!-- Libs CSS -->
    <link href="libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
    <link href="libs/simplebar/dist/simplebar.min.css" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.min.css">


</head>

<body>

    <!-- navigation -->
    <div class="border-bottom shadow-sm">
        <nav class="navbar navbar-light py-2">
            <div class="container justify-content-center justify-content-lg-between">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="images/logo/logo cetakno hitam.png"
                        style="width: 250px !important; height: 100px !important;" alt=""
                        class="d-inline-block align-text-top">
                </a>
                <span class="navbar-text">
                    Dont have an account? <a href="{{ url('signup') }}" style="color: black; text-decoration: none;"
                        onmouseover="this.style.color='green'; this.style.textDecoration='underline';"
                        onmouseout="this.style.color='black'; this.style.textDecoration='none';">Sign up</a>

                </span>
            </div>
        </nav>
    </div>


    <main>
        <!-- section -->
        <section class="my-lg-14 my-8">
            <div class="container">
                <!-- row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                        <!-- img -->
                        <img src="images/svg-graphics/signin-g.svg" alt="" class="img-fluid">
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                        <div class="mb-lg-9 mb-5">
                            <h1 class="mb-1 h2 fw-bold">Sign in to Cetakno</h1>
                            <p>Welcome back to Cetakno! Enter your username and password to get started.</p>
                        </div>
                        @if (Session::has('ID_CUSTOMER') || isset($_COOKIE['ID_CUSTOMER']))
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="floatingInput">
                                        <h6>
                                            <strong>
                                                {{ session('USERNAME_CUST') }}
                                            </strong>
                                        </h6>
                                    </label>
                                </div>
                            </div>
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-3">
                                    <button class="btn btn-primary btn-block btn-lg" type="submit"
                                        style="margin-top: 6px;margin-bottom: 12px;">Logout</button>
                                </div>
                            </form>
                        @else
                            <form action="{{ route('signin-customer') }}" method="post">
                                @csrf
                                <div class="row g-3">
                                    <!-- row -->
                                    @if (session('fail'))
                                        <div class="alert alert-danger">
                                            {{ session('fail') }}
                                        </div>
                                    @endif

                                    <div class="col-12">
                                        <!-- input -->
                                        <input type="text" class="form-control" id="inputEmail4"
                                            placeholder="Enter Username" name="username_cust" required>
                                        @error('username_cust')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <!-- input -->
                                        <div class="password-field position-relative">
                                            <input type="password" id="fakePassword" placeholder="Enter Password"
                                                class="form-control" name="password" required>
                                            <span><i id="passwordToggler" class="bi bi-eye-slash"></i></span>
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <!-- form check -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" name="remember"> <label class="form-check-label"
                                                for="flexCheckDefault"> Remember me </label>
                                        </div>
                                        <div> Forgot password? <a href="{{ route('forgot') }}">Reset It</a></div>
                                    </div>
                                    <!-- btn -->
                                    <div class="col-12 d-grid"> <button type="submit" class="btn btn-primary">Sign
                                            In</button>
                                    </div>
                                    <!-- link -->
                                    <div>Don’t have an account? <a href="{{ route('signup') }}"> Sign Up</a></div>
                                </div>
                            </form>
                        @endif
                        @if (isset($remembered))
                            <div class="col-12">
                                <p>
                                    @if ($remembered)
                                        You are remembered!
                                    @else
                                        You are not remembered.
                                    @endif
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

    </main>




    <!-- footer -->
    @include('layouts.footer')
    <!-- Javascript-->
    <!-- Libs JS -->
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="js/theme.min.js"></script>
    <script src="js/vendors/password.js"></script>




</body>

</html>
