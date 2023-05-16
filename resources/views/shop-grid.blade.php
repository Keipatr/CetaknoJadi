@extends('layouts.main')

@section('main-content')

    {{-- <body> --}}

        <main>
            <!-- section-->
            <div class="mt-4">
                <div class="container">
                    <!-- row -->
                    <div class="row ">
                        <!-- col -->
                        <div class="col-12">
                            <!-- breadcrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{url('products')}}">Shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dokumen</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section -->
            <div class=" mt-8 mb-lg-14 mb-8">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row gx-10">
                        <!-- col -->
                        <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
                            <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50 " tabindex="-1"
                                id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">

                                <div class="offcanvas-header d-lg-none">
                                    <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body ps-lg-2 pt-lg-0">
                                    <div class="mb-8">
                                        <!-- title -->
                                        <h5 class="mb-3">Categories</h5>
                                        <!-- nav -->
                                        <ul class="nav nav-category" id="categoryCollapseMenu">
                                            <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#categoryFlushOne" aria-expanded="false"
                                                aria-controls="categoryFlushOne"><a href="{{url('products')}}" class="nav-link">Cetak Kalender
                                                    {{-- <i class="feather-icon icon-chevron-right"></i> --}}
                                                </a>
                                                <!-- accordion collapse -->
                                                {{-- <div id="categoryFlushOne" class="accordion-collapse collapse"
                                                    data-bs-parent="#categoryCollapseMenu">
                                                    <div>
                                                        <!-- nav -->

                                                        <ul class="nav flex-column ms-3">
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Milk</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Milk
                                                                    Drinks</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Curd &
                                                                    Yogurt</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Eggs</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Bread</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Buns &
                                                                    Bakery</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Butter &
                                                                    More</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Cheese</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Paneer &
                                                                    Tofu</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Cream &
                                                                    Whitener</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Condensed Milk</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Vegan
                                                                    Drinks</a></li>
                                                        </ul>



                                                    </div>
                                                </div> --}}

                                            </li>
                                            <!-- nav item -->
                                            <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                aria-controls="flush-collapseTwo"><a href="{{url('products')}}" class="nav-link">
                                                    Kartu Nama undangan & Foto
                                                    {{-- <i class="feather-icon icon-chevron-right"></i> --}}
                                                </a>

                                                <!-- collapse -->
                                                {{-- <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#categoryCollapseMenu">
                                                    <div>
                                                        <ul class="nav flex-column ms-3">
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Chips &
                                                                    Crisps</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Nachos</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Popcorn</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Bhujia & Mixtures</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Namkeen Snacks</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Healthy Snacks</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Cakes
                                                                    & Rolls</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Energy Bars</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Papad
                                                                    & Fryums</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Rusks
                                                                    & Wafers</a></li>
                                                        </ul>


                                                    </div>
                                                </div> --}}

                                            </li>
                                            <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                aria-controls="flush-collapseThree"> <a href="{{url('products')}}"
                                                    class="nav-link">Dokumen
                                                    {{-- <i class="feather-icon icon-chevron-right"></i> --}}
                                                </a>

                                                <!-- collapse -->
                                                {{-- <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#categoryCollapseMenu">
                                                    <div>

                                                        <ul class="nav flex-column ms-3">
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link active" aria-current="page"
                                                                    href="#!">Fresh Vegetables</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Herbs & Seasonings</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Fresh Fruits</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Organic Fruits &
                                                                    Vegetables</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Cuts & Sprouts</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Exotic Fruits &
                                                                    Veggies</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Flower Bouquets,
                                                                    Bunches</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> --}}
                                            </li>
                                            <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                                aria-controls="flush-collapseFour"> <a href="{{url('products')}}"
                                                    class="nav-link">Media Promosi
                                                    {{-- <i class="feather-icon icon-chevron-right"></i> --}}
                                                </a>

                                                <!-- collapse -->
                                                {{-- <div id="flush-collapseFour" class="accordion-collapse collapse"
                                                    data-bs-parent="#categoryCollapseMenu">
                                                    <div>
                                                        <ul class="nav flex-column ms-3">
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Soft
                                                                    Drinks</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Fruit
                                                                    Juices</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Coldpress</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Energy Drinks</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Water
                                                                    & Ice Cubes</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Soda
                                                                    & Mixers</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!"
                                                                    class="nav-link">Concentrates & Syrups</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Detox
                                                                    & Energy Drinks</a></li>
                                                            <!-- nav item -->
                                                            <li class="nav-item"><a href="#!" class="nav-link">Juice
                                                                    Collection</a></li>
                                                        </ul>
                                                    </div>
                                                </div> --}}
                                            </li>



                                            <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                                aria-controls="flush-collapseFive"> <a href="{{url('products')}}"
                                                    class="nav-link">Print Offset
                                                    {{-- <i class="feather-icon icon-chevron-right"></i> --}}
                                                </a>

                                                <!-- collapse -->
                                                {{-- <div id="flush-collapseFive" class="accordion-collapse collapse"
                                                    data-bs-parent="#categoryCollapseMenu">
                                                    <div>

                                                        <ul class="nav flex-column ms-3">
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link active" aria-current="page"
                                                                    href="#!">Batter</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Breakfast Cereal</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Noodles, Pasta &
                                                                    Soup</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Frozen Non-Veg
                                                                    Snackss</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Frozen Veg</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Vermicelli</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Instant Mixes</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> --}}
                                            </li>
                                            <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                                aria-controls="flush-collapseSix"> <a href="{{url('products')}}"
                                                    class="nav-link">Spanduk & Banner
                                                    {{-- <i  class="feather-icon icon-chevron-right"></i> --}}
                                                </a>

                                                <!-- collapse -->
                                                {{-- <div id="flush-collapseSix" class="accordion-collapse collapse"
                                                    data-bs-parent="#categoryCollapseMenu">
                                                    <div>

                                                        <ul class="nav flex-column ms-3">
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link active" aria-current="page"
                                                                    href="#!">Cookies</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Glucose & Marie</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Sweet & Salty</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Healthy & Digestive</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Cream Biscuits</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Rusks & Wafers</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Cakes & Rolls</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">
                                                                    Buns & Bakery</a>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div> --}}
                                            </li>
                                            <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                                aria-controls="flush-collapseSeven"> <a href="{{url('products')}}"
                                                    class="nav-link">Kaos & Kain
                                                    {{-- <i  class="feather-icon icon-chevron-right"></i> --}}
                                                    </a>

                                                <!-- collapse -->
                                                {{-- <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                                    data-bs-parent="#categoryCollapseMenu">
                                                    <div>

                                                        <ul class="nav flex-column ms-3">
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link active" aria-current="page"
                                                                    href="#!">Chicken</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Sausage, Salami &
                                                                    Ham</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Exotic Meat</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Eggs</a>
                                                            </li>
                                                            <!-- nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">Frozen Non-Veg
                                                                    Snacks</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div> --}}
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="mb-8">

                                        <h5 class="mb-3">Stores</h5>
                                        <div class="my-4">
                                            <!-- input -->
                                            <input type="search" class="form-control" placeholder="Search by store">
                                        </div>
                                        <!-- form check -->
                                        <div class="form-check mb-2">
                                            <!-- input -->
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="eGrocery" checked>
                                            <label class="form-check-label" for="eGrocery">
                                                D'Raya Jember
                                            </label>
                                        </div>
                                        <!-- form check -->
                                        <div class="form-check mb-2">
                                            <!-- input -->
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="DealShare">
                                            <label class="form-check-label" for="DealShare">
                                                Kosko Printing
                                            </label>
                                        </div>
                                        <!-- form check -->
                                        <div class="form-check mb-2">
                                            <!-- input -->
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="Dmart">
                                            <label class="form-check-label" for="Dmart">
                                                Aneka Niaga
                                            </label>
                                        </div>
                                        <!-- form check -->
                                        <div class="form-check mb-2">
                                            <!-- input -->
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="Blinkit">
                                            <label class="form-check-label" for="Blinkit">
                                                Aneka Niaga
                                            </label>
                                        </div>
                                        <!-- form check -->
                                        <div class="form-check mb-2">
                                            <!-- input -->
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="BigBasket">
                                            <label class="form-check-label" for="BigBasket">
                                                Digital Printing
                                            </label>
                                        </div>
                                        <!-- form check -->
                                        <div class="form-check mb-2">
                                            <!-- input -->
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="StoreFront">
                                            <label class="form-check-label" for="StoreFront">
                                                Wiyung Printing
                                            </label>
                                        </div>
                                        <!-- form check -->
                                        <div class="form-check mb-2">
                                            <!-- input -->
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="Spencers">
                                            <label class="form-check-label" for="Spencers">
                                                Spectrum
                                            </label>
                                        </div>
                                        <!-- form check -->
                                        <div class="form-check mb-2">
                                            <!-- input -->
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="onlineGrocery">
                                            <label class="form-check-label" for="onlineGrocery">
                                                Spencers
                                            </label>
                                        </div>

                                    </div>
                                    <div class="mb-8">
                                        <!-- price -->
                                        <h5 class="mb-3">Price</h5>
                                        <div>
                                            <!-- range -->
                                            <div id="priceRange" class="mb-3"></div>
                                            <small class="text-muted">Price:</small> <span id="priceRange-value"
                                                class="small"></span>

                                        </div>



                                    </div>
                                    <!-- rating -->
                                    <div class="mb-8">

                                        <h5 class="mb-3">Rating</h5>
                                        <div>
                                            <!-- form check -->
                                            <div class="form-check mb-2">
                                                <!-- input -->
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ratingFive">
                                                <label class="form-check-label" for="ratingFive">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning "></i>
                                                    <i class="bi bi-star-fill text-warning "></i>
                                                    <i class="bi bi-star-fill text-warning "></i>
                                                    <i class="bi bi-star-fill text-warning "></i>
                                                </label>
                                            </div>
                                            <!-- form check -->
                                            <div class="form-check mb-2">
                                                <!-- input -->
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ratingFour" checked>
                                                <label class="form-check-label" for="ratingFour">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning "></i>
                                                    <i class="bi bi-star-fill text-warning "></i>
                                                    <i class="bi bi-star-fill text-warning "></i>
                                                    <i class="bi bi-star text-warning"></i>
                                                </label>
                                            </div>
                                            <!-- form check -->
                                            <div class="form-check mb-2">
                                                <!-- input -->
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ratingThree">
                                                <label class="form-check-label" for="ratingThree">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning "></i>
                                                    <i class="bi bi-star-fill text-warning "></i>
                                                    <i class="bi bi-star text-warning"></i>
                                                    <i class="bi bi-star text-warning"></i>
                                                </label>
                                            </div>
                                            <!-- form check -->
                                            <div class="form-check mb-2">
                                                <!-- input -->
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ratingTwo">
                                                <label class="form-check-label" for="ratingTwo">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star text-warning"></i>
                                                    <i class="bi bi-star text-warning"></i>
                                                    <i class="bi bi-star text-warning"></i>
                                                </label>
                                            </div>
                                            <!-- form check -->
                                            <div class="form-check mb-2">
                                                <!-- input -->
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ratingOne">
                                                <label class="form-check-label" for="ratingOne">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star text-warning"></i>
                                                    <i class="bi bi-star text-warning"></i>
                                                    <i class="bi bi-star text-warning"></i>
                                                    <i class="bi bi-star text-warning"></i>
                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- <div class="mb-8 position-relative">
                                        <!-- Banner Design -->
                                        <!-- Banner Content -->
                                        <div class="position-absolute p-5 py-8">
                                            <h3 class="mb-0">Fresh Fruits </h3>
                                            <p>Get Upto 25% Off</p>
                                            <a href="#" class="btn btn-dark">Shop Now<i
                                                    class="feather-icon icon-arrow-right ms-1"></i></a>
                                        </div>
                                        <!-- Banner Content -->
                                        <!-- Banner Image -->
                                        <!-- img --><img src="images/banner/assortment-citrus-fruits.png" alt=""
                                            class="img-fluid rounded ">
                                        <!-- Banner Image -->
                                    </div> --}}
                                </div>
                            </div>
                        </aside>
                        <section class="col-lg-9 col-md-12">
                            <!-- card -->
                            <div class="card mb-4 bg-light border-0">
                                <!-- card body -->
                                <div class=" card-body p-9">
                                    <h2 class="mb-0 fs-1">Dokumen</h2>
                                </div>
                            </div>
                            <!-- list icon -->
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="mb-3 mb-lg-0">
                                    <p class="mb-0"> <span class="text-dark">12 </span> Products found </p>
                                </div>

                                <!-- icon -->
                                <div class="d-md-flex justify-content-between align-items-center">
                                    {{-- <div class="d-flex align-items-center justify-content-between">
                                        <div>

                                            <a href="shop-list.html" class="text-muted me-3"><i
                                                    class="bi bi-list-ul"></i></a>
                                            <a href="shop-grid.html" class=" me-3 active"><i class="bi bi-grid"></i></a>
                                            <a href="shop-grid-3-column.html" class="me-3 text-muted"><i
                                                    class="bi bi-grid-3x3-gap"></i></a>
                                        </div>
                                        <div class="ms-2 d-lg-none">
                                            <a class="btn btn-outline-gray-400 text-muted" data-bs-toggle="offcanvas"
                                                href="#offcanvasCategory" role="button"
                                                aria-controls="offcanvasCategory"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-filter me-2">
                                                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3">
                                                    </polygon>
                                                </svg> Filters</a>
                                        </div>
                                    </div> --}}

                                    <div class="d-flex mt-2 mt-lg-0">
                                        {{-- <div class="me-2 flex-grow-1">
                                            <!-- select option -->
                                            <select class="form-select">
                                                <option selected>Show: 50</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div> --}}
                                        <div>
                                            <!-- select option -->
                                            <select class="form-select">
                                                <option selected>Sort by: Featured</option>
                                                <option value="Low to High">Price: Low to High</option>
                                                <option value="High to Low"> Price: High to Low</option>
                                                <option value="Release Date"> Release Date</option>
                                                <option value="Avg. Rating"> Avg. Rating</option>

                                            </select>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- row -->
                            <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">

                                <!-- col -->
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body">

                                            <!-- badge -->
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a href="{{url('products-banner')}}">
                                                    <!-- img --><img src="images/products/dokumen.jpg"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <!-- action btn -->
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                            data-bs-toggle="tooltip" data-bs-html="true"
                                                            title="Quick View"></i></a>
                                                    <a href="{{url('wishlist')}}" class="btn-action"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                            class="bi bi-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- heading -->
                                            <div class="text-small mb-1"><a href="#!"
                                                    class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                            <h2 class="fs-6"><a href="shop-single.html"
                                                    class="text-inherit text-decoration-none">Print A4</a>
                                            </h2>
                                            <div>
                                                <!-- rating -->
                                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small> <span
                                                    class="text-muted small">4.5(149)</span>
                                            </div>
                                            <!-- price -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">Rp. 18,000</span>
                                                </div>
                                                <!-- btn -->
                                                <div><a href="#!" class="btn btn-primary btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg> Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-8">
                                <div class="col">
                                    <!-- nav -->
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link  mx-1 " href="#" aria-label="Previous">
                                                    <i class="feather-icon icon-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item "><a class="page-link  mx-1 active"
                                                    href="#">1</a></li>
                                            <li class="page-item"><a class="page-link mx-1 text-body"
                                                    href="#">2</a></li>

                                            <li class="page-item"><a class="page-link mx-1 text-body"
                                                    href="#">...</a></li>
                                            <li class="page-item"><a class="page-link mx-1 text-body"
                                                    href="#">12</a></li>
                                            <li class="page-item">
                                                <a class="page-link mx-1 text-body" href="#" aria-label="Next">
                                                    <i class="feather-icon icon-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>



        <!-- modal -->
        <!-- Modal -->
        <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body p-8">
                  <div class="position-absolute top-0 end-0 me-3 mt-3">
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <!-- img slide -->
                      <div class="product productModal" id="productModal">
                        <div
                          class="zoom"
                          onmousemove="zoom(event)"
                          style="
                            background-image: url(images/products/dokumen.jpg);
                          "
                        >
                          <!-- img -->
                          <img
                            src="images/products/dokumen.jpg"
                            alt=""
                      >
                        </div>
                        <div>
                          <div
                            class="zoom"
                            onmousemove="zoom(event)"
                            style="
                              background-image: url(images/products/banner.jpg);
                            "
                          >
                            <!-- img -->
                            <img
                              src="images/products/banner.jpg"
                              alt=""
                        >
                          </div>
                        </div>
                        <div>
                          <div
                            class="zoom"
                            onmousemove="zoom(event)"
                            style="
                              background-image: url(images/products/dokumen.jpg);
                            "
                          >
                            <!-- img -->
                            <img
                              src="images/products/dokumen.jpg"
                              alt=""
                        >
                          </div>
                        </div>
                        <div>
                          <div
                            class="zoom"
                            onmousemove="zoom(event)"
                            style="
                              background-image: url(images/products/banner.jpg);
                            "
                          >
                            <!-- img -->
                            <img
                              src="images/products/banner.jpg"
                              alt=""
                        >
                          </div>
                        </div>
                      </div>
                      <!-- product tools -->
                      <div class="product-tools">
                        <div class="thumbnails row g-3" id="productModalThumbnails">
                          <div class="col-3" class="tns-nav-active">
                            <div class="thumbnails-img">
                              <!-- img -->
                              <img
                                src="images/products/dokumen.jpg"
                                alt=""
                          >
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="thumbnails-img" >
                              <!-- img -->
                              <img
                                src="images/products/banner.jpg"
                                alt=""
                          >
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="thumbnails-img">
                              <!-- img -->
                              <img
                                src="images/products/dokumen.jpg"
                                alt=""
                          >
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="thumbnails-img">
                              <!-- img -->
                              <img
                                src="images/products/banner.jpg"
                                alt=""
                          >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="ps-lg-8 mt-6 mt-lg-0">
                        <a href="#!" class="mb-4 d-block">Dokumen</a>
                        <h2 class="mb-1 h1">Kertas A4</h2>
                        <div class="mb-4">
                          <small class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i></small
                          ><a href="#" class="ms-2">(30 reviews)</a>
                        </div>
                        <div class="fs-4">
                          <span class="fw-bold text-dark">Rp. 32,000</span>
                          {{-- <span class="text-decoration-line-through text-muted">$35</span> --}}
                          {{-- <span><small class="fs-6 ms-2 text-danger">26% Off</small></span> --}}
                        </div>
                        <hr class="my-6">
                        <div class="mb-4">
                          <button type="button" class="btn btn-outline-secondary">
                            Warna
                          </button>
                          <button type="button" class="btn btn-outline-secondary">
                            Hitam Putih
                          </button>
                          {{-- <button type="button" class="btn btn-outline-secondary">
                            1kg
                          </button> --}}
                        </div>
                        <div>
                          <!-- input -->
                          <!-- input -->
                          <div class="input-group input-spinner  ">
                            <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                            <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                          </div>
                        </div>
                        <div
                          class="mt-3 row justify-content-start g-2 align-items-center"
                        >

                          <div class="col-lg-4 col-md-5 col-6 d-grid">
                            <!-- button -->
                            <!-- btn -->
                            <button type="button" class="btn btn-primary">
                              <i class="feather-icon icon-shopping-bag me-2"></i>Add to
                              cart
                            </button>
                          </div>
                          <div class="col-md-4 col-5">
                            <!-- btn -->
                            {{-- <a
                              class="btn btn-light"
                              href="#"
                              data-bs-toggle="tooltip"
                              data-bs-html="true"
                              aria-label="Compare"
                              ><i class="bi bi-arrow-left-right"></i
                            ></a> --}}
                            <a
                              class="btn btn-light"
                              href="#!"
                              data-bs-toggle="tooltip"
                              data-bs-html="true"
                              aria-label="Wishlist"
                              ><i class="feather-icon icon-heart"></i
                            ></a>
                          </div>
                        </div>
                        <hr class="my-6">
                        <div>
                          <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td>Product Code:</td>
                                <td>FBB00255</td>
                              </tr>
                              <tr>
                                <td>Availability:</td>
                                <td>In Stock</td>
                              </tr>
                              {{-- <tr>
                                <td>Type:</td>
                                <td>Fruits</td>
                              </tr>
                              <tr>
                                <td>Shipping:</td>
                                <td>
                                  <small
                                    >01 day shipping.<span class="text-muted"
                                      >( Free pickup today)</span
                                    ></small
                                  >
                                </td>
                              </tr> --}}
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        <!-- Footer -->


        <!-- Javascript-->
        <script src="libs/nouislider/dist/nouislider.min.js"></script>
        <script src="libs/wnumb/wNumb.min.js"></script>
        <!-- Libs JS -->
        <script src="libs/jquery/dist/jquery.min.js"></script>
        <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="js/theme.min.js"></script>
        <script src="libs/tiny-slider/dist/min/tiny-slider.js"></script>
        <script src="js/vendors/tns-slider.js"></script>
        <script src="js/vendors/zoom.js"></script>
        <script src="js/vendors/increment-value.js"></script>




    {{-- </body> --}}
@endsection

{{-- </html> --}}
