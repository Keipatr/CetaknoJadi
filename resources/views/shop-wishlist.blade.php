@extends('layouts.main')

@section('main-content')
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
        });

        function updateCartQuantity(quantity) {
            $('#cartQtySmall').text(quantity);
            $('#cartQtyLarge').text(quantity);
        }

        function updateWishlistQuantity(quantity) {
            $('#wishlistQty').text(quantity);
            $('#countWish').text(quantity);
        }
        $(document).ready(function() {
            // Handle delete confirmation
            $('.delete-wishlist-item').on('click', function() {
                var productId = $(this).data('product-id');
                var containerId = $(this).data('container-id');
                var rowElement = $(this).closest('tr');

                // Perform an AJAX request to delete the item
                $.ajax({
                    url: '/wishlist/delete',
                    type: 'POST',
                    data: {
                        productId: productId,
                        containerId: containerId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Handle success response
                        alert('Item deleted from wishlist!');
                        updateWishlistQuantity(response.quantity);
                        rowElement.remove();
                    },
                    error: function(xhr) {
                        // Handle error response
                        alert('Failed to delete the item from wishlist. Please try again.');
                    }
                });
            });
        });
    </script>

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
                                <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
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
                            <p>There are <span id="countWish">{{ count($wishlist) }}</span> products in this wishlist.</p>
                        </div>
                        <div>
                            <!-- table -->
                            <div class="table-responsive">
                                <table class="table text-nowrap table-with-checkbox">
                                    <thead class="table-light">
                                        <tr>
                                            {{-- <th>
                                                <!-- form check -->
                                                <div class="form-check">
                                                    <!-- input --><input class="form-check-input" type="checkbox"
                                                        value="" id="checkAll">
                                                    <!-- label --><label class="form-check-label" for="checkAll">

                                                    </label>
                                                </div>
                                            </th> --}}
                                            <th></th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($wishlist as $list)
                                            <tr>
                                                <td class="align-middle">
                                                    @php $imageArray = json_decode($list->image, true);@endphp
                                                    <a href="{{ '/products/' . $list->NAME_SHOP . '/' . $list->PRODUCT_NAME.'/'.$list->ID_PRODUCT . '?id=' . Crypt::encryptString($list->ID_CONTAINER) }}"><img src="{{ isset($imageArray[0]) ? '/images/all/' . $imageArray[0] : '/images/all/no image.jpg' }}"
                                                            class="icon-shape icon-xxl" alt=""></a>

                                                </td>
                                                <td class="align-middle">
                                                    <div>
                                                        <h5 class="fs-6 mb-0"><a href="{{ '/products/' . $list->NAME_SHOP . '/' . $list->PRODUCT_NAME.'/'.$list->ID_PRODUCT . '?id=' . Crypt::encryptString($list->ID_CONTAINER) }}"
                                                                class="text-inherit">{{ $list->PRODUCT_NAME }} {{ $list->PRODUCT_NAME }} @if($list->jenis) - {{ $list->jenis }} @endif</a></h5>
                                                        <small>{{ $list->NAME_CATEGORY }}</small>
                                                    </div>
                                                </td>
                                                <td class="align-middle">{{ $list->formatted_price }}</td>

                                                <td class="align-middle">
                                                    @if ($list->container_status == 1 && $list->product_status == 1)
                                                        <span class="badge bg-success">In Stock</span>
                                                    @else
                                                        <span class="badge bg-secondary">Not Available</span>
                                                    @endif
                                                </td>


                                                <td class="align-middle">
                                                    <a href="#!" class="btn btn-primary btn-sm add-to-cart"
                                                        data-product-id="{{ $list->ID_PRODUCT }}"
                                                        data-container-id="{{ $list->ID_CONTAINER }}">
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
                                                </td>
                                                <td class="align-middle ">
                                                    <a href="#" class="text-muted delete-wishlist-item"
                                                        {{-- data-bs-toggle="modal" --}}
                                                        {{-- data-bs-target="#deleteConfirmationModal" --}}
                                                        data-product-id="{{ $list->ID_PRODUCT }}"
                                                        data-container-id="{{ $list->ID_CONTAINER }}">
                                                        <i class="feather-icon icon-trash-2"></i>
                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        {{-- <tr> --}}
                                        {{-- <td class="align-middle"> --}}
                                        <!-- form check -->
                                        {{-- <div class="form-check"> --}}
                                        {{-- <input class="form-check-input" type="checkbox"
                                                        value="" id="chechboxThree">
                                                    <label class="form-check-label"
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
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>



            </div>

        </section>
    </main>
{{--
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this item from your wishlist?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger confirm-delete">Delete</button>
                </div>
            </div>
        </div>
    </div> --}}








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
