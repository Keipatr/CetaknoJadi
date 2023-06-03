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
                                <li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
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
                    <div class="col-12">
                        <!-- card -->
                        <div class="card py-1 border-0 mb-8">
                            <div>
                                <h1 class="fw-bold">Shop Cart</h1>
                                {{-- <p class="mb-0">Shopping in 382480</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 col-md-7">

                        <div class="py-3">

                            {{-- <ul class="list-group list-group-flush">
                                @foreach ($cart as $list)
                                    <li class="list-group-item py-3 py-lg-0 px-0 border-top">
                                        <div class="row align-items-center">
                                            <div class="col-3 col-md-2">
                                                <img src="{{'images/products/'.$list->image}}" alt="Ecommerce" class="img-fluid">
                                            </div>
                                            <div class="col-4 col-md-5">
                                                <a href="shop-single.html" class="text-inherit">
                                                    <h6 class="mb-0">{{ $list->PRODUCT_NAME }}</h6>
                                                </a>
                                                <span><small class="text-muted">{{ $list->NAME_CATEGORY }}</small></span>
                                                <div class="mt-2 small lh-1">
                                                    <a href="#!" class="text-decoration-none text-inherit">
                                                        <span class="me-1 align-text-bottom">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2 text-success">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg>
                                                        </span>
                                                        <span class="text-muted">Remove</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-2">
                                                <div class="input-group input-spinner  ">
                                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                                        data-field="quantity">
                                                    <input type="number" step="1" max="10" value="1"
                                                        name="quantity"
                                                        class="quantity-field form-control-sm form-input   ">
                                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                                        data-field="quantity">
                                                </div>
                                            </div>
                                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                <span class="fw-bold">{{ $list->formatted_price }}</span>

                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul> --}}

                            <ul class="list-group list-group-flush">
                                @foreach ($cart as $list)
                                    <li class="list-group-item py-3 py-lg-0 px-0 border-top" style="margin-bottom: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <label class="form-check">
                                                    <input class="form-check-input update-subtotal-checkbox" type="checkbox"
                                                        name="updateSubtotalCheckbox"
                                                        data-product-id="{{ $list->ID_PRODUCT }}"
                                                        data-container-id="{{ $list->ID_CONTAINER }}">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <img src="{{ '/images/all/' . $list->image }}" alt="Ecommerce"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-3">
                                                <a href="shop-single.html" class="text-inherit">
                                                    <h6 class="mb-0">{{ $list->PRODUCT_NAME }}</h6>
                                                </a>
                                                <span><small class="text-muted">{{ $list->NAME_CATEGORY }}</small></span>
                                                <div class="mt-2 small lh-1">
                                                    <a href="#"
                                                        class="text-decoration-none text-inherit delete-cart-item"
                                                        data-product-id="{{ $list->ID_PRODUCT }}"
                                                        data-container-id="{{ $list->ID_CONTAINER }}">
                                                        <span class="me-1 align-text-bottom">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2 text-success">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg>
                                                        </span>
                                                        <span class="text-muted">Remove</span>
                                                    </a>
                                                </div>
                                            </div>

                                            {{-- <div class="col-3">
                                                <div class="input-group input-spinner">
                                                    <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity">
                                                    <input type="number" step="1" min="1" max="{{ $list->QTY_PRODUCT }}" value="{{ $list->QTY_CART }}" name="quantity" class="quantity-field form-control-sm form-input">
                                                    <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity">
                                                </div>
                                            </div> --}}

                                            <div class="col-3">
                                                <div class="input-group input-spinner">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-sm btn-spinner btn-minus"
                                                            data-product-id="{{ $list->ID_PRODUCT }}"
                                                            data-container-id="{{ $list->ID_CONTAINER }}">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </span>
                                                    <input type="number" step="1" min="1"
                                                        max="{{ $list->QTY_PRODUCT }}" value="{{ $list->QTY_CART }}"
                                                        name="quantity" class="quantity-field form-control-sm form-input"
                                                        data-product-id="{{ $list->ID_PRODUCT }}"
                                                        data-container-id="{{ $list->ID_CONTAINER }}">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-sm btn-spinner btn-plus"
                                                            data-product-id="{{ $list->ID_PRODUCT }}"
                                                            data-container-id="{{ $list->ID_CONTAINER }}">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>




                                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                <span class="fw-bold">{{ $list->formatted_price }}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>


                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ url('') }}" class="btn btn-primary">Continue Shopping</a>
                                <a href="{{ url('cart') }}" class="btn btn-dark">Update Cart</a>
                            </div>

                        </div>
                    </div>

                    <style>
                        .form-check-input:focus {
                            outline: none;
                            box-shadow: none;
                        }
                    </style>


                    <style>
                        .input-group.input-spinner {
                            width: 100%;
                        }

                        .input-group.input-spinner .btn-spinner {
                            width: 30px;
                            height: 30px;
                            font-size: 14px;
                        }

                        .input-group.input-spinner .quantity-field {
                            text-align: center;
                            width: 50px;
                            padding: 0;
                        }
                    </style>

                    {{-- <script>
                        $(document).ready(function() {
                            // Handle manual input
                            $('.quantity-field').on('input', function() {
                                var min = parseInt($(this).attr('min'));
                                var max = parseInt($(this).attr('max'));
                                var value = parseInt($(this).val());

                                // Check if the input is a number
                                if (isNaN(value)) {
                                    $(this).val(min); // Set to minimum value if not a number
                                } else {
                                    // Adjust the value if it exceeds the minimum or maximum
                                    if (value < min) {
                                        $(this).val(min);
                                    } else if (value > max) {
                                        $(this).val(max);
                                    }
                                }
                            });

                            // Handle plus button click
                            $('.btn-plus').on('click', function() {
                                var inputField = $(this).closest('.input-spinner').find('.quantity-field');
                                var max = parseInt(inputField.attr('max'));
                                var value = parseInt(inputField.val());

                                if (value < max) {
                                    inputField.val(value + 1);
                                }
                            });

                            // Handle minus button click
                            $('.btn-minus').on('click', function() {
                                var inputField = $(this).closest('.input-spinner').find('.quantity-field');
                                var min = parseInt(inputField.attr('min'));
                                var value = parseInt(inputField.val());

                                if (value > min) {
                                    inputField.val(value - 1);
                                }
                            });
                        });
                    </script> --}}
                    <script>
                        $(document).ready(function() {
                            // Handle manual input
                            $('.quantity-field').on('input', function() {
                                var inputField = $(this);
                                var min = parseInt(inputField.attr('min'));
                                var max = parseInt(inputField.attr('max'));
                                var value = parseInt(inputField.val());

                                // Check if the input is a number
                                if (isNaN(value)) {
                                    inputField.val(min); // Set to minimum value if not a number
                                } else {
                                    // Adjust the value if it exceeds the minimum or maximum
                                    if (value < min) {
                                        inputField.val(min);
                                    } else if (value > max) {
                                        inputField.val(max);
                                    }
                                }

                                updateCartItem(inputField);
                            });

                            // Handle plus button click
                            $(document).on('click', '.btn-plus', function() {
                                var inputField = $(this).closest('.input-spinner').find('.quantity-field');
                                var max = parseInt(inputField.attr('max'));
                                var value = parseInt(inputField.val());

                                if (value < max) {
                                    inputField.val(value + 1);
                                    updateCartItem(inputField);
                                }
                            });

                            // Handle minus button click
                            $(document).on('click', '.btn-minus', function() {
                                var inputField = $(this).closest('.input-spinner').find('.quantity-field');
                                var min = parseInt(inputField.attr('min'));
                                var value = parseInt(inputField.val());

                                if (value > min) {
                                    inputField.val(value - 1);
                                    updateCartItem(inputField);
                                }
                            });

                            // Function to update cart item using AJAX
                            function updateCartItem(inputField) {
                                var productId = inputField.data('product-id');
                                var containerId = inputField.data('container-id');
                                var qty = inputField.val();

                                $.ajax({
                                    url: '/cart/update',
                                    type: 'POST',
                                    data: {
                                        productId: productId,
                                        containerId: containerId,
                                        qty: qty,
                                        _token: '{{ csrf_token() }}'
                                    },
                                    success: function(response) {
                                        if (response.success) {
                                            // Update cart quantity
                                            $('#cartQtySmall').text(response.quantity);
                                            $('#cartQtyLarge').text(response.quantity);
                                        } else if (response.login) {
                                            // Handle login requirement
                                            alert('Please log in to update the cart item.');
                                            // Redirect to login page or perform necessary actions
                                        }
                                    },
                                    error: function(xhr) {
                                        console.log('Failed to update the cart item. Please try again.');
                                    }
                                });
                            }
                        });
                    </script>

                    <script>
                        function updateCartQuantity(quantity) {
                            $('#cartQtySmall').text(quantity);
                            $('#cartQtyLarge').text(quantity);
                        }

                        $(document).ready(function() {
                            // Handle delete confirmation
                            $('.delete-cart-item').on('click', function() {
                                var productId = $(this).data('product-id');
                                var containerId = $(this).data('container-id');
                                var rowElement = $(this).closest('li');

                                // Perform an AJAX request to delete the item
                                $.ajax({
                                    url: '/cart/delete',
                                    type: 'POST',
                                    data: {
                                        productId: productId,
                                        containerId: containerId,
                                        _token: '{{ csrf_token() }}'
                                    },
                                    success: function(response) {
                                        // Handle success response
                                        alert('Item deleted from cart!');
                                        updateCartQuantity(response.quantity);
                                        rowElement.remove();
                                    },
                                    error: function(xhr) {
                                        // Handle error response
                                        alert('Failed to delete the item from cart. Please try again.');
                                    }
                                });
                            });
                        });
                    </script>


                    <script>
                        $(document).ready(function() {
                            // Event handler for the checkbox change event
                            $(document).on('change', '.update-subtotal-checkbox', function() {
                                updateSubtotal();
                            });

                            // Function to update the subtotal
                            function updateSubtotal() {
                                var subtotal = 0;

                                // Iterate through each selected checkbox
                                $('.update-subtotal-checkbox:checked').each(function() {
                                    var productId = $(this).data('product-id');
                                    var containerId = $(this).data('container-id');

                                    // Retrieve the subtotal for the selected item
                                    var itemSubtotal = parseFloat($('#subtotal_' + productId + '_' + containerId).text());

                                    // Add the subtotal to the total
                                    subtotal += itemSubtotal;
                                });

                                // Update the sidebar with the new subtotal
                                $('#sidebarSubtotal').text(subtotal.toFixed(2));
                            }
                        });
                        // Function to update the subtotal and store selected items for checkout
                        function updateSubtotal() {
                            var subtotal = 0;
                            var selectedItems = [];

                            // Iterate through each selected checkbox
                            $('.update-subtotal-checkbox:checked').each(function() {
                                var productId = $(this).data('product-id');
                                var containerId = $(this).data('container-id');
                                var itemSubtotal = parseFloat($('#subtotal_' + productId + '_' + containerId).text());

                                subtotal += itemSubtotal;

                                // Add the selected item details to the array
                                selectedItems.push({
                                    productId: productId,
                                    containerId: containerId
                                });
                            });

                            $('#sidebarSubtotal').text(subtotal.toFixed(2));

                            // Send the selected items to the server via AJAX
                            $.ajax({
                                url: '/checkout',
                                type: 'POST',
                                data: {
                                    selectedItems: selectedItems,
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function(response) {
                                    // Handle the response from the server
                                    // Redirect to the checkout page or perform necessary actions
                                },
                                error: function(xhr) {
                                    alert('Failed to process the checkout. Please try again.');
                                }
                            });
                        }
                    </script>
                    <!-- sidebar -->
                    <div class="col-12 col-lg-4 col-md-5">
                        <!-- card -->
                        <div class="mb-5 card mt-6">
                            <div class="card-body p-6">
                                <!-- heading -->
                                <h2 class="h5 mb-4">Summary</h2>
                                <div class="card mb-2">
                                    <!-- list group -->
                                    <ul class="list-group list-group-flush">
                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Item Subtotal</div>

                                            </div>
                                            <span id="sidebarSubtotal">0.00</span>
                                        </li>

                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Service Fee</div>

                                            </div>
                                            <span>Rp. 1,000</span>
                                        </li>
                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div class="fw-bold">Subtotal</div>

                                            </div>
                                            <span class="fw-bold">Rp 0</span>
                                        </li>
                                    </ul>

                                </div>
                                <form method="" action="{{ url('checkout') }}">
                                    <div class="d-grid mb-1 mt-4">
                                        <!-- btn -->

                                        <button
                                            class="btn btn-primary btn-lg d-flex justify-content-between align-items-center"
                                            type="submit">
                                            Go to Checkout <span class="fw-bold">Rp. 116,000</span></button>

                                    </div>
                                </form>
                                <!-- text -->
                                <p><small>By placing your order, you agree to be bound by the Freshcart <a
                                            href="#!">Terms of Service</a>
                                        and <a href="#!">Privacy Policy.</a> </small></p>

                                <!-- heading -->
                                {{-- <div class="mt-8">
                                    <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                                    <form>
                                        <div class="mb-2">
                                            <!-- input -->
                                            <label for="giftcard" class="form-label sr-only">Email address</label>
                                            <input type="text" class="form-control" id="giftcard"
                                                placeholder="Promo or Gift Card">

                                        </div>
                                        <!-- btn -->
                                        <div class="d-grid"><button type="submit"
                                                class="btn btn-outline-dark mb-1">Redeem</button></div>
                                        <p class="text-muted mb-0"> <small>Terms & Conditions apply</small></p>
                                    </form>
                                </div> --}}
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
    <script src="js/vendors/increment-value.js"></script>




    {{-- </body> --}}
@endsection

{{-- </html> --}}
