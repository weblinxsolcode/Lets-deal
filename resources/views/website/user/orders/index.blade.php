@extends('website.layouts.app')
@section('content')
<section class="our-dashbord dashbord pb80">
  <div class="container">
    <div class="row">
      @include('website.user.sidebar')
      <div class="col-lg-9 col-xl-10">
        <!-- Sidebar for mobile -->
        {{-- <!-- <div class="row">
          <div class="col-lg-12">
            <div class="dashboard_navigationbar dn db-md mt50">
              <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fas fa-bars pr10"></i> Dashboard
                  Navigation</button>
                <ul id="myDropdown" class="dropdown-content">
                  <li><a href="page-account-details.html"><span class="flaticon-growth"></span>Account Details</a></li>
                  <li><a class="active" href="page-account-order.html"><span
                        class="flaticon-checked-box"></span>Order</a></li>
                  <li><a href="page-account-address.html"><span class="flaticon-location"></span>Address</a></li>
                  <li><a href="page-account-wishlist.html"><span class="flaticon-badge"></span>Wishlist</a></li>
                  <li><a href="page-account-invoice.html"><span class="flaticon-invoice"></span>Invoices</a></li>
                  <li><a href="page-login.html"><span class="flaticon-exit"></span>Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div> --> --}}
        <div class="row">
          <div class="col-xl-12">
            <div class="account_user_deails pl40 pl0-lg">
              <h2 class="title mb30">Orders</h2>
              <div class="order_table table-responsive">
                <table class="table">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">S.no</th>
                      <th scope="col">Order No</th>
                      <th scope="col">Total</th>
                      <th scope="col">Status</th>
                      <th scope="col">Date & Time</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($orders) > 0)
                      @foreach ($orders as $key => $order)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                          <th>#{{ $order->order_no }}</th>
                          <td>$56.00</td>
                          <td class="status">
                            @if ($order->status == '1')
                              <span class="style4">Approved</span>
                            @else
                              <span class="style3">Pending</span>
                            @endif
                          </td>
                          <td>{{ $order->created_at->format('d-M-Y h:m A') }}</td>
                          <td class="editing_list align-middle">
                            <ul>
                              <li class="list-inline-item mb-1 c-btn-color ">
                                <a href="{{ route('website.user-order.detail', $order->id) }}" data-bs-toggle="tooltip"
                                  data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="View"><i
                                    class="fa-solid fa-eye" style="color:white"></i></a>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                        <td>Records not found!</td>
                      </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
