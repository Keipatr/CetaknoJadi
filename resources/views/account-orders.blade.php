@extends('layouts.main')

@section('main-content')
    <main>
        <!-- section -->
        <section>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                            <!-- heading -->
                            <h3 class="fs-5 mb-0">Account Setting</h3>
                            <!-- button -->
                            <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 "
                                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount"
                                aria-controls="offcanvasAccount">
                                <i class="bi bi-text-indent-left fs-3"></i>
                            </button>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
                        <div class="pt-10 pe-lg-10">
                            <!-- nav -->
                            <ul class="nav flex-column nav-pills nav-pills-dark">
                                <!-- nav item -->
                                <li class="nav-item">
                                    <!-- nav link -->
                                    <a class="nav-link active" aria-current="page" href="{{url('account-orders')}}"><i
                                            class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link " href="{{url('account')}}"><i
                                            class="feather-icon icon-settings me-2"></i>Settings</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link " href="{{url('account-address')}}"><i
                                            class="feather-icon icon-map-pin me-2"></i>Address</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('account-payment')}}"><i
                                            class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('account-notification')}}"><i
                                            class="feather-icon icon-bell me-2"></i>Notification</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <hr>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link " href="{{url('')}}"><i
                                            class="feather-icon icon-log-out me-2"></i>Log out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="py-6 p-md-6 p-lg-10">
                            <!-- heading -->
                            <h2 class="mb-6">Your Orders</h2>

                            <div class="table-responsive-xxl border-0">
                                <!-- Table -->
                                <table class="table mb-0 text-nowrap table-centered ">
                                    <!-- Table Head -->
                                    <thead class="bg-light">
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Product</th>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Items</th>
                                            <th>Status</th>
                                            <th>Amount</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Table body -->
                                        <tr>
                                            <td class="align-middle border-top-0 w-0">
                                                <a href="#"> <img src="images/products/dokumen.jpg"
                                                        alt="Ecommerce" class="icon-shape icon-xl"></a>

                                            </td>
                                            <td class="align-middle border-top-0">

                                                <a href="#" class="fw-semi-bold text-inherit">
                                                    <h6 class="mb-0">Print A4</h6>
                                                </a>
                                                <span><small class="text-muted">Warna</small></span>

                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="text-inherit">ID11020301</a>

                                            </td>
                                            <td class="align-middle border-top-0">
                                                March 5, 2023

                                            </td>
                                            <td class="align-middle border-top-0">
                                                1

                                            </td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge bg-warning">Processing</span>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                Rp. 15,000
                                            </td>
                                            {{-- <td class="text-muted align-middle border-top-0">
                                                <a href="#" class="text-inherit" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="View"><i
                                                        class="feather-icon icon-eye"></i></a>
                                            </td> --}}
                                        </tr>
                                        <tr>
                                            <td class="align-middle border-top-0 w-0">
                                                <a href="#"> <img src="images/products/Banner.jpg"
                                                        alt="Ecommerce" class="icon-shape icon-xl"></a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="fw-semi-bold text-inherit">
                                                    <h6 class="mb-0">Banner </h6>
                                                </a>
                                                <span><small class="text-muted">Kecil</small></span>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="text-inherit">ID11020302
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                July 9, 2023
                                            </td>
                                            <td class="align-middle border-top-0">
                                                2
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge bg-danger">Cancel</span>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                Rp. 6,000
                                            </td>
                                            {{-- <td class="text-muted align-middle border-top-0">
                                                <a href="#" class="text-inherit" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="View"><i
                                                        class="feather-icon icon-eye"></i></a>
                                            </td> --}}
                                        </tr>
                                        <tr>
                                            <td class="align-middle border-top-0 w-0">
                                                <a href="#"> <img src="images/products/banner.jpg"
                                                        alt="Ecommerce" class="icon-shape icon-xl"></a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="fw-semi-bold text-inherit">
                                                    <h6 class="mb-0">Banner</h6>
                                                </a>
                                                <span><small class="text-muted">Sedang</small></span>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="text-inherit">ID11020303
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                Oct 03, 2023
                                            </td>
                                            <td class="align-middle border-top-0">
                                                4
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                Rp. 18,000
                                            </td>
                                            {{-- <td class="text-muted align-middle border-top-0">
                                                <a href="#" class="text-inherit" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="View"><i
                                                        class="feather-icon icon-eye"></i></a>
                                            </td> --}}
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

    <!-- modal -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount"
        aria-labelledby="offcanvasAccountLabel">
        <!-- offcanvas header -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasAccountLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- offcanvas body -->
        <div class="offcanvas-body">
            <ul class="nav flex-column nav-pills nav-pills-dark">
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('account-orders')}}"><i
                            class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href="{{url('account')}}"><i
                            class="feather-icon icon-settings me-2"></i>Settings</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href="{{url('account-address')}}"><i
                            class="feather-icon icon-map-pin me-2"></i>Address</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('account-payment')}}"><i
                            class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('account-notification')}}"><i
                            class="feather-icon icon-bell me-2"></i>Notification</a>
                </li>

            </ul>
            <hr class="my-6">
            <div>
                <!-- nav  -->
                <ul class="nav flex-column nav-pills nav-pills-dark">
                    <!-- nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="../index.html"><i
                                class="feather-icon icon-log-out me-2"></i>Log out</a>
                    </li>

                </ul>
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




{{-- </body> --}}
@endsection
{{-- </html> --}}
