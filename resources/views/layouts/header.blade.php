<script>
    function updateCartQuantity(quantity) {
        $('#cartQtySmall').text(quantity);
        $('#cartQtyLarge').text(quantity);
    }

    function updateWishlistQuantity(quantity) {
        $('#wishlistQty').text(quantity);
    }
</script>

<div class="border-bottom ">

    <div class="bg-light py-1">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <div class="py-4 pt-lg-3 pb-lg-0">
        <div class="container">
            <div class="row w-100 align-items-center gx-lg-2 gx-0">
                <div class="col-xxl-2 col-lg-3">
                    <a class="navbar-brand d-none d-lg-block " href="{{ route('home') }}">
                        <img src="{{ asset('images/logo/logo cetakno hitam.png') }}" alt="eCommerce HTML "
                            width="180" height="30" class="img-fluid d-block mx-auto">


                    </a>
                    <div class="d-flex justify-content-between w-100 d-lg-none">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('images/logo/logo cetakno hitam.png') }}" alt="eCommerce HTML "
                                width="180" height="30" class="img-fluid d-block mx-auto">

                        </a>
                        {{-- resolusi kecil --}}
                        <div class="d-flex align-items-center lh-1">
                            <div class="list-inline me-4">
                                <div class="list-inline-item">
                                    <a href="{{ session('USERNAME_CUST') || Cookie::has('USERNAME_CUST') ? route('my-account') : route('loginpage') }}"
                                        class="text-muted" {{-- data-bs-toggle="modal" --}} {{-- data-bs-target="#modal-1" --}}>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </a>
                                </div>
                                <div class="list-inline-item">

                                    @if (Session::has('ID_CUSTOMER') || isset($_COOKIE['ID_CUSTOMER']))
                                        <a class="text-muted position-relative " {{-- data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight" --}}
                                            href="{{ url('cart') }}" role="button" aria-controls="offcanvasRight">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-shopping-bag">
                                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                                <line x1="3" y1="6" x2="21" y2="6">
                                                </line>
                                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                                <span id="cartQtySmall">{{ $data[0]->QTY_CART }}</span>
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </a>
                                    @else
                                        <a class="text-muted position-relative " href="{{ route('loginpage') }}"
                                            role="button" aria-controls="offcanvasRight">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-shopping-bag">
                                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                                <line x1="3" y1="6" x2="21" y2="6">
                                                </line>
                                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                                <span>0</span>
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <!-- Button -->
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" class="bi bi-text-indent-left text-primary"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </button>

                        </div>
                    </div>

                </div>
                {{-- JANGAN HAPUS DEFAULT SEARCH FORM --}}
                {{-- <div class="col-xxl-6 col-lg-5 d-none d-lg-block mt-lg-4">

                    <form action="#">
                        <div class="input-group ">
                            <input class="form-control rounded" type="search" placeholder="Search for products">
                            <span class="input-group-append">
                                <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65">
                                        </line>
                                    </svg>
                                </button>
                            </span>
                        </div>

                    </form>
                </div> --}}


                <div class="col-xxl-6 col-lg-5 d-none d-lg-block mt-lg-4">
                    <form id="searchForm">
                        <div class="search-bar">
                            <input class="form-control rounded" type="search" placeholder="Search for products"
                                id="searchProduct" autocomplete="off">
                            <div class="search-results" id="searchResults">
                                <!-- Search results will be dynamically added here -->
                            </div>
                        </div>
                    </form>
                </div>

                <style>
                    .search-bar {
                        position: relative;
                    }

                    .search-bar .search-results {
                        position: absolute;
                        top: 100%;
                        left: 0;
                        right: 0;
                        background-color: #fff;
                        border: 1px solid #ccc;
                        border-top: none;
                        max-height: 300px;
                        overflow-y: auto;
                        z-index: 10;
                        display: none;
                    }

                    .search-bar .search-results.active {
                        display: block;
                    }

                    .search-result-item {
                        display: block;
                        padding: 8px;
                        border-bottom: 1px solid #ccc;
                        text-decoration: none;
                        color: #333;
                    }

                    .search-result-item:last-child {
                        border-bottom: none;
                    }

                    .product-not-found {
                        padding: 8px;
                        color: #333;
                        font-style: italic;
                    }
                </style>

                <script>
                    $(document).ready(function() {
                        // Function to fetch product search results
                        function fetchProductResults(searchQuery) {
                            // Make the AJAX request to fetch product search results
                            $.ajax({
                                url: '/search-products',
                                type: 'GET',
                                data: {
                                    searchProduct: searchQuery
                                },
                                success: function(response) {
                                    // Clear the previous results
                                    $('#searchResults').empty();

                                    // Display the product results or "Product Not Found" message
                                    if (response.length > 0) {
                                        $.each(response, function(index, product) {
                                            var listItem = $('<a>').attr('href', product.url)
                                                .addClass('search-result-item')
                                                .text(product.name);

                                            $('#searchResults').append(listItem);
                                        });

                                        $('.search-results').addClass('active');
                                    } else {
                                        var notFoundMessage = $('<div>').addClass('product-not-found')
                                            .text('Product Not Found');

                                        $('#searchResults').append(notFoundMessage);
                                        $('.search-results').addClass('active');
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.log('Error fetching product results:', error);
                                }
                            });
                        }

                        // Event listener for product search input
                        $('#searchProduct').on('input', function() {
                            var searchQuery = $(this).val().trim();

                            if (searchQuery !== '') {
                                fetchProductResults(searchQuery);
                            } else {
                                $('.search-results').removeClass('active');
                            }
                        });

                        // Submit the search form or navigate to a result page on Enter key press
                        $('#searchProduct').on('keydown', function(event) {
                            if (event.keyCode === 13) {
                                event.preventDefault();
                                var searchQuery = $(this).val().trim();
                                if (searchQuery !== '') {
                                    // Update the form action dynamically
                                    $('#searchForm').attr('action', '/search-results');
                                    $('#searchForm').submit(); // Submit the form
                                }
                            }
                        });

                        // Hide search results when clicking outside the search bar
                        $(document).on('click', function(event) {
                            if (!$(event.target).closest('.search-bar').length) {
                                $('.search-results').removeClass('active');
                            }
                        });
                    });
                </script>


                <div class="col-md-2 col-xxl-3 d-none d-lg-block mt-lg-4">
                    <!-- Button trigger modal -->
                    {{-- <button type="button" class="btn  btn-outline-gray-400 text-muted" data-bs-toggle="modal"
                        data-bs-target="#locationModal">
                        <i class="feather-icon icon-map-pin me-2"></i>Location
                    </button> --}}


                </div>
                {{-- resolusi besar --}}
                <div class="col-md-2 col-xxl-1 text-end d-none d-lg-block">
                    <div class="list-inline">
                        <div class="list-inline-item">

                            <a href="{{ route('wishlist') }}" class="text-muted position-relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                </svg>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                    @if (Session::has('ID_CUSTOMER') || isset($_COOKIE['ID_CUSTOMER']))
                                        <span id="wishlistQty">{{ $data[0]->QTY_WISHLIST }}</span>
                                    @else
                                        0
                                    @endif
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>

                        </div>
                        <div class="list-inline-item">
                            {{-- ini button trigger modal untuk akunnya --}}
                            <a href="{{ session('USERNAME_CUST') || Cookie::has('USERNAME_CUST') ? route('my-account') : route('loginpage') }}"
                                class="text-muted" {{-- data-bs-toggle="modal" --}} {{-- data-bs-target="#modal-1" --}}>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </a>
                        </div>
                        <div class="list-inline-item">

                            @if (Session::has('ID_CUSTOMER') || isset($_COOKIE['ID_CUSTOMER']))
                                <a class="text-muted position-relative " {{-- data-bs-toggle="offcanvas" --}} {{-- data-bs-target="#offcanvasRight"  --}}
                                    href="{{ url('cart') }}" role="button" aria-controls="offcanvasRight">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-shopping-bag">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6">
                                        </line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        <span id="cartQtyLarge">{{ $data[0]->QTY_CART }}</span>
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>
                            @else
                                <a class="text-muted position-relative " href="{{ route('loginpage') }}"
                                    role="button" aria-controls="offcanvasRight">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-shopping-bag">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6">
                                        </line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success"><span
                                            id="cartQty">0</span>
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 py-lg-4">
        <div class="container px-0 px-md-3">
            <div class="dropdown me-3 d-none d-lg-block">
                <button class="btn btn-primary px-6 " type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-grid">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg></span> All Category
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    @foreach ($cat as $list)
                        <li><a class="dropdown-item"
                                href="{{ url('/categories/' . $list->NAME_CATEGORY . '?id=' . Crypt::encryptString($list->ID_CATEGORY)) }}">{{ $list->NAME_CATEGORY }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>




            <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
                <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/logo/logo-cetakno-hitam.svg') }}"
                            alt="eCommerce HTML Template"></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="d-block d-lg-none my-4">
                        <div class="input-group">
                            <input id="searchInput" class="form-control rounded" type="text" placeholder="Search for products" onkeydown="return handleKeyDown(event);">
                            <span class="input-group-append">
                                <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </span>
                        </div>

                    <script>
                        function handleKeyDown(event) {
                            if (event.key === 'Enter') {
                                event.preventDefault();
                                return false;
                            }
                        }
                    </script>
                    <div class="mt-2">
                        <button type="button" class="btn  btn-outline-gray-400 text-muted w-100 "
                            data-bs-toggle="modal" data-bs-target="#locationModal">
                            <i class="feather-icon icon-map-pin me-2"></i>Pick Location
                        </button>
                    </div>
                </div>
                <div class="d-block d-lg-none mb-4">
                    <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center"
                        data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg></span> All Category
                    </a>
                    <div class="collapse mt-2" id="collapseExample">
                        <div class="card card-body">
                            <ul class="mb-0 list-unstyled">
                                @foreach ($cat as $list)
                                    <li><a class="dropdown-item"
                                            href="{{ url('/categories/' . $list->NAME_CATEGORY . '?id=' . Crypt::encryptString($list->ID_CATEGORY)) }}">{{ $list->NAME_CATEGORY }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block">
                    <ul class="navbar-nav align-items-center ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('/categories/all-product') }}">
                                Products
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('about-us') }}">
                                About Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="d-block d-lg-none h-100" data-simplebar="">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('wishlist') }}">
                                Wishlist
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('/categories/all-product') }}">
                                Products
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('about-us') }}">
                                About Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </nav>
</div>



<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-6">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h5 class="mb-1" id="locationModalLabel">Choose your Location</h5>
                        <p class="mb-0 small">Enter your area.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="my-5">
                    <input type="search" class="form-control" id="searchLocationInput"
                        placeholder="Search your area">
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">Select Location</h6>
                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm" id="clearAllBtn">Clear
                        All</a>
                </div>
                <div>
                    <div data-simplebar style="height: 300px;">
                        <div class="list-group list-group-flush" id="locationList">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function fetchAreasWithDelay(search) {
        setTimeout(function() {
            fetchAreas(search);
        }, 100);
    }

    function fetchAreas(search) {
        $.ajax({
            url: '/search',
            type: 'GET',
            data: {
                searchLocation: search
            },
            success: function(response) {
                $('#locationList').empty();

                $.each(response, function(index, area) {
                    var listItem = $('<a>').attr('href', '#')
                        .addClass(
                            'list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action'
                        )
                        .text(area.name)
                        .on('click', function() {
                            $('#searchLocationInput').val(area.name);
                            $('#locationList').empty();
                            $('#locationModal').modal('hide');
                        });

                    $('#locationList').append(listItem);
                });
            },
            error: function(xhr, status, error) {
                console.log('Error fetching areas:', error);
            }
        });
    }

    $(document).ready(function() {
        $('#searchLocationInput').on('input', function() {
            var searchQuery = $(this).val();

            if (searchQuery.trim() !== '') {
                fetchAreasWithDelay(searchQuery);
            } else {
                $('#locationList').empty();
            }
        });

        $('#clearAllBtn').on('click', function() {
            $('#searchLocationInput').val('');
            $('#locationList').empty();
        });
    });
</script>
