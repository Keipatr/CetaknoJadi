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
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon/logoTitleCetakno.ico">


    <!-- Libs CSS -->
    <link href="/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
    <link href="/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/theme.min.css">


</head>

<body>

    <!-- navigation -->
    <div class="border-bottom shadow-sm">
        <nav class="navbar navbar-light py-2">
            <div class="container justify-content-center justify-content-lg-between">
                <a class="navbar-brand" href="{{ url('') }}">
                    <img src="/images/logo/logo cetakno hitam.png"
                        style="width: 250px !important; height: 100px !important;" alt=""
                        class="d-inline-block align-text-top">
                </a>
                <span class="navbar-text">
                    Already have an account? <a href="{{ url('signin') }}" style="color: black; text-decoration: none;"
                        onmouseover="this.style.color='green'; this.style.textDecoration='underline';"
                        onmouseout="this.style.color='black'; this.style.textDecoration='none';">Sign in</a>
                </span>
            </div>
        </nav>
    </div>


    <main>
        <!-- section -->

        <section class="my-lg-14 my-8">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                        <!-- img -->
                        <img src="images/svg-graphics/signup-g.svg" alt="" class="img-fluid">
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                        <div class="mb-lg-9 mb-5">
                            <h1 class="mb-1 h2 fw-bold">Get Start Buying</h1>
                            <p>Welcome to Cetakno! Enter your registration data to get started.</p>
                        </div>
                        <form method="post" action="{{ route('signup') }}">
                            @csrf
                            <div class="row g-3">
                                @if (session('success'))
                                    <div class="alert alert-danger">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="col">
                                    <div class="form-group">
                                        <i class="fa fa-star fa-user"></i>
                                        <input class="form-control" type="text" placeholder="First Name"
                                            required="required" name="FIRST_NAME" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <i class="fa fa-star fa-user"></i>
                                        <input class="form-control" type="text" placeholder="Last Name"
                                            required="required" name="LAST_NAME" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <i class="fa fa-envelope-square fa-user"></i>
                                        <input class="form-control" type="text" placeholder="Email"
                                            required="required" name="EMAIL_CUST" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <i class="fa fa-star fa-user"></i>
                                        <input class="form-control" type="text" placeholder="Username"
                                            required="required" name="USERNAME_CUST" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <i class="fa fa-star fa-lock"></i>
                                        <input class="form-control" type="password" placeholder="Password"
                                            required="required" name="PASSWORD_CUST" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <i class="fa fa-phone-square fa-user"></i>
                                        <input class="form-control" type="text" placeholder="Telephone"
                                            required="required" name="TELP_CUST" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <i class="fa fa-home fa-user"></i>
                                        <input class="form-control" type="text" placeholder="Address"
                                            required="required" name="ADDRESS_CUST" />
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="form-group">
                                        <i class="fa fa-star fa-user"></i>
                                        <input class="form-control" type="text" placeholder="City"
                                            required="required" name="CITY_CUST" id="cityInput"
                                            autocomplete="off" />
                                        <ul class="dropdown-menu" id="suggestionsDropdown"
                                            aria-labelledby="cityInput"></ul>
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="form-group">
                                        <i class="fa fa-star fa-user"></i>
                                        <input class="form-control" type="text" placeholder="Postal Code"
                                            required="required" name="POSTAL_CUST" />
                                    </div>
                                </div>
                                <div class="col-12 d-grid">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg"
                                        style="margin-bottom: 12px;margin-top: 6px;">Register</button>
                                </div>
                                <p><small>By continuing, you agree to our <a href="#!">Terms of Service</a> & <a
                                            href="#!">Privacy Policy</a></small></p>
                            </div>
                        </form>


                    </div>
                </div>
            </div>


        </section>
    </main>

    <script>
        // Get the city input field element
        const cityInput = document.getElementById('cityInput');
        const suggestionsDropdown = document.getElementById('suggestionsDropdown');
        const form = document.getElementById('checkoutForm');

        // Add event listeners
        cityInput.addEventListener('input', handleInput);
        form.addEventListener('submit', handleSubmit);
        document.addEventListener('click', handleClickOutside);

        // Function to handle input changes
        function handleInput() {
            const search = cityInput.value;

            // Make an AJAX request to fetch city suggestions
            $.ajax({
                url: '/search-city',
                type: 'GET',
                data: {
                    searchLocation: search
                },
                success: function(response) {
                    // Process the response and update the suggestions
                    showSuggestions(response);
                },
                error: function(xhr) {
                    // Handle error response if needed
                }
            });
        }

        // Function to display the suggestions
        function showSuggestions(suggestions) {
            // Clear any existing suggestions
            clearSuggestions();

            // Show the suggestions dropdown
            suggestionsDropdown.style.display = 'block';

            // Add suggestions as dropdown items
            suggestions.forEach(suggestion => {
                const dropdownItem = document.createElement('li');
                dropdownItem.classList.add('dropdown-item');
                dropdownItem.textContent = suggestion.name;
                dropdownItem.addEventListener('click', () => {
                    // Set the selected suggestion as the input value
                    cityInput.value = suggestion.name;

                    // Hide the suggestions dropdown
                    suggestionsDropdown.style.display = 'none';
                });
                suggestionsDropdown.appendChild(dropdownItem);
            });
        }

        // Function to clear the suggestions
        function clearSuggestions() {
            suggestionsDropdown.innerHTML = '';
        }

        // Function to handle form submission
        function handleSubmit(event) {
            const selectedCity = cityInput.value;

            // Prevent form submission if a city is not selected
            if (!selectedCity) {
                event.preventDefault();
                alert('Please select a city from the dropdown');
            }
        }

        // Function to handle clicks outside the input field
        function handleClickOutside(event) {
            if (!cityInput.contains(event.target)) {
                // Clear suggestions and hide the dropdown
                clearSuggestions();
                suggestionsDropdown.style.display = 'none';
            }
        }
    </script>





    <!-- Footer -->
    @include('layouts.footer')
    <!-- Javascript-->
    <!-- Libs JS -->
    <script src="/libs/jquery/dist/jquery.min.js"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="/js/theme.min.js"></script>
    <script src="/js/vendors/password.js"></script>




</body>

</html>
