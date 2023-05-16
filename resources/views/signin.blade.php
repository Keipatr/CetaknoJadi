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
  function gtag(){dataLayer.push(arguments);}
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
      <a class="navbar-brand" href="{{url('')}}">
        <img src="images/logo/logo cetakno hitam.png" style="width: 250px !important; height: 100px !important;" alt="" class="d-inline-block align-text-top">
      </a>
      <span class="navbar-text">
        Dont have an account? <a href="{{url('signup')}}" style="color: black; text-decoration: none;" onmouseover="this.style.color='green'; this.style.textDecoration='underline';" onmouseout="this.style.color='black'; this.style.textDecoration='none';">Sign up</a>

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
            <p>Welcome back to Cetakno! Enter your email to get started.</p>
          </div>

          <form>
            <div class="row g-3">
              <!-- row -->

              <div class="col-12">
                <!-- input -->
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
              </div>
              <div class="col-12">
                <!-- input -->
                <div class="password-field position-relative">
      <input type="password" id="fakePassword" placeholder="Enter Password" class="form-control" required >
      <span><i id="passwordToggler"class="bi bi-eye-slash"></i></span>
    </div>

              </div>
              <div class="d-flex justify-content-between">
                <!-- form check -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <!-- label --> <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                  </label>
                </div>
                <div> Forgot password? <a href="{{url('forgot')}}">Reset It</a></div>
              </div>
              <!-- btn -->
              <div class="col-12 d-grid"> <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
              <!-- link -->
              <div>Don’t have an account? <a href="{{url('signup')}}"> Sign Up</a></div>
            </div>
          </form>
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
