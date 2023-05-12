@extends('layouts.main')

@section('main-content')
  <!-- section-->
  <main>
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
              <li class="breadcrumb-item"><a href="#!">Stores</a></li>
              <li class="breadcrumb-item active" aria-current="page">Store List</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- section -->
  <section class="mt-8 ">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row ">
        <div class="col-12 ">
          <!-- heading -->
          <div class="bg-light d-flex justify-content-between ps-md-10 ps-6 rounded">
            <div class="d-flex align-items-center">
              <h1 class="mb-0 fw-bold">Stores</h1>

            </div>
            <div class="py-6">
              <!-- img -->
              <!-- img -->
              <img src="images/svg-graphics/store-graphics.svg" alt="" class="img-fluid"></div>
          </div>


        </div>
      </div>
    </div>
  </section>
  <section class="mt-6 mb-lg-14 mb-8">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-12">
          <div class="mb-4">
            <!-- title -->
            <h6>We have <span class="text-primary">36</span> vendors now</h6>
          </div>
        </div>
      </div>
      <!-- row -->
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 g-lg-4">
        <!-- col -->

        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-1.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">E-Grocery Super Market</a></h5>
              <div class="small text-muted">
                <span>Organic</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Groceries</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Butcher Shop</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li>Delivery
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">7.5 mi away</div>
                <!-- badge -->
                <div class="badge text-bg-light border">In-store prices </div>


              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-2.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">DealShare Mart</a></h5>
              <div class="small text-muted"><span>Alcohol</span> <span class="mx-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Groceries</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li>Delivery
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">7.2 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-3.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">DMart</a></h5>
              <div class="small text-muted"><span>Groceries</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Bakery</span> <span>Deli</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li><span class="text-primary">Delivery by 10:30pm</span>
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">9.3 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-4.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">Blinkit Store</a></h5>
              <div class="small text-muted"><span>Meal Kits</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Prepared Meals</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Organic</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li>Delivery
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">40.5 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-5.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">StoreFront Super Market</a></h5>
              <div class="small text-muted"><span>Groceries</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Bakery</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li><span class="text-primary">Delivery by 11:30pm</span>
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">28.1 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-6.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">BigBasket</a></h5>
              <div class="small text-muted"><span>Groceries</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Deli</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li><span class="text-primary">Delivery by 10:30pm</span>
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">7.5 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-7.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">Swiggy Instamart</a></h5>
              <div class="small text-muted"><span>Meal Kits</span>

                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Prepared Meals</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span> <span>Organic</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li>Delivery
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">40.5 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-8.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">Online Grocery Mart</a></h5>
              <div class="small text-muted"><span>Groceries</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Bakery</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li><span class="text-primary">Delivery by 11:30pm</span>
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">28.1 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-9.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">Spencers</a></h5>
              <div class="small text-muted"><span>Groceries</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Deli</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li><span class="text-primary">Delivery by 10:30pm</span>
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">7.5 mi away</div>
              </div>
            </div>
          </div>
        </div>




      </div>
    </div>
  </section>
  <section class="mb-lg-14 mb-8">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="mb-6">
            <h3 class="mb-0">Recently viewed</h3>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3  g-4 g-lg-4">

        <div class="col">
          <div class="card flex-row p-8 card-product  ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-4.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">Blinkit Store</a></h5>
              <div class="small text-muted"><span>Meal Kits</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Prepared Meals</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Organic</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li>Delivery
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">40.5 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-5.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">StoreFront Super Market</a></h5>
              <div class="small text-muted"><span>Groceries</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Bakery</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li><span class="text-primary">Delivery by 11:30pm</span>
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">28.1 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-6.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">BigBasket</a></h5>
              <div class="small text-muted"><span>Groceries</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Deli</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li><span class="text-primary">Delivery by 10:30pm</span>
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">7.5 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-7.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">Swiggy Instamart</a></h5>
              <div class="small text-muted"><span>Meal Kits</span>

                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Prepared Meals</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span> <span>Organic</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li>Delivery
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">40.5 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-8.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">Online Grocery Mart</a></h5>
              <div class="small text-muted"><span>Groceries</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Bakery</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li><span class="text-primary">Delivery by 11:30pm</span>
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">28.1 mi away</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- card -->
          <div class="card flex-row p-8 card-product ">
            <div>
              <!-- img -->
              <img src="images/stores-logo/stores-logo-9.svg" alt=""
                class="rounded-circle icon-shape icon-xl"></div>
            <!-- content -->
            <div class="ms-6">
              <h5 class="mb-1"><a href="#!" class="text-inherit">Spencers</a></h5>
              <div class="small text-muted"><span>Groceries</span>
                <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#C1C7C6"
                    class="bi bi-circle-fill align-middle " viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg></span>
                <span>Deli</span></div>
              <div class="py-3">
                <ul class="list-unstyled mb-0 small">
                  <li><span class="text-primary">Delivery by 10:30pm</span>
                  </li>
                  <li>Pickup available</li>
                </ul>
              </div>
              <div>
                <!-- badge -->
                <div class="badge text-bg-light border">7.5 mi away</div>
              </div>
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