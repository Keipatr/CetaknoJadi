@extends('layouts.main')

@section('main-content')
    {{-- <body> --}}
    <main>
        <section class="mt-8">
            <div class="container">
                <div class="hero-slider ">
                    <div
                        style="background: url(images/slider/slide-1.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                        <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                            {{-- <span class="badge text-bg-warning">Opening Sale Discount 50%</span> --}}

                            <h2 class="text-dark display-5 fw-bold mt-4">Website For Printing </h2>
                            <p class="lead">Introduced a new model for online printing
                                and convenient home delivery.</p>
                            <a href="https://forms.gle/pWxDEK37DhUGE6GG6" class="btn btn-dark mt-3">Send Feedback<i
                                    class="feather-icon icon-arrow-right ms-1"></i></a>
                        </div>

                    </div>
                    <div class=" "
                        style="background: url(images/slider/slider-2.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                        <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                            {{-- <span class="badge text-bg-warning">Free Shipping - orders over $100</span> --}}
                            <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping on <br> <span
                                    class="text-primary">First Buyer</span></h2>
                            <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are
                                applied.
                            </p>
                            <a href="https://forms.gle/pWxDEK37DhUGE6GG6" class="btn btn-dark mt-3">Send Feedback <i
                                    class="feather-icon icon-arrow-right ms-1"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="my-lg-14 my-8">
            <div class="container ">
                <div class="row align-items-center mb-6">
                    <div class="col-10 ">
                        <div>
                            <!-- heading    -->
                            <h3 class="align-items-center d-flex mb-0 h4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-layers text-primary">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span class="ms-3">Shop by Categories</span>
                            </h3>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="slider-arrow  slider-8-columns-arrow" id="slider-8-columns-arrows"></div>
                    </div>
                </div>
                <div class="row g-6">
                    <div class="col-12">
                        <div class="position-relative">
                            <div class="slider-8-columns " id="slider-8-columns">
                                @foreach ($categories as $category)
                                    <div class="item">
                                        <a href="{{ url('/categories/'.$category->NAME_CATEGORY) }}" class="text-decoration-none text-inherit">
                                            <div class="card mb-3 card-lift">
                                                <div class="card-body text-center py-6 text-center">
                                                    <div class="my-5">
                                                        <div class="my-5">
                                                            <img width="56" height="56"
                                                                src="images/icons/calendar.svg">
                                                        </div>
                                                    </div>
                                                    <div>{{ $category->NAME_CATEGORY }}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Nearest Store -->

        <section class="my-lg-10 my-8">
            <div class="container ">
                <div class="row align-items-center mb-8">
                    <!-- store -->
                    <div class="col-md-8 col-12">
                        <div class="d-flex">
                            <div class="mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-shop text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                </svg>
                            </div>
                            <div class="ms-3">
                                <h3 class=" mb-0">Nearest Store</h3>
                                {{-- <p class="mb-0">Find the best store products in your area with discount.</p> --}}
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <!-- all store -->
                    <div class="col-md-4 text-end col-12 d-none d-md-block">
                        <a href="{{ url('/stores') }}">
                            All stores
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- row -->
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3 g-4 g-lg-4">
                    @php
                        shuffle($stores);
                        $randomStores = array_slice($stores, 0, 3);
                    @endphp
                    @foreach ($randomStores as $store)
                    <div class="col">
                        <div class="card p-6 card-product">
                            <div>
                                <img src="images/stores-logo/stores-logo-1.svg" alt=""
                                    class="rounded-circle icon-shape icon-xl">
                            </div>
                            <div class="mt-4">
                                <h2 class="mb-1 h5"><a href="{{url('/stores/'.$store->NAME_SHOP)}}" class="text-inherit">{{$store->NAME_SHOP}}</a></h2>
                                <div class="small text-muted">
                                </div>
                                <div class="py-3">
                                    <ul class="list-unstyled mb-0 small">
                                        <li><span class="text-primary">Delivery</span>
                                        </li>
                                        <li>Pickup available</li>
                                    </ul>
                                </div>
                                <div>
                                    <div class="badge text-bg-light border">7.5 km away</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col"> --}}
                        <!-- card -->
                        {{-- <div class="card p-6 card-product"> --}}
                            {{-- <div> --}}
                                <!-- img -->
                                {{-- <img src="images/stores-logo/stores-logo-3.svg" alt="" --}}
                                    {{-- class="rounded-circle icon-shape icon-xl"> --}}
                            {{-- </div> --}}
                            {{-- <div class="mt-4"> --}}
                                <!-- content -->
                                {{-- <h2 class="mb-1 h5"><a href="#!" class="text-inherit">Wiyung Printing</a></h2> --}}
                                {{-- <div class="small text-muted"> --}}
                                    {{-- <span class="me-2">Groceries</span><span
                        class="me-2">Bakery</span>
                        <span>Deli</span> --}}
                                {{-- </div>
                                <div class="py-3">
                                    <ul class="list-unstyled mb-0 small">
                                        <li><span class="text-primary">Delivery</span>
                                        </li>
                                        <li>Pickup available</li>
                                    </ul>
                                </div>
                                <div> --}}
                                    <!-- badge -->
                                    {{-- <div class="badge text-bg-light border">7.1 km away</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                </div>
            </div>
        </section>
        <!-- Nearest Store End-->

        <!-- Popular Products Start-->
        <section class="my-lg-14 my-8">
            <div class="container">
                {{-- <div class="row">
          <div class="col-12 mb-6">

            <h3 class="mb-0">Popular Products</h3>

          </div>
        </div> --}}
                {{-- <div class="row align-items-center mb-6">
                    <div class="col-lg-10 col-10 ">
                        <!-- heading -->
                        <h3 class="align-items-center d-flex mb-0 h4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star text-primary">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            <span class="ms-3">Products</span>
                        </h3>
                    </div>
                    <div class="col-lg-2 col-2">
                        <div class="slider-arrow  " id="slider-second-arrows"></div>
                    </div>

                </div> --}}
                <div class="row align-items-center mb-8">
                    <!-- store -->
                    <div class="col-md-8 col-12">
                        <div class="d-flex">
                            <div class="mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-star text-primary">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                            </div>
                            <div class="ms-3">
                                <h3 class=" mb-0">Products</h3>
                                {{-- <p class="mb-0">Find the best store products in your area with discount.</p> --}}
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <!-- all product -->
                    <div class="col-md-4 text-end col-12 d-none d-md-block">
                        <a href="{{ url('products') }}">
                            All products
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
                    @php
                        shuffle($products);
                        $randomProducts = array_slice($products, 0, 10);
                    @endphp
                    @foreach ($randomProducts as $product)
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">

                                    <div class="text-center position-relative ">
                                        <div class=" position-absolute top-0 start-0">
                                        </div>
                                        <a href="{{'/products/'.$product->NAME_SHOP.'/'.$product->PRODUCT_NAME.'?id='.Crypt::encryptString($product->ID_CONTAINER)}}"> <img
                                                src="{{ $product->image ?: 'images/products/product-img-18.jpg' }}"
                                                alt="Grocery Ecommerce Template" class="mb-3 img-fluid rounded fixed-size-image w-1100 h-1000"></a>

                                        <div class="card-product-action">
                                            {{-- <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                    data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Quick View"></i></a> --}}

                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        </div>

                                    </div>
                                    <div class="text-small mb-1"><a href="#!"
                                            class="text-decoration-none text-muted"><small>{{ $product->NAME_CATEGORY }}</small></a>
                                    </div>
                                    <h2 class="fs-6">
                                        <a href="{{'/products/'.$product->NAME_SHOP.'/'.$product->PRODUCT_NAME.'?id='.Crypt::encryptString($product->ID_CONTAINER)}}"
                                            class="text-inherit text-decoration-none">{{ $product->PRODUCT_NAME }}</a>

                                    </h2>
                                    <div>
                                        <small class="text-warning">
                                            @php
                                                $fullStars = floor($product->rating);
                                                $halfStar = ceil($product->rating - $fullStars);
                                                $emptyStars = 5 - $fullStars - $halfStar;
                                            @endphp

                                            @for ($i = 0; $i < $fullStars; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor

                                            @for ($i = 0; $i < $halfStar; $i++)
                                                <i class="bi bi-star-half"></i>
                                            @endfor

                                            @for ($i = 0; $i < $emptyStars; $i++)
                                                <i class="bi bi-star"></i>
                                            @endfor

                                        </small>
                                        <span
                                            class="text-muted small">{{ $product->rating != 0 ? ($product->rating != round($product->rating) ? number_format($product->rating, 1) : round($product->rating)) : '0' }}
                                            ({{ $product->rating_count }})</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div><span class="text-dark">{{ $product->formatted_price }}</span>
                                        </div>
                                        <div><a href="#!" class="btn btn-primary btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg> Add</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col">
                        <div class="card card-product">
                            <div class="card-body">

                                <div class="text-center position-relative ">
                                    <div class=" position-absolute top-0 start-0">
                                    </div>
                                    <a href=""> <img src="images/products/dokumen.jpg"
                                            alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>

                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>

                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                <h2 class="fs-6"><a href="./pages/shop-single.html"
                                        class="text-inherit text-decoration-none">Kertas A4</a></h2>
                                <div>

                                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span
                                        class="text-muted small">4.5(149)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">Rp. 18,000</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <div class=" position-absolute top-0 start-0">
                                    </div>
                                    <a href="./pages/shop-single.html"><img src="images/products/banner.jpg"
                                            alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="../shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>

                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Spanduk & Banner</small></a></div>
                                <h2 class="fs-6"><a href="./pages/shop-single.html"
                                        class="text-inherit text-decoration-none">Print Spanduk </a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5
                                        (25)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">Rp. 24,000</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="./pages/shop-single.html"><img
                                            src="images/products/dokumen.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="../shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                <h2 class="fs-6"><a href="./pages/shop-single.html"
                                        class="text-inherit text-decoration-none">Kertas A4</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i></small> <span class="text-muted small">5
                                        (469)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">Rp. 32,000</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="./pages/shop-single.html"><img
                                            src="images/products/banner.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="../shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>
                                    <div class=" position-absolute top-0 start-0">
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Spanduk & Banner</small></a></div>
                                <h2 class="fs-6"><a href="./pages/shop-single.html"
                                        class="text-inherit text-decoration-none">Print Spanduk</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <i class="bi bi-star"></i></small> <span class="text-muted small">3.5 (456)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">Rp. 3,000</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="./pages/shop-single.html"><img
                                            src="images/products/dokumen.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="../shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                <h2 class="fs-6"><a href="./pages/shop-single.html"
                                        class="text-inherit text-decoration-none">Kertas A4 </a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5
                                        (39)</span>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <div><span class="text-dark">Rp. 13,000</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">

                                <div class="text-center position-relative ">
                                    <div class=" position-absolute top-0 start-0">
                                    </div>
                                    <a href="#!"> <img src="images/products/banner.jpg"
                                            alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Spanduk & Banner</small></a></div>
                                <h2 class="fs-6"><a href="./pages/shop-single.html"
                                        class="text-inherit text-decoration-none">Print Spanduk</a></h2>
                                <div>

                                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5
                                        (189)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">Rp. 18,000</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="./pages/shop-single.html"><img
                                            src="images/products/dokumen.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="../shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                <h2 class="fs-6"><a href="./pages/shop-single.html"
                                        class="text-inherit text-decoration-none">Kertas A4</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i></small> <span class="text-muted small">5
                                        (345)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">Rp. 24,000</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="./pages/shop-single.html"><img
                                            src="images/products/banner.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="../shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Spanduk & Banner</small></a></div>
                                <h2 class="fs-6"><a href="./pages/shop-single.html"
                                        class="text-inherit text-decoration-none">Print Spanduk</a>
                                </h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4
                                        (90)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">Rp. 32,000</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="./pages/shop-single.html"><img
                                            src="images/products/dokumen.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="../shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Dokumen</small></a></div>
                                <h2 class="fs-6"><a href="./pages/shop-single.html"
                                        class="text-inherit text-decoration-none">Kertas A4</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5
                                        (67)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">Rp. 3,000</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="./pages/shop-single.html"><img
                                            src="images/products/banner.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="../shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Spanduk & Banner</small></a></div>
                                <h2 class="fs-6"><a href="./pages/shop-single"
                                        class="text-inherit text-decoration-none">Print Spanduk</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <i class="bi bi-star"></i></small> <span class="text-muted small">3.5 (89)</span>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <div><span class="text-dark">Rp. 13,000</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- Popular Products End-->
        {{-- <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-6">
            <h3 class="mb-0">Daily Best Sells</h3>
          </div>
        </div>
        <div class="table-responsive-xl pb-6">
        <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
          <div class="col">
            <div class=" pt-8 px-6 px-xl-8 rounded"
              style="background:url(images/banner/banner-deal.jpg)no-repeat; background-size: cover; height: 470px;">
              <div>
                <h3 class="fw-bold text-white">100% Organic
                  Coffee Beans.
                </h3>
                <p class="text-white">Get the best deal before close.</p>
                <a href="https://forms.gle/pWxDEK37DhUGE6GG6" class="btn btn-primary">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center  position-relative "> <a href="./pages/shop-single.html"><img
                      src="images/products/product-img-11.jpg" alt="Grocery Ecommerce Template"
                      class="mb-3 img-fluid"></a>

                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                      class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Tea, Coffee &
                      Drinks</small></a></div>
                <h2 class="fs-6"><a href="./pages/shop-single.html" class="text-inherit text-decoration-none">Roast
                    Ground Coffee</a></h2>

                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$13</span> <span
                      class="text-decoration-line-through text-muted">$18</span>
                  </div>
                  <div>
                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </small>
                    <span><small>4.5</small></span>
                  </div>
                </div>
                <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg> Add to cart </a></div>
                <div class="d-flex justify-content-start text-center mt-3">
                  <div class="deals-countdown w-100" data-countdown="2028/10/10 00:00:00"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center  position-relative "> <a href="./pages/shop-single.html"><img
                      src="images/products/product-img-12.jpg" alt="Grocery Ecommerce Template"
                      class="mb-3 img-fluid"></a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Fruits &
                      Vegetables</small></a></div>
                <h2 class="fs-6"><a href="./pages/shop-single.html" class="text-inherit text-decoration-none">Crushed
                    Tomatoes</a></h2>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$13</span> <span
                      class="text-decoration-line-through text-muted">$18</span>
                  </div>
                  <div>
                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </small>
                    <span><small>4.5</small></span>
                  </div>
                </div>
                <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg> Add to cart </a></div>
                <div class="d-flex justify-content-start text-center mt-3 w-100">
                  <div class="deals-countdown w-100" data-countdown="2028/12/9 00:00:00"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center  position-relative "> <a href="./pages/shop-single.html"><img
                      src="images/products/product-img-13.jpg" alt="Grocery Ecommerce Template"
                      class="mb-3 img-fluid"></a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Fruits &
                      Vegetables</small></a></div>
                <h2 class="fs-6"><a href="./pages/shop-single.html" class="text-inherit text-decoration-none">Golden
                    Pineapple</a></h2>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$13</span> <span
                      class="text-decoration-line-through text-muted">$18</span>
                  </div>
                  <div>
                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i></small>
                    <span><small>4.5</small></span>
                  </div>
                </div>
                <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg> Add to cart </a></div>
                <div class="d-flex justify-content-start text-center mt-3">
                  <div class="deals-countdown w-100" data-countdown="2028/11/11 00:00:00"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section> --}}
        <section class=" pt-lg-16 pt-8 my-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="images/icons/clock.svg" alt=""></div>
                            <h3 class="h5 mb-3">
                                24/7 Service
                            </h3>
                            <p>Get your order delivered to your doorstep at the earliest from Cetakno pickup stores near
                                you.</p>
                        </div>
                    </div>
                    <div class="col-md-6  col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="images/icons/gift.svg" alt=""></div>
                            <h3 class="h5 mb-3">Friendly Design</h3>
                            <p>Cheaper prices than your local printing, great cashback offers to top it off. Get best prices
                                &
                                offers.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="images/icons/package.svg" alt=""></div>
                            <h3 class="h5 mb-3">Pilihan Banyak</h3>
                            <p>Choose from 50+ products across digital printing, stationery, & other
                                categories.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="images/icons/refresh-cw.svg" alt=""></div>
                            <h3 class="h5 mb-3">Pengiriman & Pengambilan</h3>
                            <p>Not satisfied with a product? Return it at the doorstep & get a refund within hours. No
                                questions asked
                                <a href="#!">policy</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Modal -->
    <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-8">
                    <div class="position-absolute top-0 end-0 me-3 mt-3">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- img slide -->
                            <div class="product productModal" id="productModal">
                                <div class="zoom" onmousemove="zoom(event)"
                                    style="
                  background-image: url(images/products/dokumen.jpg);
                ">
                                    <!-- img -->
                                    <img src="images/products/dokumen.jpg" alt="">
                                </div>
                                <div>
                                    <div class="zoom" onmousemove="zoom(event)"
                                        style="
                    background-image: url(images/products/banner.jpg);
                  ">
                                        <!-- img -->
                                        <img src="images/products/banner.jpg" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="zoom" onmousemove="zoom(event)"
                                        style="
                    background-image: url(images/products/dokumen.jpg);
                  ">
                                        <!-- img -->
                                        <img src="images/products/dokumen.jpg" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="zoom" onmousemove="zoom(event)"
                                        style="
                    background-image: url(images/products/banner.jpg);
                  ">
                                        <!-- img -->
                                        <img src="images/products/banner.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- product tools -->
                            <div class="product-tools">
                                <div class="thumbnails row g-3" id="productModalThumbnails">
                                    <div class="col-3" class="tns-nav-active">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="images/products/dokumen.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="images/products/banner.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="images/products/dokumen.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="images/products/banner.jpg" alt="">
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
                                        <i class="bi bi-star-half"></i></small><a href="#" class="ms-2">(30
                                        reviews)</a>
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
                                        <input type="button" value="-" class="button-minus  btn  btn-sm "
                                            data-field="quantity">
                                        <input type="number" step="1" max="10" value="1"
                                            name="quantity" class="quantity-field form-control-sm form-input   ">
                                        <input type="button" value="+" class="button-plus btn btn-sm "
                                            data-field="quantity">
                                    </div>
                                </div>
                                <div class="mt-3 row justify-content-start g-2 align-items-center">

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
                                        <a class="btn btn-light" href="#!" data-bs-toggle="tooltip"
                                            data-bs-html="true" aria-label="Wishlist"><i
                                                class="feather-icon icon-heart"></i></a>
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



    <!-- Javascript-->

    <!-- Libs JS -->
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="js/theme.min.js"></script>
    <script src="libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
    <script src="js/vendors/countdown.js"></script>
    <script src="libs/slick-carousel/slick/slick.min.js"></script>
    <script src="js/vendors/slick-slider.js"></script>
    <script src="libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="js/vendors/tns-slider.js"></script>
    <script src="js/vendors/zoom.js"></script>
    <script src="js/vendors/increment-value.js"></script>



    {{-- </body> --}}
@endsection
{{-- </html> --}}
