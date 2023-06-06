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
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('cart') }}">Cart</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="mb-lg-14 mb-8 mt-8">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <div class="mb-8">
                                <h1 class="fw-bold mb-0">Checkout</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item py-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="fs-5 text-inherit collapsed h4" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="true"
                                            aria-controls="flush-collapseOne">
                                            <i class="feather-icon icon-map-pin me-2 text-muted"></i>Delivery
                                            Address
                                        </a>
                                    </div>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-lg-6 col-12 mb-4">
                                                    <div class="card card-body p-6 ">
                                                        <div class="form-check mb-4">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="homeRadio" checked>
                                                        </div>
                                                        <address> <strong>{{ $data->NAME_CUST }}</strong>
                                                            <br>{{ $data->ADDRESS_CUST }}, <br>
                                                            {{ $data->CITY_CUST }}<br>
                                                            {{ $data->POSTAL_CUST }}<br>
                                                            <abbr title="Phone">{{ $data->TELP_CUST }}</abbr>
                                                        </address>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5 d-flex justify-content-end">
                                                <form method="post" action="{{ route('cancelOrder') }}">
                                                    @csrf
                                                    <a href="{{ route('cancelOrder') }}"
                                                        class="btn btn-outline-gray-400 text-muted"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">Cancel
                                                        Order</a>

                                                    <a href="#" class="btn btn-primary ms-2" data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                        aria-controls="flush-collapseTwo">Next</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item py-4">

                                    <a href="#" class="text-inherit h5" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <i class="feather-icon icon-shopping-bag me-2 text-muted"></i>Delivery Method
                                    </a>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse "
                                        data-bs-parent="#accordionFlushExample">

                                        <div class="mt-5">
                                            <div>

                                                <div class="card card-bordered shadow-none mb-2">
                                                    <div class="card-body p-6">
                                                        <div class="d-flex">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="paypal">
                                                                <label class="form-check-label ms-2" for="paypal">

                                                                </label>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-1 h6"> Payment with Paypal</h5>
                                                                <p class="mb-0 small">You will be redirected to PayPal
                                                                    website to complete your purchase
                                                                    securely.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card card-bordered shadow-none">
                                                    <div class="card-body p-6">
                                                        <div class="d-flex">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="cashonDelivery">
                                                                <label class="form-check-label ms-2" for="cashonDelivery">

                                                                </label>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-1 h6"> Cash on Delivery</h5>
                                                                <p class="mb-0 small">Pay with cash when your order is
                                                                    delivered.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-5 d-flex justify-content-end">
                                                    <a href="#" class="btn btn-outline-gray-400 text-muted"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">Prev</a>
                                                        <a href="#" class="btn btn-primary ms-2" data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                        aria-controls="flush-collapseThree">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item py-4">
                                    <a href="#" class="text-inherit h5" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <i class="feather-icon icon-credit-card me-2 text-muted"></i>Payment Method
                                    </a>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse "
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="mt-5">
                                            <div>
                                                <div class="card card-bordered shadow-none mb-2">
                                                    <div class="card-body p-6">
                                                        <div class="d-flex">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="paypal">
                                                                <label class="form-check-label ms-2" for="paypal">

                                                                </label>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-1 h6"> Payment with Paypal</h5>
                                                                <p class="mb-0 small">You will be redirected to PayPal
                                                                    website to complete your purchase
                                                                    securely.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card card-bordered shadow-none">
                                                    <div class="card-body p-6">
                                                        <div class="d-flex">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="cashonDelivery">
                                                                <label class="form-check-label ms-2" for="cashonDelivery">

                                                                </label>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-1 h6"> Cash on Delivery</h5>
                                                                <p class="mb-0 small">Pay with cash when your order is
                                                                    delivered.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-5 d-flex justify-content-end">
                                                    <a href="#" class="btn btn-outline-gray-400 text-muted"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                        aria-expanded="false" aria-controls="flush-collapseTwo">Prev</a>
                                                    <a href="#" class="btn btn-primary ms-2">Place Order</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>

                        <div class="col-12 col-md-12 offset-lg-1 col-lg-4">
                            <div class="mt-4 mt-lg-0">
                                <div class="card shadow-sm">
                                    <h5 class="px-6 py-5 bg-transparent mb-0">Order Details</h5>
                                    <ul class="list-group list-group-flush">
                                        @foreach ($selectedProducts as $list)
                                            <li class="list-group-item px-4 py-3">
                                                <div class="row align-items-center">
                                                    <div class="col-2 col-md-2">
                                                        <img src="{{ $list['image'] }}" alt="Ecommerce"
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="col-5 col-md-5">
                                                        <h6 class="mb-0">{{ $list['productName'] }}</h6>
                                                        <span><small
                                                                class="text-muted">{{ $list['jenis'] }}</small></span>
                                                    </div>
                                                    <div class="col-2 col-md-2 text-center text-muted">
                                                        <span>{{ $list['quantity'] }}</span>
                                                    </div>
                                                    <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                        <span class="fw-bold">{{ $list['price'] }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                        <li class="list-group-item px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between  ">
                                                <div>
                                                    Total Quantity
                                                </div>
                                                <div class="fw-bold">
                                                    {{ $totalQuantity }}

                                                </div>

                                            </div>

                                        </li>
                                        <!-- list group item -->
                                        <li class="list-group-item px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between fw-bold">
                                                <div>
                                                    Subtotal
                                                </div>
                                                <div>
                                                    {{ $subtotal }}


                                                </div>

                                            </div>


                                        </li>

                                    </ul>

                                </div>


                            </div>
                        </div>


                    </div>
                </div>


            </div>


        </section>
    </main>

    <!-- Javascript-->
    <script src="/libs/flatpickr/dist/flatpickr.min.js"></script>
    <!-- Libs JS -->
    <script src="/libs/jquery/dist/jquery.min.js"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="/js/theme.min.js"></script>




    {{-- </body> --}}
@endsection

{{-- </html> --}}
