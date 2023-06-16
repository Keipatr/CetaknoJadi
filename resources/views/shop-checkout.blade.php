@extends('layouts.main')

@section('main-content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                                        <a href="#" class="fs-5 text-inherit h4">
                                            <i class="feather-icon icon-map-pin me-2 text-muted"></i>Delivery Address
                                        </a>
                                    </div>
                                    <div id="flush-collapseOne" class="accordion-collapse show"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-lg-6 col-12 mb-4">
                                                    <div class="card card-body p-6">
                                                        <div class="form-check mb-4">
                                                            <input class="form-check-input" type="radio"
                                                                name="deliveryAddress" id="homeRadio" checked>
                                                        </div>
                                                        <address>
                                                            <strong>{{ $data->NAME_CUST }}</strong><br>
                                                            {{ $data->ADDRESS_CUST }},<br>
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
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item py-4">
                                    <a href="#" class="text-inherit h5">
                                        <i class="fas fa-shipping-fast me-2 text-muted"></i>Delivery Method
                                    </a>
                                    <div id="flush-collapseTwo" class="accordion-collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <ul class="nav nav-pills nav-pills-light mb-3 nav-fill mt-5" id="pills-tab"
                                            role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-today-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-today" type="button" role="tab"
                                                    aria-controls="pills-today" aria-selected="true">SiCepat<br></button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-monday-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-monday" type="button" role="tab"
                                                    aria-controls="pills-monday" aria-selected="false">Anteraja
                                                    <br></button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-today" role="tabpanel"
                                                aria-labelledby="pills-today-tab" tabindex="0">
                                                <ul class="list-group list-group-flush mt-4">
                                                    @foreach($sicepat as $list)
                                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                                                            <div class="col-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="deliveryMethod"
                                                                        id="sicepatRadio{{ $loop->index }}"
                                                                        value="{{ $list['product_code'] }}"
                                                                        data-delivery-id="{{ $list['product_code'] }}"
                                                                        data-delivery-name="{{ $list['product_name'] }}"
                                                                        data-delivery-rates="{{ $list['rates'] }}"
                                                                        data-delivery-formatted="{{ $list['formatted_rates'] }}">
                                                                    <label class="form-check-label"
                                                                        for="sicepatRadio{{ $loop->index }}">
                                                                        {{ $list['product_name'] }} <br>
                                                                        <small>{{ $list['etd'] }}</small>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-center">{{ $list['formatted_rates'] }}
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="pills-monday" role="tabpanel"
                                                aria-labelledby="pills-monday-tab" tabindex="0">
                                                <ul class="list-group list-group-flush mt-4">
                                                    @foreach ($anteraja as $list)
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                                                            <div class="col-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="deliveryMethod"
                                                                        id="anterajaRadio{{ $loop->index }}"
                                                                        value="{{ $list['product_code'] }}"
                                                                        data-delivery-id="{{ $list['product_code'] }}"
                                                                        data-delivery-name="{{ $list['product_name'] }}"
                                                                        data-delivery-rates="{{ $list['rates'] }}"
                                                                        data-delivery-formatted="{{ $list['formatted_rates'] }}">
                                                                    <label class="form-check-label"
                                                                        for="anterajaRadio{{ $loop->index }}">
                                                                        {{ $list['product_name'] }} <br>
                                                                        <small>{{ $list['etd'] }}</small>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-center">{{ $list['formatted_rates'] }}
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item py-4">
                                    <a href="#" class="text-inherit h5">
                                        <i class="feather-icon icon-credit-card me-2 text-muted"></i>Payment Method
                                    </a>
                                    <div id="flush-collapseThree" class="accordion-collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="mt-5">
                                            <div>
                                                @foreach ($payment as $list)
                                                    <div class="card card-bordered shadow-none mb-2">
                                                        <div class="card-body p-6">
                                                            <div class="d-flex">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="paymentMethod"
                                                                        id="payment{{ $loop->index }}"
                                                                        value="{{ $list->ID_PAYMENT }}"
                                                                        data-payment-id="{{ $list->ID_PAYMENT }}"
                                                                        data-payment-name="{{ $list->NAME_PAYMENT }}">
                                                                    <label class="form-check-label ms-2"
                                                                        for="payment{{ $loop->index }}"></label>
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 h6">
                                                                        {{ 'Payment with ' . $list->NAME_PAYMENT }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item py-4">
                                    <a href="#" class="text-inherit h5">
                                        <i class="far fa-image text-muted"></i> Product Images
                                    </a>
                                    <div id="flush-collapseFour" class="accordion-collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="mt-5">
                                            <div>
                                                <div class="mt-5">
                                                    <h5 class="mb-3"></h5>
                                                    @foreach ($selectedProducts as $list)
                                                        <div class="mb-4">
                                                            <h6 class="mb-0">{{ $list['productName'] }}</h6>
                                                            <span><small
                                                                    class="text-muted">{{ $list['jenis'] }}</small></span>
                                                            <div class="mt-2">
                                                                <input type="file" accept="image/jpeg, image/png"
                                                                    name="productImage[]"
                                                                    onchange="previewImage(event, {{ $loop->index }})">
                                                                <img src="#" alt="Preview"
                                                                    id="imagePreview{{ $loop->index }}" class="mt-2"
                                                                    style="max-width: 200px; max-height: 200px; display: none;">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div class="mt-5 d-flex justify-content-end">
                                                    <button class="btn btn-primary ms-2" onclick="placeOrder()">Place
                                                        Order</button>
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
    {{-- <script>
        function previewImage(event, index) {
            var input = event.target;
            var imagePreview = document.getElementById('imagePreview' + index);

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function placeOrder() {
            const selectedDeliveryMethod = document.querySelector('input[name="deliveryMethod"]:checked');
            const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
            const productImages = Array.from(document.querySelectorAll('input[name="productImage[]"]'));

            if (selectedDeliveryMethod && selectedPaymentMethod && productImages.every(img => img.value !== '')) {
                // Extract the selected delivery method data
                const productCode = selectedDeliveryMethod.dataset.deliveryId;
                const productName = selectedDeliveryMethod.dataset.deliveryName;
                const rates = selectedDeliveryMethod.dataset.deliveryRates;
                const formatrates = selectedDeliveryMethod.dataset.deliveryFormatted;

                // Extract the selected payment method data
                const paymentMethodName = selectedPaymentMethod.dataset.paymentName;
                const paymentMethodId = selectedPaymentMethod.dataset.paymentId;

                // Get the selected product images
                const productImageUrls = productImages.map(img => URL.createObjectURL(img.files[0]));


                // Create the order data object
                const data = {
                    productCode: productCode,
                    productName: productName,
                    rates: rates,
                    formatrates: formatrates,
                    paymentMethodName: paymentMethodName,
                    paymentMethodId: paymentMethodId,
                    productImageUrls: productImageUrls
                };
                console.log(data);

                $.ajax({
                    url: 'place-order',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        selected: data
                    },
                    success: function(response) {
                        // Handle the success response from the controller
                    },
                    error: function(xhr) {
                        // Handle the error response
                    }
                });
            }
        }
    </script> --}}
    {{-- <script>
        function previewImage(event, index) {
            var input = event.target;
            var imagePreview = document.getElementById('imagePreview' + index);

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function placeOrder() {
            const selectedDeliveryMethod = document.querySelector('input[name="deliveryMethod"]:checked');
            const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
            const productImages = Array.from(document.querySelectorAll('input[name="productImage[]"]'));

            if (selectedDeliveryMethod && selectedPaymentMethod && productImages.every(img => img.value !== '')) {
                // Extract the selected delivery method data
                const productCode = selectedDeliveryMethod.dataset.deliveryId;
                const productName = selectedDeliveryMethod.dataset.deliveryName;
                const rates = selectedDeliveryMethod.dataset.deliveryRates;
                const formatRates = selectedDeliveryMethod.dataset.deliveryFormatted;

                // Extract the selected payment method data
                const paymentMethodName = selectedPaymentMethod.dataset.paymentName;
                const paymentMethodId = selectedPaymentMethod.dataset.paymentId;

                // Create the FormData object to send the data and files
                const formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('productCode', productCode);
                formData.append('productName', productName);
                formData.append('rates', rates);
                formData.append('formatRates', formatRates);
                formData.append('paymentMethodName', paymentMethodName);
                formData.append('paymentMethodId', paymentMethodId);

                productImages.forEach((img, index) => {
                    if (img.files.length > 0) {
                        const file = img.files[0];
                        const fileName = `product_image_${index + 1}.${file.name.split('.').pop()}`;
                        formData.append(`productImage[${index}]`, file, fileName);
                    }
                });

                // Send the AJAX request with the form data
                $.ajax({
                    url: 'place-order',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            // Redirect to the specified route
                            window.location.href = response.route;
                        } else {
                            // Handle any errors or display a message
                        }
                    },
                    error: function(xhr) {
                        // Handle the error response
                    }
                });
            }
        }
    </script> --}}
    <script>
        function previewImage(event, index) {
            var input = event.target;
            var imagePreview = document.getElementById('imagePreview' + index);

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function generateUniqueFileName(file) {
            var timestamp = new Date().getTime();
            var random = Math.floor(Math.random() * 1000000);
            var extension = file.name.split('.').pop();
            return `product_image_${timestamp}_${random}.${extension}`;
        }

        function placeOrder() {
            const selectedDeliveryMethod = document.querySelector('input[name="deliveryMethod"]:checked');
            const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
            const productImages = Array.from(document.querySelectorAll('input[name="productImage[]"]'));

            if (selectedDeliveryMethod && selectedPaymentMethod && productImages.every(img => img.value !== '')) {
                // Extract the selected delivery method data
                const productCode = selectedDeliveryMethod.dataset.deliveryId;
                const productName = selectedDeliveryMethod.dataset.deliveryName;
                const rates = selectedDeliveryMethod.dataset.deliveryRates;
                const formatRates = selectedDeliveryMethod.dataset.deliveryFormatted;

                // Extract the selected payment method data
                const paymentMethodName = selectedPaymentMethod.dataset.paymentName;
                const paymentMethodId = selectedPaymentMethod.dataset.paymentId;

                // Create the FormData object to send the data and files
                const formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('productCode', productCode);
                formData.append('productName', productName);
                formData.append('rates', rates);
                formData.append('formatRates', formatRates);
                formData.append('paymentMethodName', paymentMethodName);
                formData.append('paymentMethodId', paymentMethodId);

                productImages.forEach((img, index) => {
                    if (img.files.length > 0) {
                        const file = img.files[0];
                        const fileName = generateUniqueFileName(file);
                        formData.append(`productImage[${index}]`, file, fileName);
                    }
                });

                // Send the AJAX request with the form data
                $.ajax({
                    url: 'place-order',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            // Redirect to the specified route
                            window.location.href = response.route;
                        } else {
                            // Handle any errors or display a message
                        }
                    },
                    error: function(xhr) {
                        // Handle the error response
                    }
                });
            }
        }
    </script>

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
