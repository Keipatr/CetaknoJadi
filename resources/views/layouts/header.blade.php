<!DOCTYPE html>
<html lang="en">

<head>

    <title>Cetakno - Printing Provider</title>
    <link href="{{ asset('libs/slick-carousel/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('libs/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet" />
    <link href="{{ asset('libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">
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
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">


    <!-- Libs CSS -->
    <link href="libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
    <link href="libs/simplebar/dist/simplebar.min.css" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('css/theme.min.css')}}">


</head>

<body>

    <div class="border-bottom ">

        <div class="bg-light py-1">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-md-6 col-12 text-center text-md-start"><span> Super Value Deals - Save more with
                            coupons</span>
                    </div>
                    <div class="col-6 text-end d-none d-md-block">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-decoration-none  text-muted" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="me-1">
                                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#selectedlang)">
                                            <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169" />
                                            <path
                                                d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                                                fill="white" />
                                            <path
                                                d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                                                fill="#C8102E" />
                                            <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z"
                                                fill="white" />
                                            <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z"
                                                fill="#C8102E" />
                                        </g>
                                        <defs>
                                            <clipPath id="selectedlang">
                                                <rect width="16" height="12" fill="white"
                                                    transform="translate(0 0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>English
                            </a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item " href="#"><span class="me-2">

                                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5543_19744)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0 0.5H16V12.5H0V0.5Z" fill="white" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0 0.5H5.3325V12.5H0V0.5Z" fill="#002654" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.668 0.5H16.0005V12.5H10.668V0.5Z" fill="#CE1126" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5543_19744">
                                                        <rect width="16" height="12" fill="white"
                                                            transform="translate(0 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </span>Français</a></li>
                                <li><a class="dropdown-item " href="#"><span class="me-2">

                                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5543_19751)">
                                                    <path d="M0 8.5H16V12.5H0V8.5Z" fill="#FFCE00" />
                                                    <path d="M0 0.5H16V4.5H0V0.5Z" fill="black" />
                                                    <path d="M0 4.5H16V8.5H0V4.5Z" fill="#DD0000" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5543_19751">
                                                        <rect width="16" height="12" fill="white"
                                                            transform="translate(0 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </span>Deutsch</a></li>

                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="py-4 pt-lg-3 pb-lg-0">
            <div class="container">
                <div class="row w-100 align-items-center gx-lg-2 gx-0">
                    <div class="col-xxl-2 col-lg-3">
                        <a class="navbar-brand d-none d-lg-block" href="{{ url('/index') }}">
                            <img src="images/logo/freshcart-logo.svg" alt="eCommerce HTML Template">

                        </a>
                        <div class="d-flex justify-content-between w-100 d-lg-none">
                            <a class="navbar-brand" href="{{ url('/index') }}">
                                <img src="images/logo/freshcart-logo.svg" alt="eCommerce HTML Template">

                            </a>

                            <div class="d-flex align-items-center lh-1">

                                <div class="list-inline me-4">
                                    <div class="list-inline-item">

                                        <a href="#!" class="text-muted" data-bs-toggle="modal"
                                            data-bs-target="#userModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="list-inline-item">

                                        <a class="text-muted position-relative " data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight" href="#offcanvasExample" role="button"
                                            aria-controls="offcanvasRight">
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
                                                5
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                                <!-- Button -->
                                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#navbar-default" aria-controls="navbar-default"
                                    aria-expanded="false" aria-label="Toggle navigation">
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
                    <div class="col-xxl-6 col-lg-5 d-none d-lg-block mt-lg-4">

                        <form action="#">
                            <div class="input-group ">
                                <input class="form-control rounded" type="search" placeholder="Search for products">
                                <span class="input-group-append">
                                    <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end"
                                        type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65">
                                            </line>
                                        </svg>
                                    </button>
                                </span>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-2 col-xxl-3 d-none d-lg-block">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn  btn-outline-gray-400 text-muted" data-bs-toggle="modal"
                            data-bs-target="#locationModal">
                            <i class="feather-icon icon-map-pin me-2"></i>Location
                        </button>


                    </div>
                    <div class="col-md-2 col-xxl-1 text-end d-none d-lg-block">

                        <div class="list-inline">
                            <div class="list-inline-item">

                                <a href="{{url('wishlist')}}" class="text-muted position-relative">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </svg>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        5
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>
                            </div>
                            <div class="list-inline-item">

                                <a href="#!" class="text-muted" data-bs-toggle="modal"
                                    data-bs-target="#userModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </a>
                            </div>
                            <div class="list-inline-item">

                                <a class="text-muted position-relative " data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" href="#offcanvasExample" role="button"
                                    aria-controls="offcanvasRight">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-shopping-bag">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        5
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>

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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg></span> All Category
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="./pages/shop-grid.html">Cetak Kalender</a></li>
                        {{-- Dairy, Bread & Eggs --}}
                        <li><a class="dropdown-item" href="./pages/shop-grid.html">Kartu Nama Undangan & Foto</a></li>
                        {{-- Snacks & Munchies --}}
                        <li><a class="dropdown-item" href="./pages/shop-grid.html">Dokumen</a></li>
                        {{-- Fruits & Vegetables --}}
                        <li><a class="dropdown-item" href="./pages/shop-grid.html">Media Promosi</a></li>
                        {{-- Cold Drinks & Juices --}}
                        <li><a class="dropdown-item" href="./pages/shop-grid.html">Print Offset</a></li>
                        {{-- Breakfast & Instant Food --}}
                        <li><a class="dropdown-item" href="./pages/shop-grid.html">Spanduk & Banner</a></li>
                        {{-- Bakery & Biscuits --}}
                        <li><a class="dropdown-item" href="./pages/shop-grid.html">Kaos & Kain</a></li>
                        {{-- Chicken, Meat & Fish --}}
                    </ul>
                </div>
                <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
                    <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
                        <a href="./index.html"><img src="images/logo/freshcart-logo.svg"
                                alt="eCommerce HTML Template"></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="d-block d-lg-none my-4">
                        <form action="#">
                            <div class="input-group ">
                                <input class="form-control rounded" type="search" placeholder="Search for products">
                                <span class="input-group-append">
                                    <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end"
                                        type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65">
                                            </line>
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </form>
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
                            <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg></span> All Category
                        </a>
                        <div class="collapse mt-2" id="collapseExample">
                            <div class="card card-body">
                                <ul class="mb-0 list-unstyled">
                                    <li><a class="dropdown-item" href="./pages/shop-grid.html">Cetak Kalender</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-grid.html">Kartu Nama Undangan & Foto</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-grid.html">Dokumen</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-grid.html">Media Promosi</a></li>
                                    <li><a class="dropdown-item" href="./pages/shop-grid.html">Print Offset</a></li>
                                    <li><a class="dropdown-item" href="./pages/shop-grid.html">Spanduk & Banner</a></li>
                                    <li><a class="dropdown-item" href="./pages/shop-grid.html">Kaos & Kain</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block">
                        <ul class="navbar-nav align-items-center ">
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./index.html">Home 1</a></li>
                                    <li><a class="dropdown-item" href="./pages/index-2.html">Home 2</a></li>
                                    <li><a class="dropdown-item" href="./pages/index-3.html">Home 3</a></li>
                                    <li><a class="dropdown-item" href="./pages/index-4.html">Home 4 <span
                                                class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Shop
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./pages/shop-grid.html">Shop Grid - Filter</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-grid-3-column.html">Shop Grid - 3
                                            column</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-list.html">Shop List - Filter</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-filter.html">Shop - Filter</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-fullwidth.html">Shop Wide</a></li>
                                    <li><a class="dropdown-item" href="./pages/shop-single.html">Shop Single</a></li>
                                    <li><a class="dropdown-item" href="./pages/shop-single-2.html">Shop Single v2<span
                                                class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                    <li><a class="dropdown-item" href="{{url('wishlist')}}">Shop Wishlist</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{url('cart')}}">Shop Cart</a></li>
                                    <li><a class="dropdown-item" href="{{url('checkout')}}">Shop Checkout</a>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Stores
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./pages/store-list.html">Store List</a></li>
                                    <li><a class="dropdown-item" href="./pages/store-grid.html">Store Grid</a></li>
                                    <li><a class="dropdown-item" href="./pages/store-single.html">Store Single</a>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item dropdown dropdown-fullwidth">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Mega menu
                                </a>
                                <div class=" dropdown-menu pb-0">
                                    <div class="row p-2 p-lg-4">
                                        <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                            <h6 class="text-primary ps-3">Dairy, Bread & Eggs</h6>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Butter</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Milk Drinks</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Curd & Yogurt</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Eggs</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Buns & Bakery</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Cheese</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Condensed Milk</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Dairy Products</a>
                                        </div>
                                        <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                            <h6 class="text-primary ps-3">Breakfast & Instant Food</h6>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Breakfast
                                                Cereal</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html"> Noodles, Pasta &
                                                Soup</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Frozen Veg
                                                Snacks</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html"> Frozen Non-Veg
                                                Snacks</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html"> Vermicelli</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html"> Instant Mixes</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html"> Batter</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html"> Fruit and
                                                Juices</a>
                                        </div>
                                        <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                            <h6 class="text-primary ps-3">Cold Drinks & Juices</h6>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Soft Drinks</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Fruit Juices</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Coldpress</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Water & Ice
                                                Cubes</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Soda & Mixers</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Health Drinks</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Herbal Drinks</a>
                                            <a class="dropdown-item" href="./pages/shop-grid.html">Milk Drinks</a>
                                        </div>
                                        <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                            <div class="card border-0">
                                                <img src="images/banner/menu-banner.jpg" alt="eCommerce HTML Template"
                                                    class="img-fluid">
                                                <div class="position-absolute ps-6 mt-8">
                                                    <h5 class=" mb-0 ">Dont miss this <br>offer today.</h5>
                                                    <a href="#" class="btn btn-primary btn-sm mt-3">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./pages/blog.html">Blog</a></li>
                                    <li><a class="dropdown-item" href="./pages/blog-single.html">Blog Single</a></li>
                                    <li><a class="dropdown-item" href="./pages/blog-category.html">Blog Category</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/about.html">About us</a></li>
                                    <li><a class="dropdown-item" href="./pages/404error.html">404 Error</a></li>
                                    <li><a class="dropdown-item" href="./pages/contact.html">Contact</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Account
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('signin') }}">Sign in</a></li>
                                    <li><a class="dropdown-item" href="{{url('signup')}}">Signup</a></li>
                                    <li><a class="dropdown-item" href="{{url('forgot')}}">Forgot
                                            Password</a></li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">
                                            My Account
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{url('account-orders')}}">Orders</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('account')}}">Settings</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('account-address')}}">Address</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('account-payment')}}">Payment Method</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('account-notification')}}">Notification</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('about-us')}}">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('contact-us')}}">
                                    Contact Us
                                </a>
                            </li>
                            {{-- <li class="nav-item ">
                                <a class="nav-link" href="./dashboard/index.html">
                                    Dashboard
                                </a>
                            </li> --}}
                            {{-- <li class="nav-item dropdown dropdown-flyout">
                                <a class="nav-link" href="#" id="navbarDropdownDocs" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Docs
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs">
                                    <a class="dropdown-item align-items-start" href="./docs/index.html">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-file-text text-primary"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                <path
                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                            </svg>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h6 class="mb-1">Documentations</h6>
                                            <p class="mb-0 small">
                                                Browse the all documentation
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item align-items-start" href="./docs/changelog.html">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-layers text-primary"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                                            </svg>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h6 class="mb-1">
                                                Changelog <span class="text-primary ms-1">v1.1.0</span>
                                            </h6>
                                            <p class="mb-0 small">See what's new</p>
                                        </div>
                                    </a>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="d-block d-lg-none h-100" data-simplebar="">
                        <ul class="navbar-nav ">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('wishlist')}}">
                                    Wishlist
                                </a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./index.html">Home 1</a></li>
                                    <li><a class="dropdown-item" href="./pages/index-2.html">Home 2</a></li>
                                    <li><a class="dropdown-item" href="./pages/index-3.html">Home 3</a></li>
                                    <li><a class="dropdown-item" href="./pages/index-4.html">Home 4 <span
                                                class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Shop
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./pages/shop-grid.html">Shop Grid - Filter</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-grid-3-column.html">Shop Grid - 3
                                            column</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-list.html">Shop List - Filter</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-filter.html">Shop - Filter</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/shop-fullwidth.html">Shop Wide</a></li>
                                    <li><a class="dropdown-item" href="./pages/shop-single.html">Shop Single</a></li>
                                    <li><a class="dropdown-item" href="./pages/shop-single-2.html">Shop Single v2<span
                                                class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                    <li><a class="dropdown-item" href="{{url('wishlist')}}">Shop Wishlist</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{url('cart')}}">Shop Cart</a></li>
                                    <li><a class="dropdown-item" href="{{url('checkout')}}">Shop Checkout</a>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Stores
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./pages/store-list.html">Store List</a></li>
                                    <li><a class="dropdown-item" href="./pages/store-grid.html">Store Grid</a></li>
                                    <li><a class="dropdown-item" href="./pages/store-single.html">Store Single</a>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Mega Menu
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu ">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">
                                            Dairy, Bread & Eggs
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Milk Drinks</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Curd &
                                                    Yogurt</a></li>
                                            <li> <a class="dropdown-item" href="./pages/shop-grid.html">Eggs</a></li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Buns &
                                                    Bakery</a></li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Cheese</a></li>
                                            <li> <a class="dropdown-item" href="./pages/shop-grid.html">Condensed
                                                    Milk</a></li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Dairy
                                                    Products</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">
                                            Vegetables & Fruits
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Vegetables</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Fruits</a></li>
                                            <li> <a class="dropdown-item" href="./pages/shop-grid.html">Exotics &
                                                    Premium</a></li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Fresh
                                                    Sprouts</a></li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Frozen Veg</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">
                                            Cold Drinks & Juices
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Soft Drinks</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Fruit
                                                    Juices</a></li>
                                            <li> <a class="dropdown-item" href="./pages/shop-grid.html">Coldpress</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Soda &
                                                    Mixers</a></li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Milk Drinks</a>
                                            </li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Health
                                                    Drinks</a></li>
                                            <li><a class="dropdown-item" href="./pages/shop-grid.html">Herbal
                                                    Drinks</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./pages/blog.html">Blog</a></li>
                                    <li><a class="dropdown-item" href="./pages/blog-single.html">Blog Single</a></li>
                                    <li><a class="dropdown-item" href="./pages/blog-category.html">Blog Category</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./pages/about.html">About us</a></li>
                                    <li><a class="dropdown-item" href="./pages/404error.html">404 Error</a></li>
                                    <li><a class="dropdown-item" href="./pages/contact.html">Contact</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    My Account
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('signin')}}">Sign in</a></li>
                                    <li><a class="dropdown-item" href="{{url('signup')}}">Signup</a></li>
                                    <li><a class="dropdown-item" href="{{url('forgot')}}">Forgot
                                            Password</a></li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">
                                            My Account
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{url('account-orders')}}">Orders</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('account')}}">Settings</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('account-address')}}">Address</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('account-payment')}}">Payment Method</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('account-notification')}}">Notification</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('about-us')}}">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('contact-us')}}">
                                    Contact Us
                                </a>
                            </li>
                            {{-- <li class="nav-item ">
                                <a class="nav-link" href="./dashboard/index.html">
                                    Dashboard
                                </a>
                            </li> --}}
                            {{-- <li class="nav-item dropdown dropdown-flyout">
                                <a class="nav-link" href="#" id="navbarDropdownDocs2" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Docs
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs2">
                                    <a class="dropdown-item align-items-start" href="./docs/index.html">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-file-text text-primary"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                <path
                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                            </svg>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h6 class="mb-1">Documentations</h6>
                                            <p class="mb-0 small">
                                                Browse the all documentation
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item align-items-start" href="./docs/changelog.html">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-layers text-primary"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                                            </svg>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h6 class="mb-1">
                                                Changelog <span class="text-primary ms-1">v1.1.0</span>
                                            </h6>
                                            <p class="mb-0 small">See what's new</p>
                                        </div>
                                    </a>
                                </div>

                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>

        </nav>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name"
                                required="">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="Enter Email address" required="">
                        </div>

                        <div class="mb-5">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password"
                                required="">
                            <small class="form-text">By Signup, you agree to our <a href="#!">Terms of
                                    Service</a> & <a href="#!">Privacy Policy</a></small>
                        </div>

                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center">

                    Already have an account? <a href="{{url('signin')}}" style="color: black; text-decoration: none;" onmouseover="this.style.color='green'; this.style.textDecoration='underline';" onmouseout="this.style.color='black'; this.style.textDecoration='none';">Sign in</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Shop Cart -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <div class="text-start">
                <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
                {{-- <small>Location in 382480</small> --}}
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="">
                <!-- alert -->
                {{-- <div class="alert alert-danger p-2" role="alert">
                    You’ve got FREE delivery. Start <a href="#!" class="alert-link">checkout now!</a>
                </div> --}}
                <ul class="list-group list-group-flush">
                    <!-- list group -->
                    <li class="list-group-item py-3 ps-0 border-top">
                        <!-- row -->
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <!-- img --> <img src="images/products/product-img-1.jpg" alt="Ecommerce"
                                    class="img-fluid">
                            </div>
                            <div class="col-4 col-md-6 col-lg-5">
                                <!-- title -->
                                <a href="./pages/shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                </a>
                                <span><small class="text-muted">.98 / lb</small></span>
                                <!-- text -->
                                <div class="mt-2 small lh-1"> <a href="#!"
                                        class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2 text-success">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17">
                                                </line>
                                                <line x1="14" y1="11" x2="14" y2="17">
                                                </line>
                                            </svg></span><span class="text-muted">Remove</span></a></div>
                            </div>
                            <!-- input group -->
                            <div class="col-3 col-md-3 col-lg-3">
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="1"
                                        name="quantity" class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                        data-field="quantity">
                                </div>

                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$5.00</span>

                            </div>
                        </div>

                    </li>
                    <!-- list group -->
                    <li class="list-group-item py-3 ps-0">
                        <!-- row -->
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <!-- img --> <img src="images/products/product-img-2.jpg" alt="Ecommerce"
                                    class="img-fluid">
                            </div>
                            <div class="col-4 col-md-6 col-lg-5">
                                <!-- title -->
                                <a href="./pages/shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">NutriChoice Digestive </h6>
                                </a>
                                <span><small class="text-muted">250g</small></span>
                                <!-- text -->
                                <div class="mt-2 small lh-1"> <a href="#!"
                                        class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2 text-success">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17">
                                                </line>
                                                <line x1="14" y1="11" x2="14" y2="17">
                                                </line>
                                            </svg></span><span class="text-muted">Remove</span></a></div>
                            </div>
                            <!-- input group -->
                            <div class="col-3 col-md-3 col-lg-3">
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="1"
                                        name="quantity" class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                        data-field="quantity">
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$26.00</span>
                                {{-- <span class="fw-bold text-danger">$20.00</span>
                                <div class="text-decoration-line-through text-muted small">$26.00</div> --}}
                            </div>
                        </div>

                    </li>
                    <!-- list group -->
                    <li class="list-group-item py-3 ps-0">
                        <!-- row -->
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <!-- img --> <img src="images/products/product-img-3.jpg" alt="Ecommerce"
                                    class="img-fluid">
                            </div>
                            <div class="col-4 col-md-6 col-lg-5">
                                <!-- title -->
                                <a href="./pages/shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                </a>
                                <span><small class="text-muted">1 kg</small></span>
                                <!-- text -->
                                <div class="mt-2 small lh-1"> <a href="#!"
                                        class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2 text-success">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10"
                                                    y2="17">
                                                </line>
                                                <line x1="14" y1="11" x2="14"
                                                    y2="17">
                                                </line>
                                            </svg></span><span class="text-muted">Remove</span></a></div>
                            </div>
                            <!-- input group -->
                            <div class="col-3 col-md-3 col-lg-3">
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="1"
                                        name="quantity" class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                        data-field="quantity">
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$15.00</span>
                                {{-- <span class="fw-bold">$15.00</span>
                                <div class="text-decoration-line-through text-muted small">$20.00</div> --}}
                            </div>
                        </div>

                    </li>
                    <!-- list group -->
                    <li class="list-group-item py-3 ps-0">
                        <!-- row -->
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <!-- img --> <img src="images/products/product-img-4.jpg" alt="Ecommerce"
                                    class="img-fluid">
                            </div>
                            <div class="col-4 col-md-6 col-lg-5">
                                <!-- title -->
                                <a href="./pages/shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Onion Flavour Potato</h6>
                                </a>
                                <span><small class="text-muted">250g</small></span>
                                <!-- text -->
                                <div class="mt-2 small lh-1"> <a href="#!"
                                        class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2 text-success">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10"
                                                    y2="17"></line>
                                                <line x1="14" y1="11" x2="14"
                                                    y2="17"></line>
                                            </svg></span><span class="text-muted">Remove</span></a></div>
                            </div>
                            <!-- input group -->
                            <div class="col-3 col-md-3 col-lg-3">
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="1"
                                        name="quantity" class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                        data-field="quantity">
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$20.00</span>
                                {{-- <span class="fw-bold">$15.00</span>
                                <div class="text-decoration-line-through text-muted small">$20.00</div> --}}
                            </div>
                        </div>

                    </li>
                    <!-- list group -->
                    <li class="list-group-item py-3 ps-0 border-bottom">
                        <!-- row -->
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <!-- img --> <img src="images/products/product-img-5.jpg" alt="Ecommerce"
                                    class="img-fluid">
                            </div>
                            <div class="col-4 col-md-6 col-lg-5">
                                <!-- title -->
                                <a href="./pages/shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Salted Instant Popcorn </h6>
                                </a>
                                <span><small class="text-muted">100g</small></span>
                                <!-- text -->
                                <div class="mt-2 small lh-1"> <a href="#!"
                                        class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2 text-success">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10"
                                                    y2="17"></line>
                                                <line x1="14" y1="11" x2="14"
                                                    y2="17"></line>
                                            </svg></span><span class="text-muted">Remove</span></a></div>
                            </div>
                            <!-- input group -->
                            <div class="col-3 col-md-3 col-lg-3">
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="1"
                                        name="quantity" class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                        data-field="quantity">
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$15.00</span>
                                {{-- <span class="fw-bold">$15.00</span>
                                <div class="text-decoration-line-through text-muted small">$25.00</div> --}}
                            </div>
                        </div>

                    </li>

                </ul>
                <!-- btn -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{url('cart')}}" class="btn btn-primary">Go To Cart</a> {{-- Continue Shopping --}}
                    <a href="#!" class="btn btn-dark">Update Cart</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body p-6">
                    <div class="d-flex justify-content-between align-items-start ">
                        <div>
                            <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
                            <p class="mb-0 small">Enter your address and we will specify the offer you area. </p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="my-5">
                        <input type="search" class="form-control" placeholder="Search your area">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="mb-0">Select Location</h6>
                        <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>


                    </div>
                    <div>
                        <div data-simplebar style="height:300px;">
                            <div class="list-group list-group-flush">

                                <a href="#"
                                    class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                                    <span>Surabaya</span>
                                    {{-- <span>Min:$20</span> --}}
                                    </a>
                                <a href="#"
                                    class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Makassar</span>
                                    {{-- <span>Min:$30</span> --}}
                                </a>
                                <a href="#"
                                    class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Jember</span>
                                    {{-- <span>Min:$50</span> --}}
                                </a>
                                <a href="#"
                                    class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Sorong</span>
                                    {{-- <span>Min:$29</span> --}}
                                </a>
                                <a href="#"
                                    class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Sidoarjo</span>
                                    {{-- <span>Min:$80</span> --}}
                                </a>
                                <a href="#"
                                    class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Bone</span>
                                    {{-- <span>Min:$90</span> --}}
                                </a>
                                <a href="#"
                                    class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Ketintang</span>
                                    {{-- <span>Min:$50</span> --}}
                                </a>
                                <a href="#"
                                    class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Bali</span>
                                    {{-- <span>Min:$29</span> --}}
                                </a>
                                <a href="#"
                                    class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Yogyakarta</span>
                                    {{-- <span>Min:$80</span> --}}
                                </a>
                                <a href="#"
                                    class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Jakarta</span>
                                    {{-- <span>Min:$90</span> --}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

