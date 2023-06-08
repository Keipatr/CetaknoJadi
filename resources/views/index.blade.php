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

                            <h2 class="text-dark display-5 fw-bold mt-4">Website For Printing </h2>
                            <p class="lead">Introduced a new model for online printing
                                and convenient home delivery.</p>
                            {{-- <a href="https://forms.gle/pWxDEK37DhUGE6GG6" class="btn btn-dark mt-3">Send Feedback<i
                                    class="feather-icon icon-arrow-right ms-1"></i></a> --}}
                        </div>

                    </div>
                    <div class=" "
                        style="background: url(images/slider/slider-2.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                        <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                            <h2 class="text-dark display-5 fw-bold mt-4">Delivery <br> <span
                                    class="text-primary"></span></h2>
                            <p class="lead">Delivery right to your doorstep.
                            </p>
                            {{-- <a href="https://forms.gle/pWxDEK37DhUGE6GG6" class="btn btn-dark mt-3">Send Feedback <i
                                    class="feather-icon icon-arrow-right ms-1"></i></a> --}}
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
                                        <a href="{{ url('/categories/' . $category->NAME_CATEGORY . '?id=' . Crypt::encryptString($category->ID_CATEGORY)) }}"
                                            class="text-decoration-none text-inherit">
                                            <div class="card mb-3 card-lift">
                                                <div class="card-body text-center py-6 text-center">
                                                    <div class="my-5">
                                                        <div class="my-5">
                                                            <img width="56" height="56"
                                                                src="images/all/{{$category->image}}">
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
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row align-items-center mb-8">
                    <!-- store -->
                    <div class="col-md-8 col-12">
                        <div class="d-flex">
                            <div class="mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star text-primary">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                            </div>
                            <div class="ms-3">
                                <h3 class=" mb-0">Products</h3>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <!-- all product -->
                    <div class="col-md-4 text-end col-12 d-none d-md-block">
                        <a href="{{ url('/categories/all-product') }}">
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
                                <div class="text-center position-relative">
                                    <div class="position-absolute top-0 start-0"></div>
                                    <a href="{{ '/products/' . $product->NAME_SHOP . '/' . $product->PRODUCT_NAME.'/'.$product->ID_PRODUCT . '?id=' . Crypt::encryptString($product->ID_CONTAINER) }}">
                                        <div class="image-container">
                                            <img src="{{ $product->image ? '/images/all/' . $product->image : 'images/products/product-img-18.jpg' }}"
                                                alt="Grocery Ecommerce Template"
                                                class="mb-3 img-fluid rounded fixed-size-image">
                                        </div>
                                    </a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action add-to-wishlist" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"
                                            data-product-id="{{ $product->ID_PRODUCT }}"
                                            data-container-id="{{ $product->ID_CONTAINER }}">
                                            <i class="bi bi-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-small mb-1">
                                    <a href="{{ url('/categories/' . $product->NAME_CATEGORY . '?id=' . Crypt::encryptString($product->ID_CATEGORY)) }}"
                                        class="text-decoration-none text-muted">
                                        <small>{{ $product->NAME_CATEGORY }}</small>
                                    </a>
                                </div>
                                <h2 class="fs-6">
                                    <a href="{{ '/products/' . $product->NAME_SHOP . '/' . $product->PRODUCT_NAME.'/'.$product->ID_PRODUCT . '?id=' . Crypt::encryptString($product->ID_CONTAINER) }}"
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
                                    <span class="text-muted small">
                                        {{ $product->rating != 0 ? ($product->rating != round($product->rating) ? number_format($product->rating, 1) : round($product->rating)) : '0' }}
                                        ({{ $product->rating_count }})
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="text-dark">{{ $product->formatted_price }}</span>
                                    </div>
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm add-to-cart"
                                            data-product-id="{{ $product->ID_PRODUCT }}"
                                            data-container-id="{{ $product->ID_CONTAINER }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Add To Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <style>
                    .image-container {
                        width: 100%;
                        padding-top: 100%; /* Maintains 1:1 aspect ratio */
                        position: relative;
                        overflow: hidden;
                    }

                    .fixed-size-image {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }
                </style>

                    <script>
                        $(document).ready(function() {
                            $('.add-to-cart').click(function(e) {
                                e.preventDefault();
                                var productId = $(this).data('product-id');
                                var containerId = $(this).data('container-id');

                                $.ajax({
                                    url: '/add-to-cart',
                                    type: 'POST',
                                    data: {
                                        productId: productId,
                                        containerId: containerId,
                                        _token: '{{ csrf_token() }}'
                                    },
                                    success: function(response) {
                                        if (response.login) {
                                            alert('Please login to add a product to the cart.');
                                        } else if (response.success) {
                                            alert('Product added to cart successfully!');
                                            updateCartQuantity(response.quantity);
                                        } else {
                                            alert('Failed to add the product to the cart. Please try again.');
                                        }
                                    },
                                    error: function(xhr) {
                                        if (xhr.responseJSON && xhr.responseJSON.login) {
                                            alert('Please login to add a product to the cart.');
                                        } else {
                                            alert('Failed to add the product to the cart. Please try again.');
                                        }
                                    }
                                });
                            });



                            $('.add-to-wishlist').click(function(e) {
                                e.preventDefault();
                                var productId = $(this).data('product-id');
                                var containerId = $(this).data('container-id');

                                $.ajax({
                                    url: '/add-to-wishlist',
                                    type: 'POST',
                                    data: {
                                        containerId: containerId,
                                        productId: productId,
                                        _token: '{{ csrf_token() }}'
                                    },
                                    success: function(response) {
                                        if (response.login) {
                                            alert('Please login to add a product to the wishlist.');
                                        } else if (response.success) {
                                            alert('Product added to wishlist successfully!');
                                            updateWishlistQuantity(response.quantity);
                                        } else if (response.exists) {
                                            alert('Product already exists in the wishlist!');
                                        } else {
                                            alert(
                                                'Failed to add the product to the wishlist. Please try again.'
                                            );
                                        }
                                    },
                                    error: function(xhr) {
                                        if (xhr.responseJSON && xhr.responseJSON.login) {
                                            alert('Please login to add a product to the wishlist.');
                                        } else {
                                            alert(
                                                'Failed to add the product to the wishlist. Please try again.'
                                            );
                                        }
                                    }
                                });
                            });
                        });

                        function updateCartQuantity(quantity) {
                            $('#cartQtySmall').text(quantity);
                            $('#cartQtyLarge').text(quantity);
                        }

                        function updateWishlistQuantity(quantity) {
                            $('#wishlistQty').text(quantity);
                        }
                    </script>




                </div>
            </div>
        </section>





        <section class=" pt-lg-16 pt-8 my-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="images/icons/clock.svg" alt=""></div>
                            <h3 class="h5 mb-3">
                                24/7 Service
                            </h3>
                            <p>Buy our products all day</p>
                        </div>
                    </div>
                    <div class="col-md-6  col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="images/icons/gift.svg" alt=""></div>
                            <h3 class="h5 mb-3">Friendly Design</h3>
                            <p>Likeable design that suit your eyes.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="images/icons/package.svg" alt=""></div>
                            <h3 class="h5 mb-3">Variant Products</h3>
                            <p>Choose products across digital printing, stationery, & other
                                categories.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="images/icons/refresh-cw.svg" alt=""></div>
                            <h3 class="h5 mb-3">Delivery & Payment</h3>
                            <p>Get your order delivered to your doorstep at the earliest from Cetakno pickup stores near
                                you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog"
        aria-labelledby="notificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="notificationMessage"></div>
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
