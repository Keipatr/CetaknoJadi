@extends('layouts.main')

@section('main-content')
    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="notificationMessage"></div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="mt-4">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('category-show', ['category_url' => 'all-product']) }}">Products</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $category_url === 'all-product' ? 'All Products' : $category_url }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mt-8 mb-lg-14 mb-8">
            <div class="container">
                <div class="row gx-10">
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
                                    <h5 class="mb-3">Categories</h5>
                                    <ul class="nav nav-category" id="categoryCollapseMenu">
                                        <li class="nav-item border-bottom w-100 collapsed">
                                            <a href="{{ route('category-show', ['category_url' => 'all-product']) }}" class="nav-link">
                                                All Products
                                            </a>
                                        </li>


                                        <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#categoryFlushOne" aria-expanded="false"
                                            aria-controls="categoryFlushOne"><a href="{{ url('products') }}"
                                                class="nav-link">Cetak Kalender
                                            </a>
                                        </li>
                                        <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo"><a href="{{ url('products') }}"
                                                class="nav-link">
                                                Kartu Nama undangan & Foto
                                            </a>
                                        </li>
                                        <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree"> <a href="{{ url('products') }}"
                                                class="nav-link">Dokumen
                                            </a>
                                        </li>
                                        <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour"> <a href="{{ url('products') }}"
                                                class="nav-link">Media Promosi
                                            </a>
                                        </li>
                                        <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                                            aria-controls="flush-collapseFive"> <a href="{{ url('products') }}"
                                                class="nav-link">Print Offset
                                            </a>
                                        </li>
                                        <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSix" aria-expanded="false"
                                            aria-controls="flush-collapseSix"> <a href="{{ url('products') }}"
                                                class="nav-link">Spanduk & Banner
                                            </a>
                                        </li>
                                        <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                            aria-controls="flush-collapseSeven"> <a href="{{ url('products') }}"
                                                class="nav-link">Kaos & Kain
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                {{-- <div class="mb-8">
                                    <h5 class="mb-3">Price</h5>
                                    <div>
                                        <div id="priceRange" class="mb-3"></div>
                                        <small class="text-muted">Price:</small> <span id="priceRange-value"
                                            class="small"></span>
                                    </div>
                                </div> --}}
                                {{-- <div class="mb-8">
                                    <h5 class="mb-3">Rating</h5>
                                    <div>
                                        <div class="form-check mb-2">
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
                                        <div class="form-check mb-2">
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
                                        <div class="form-check mb-2">
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
                                        <div class="form-check mb-2">
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
                                        <div class="form-check mb-2">
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
                                </div> --}}
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
                                        <!-- img --><img src="/images/banner/assortment-citrus-fruits.png" alt=""
                                            class="img-fluid rounded ">
                                        <!-- Banner Image -->
                                    </div> --}}
                            </div>
                        </div>
                    </aside>
                    <section class="col-lg-9 col-md-12">

                        <div class="card mb-4 bg-light border-0">
                            <div class=" card-body p-9">
                                <h2 class="mb-0 fs-1 text-start">
                                    {{ $category_url === 'all-product' ? 'All Products' : $category_url }}
                                </h2>
                            </div>
                        </div>


                        <div class="d-lg-flex justify-content-between align-items-center">
                            <div class="mb-3 mb-lg-0">
                                <p class="mb-0"> <span class="text-dark">Show {{ $paginator->firstItem() }} -
                                        {{ $paginator->lastItem() }} of {{ $paginator->total() }} Products found</span>
                                </p>
                            </div>

                            {{-- <div class="d-md-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>

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
                                </div>

                                <div class="d-flex mt-2 mt-lg-0">
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

                            </div> --}}
                        </div>

                        <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
                            @foreach ($paginator as $product)
                                <div class="col">
                                    <div class="card card-product">
                                        <div class="card-body">
                                            <div class="text-center position-relative ">
                                                <div class=" position-absolute top-0 start-0"></div>
                                                <a
                                                    href="{{ '/products/' . $product->NAME_SHOP . '/' . $product->PRODUCT_NAME . '?id=' . Crypt::encryptString($product->ID_CONTAINER) }}">
                                                    <img src="{{ $product->image ? '/images/all/' . $product->image : 'images/products/product-img-18.jpg' }}"
                                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                                </a>
                                                <div class="card-product-action">
                                                    <a href="#!" class="btn-action add-to-wishlist"
                                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"
                                                        data-product-id="{{ $product->ID_PRODUCT }}"
                                                        data-container-id="{{ $product->ID_CONTAINER }}">
                                                        <i class="bi bi-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-small mb-1"><a
                                                    href="{{ url('/categories/' . $product->NAME_CATEGORY . '?id=' . Crypt::encryptString($product->ID_CATEGORY)) }}"
                                                    class="text-decoration-none text-muted"><small>{{ $product->NAME_CATEGORY }}</small></a>
                                            </div>
                                            <h2 class="fs-6"><a
                                                    href="{{ '/products/' . $product->NAME_SHOP . '/' . $product->PRODUCT_NAME . '?id=' . Crypt::encryptString($product->ID_CONTAINER) }}"
                                                    class="text-inherit text-decoration-none">{{ $product->PRODUCT_NAME }}</a>
                                            </h2>
                                            <div class="text-small mb-1"><a
                                                    href="{{ url('/stores/' . $product->NAME_SHOP . '?id=' . Crypt::encryptString($product->ID_CATEGORY)) }}"
                                                    class="text-decoration-none text-muted"><small>{{ $product->NAME_SHOP }}</small></a>
                                            </div>
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
                                                    ({{ $product->rating_count }})
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div><span class="text-dark">{{ $product->formatted_price }}</span>
                                                </div>
                                                <div><a href="#!" class="btn btn-primary btn-sm add-to-cart"
                                                        data-product-id="{{ $product->ID_PRODUCT }}"
                                                        data-container-id="{{ $product->ID_CONTAINER }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19">
                                                            </line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12">
                                                            </line>
                                                        </svg> Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

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

                        <div class="row mt-8">
                            <div class="col">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item{{ $paginator->currentPage() === 1 ? ' disabled' : '' }}">
                                            <a class="page-link mx-1" href="{{ $paginator->previousPageUrl() }}"
                                                aria-label="Previous">
                                                <i class="feather-icon icon-chevron-left"></i>
                                            </a>
                                        </li>
                                        @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                                            <li
                                                class="page-item{{ $page === $paginator->currentPage() ? ' active' : '' }}">
                                                <a class="page-link mx-1"
                                                    href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach
                                        <li
                                            class="page-item{{ $paginator->currentPage() === $paginator->lastPage() ? ' disabled' : '' }}">
                                            <a class="page-link mx-1" href="{{ $paginator->nextPageUrl() }}"
                                                aria-label="Next">
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





    <!-- Footer -->


    <!-- Javascript-->
    <script src="/libs/nouislider/dist/nouislider.min.js"></script>
    <script src="/libs/wnumb/wNumb.min.js"></script>
    <!-- Libs JS -->
    <script src="/libs/jquery/dist/jquery.min.js"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="/js/theme.min.js"></script>
    <script src="/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="/js/vendors/tns-slider.js"></script>
    <script src="/js/vendors/zoom.js"></script>
    <script src="/js/vendors/increment-value.js"></script>




    {{-- </body> --}}
@endsection

{{-- </html> --}}
