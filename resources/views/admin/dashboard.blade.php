@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <div class="row">
        <div class="col-lg-12">
          <h1>Dashboard</h1>
        </div>
      </div>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        
        <div class="col-lg-12">
          <div class="row">
            
            <!-- Card -->
            <div class="col-xxl-3 col-md-3">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">COWS</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-chat-heart"></i>
                    </div>
                    <div class="ps-2">
                      <h6>5000</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card -->

            <div class="col-xxl-3 col-md-3">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">BULLS</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-chat-heart"></i>
                    </div>
                    <div class="ps-2">
                      <h6>2000</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card -->

            <!-- Card -->
            <div class="col-xxl-3 col-md-3">
              <div class="card info-card revenue-card">                
                <div class="card-body">
                  <h5 class="card-title">TOTAL CATTLES</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-chat-heart"></i>
                    </div>
                    <div class="ps-2">
                      <h6>10000</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card -->

            <!-- Card -->
            <div class="col-xxl-3 col-xl-3">
              <div class="card info-card revenue-card">                
                <div class="card-body">
                  <h5 class="card-title">PRODUCTS</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-chat-heart"></i>
                    </div>
                    <div class="ps-2">
                      <h6>99</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card -->

          </div>
        </div>
      
      </div>

      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">Place</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Payment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>7-10-2023</td>
                        <td>Name</td>
                        <td>Hyderabad</td>
                        <td><a href="#" class="text-primary">Pair</a></td>
                        <td>₹60000</td>
                        <td>Bank</td>
                      </tr>
                      <tr>
                        <td>7-10-2023</td>
                        <td>Name</td>
                        <td>Hyderabad</td>
                        <td><a href="#" class="text-primary">Pair</a></td>
                        <td>₹60000</td>
                        <td>Bank</td>
                      </tr>
                      <tr>
                        <td>7-10-2023</td>
                        <td>Name</td>
                        <td>Hyderabad</td>
                        <td><a href="#" class="text-primary">Pair</a></td>
                        <td>₹60000</td>
                        <td>Bank</td>
                      </tr>
                      <tr>
                        <td>7-10-2023</td>
                        <td>Name</td>
                        <td>Hyderabad</td>
                        <td><a href="#" class="text-primary">Pair</a></td>
                        <td>₹60000</td>
                        <td>Bank</td>
                      </tr>
                      <tr>
                        <td>7-10-2023</td>
                        <td>Name</td>
                        <td>Hyderabad</td>
                        <td><a href="#" class="text-primary">Pair</a></td>
                        <td>₹60000</td>
                        <td>Bank</td>
                      </tr>
                      <tr>
                        <td>7-10-2023</td>
                        <td>Name</td>
                        <td>Hyderabad</td>
                        <td><a href="#" class="text-primary">Pair</a></td>
                        <td>₹60000</td>
                        <td>Bank</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
            <!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->
@endsection
