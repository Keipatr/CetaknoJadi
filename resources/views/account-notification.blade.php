@extends('layouts.main')

@section('main-content')
    <main>
        <!-- section -->
        <section>
            <!-- container -->
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
                                <li class="nav-item">
                                    <!-- nav link -->
                                    <a class="nav-link " aria-current="page" href="{{ route('account-orders') }}"><i
                                            class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('my-account') }}"><i
                                            class="feather-icon icon-settings me-2"></i>Settings</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('account-address') }}"><i
                                            class="feather-icon icon-map-pin me-2"></i>Address</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('account-payment') }}"><i
                                            class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item ">
                                    <a class="nav-link active" href="{{ route('account-notification') }}"><i
                                            class="feather-icon icon-bell me-2"></i>Notification</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <hr>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <form method="post" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i class="feather-icon icon-log-out me-2"></i>Log out
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>




                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="py-6 p-md-6 p-lg-10">
                            <div class="mb-6">
                                <!-- heading -->
                                <h2 class="mb-0">Notification settings</h2>

                            </div>

                            <div class="mb-10">
                                <!-- text -->
                                <div class="border-bottom pb-3 mb-5">
                                    <h5 class="mb-0">Email Notifications</h5>
                                </div>
                                <!-- text -->
                                <div class="d-flex justify-content-between align-items-center mb-6">
                                    <div>
                                        <h6 class="mb-1">Weekly Notification</h6>
                                        <p class="mb-0 ">Various versions have evolved over the years, sometimes by
                                            accident, sometimes on
                                            purpose .</p>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- text -->
                                    <div>
                                        <!-- <h6 class="mb-1">Account Summary</h6>
                                        <p class="mb-0 pe-12 ">Pellentesque habitant morbi tristique senectus et netus
                                            et malesuada fames ac
                                            turpis eguris eu sollicitudin massa. Nulla
                                            ipsum odio, aliquam in odio et, fermentum blandit nulla.
                                        </p> -->
                                    </div>
                                    <!-- form checkbox -->
                                    <!-- <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                    </div> -->
                                </div>
                            </div>
                            <div class="mb-10">
                                <!-- heading -->
                                <div class="border-bottom pb-3 mb-5">
                                    <h5 class="mb-0">Order updates</h5>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-6">
                                    <div>
                                        <!-- heading -->
                                        <!-- <h6 class="mb-0">Text messages</h6> -->

                                    </div>
                                    <!-- form checkbox -->
                                    <!-- <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault2">
                                        <label class="form-check-label" for="flexSwitchCheckDefault2"></label>
                                    </div> -->
                                </div>
                                <!-- text -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Email before checkout</h6>
                                        <p class="mb-0 ">
                                        </p>
                                    </div>
                                    <!-- form checkbox -->
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked2" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <!-- text -->
                                <div class="border-bottom pb-3 mb-5">
                                    <!-- <h5 class="mb-0">Website Notification</h5> -->
                                </div>
                                <div>
                                    <!-- form checkbox -->
                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckFollower" checked>
                                        <label class="form-check-label" for="flexCheckFollower">
                                            New Follower
                                        </label>
                                    </div> -->
                                    <!-- form checkbox -->
                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckPost">
                                        <label class="form-check-label" for="flexCheckPost">
                                            Post Like
                                        </label>
                                    </div> -->
                                    <!-- form checkbox -->
                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckPosted">
                                        <label class="form-check-label" for="flexCheckPosted">
                                            Someone you followed posted
                                        </label>
                                    </div> -->
                                    <!-- form checkbox -->
                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckCollection">
                                        <label class="form-check-label" for="flexCheckCollection">
                                            Post added to collection
                                        </label>
                                    </div> -->
                                    <!-- form checkbox -->
                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckOrder">
                                        <label class="form-check-label" for="flexCheckOrder">
                                            Order Delivery
                                        </label>
                                    </div> -->
                                </div>
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
        <!-- offcanvac header -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasAccountLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- offcanvac body -->
        <div class="offcanvas-body">
            <ul class="nav flex-column nav-pills nav-pills-dark">
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('account-orders') }}"><i
                            class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('my-account') }}"><i
                            class="feather-icon icon-settings me-2"></i>Settings</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('account-address') }}"><i
                            class="feather-icon icon-map-pin me-2"></i>Address</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('account-payment') }}"><i
                            class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('account-notification') }}"><i
                            class="feather-icon icon-bell me-2"></i>Notification</a>
                </li>
            </ul>
            <hr class="my-6">
            <div>
                <!-- navs -->
                <ul class="nav flex-column nav-pills nav-pills-dark">
                    <!-- nav item -->
                    <li class="nav-item">
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="feather-icon icon-log-out me-2"></i>Log out
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>




    <
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
