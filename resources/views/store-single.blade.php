@extends('layouts.main')

@section('main-content')
    <!-- section-->
    <main>
        <div class="mt-4">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <!-- breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url('stores')}}">Stores</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    D'Raya Jember
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- section -->
        <section class="mb-lg-14 mb-8 mt-8">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-4 mb-4 mb-md-0">
                        <div class="d-flex flex-column">
                            <div>
                                <!-- img -->
                                <!-- img -->
                                <img src="images/stores-logo/stores-logo-1.svg" alt=""
                                    class="rounded-circle icon-shape icon-xxl" />
                            </div>
                            <!-- heading -->
                            <div class="mt-4">
                                <h1 class="mb-1 h4">E-Grocery Super Market</h1>
                                <div class="small text-muted">
                                    <span>Everyday store prices </span>
                                </div>
                                <div>
                                    <span><small><a href="#!">100% satisfaction guarantee</a></small></span>
                                </div>
                                <!-- rating -->
                                <div class="mt-2">
                                    <!-- rating -->
                                    <small class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small><span class="ms-2">5.0</span>
                                    <!-- text --><span class="text-muted ms-1">(3,400 reviews)</span>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <!-- nav -->
                        <ul class="nav flex-column nav-pills nav-pills-dark">
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i
                                        class="feather-icon icon-shopping-bag me-2"></i>Shop</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i
                                        class="feather-icon icon-gift me-2"></i>Deals</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i
                                        class="feather-icon icon-map-pin me-2"></i>Buy It Again</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i
                                        class="feather-icon icon-star me-2"></i>Reviews</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i
                                        class="feather-icon icon-book me-2"></i>Recipes</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i
                                        class="feather-icon icon-phone-call me-2"></i>Contact</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i
                                        class="feather-icon icon-clipboard me-2"></i>Policy</a>
                            </li>
                        </ul>
                        <hr />
                        <div>
                            <ul class="nav flex-column nav-links">
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Produce</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Dairy & Eggs</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Beverages</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Meat & Seafood</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Snacks & Candy</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Frozen</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Bakery</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Prepared Foods</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Alcohol</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Dry Goods & Pasta</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Condiments & Sauces</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Canned Goods & Soups</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Breakfast</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Household</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Baking Essentials</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Oils, Vinegars, & Spices</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Health Care</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Personal Care</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Kitchen Supplies</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Floral</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Party & Gift Supplies</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 col-md-8">
                        <div class="mb-8 bg-light d-lg-flex justify-content-lg-between rounded">
                            <div class="align-self-center p-8">
                                <div class="mb-3">
                                    <h5 class="mb-0 fw-bold">E-Grocery Super Market</h5>
                                    <p class="mb-0 text-muted">
                                        Whatever the occasion, we've got you covered.
                                    </p>
                                </div>
                                <div class="position-relative">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Search E-Grocery Super Market" />
                                    <span class="position-absolute end-0 top-0 mt-2 me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65">
                                            </line>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="py-4">
                                <!-- img -->
                                <img src="images/svg-graphics/store-graphics.svg" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>

                        <div class="d-md-flex justify-content-between mb-3 align-items-center">
                            <div>
                                <p class="mb-3 mb-md-0">24 Products found</p>
                            </div>
                            <div class="d-flex justify-content-md-between align-items-center">
                                <div class="me-2">
                                    <!-- select option -->
                                    <select class="form-select">
                                        <option selected>Show: 50</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                                <div>
                                    <!-- select option -->
                                    <select class="form-select">
                                        <option selected>Sort by: Featured</option>
                                        <option value="Low to High">Price: Low to High</option>
                                        <option value="High to Low">Price: High to Low</option>
                                        <option value="Release Date">Release Date</option>
                                        <option value="Avg. Rating">Avg. Rating</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center position-relative">
                                            <!-- badge -->
                                            <div class="position-absolute top-0 start-0">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <a href="#!">
                                                <!-- img --><img src="images/products/product-img-1.jpg"
                                                    alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                            </a>
                                            <!-- btn action -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Compare"><i
                                                        class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted"><small>Snack &
                                                    Munchies</small></a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="#!" class="text-inherit text-decoration-none">Haldiram's
                                                Sev Bhujia</a>
                                        </h2>
                                        <div>
                                            <!-- rating -->
                                            <small class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i></small>
                                            <!-- text --><span class="text-muted small">4.5(149)</span>
                                        </div>
                                        <!-- price -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <span class="text-dark">$18</span>
                                                <span class="text-decoration-line-through text-muted">$24</span>
                                            </div>
                                            <div>
                                                <!-- btn --><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                    Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center position-relative">
                                            <!-- badge -->
                                            <a href="#!">
                                                <!-- img --><img src="images/products/product-img-2.jpg"
                                                    alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                            </a>
                                            <!-- btn action -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Compare"><i
                                                        class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted"><small>Bakery
                                                    & Biscuits</small></a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="#!" class="text-inherit text-decoration-none">NutriChoice
                                                Digestive
                                            </a>
                                        </h2>
                                        <div class="text-warning">
                                            <small>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i></small>
                                            <!-- text --><span class="text-muted small">4.5 (25)</span>
                                        </div>
                                        <!-- price -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div><span class="text-dark">$24</span></div>
                                            <div>
                                                <!-- btn --><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                    Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center position-relative">
                                            <!-- badge -->
                                            <a href="#!">
                                                <!-- img --><img src="images/products/product-img-3.jpg"
                                                    alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                            </a>
                                            <!-- btn action -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Compare"><i
                                                        class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted"><small>Bakery
                                                    & Biscuits</small></a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="#!" class="text-inherit text-decoration-none">Cadbury 5
                                                Star Chocolate</a>
                                        </h2>
                                        <div class="text-warning">
                                            <small>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i></small>
                                            <!-- text --><span class="text-muted small">5 (469)</span>
                                        </div>
                                        <!-- price -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <span class="text-dark">$32</span>
                                                <span class="text-decoration-line-through text-muted">$35</span>
                                            </div>
                                            <div>
                                                <!-- btn --><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                    Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center position-relative">
                                            <!-- badge -->
                                            <a href="#!">
                                                <!-- img --><img src="images/products/product-img-4.jpg"
                                                    alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                            </a>
                                            <!-- btn action -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Compare"><i
                                                        class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted"><small>Snack &
                                                    Munchies</small></a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="#!" class="text-inherit text-decoration-none">Onion
                                                Flavour Potato</a>
                                        </h2>
                                        <div class="text-warning">
                                            <small>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                                <i class="bi bi-star"></i></small>
                                            <!-- text --><span class="text-muted small">3.5 (456)</span>
                                        </div>
                                        <!-- price -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <span class="text-dark">$3</span>
                                                <span class="text-decoration-line-through text-muted">$5</span>
                                            </div>
                                            <div>
                                                <!-- btn --><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                    Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center position-relative">
                                            <!-- badge -->
                                            <a href="#!">
                                                <!-- img --><img src="images/products/product-img-5.jpg"
                                                    alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                            </a>
                                            <!-- btn action -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Compare"><i
                                                        class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted"><small>Instant
                                                    Food</small></a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="#!" class="text-inherit text-decoration-none">Salted
                                                Instant Popcorn
                                            </a>
                                        </h2>
                                        <div class="text-warning">
                                            <small>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i></small>
                                            <!-- text --><span class="text-muted small">4.5 (39)</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <span class="text-dark">$13</span>
                                                <span class="text-decoration-line-through text-muted">$18</span>
                                            </div>
                                            <div>
                                                <!-- btn --><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                    Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center position-relative">
                                            <!-- badge -->
                                            <div class="position-absolute top-0 start-0">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <a href="#!">
                                                <!-- img --><img src="images/products/product-img-6.jpg"
                                                    alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                            </a>
                                            <!-- btn action -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Compare"><i
                                                        class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted"><small>Dairy,
                                                    Bread & Eggs</small></a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="#!" class="text-inherit text-decoration-none">Blueberry
                                                Greek Yogurt</a>
                                        </h2>
                                        <div>
                                            <!-- rating -->
                                            <small class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i></small>
                                            <!-- text --><span class="text-muted small">4.5 (189)</span>
                                        </div>
                                        <!-- price -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <span class="text-dark">$18</span>
                                                <span class="text-decoration-line-through text-muted">$24</span>
                                            </div>
                                            <div>
                                                <!-- btn --><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                    Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center position-relative">
                                            <!-- badge -->
                                            <a href="#!">
                                                <!-- img --><img src="images/products/product-img-7.jpg"
                                                    alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                            </a>
                                            <!-- btn action -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Compare"><i
                                                        class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted"><small>Dairy,
                                                    Bread & Eggs</small></a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="#!" class="text-inherit text-decoration-none">Britannia
                                                Cheese Slices</a>
                                        </h2>
                                        <div class="text-warning">
                                            <small>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i></small>
                                            <!-- text --><span class="text-muted small">5 (345)</span>
                                        </div>
                                        <!-- price -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div><span class="text-dark">$24</span></div>
                                            <div>
                                                <!-- btn --><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                    Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center position-relative">
                                            <!-- badge -->
                                            <a href="#!">
                                                <!-- img --><img src="images/products/product-img-8.jpg"
                                                    alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                            </a>
                                            <!-- btn action -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Compare"><i
                                                        class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted"><small>Instant
                                                    Food</small></a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="#!" class="text-inherit text-decoration-none">Kellogg's
                                                Original Cereals</a>
                                        </h2>
                                        <div class="text-warning">
                                            <small>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i></small>
                                            <!-- text --><span class="text-muted small">4 (90)</span>
                                        </div>
                                        <!-- price -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <span class="text-dark">$32</span>
                                                <span class="text-decoration-line-through text-muted">$35</span>
                                            </div>
                                            <div>
                                                <!-- btn --><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                    Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center position-relative">
                                            <!-- badge -->
                                            <a href="#!">
                                                <!-- img --><img src="images/products/product-img-9.jpg"
                                                    alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                            </a>
                                            <!-- btn action -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Compare"><i
                                                        class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted"><small>Snack &
                                                    Munchies</small></a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="#!" class="text-inherit text-decoration-none">Slurrp
                                                Millet Chocolate
                                            </a>
                                        </h2>
                                        <div class="text-warning">
                                            <small>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i></small>
                                            <!-- text --><span class="text-muted small">4.5 (67)</span>
                                        </div>
                                        <!-- price -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <span class="text-dark">$3</span>
                                                <span class="text-decoration-line-through text-muted">$5</span>
                                            </div>
                                            <div>
                                                <!-- btn --><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                    Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center position-relative">
                                            <!-- badge -->
                                            <a href="#!">
                                                <!-- img --><img src="images/products/product-img-10.jpg"
                                                    alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                            </a>
                                            <!-- btn action -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title="Compare"><i
                                                        class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted"><small>Dairy,
                                                    Bread & Eggs</small></a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="#!" class="text-inherit text-decoration-none">Amul Butter
                                                - 500 g</a>
                                        </h2>
                                        <div class="text-warning">
                                            <small>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                                <i class="bi bi-star"></i></small>
                                            <!-- text --><span class="text-muted small">3.5 (89)</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <span class="text-dark">$13</span>
                                                <span class="text-decoration-line-through text-muted">$18</span>
                                            </div>
                                            <div>
                                                <!-- btn --><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                    Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row mt-8">
                            <div class="col">
                                <!-- nav -->
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link mx-1 " href="#" aria-label="Previous">
                                                <i class="feather-icon icon-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link mx-1 active" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link mx-1 text-body" href="#">2</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link mx-1 text-body" href="#">...</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link mx-1 text-body" href="#">12</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link mx-1 text-body" href="#" aria-label="Next">
                                                <i class="feather-icon icon-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- modal -->
    <!-- Modal -->
    <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-8">
                    <div class="position-absolute top-0 end-0 me-3 mt-3">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- img slide -->
                            <div class="product productModal" id="productModal">
                                <div class="zoom" onmousemove="zoom(event)"
                                    style="
                  background-image: url(images/products/product-single-img-1.jpg);
                ">
                                    <!-- img -->
                                    <img src="images/products/product-single-img-1.jpg" alt="">
                                </div>
                                <div>
                                    <div class="zoom" onmousemove="zoom(event)"
                                        style="
                    background-image: url(images/products/product-single-img-2.jpg);
                  ">
                                        <!-- img -->
                                        <img src="images/products/product-single-img-2.jpg" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="zoom" onmousemove="zoom(event)"
                                        style="
                    background-image: url(images/products/product-single-img-3.jpg);
                  ">
                                        <!-- img -->
                                        <img src="images/products/product-single-img-3.jpg" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="zoom" onmousemove="zoom(event)"
                                        style="
                    background-image: url(images/products/product-single-img-4.jpg);
                  ">
                                        <!-- img -->
                                        <img src="images/products/product-single-img-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- product tools -->
                            <div class="product-tools">
                                <div class="thumbnails row g-3" id="productModalThumbnails">
                                    <div class="col-3" class="tns-nav-active">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="images/products/product-single-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="images/products/product-single-img-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="images/products/product-single-img-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="images/products/product-single-img-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ps-lg-8 mt-6 mt-lg-0">
                                <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
                                <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
                                <div class="mb-4">
                                    <small class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small><a href="#"
                                        class="ms-2">(30 reviews)</a>
                                </div>
                                <div class="fs-4">
                                    <span class="fw-bold text-dark">$32</span>
                                    <span class="text-decoration-line-through text-muted">$35</span><span><small
                                            class="fs-6 ms-2 text-danger">26% Off</small></span>
                                </div>
                                <hr class="my-6">
                                <div class="mb-4">
                                    <button type="button" class="btn btn-outline-secondary">
                                        250g
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        500g
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        1kg
                                    </button>
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
                                        <a class="btn btn-light" href="#" data-bs-toggle="tooltip"
                                            data-bs-html="true" aria-label="Compare"><i
                                                class="bi bi-arrow-left-right"></i></a>
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
                                            <tr>
                                                <td>Type:</td>
                                                <td>Fruits</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping:</td>
                                                <td>
                                                    <small>01 day shipping.<span class="text-muted">( Free pickup
                                                            today)</span></small>
                                                </td>
                                            </tr>
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
    <!-- Libs JS -->
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="js/theme.min.js"></script>
    <script src="libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="js/vendors/tns-slider.js"></script>
    <script src="js/vendors/increment-value.js"></script>

{{-- </body> --}}
@endsection
{{-- </html> --}}
