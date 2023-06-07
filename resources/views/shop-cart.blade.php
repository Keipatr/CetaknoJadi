@extends('layouts.main')
@section('main-content')
    <main>
        <div class="mt-4">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
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
                        <div class="card py-1 border-0 mb-8">
                            <div>
                                <h1 class="fw-bold">Shop Cart</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7">

                        <div class="py-3">

                            <ul class="list-group list-group-flush">
                                @foreach ($cart as $list)
                                    <li class="list-group-item py-3 py-lg-0 px-0 border-top" style="margin-bottom: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <input class="form-check-input update-subtotal-checkbox" type="checkbox"
                                                    name="updateSubtotalCheckbox" data-product-id="{{ $list->ID_PRODUCT }}"
                                                    data-container-id="{{ $list->ID_CONTAINER }}"
                                                    data-product-image="{{ '/images/all/' . $list->image }}"
                                                    data-product-price="{{ $list->formatted_price }}"
                                                    data-category-name="{{ $list->NAME_CATEGORY }}"
                                                    data-product-name="{{ $list->PRODUCT_NAME }}"
                                                    data-product-real="{{ $list->price }}"
                                                    data-product-jenis="{{ $list->jenis }}"
                                                    data-product-shop="{{ $list->ID_SHOP }}"
                                                    data-shop-id="{{ $list->ID_SHOP }}"
                                                    onchange="updateSelectedProducts(this)">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <img src="{{ '/images/all/' . $list->image }}" alt="Ecommerce"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-3">
                                                {{-- <a href="{{ '/products/' . $list->NAME_SHOP . '/' . $list->PRODUCT_NAME . '?id=' . Crypt::encryptString($list->ID_CONTAINER) }}" class="text-muted"> --}}
                                                <i class='fas fa-store-alt' style='font-size:12px'></i>
                                                <small class="mb-0 text-muted">{{ $list->NAME_SHOP }}</small>
                                                {{-- </a> --}}
                                                <a href="{{ '/products/' . $list->NAME_SHOP . '/' . $list->PRODUCT_NAME . '?id=' . Crypt::encryptString($list->ID_CONTAINER) }}"
                                                    class="text-inherit">
                                                    <h6 class="mb-0">{{ $list->PRODUCT_NAME }} @if($list->jenis) - {{ $list->jenis }} @endif</h6>
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
                                <a href="{{ url('') }}" class="btn btn-primary">Back to Shopping</a>
                                {{-- <a href="{{ url('cart') }}" class="btn btn-dark">Update Cart</a> --}}
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
                        // Function to update selected products and save in the session
                        function updateSelectedProducts(checkbox) {
                            var selectedProducts = [];

                            // Get all checked checkboxes
                            var checkboxes = document.querySelectorAll('.update-subtotal-checkbox:checked');

                            // Iterate through the checkboxes and add the selected products to the list
                            checkboxes.forEach(function(checkbox) {
                                var productId = checkbox.dataset.productId;
                                var containerId = checkbox.dataset.containerId;
                                var image = checkbox.dataset.productImage;
                                var price = checkbox.dataset.productPrice;
                                var categoryName = checkbox.dataset.categoryName;
                                var productName = checkbox.dataset.productName;
                                var realPrice = checkbox.dataset.productReal;
                                var quantity = checkbox.parentNode.parentNode.parentNode.querySelector('.quantity-field').value;
                                selectedProducts.push({
                                    productId: productId,
                                    containerId: containerId,
                                    image: image,
                                    price: price,
                                    categoryName: categoryName,
                                    productName: productName,
                                    realPrice: realPrice,
                                    quantity: quantity
                                });
                            });

                            // Perform AJAX request to save/update the selected products in the session
                            $.ajax({
                                url: 'updateCheckout',
                                type: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    selectedProducts: selectedProducts
                                },
                                success: function(response) {
                                    // Handle success response
                                    // e.g., show a success message or redirect to a success page
                                },
                                error: function(xhr) {
                                    // Handle error response
                                    // e.g., display an error message to the user
                                }
                            });
                        }
                    </script> --}}

                    <script>
                        // Function to update cart quantity
                        function updateCartQuantity(quantity) {
                            $('#cartQtySmall').text(quantity);
                            $('#cartQtyLarge').text(quantity);
                        }

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
                            updateSelectedProducts();
                        });

                        // Handle plus button click
                        $(document).on('click', '.btn-plus', function() {
                            var inputField = $(this).closest('.input-spinner').find('.quantity-field');
                            var max = parseInt(inputField.attr('max'));
                            var value = parseInt(inputField.val());

                            if (value < max) {
                                inputField.val(value + 1);
                                updateCartItem(inputField);
                                updateSelectedProducts();
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
                                updateSelectedProducts();
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
                                        updateCartQuantity(response.quantity);
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
                                    updateSelectedProducts();
                                },
                                error: function(xhr) {
                                    // Handle error response
                                    alert('Failed to delete the item from cart. Please try again.');
                                }
                            });
                        });

                        // Function to update selected products in the session
                        // function updateSelectedProducts() {
                        //     var selectedProducts = [];

                        //     // Get all checked checkboxes

                        //     var checkboxes = document.querySelectorAll('.update-subtotal-checkbox:checked');

                        //     // var totalQuantity = 0;
                        //     // var subtotal = 0;

                        //     // Iterate through the checkboxes and add the selected products to the list
                        //     checkboxes.forEach(function(checkbox) {
                        //         var productId = checkbox.dataset.productId;
                        //         var containerId = checkbox.dataset.containerId;
                        //         var image = checkbox.dataset.productImage;
                        //         var price = checkbox.dataset.productPrice;
                        //         var categoryName = checkbox.dataset.categoryName;
                        //         var productName = checkbox.dataset.productName;
                        //         var realPrice = checkbox.dataset.productReal;
                        //         var jenis = checkbox.dataset.productJenis;
                        //         var shop = checkbox.dataset.productShop;
                        //         var quantity = checkbox.parentNode.parentNode.parentNode.querySelector('.quantity-field').value;

                        //         // totalQuantity += parseInt(quantity);
                        //         // subtotal += parseFloat(price) * parseInt(quantity);

                        //         selectedProducts.push({
                        //             productId: productId,
                        //             containerId: containerId,
                        //             image: image,
                        //             price: price,
                        //             categoryName: categoryName,
                        //             productName: productName,
                        //             jenis: jenis,
                        //             realPrice: realPrice,
                        //             quantity: quantity,
                        //             shop: shop
                        //         });
                        //     });

                        //     // Perform AJAX request to save/update the selected products in the session
                        //     $.ajax({
                        //         url: '/updateCheckout',
                        //         type: 'POST',
                        //         data: {
                        //             _token: '{{ csrf_token() }}',
                        //             selectedProducts: selectedProducts
                        //         },
                        //         success: function(response) {
                        //             // Handle success response
                        //             // e.g., show a success message or redirect to a success page
                        //             updateTotalQuantity(response.totalQuantity);
                        //             updateSubtotal(response.subtotal);
                        //         },
                        //         error: function(xhr) {
                        //             // Handle error response
                        //             // e.g., display an error message to the user
                        //         }
                        //     });
                        // }
                        function updateSelectedProducts() {
                            var selectedProducts = [];
                            var shopId = null;
                            var isAnyCheckboxChecked = false;

                            // Get all checked checkboxes
                            var checkboxes = document.querySelectorAll('.update-subtotal-checkbox:checked');

                            // Iterate through the checkboxes and add the selected products to the list
                            checkboxes.forEach(function(checkbox) {
                                var productId = checkbox.dataset.productId;
                                var containerId = checkbox.dataset.containerId;
                                var image = checkbox.dataset.productImage;
                                var price = checkbox.dataset.productPrice;
                                var categoryName = checkbox.dataset.categoryName;
                                var productName = checkbox.dataset.productName;
                                var realPrice = checkbox.dataset.productReal;
                                var jenis = checkbox.dataset.productJenis;
                                var shop = checkbox.dataset.productShop;
                                var quantity = checkbox.parentNode.parentNode.parentNode.querySelector('.quantity-field').value;

                                // Store the shop ID from the first selected checkbox
                                if (shopId === null) {
                                    shopId = shop;
                                }

                                // Add the selected product to the list
                                selectedProducts.push({
                                    productId: productId,
                                    containerId: containerId,
                                    image: image,
                                    price: price,
                                    categoryName: categoryName,
                                    productName: productName,
                                    jenis: jenis,
                                    realPrice: realPrice,
                                    quantity: quantity,
                                    shop: shop
                                });

                                isAnyCheckboxChecked = true;
                            });

                            // Enable/disable checkboxes based on the shop ID
                            var checkboxesToUpdate = document.querySelectorAll('.update-subtotal-checkbox');
                            checkboxesToUpdate.forEach(function(checkbox) {
                                var checkboxShopId = checkbox.dataset.shopId;
                                checkbox.disabled = (checkboxShopId !== shopId);
                            });

                            // Re-enable checkboxes if no checkbox is checked
                            if (!isAnyCheckboxChecked) {
                                checkboxesToUpdate.forEach(function(checkbox) {
                                    checkbox.disabled = false;
                                });
                            }

                            // Perform AJAX request to save/update the selected products in the session
                            $.ajax({
                                url: '/updateCheckout',
                                type: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    selectedProducts: selectedProducts
                                },
                                success: function(response) {
                                    // Handle success response
                                    // e.g., show a success message or redirect to a success page
                                    updateTotalQuantity(response.totalQuantity);
                                    updateSubtotal(response.subtotal);
                                },
                                error: function(xhr) {
                                    // Handle error response
                                    // e.g., display an error message to the user
                                }
                            });
                        }

                        function updateTotalQuantity(quantity) {
                            $('#totalitem').text(quantity);
                        }

                        function updateSubtotal(subtotal) {
                            $('#sidebarSubtotal').text(subtotal);
                        }
                    </script>


                    <div class="col-12 col-lg-4 col-md-5">
                        <div class="mb-5 card mt-6">
                            <div class="card-body p-6">
                                <h2 class="h5 mb-4">Summary</h2>
                                <div class="card mb-2">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Item Subtotal</div>

                                            </div>
                                            <span id="sidebarSubtotal">Rp 0</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Total Quantity</div>

                                            </div>
                                            <span id="totalitem">0</span>
                                        </li>
                                    </ul>

                                </div>
                                <form method="" action="{{ url('checkout') }}">
                                    @if (session('fail'))
                                        <div class="alert alert-danger text-center">
                                            {{ session('fail') }}
                                        </div>
                                    @endif
                                    <div class="d-grid mb-1 mt-4">
                                        <button
                                            class="btn btn-primary btn-lg d-flex justify-content-between align-items-center"
                                            type="submit">
                                            Checkout
                                        </button>
                                    </div>
                                </form>
                                <p><small>By placing your order, you agree to be bound by the Freshcart <a
                                            href="#!">Terms of Service</a>
                                        and <a href="#!">Privacy Policy.</a> </small></p>
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
