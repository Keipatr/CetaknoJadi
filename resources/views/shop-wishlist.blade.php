@extends('layouts.main')

@section('main-content')
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
                                <li class="breadcrumb-item"><a href="#!">Home</a></li>
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Wishlist</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- section -->
        <section class="mt-8 mb-14">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-8">
                            <!-- heading -->
                            <h1 class="mb-1">My Wishlist</h1>
                            <p>There are 5 products in this wishlist.</p>
                        </div>
                        <div>
                            <!-- table -->
                            <div class="table-responsive">
                                <table class="table text-nowrap table-with-checkbox">
                                    <thead class="table-light">
                                        <tr>
                                            <th>
                                                <!-- form check -->
                                                <div class="form-check">
                                                    <!-- input --><input class="form-check-input" type="checkbox"
                                                        value="" id="checkAll">
                                                    <!-- label --><label class="form-check-label" for="checkAll">

                                                    </label>
                                                </div>
                                            </th>
                                            <th></th>
                                            <th>Product</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="align-middle">
                                                <!-- form check -->
                                                <div class="form-check">
                                                    <!-- input --><input class="form-check-input" type="checkbox"
                                                        value="" id="chechboxTwo">
                                                    <!-- label --><label class="form-check-label" for="chechboxTwo">

                                                    </label>
                                                </div>

                                            </td>
                                            <td class="align-middle">
                                                <a href="#"><img src="images/products/Banner.jpg"
                                                        class="icon-shape icon-xxl" alt=""></a>

                                            </td>
                                            <td class="align-middle">
                                                <div>
                                                    <h5 class="fs-6 mb-0"><a href="#"
                                                            class="text-inherit">Print Spanduk</a></h5>
                                                    <small>Besar</small>
                                                </div>
                                            </td>
                                            <td class="align-middle">Rp. 18,000</td>
                                            <td class="align-middle"><span class="badge bg-success">In Stock</span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="btn btn-primary btn-sm">Add to Cart</div>
                                            </td>
                                            <td class="align-middle "><a href="#" class="text-muted"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete">
                                                    <i class="feather-icon icon-trash-2"></i>
                                                </a></td>
                                        </tr>
                                        <tr>

                                            <td class="align-middle">
                                                <!-- form check -->
                                                <div class="form-check">
                                                    <!-- input --><input class="form-check-input" type="checkbox"
                                                        value="" id="chechboxThree">
                                                    <!-- label --><label class="form-check-label"
                                                        for="chechboxThree">

                                                    </label>
                                                </div>

                                            </td>
                                            <td class="align-middle">
                                                <a href="#"><img src="images/products/dokumen.jpg"
                                                        class="icon-shape icon-xxl" alt=""></a>

                                            </td>
                                            <td class="align-middle">
                                                <div>
                                                    <h5 class="fs-6 mb-0"><a href="#"
                                                            class="text-inherit">Kertas A4</a></h5>
                                                    <small>Sinar Dunia</small>
                                                </div>
                                            </td>
                                            <td class="align-middle">Rp.18,000</td>
                                            <td class="align-middle"><span class="badge bg-danger">Out of
                                                    Stock</span></td>
                                            <td class="align-middle">
                                                <div class="btn btn-dark btn-sm">Contact us</div>
                                            </td>
                                            <td class="align-middle "><a href="#" class="text-muted"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete">
                                                    <i class="feather-icon icon-trash-2"></i>
                                                </a></td>
                                        </tr>
                                        <tr>

                                            <td class="align-middle">
                                                <!-- form check -->
                                                <div class="form-check">
                                                    <!-- input --><input class="form-check-input" type="checkbox"
                                                        value="" id="chechboxFour">
                                                    <!-- label --><label class="form-check-label"
                                                        for="chechboxFour">

                                                    </label>
                                                </div>

                                            </td>
                                            <td class="align-middle">
                                                <a href="#"><img src="images/products/Banner.jpg"
                                                        class="icon-shape icon-xxl" alt=""></a>

                                            </td>
                                            <td class="align-middle">
                                                <div>
                                                    <h5 class="fs-6 mb-0"><a href="#"
                                                            class="text-inherit">Print Spanduk</a></h5>
                                                    <small>Sedang</small>
                                                </div>
                                            </td>
                                            <td class="align-middle">Rp. 10,000</td>
                                            <td class="align-middle"><span class="badge bg-success">In Stock</span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="btn btn-primary btn-sm">Add to Cart</div>
                                            </td>
                                            <td class="align-middle "><a href="#" class="text-muted"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete">
                                                    <i class="feather-icon icon-trash-2"></i>
                                                </a></td>
                                        </tr>
                                        <tr>

                                            <td class="align-middle">
                                                <!-- form check -->
                                                <div class="form-check">
                                                    <!-- input --><input class="form-check-input" type="checkbox"
                                                        value="" id="chechboxFive">
                                                    <!-- label --><label class="form-check-label"
                                                        for="chechboxFive">

                                                    </label>
                                                </div>

                                            </td>
                                            <td class="align-middle">
                                                <a href="#"><img src="images/products/dokumen.jpg"
                                                        class="icon-shape icon-xxl" alt=""></a>

                                            </td>
                                            <td class="align-middle">
                                                <div>
                                                    <h5 class="fs-6 mb-0"><a href="#"
                                                            class="text-inherit">Kertas A4</a></h5>
                                                    <small>Epaper</small>
                                                </div>
                                            </td>
                                            <td class="align-middle">Rp. 12,000</td>
                                            <td class="align-middle"><span class="badge bg-success">In Stock</span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="btn btn-primary btn-sm">Add to Cart</div>
                                            </td>
                                            <td class="align-middle "><a href="#" class="text-muted"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete">
                                                    <i class="feather-icon icon-trash-2"></i>
                                                </a></td>
                                        </tr>
                                        <tr>

                                            <td class="align-middle">
                                                <!-- form check -->
                                                <div class="form-check">
                                                    <!-- input --><input class="form-check-input" type="checkbox"
                                                        value="" id="chechboxSix">
                                                    <!-- label --><label class="form-check-label" for="chechboxSix">

                                                    </label>
                                                </div>

                                            </td>
                                            <td class="align-middle">
                                                <a href="#"><img src="images/products/dokumen.jpg"
                                                        class="icon-shape icon-xxl" alt=""></a>

                                            </td>
                                            <td class="align-middle">
                                                <div>
                                                    <h5 class="fs-6 mb-0"><a href="#"
                                                            class="text-inherit">Kertas A4</a></h5>
                                                    <small>PaperOne</small>
                                                </div>
                                            </td>
                                            <td class="align-middle">Rp. 30,000</td>
                                            <td class="align-middle"><span class="badge bg-success">In Stock</span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="btn btn-primary btn-sm">Add to Cart</div>
                                            </td>
                                            <td class="align-middle "><a href="#" class="text-muted"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete">
                                                    <i class="feather-icon icon-trash-2"></i>
                                                </a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>



            </div>

        </section>
    </main>









    <!-- Javascript-->
    <!-- Libs JS -->
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="js/theme.min.js"></script>




</body>
@endsection
</html>
