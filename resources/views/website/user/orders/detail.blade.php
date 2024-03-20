@extends('website.layouts.app')
@section('content')
<section class="our-dashbord dashbord pb80">
  <div class="container">
    <div class="row">
      @include('website.user.sidebar')
      <div class="col-lg-9 col-xl-10">
        <div class="row pb50">
          <div class="col-lg-12">
            <div class="dashboard_title_area">
              <h2>Orders Details</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="dashboard_product_list account_user_deails ">
              <div class="row mb-5">
                <div class="col-lg-6">
                  <div class="detail-left">
                    <p class="l-p">Order No:<span>#{{ $order->order_no }}</span></p>
                    <p class="date">{{ $order->created_at->format('d-M-Y h:m A') }}</p>
                    <!-- <div><span class="approved">Approved</span></div> -->
                  </div>
                </div>
                <!-- <div class="col-lg-6 d-flex justify-content-end align-items-start"> -->
                  <!-- <span class="approved">Approved</span> -->
                <!-- </div> -->
              </div>
              <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
                <div class="col-lg-6">
                  <div class="d-flex justify-content-between statistics_funfact c-fact align-items-center">
                    <div class="icon text-center"><i class="fa  fa-shopping-cart"></i></div>
                    <div class="details">
                      <div class="subtitle1">Order Info</div>
                      <div class="title">
                        <ul>
                          <li>Name: <span>{{ $order->first_name }}</span></li>
                          <li>Email: <span>{{ $order->email }}</span></li>
                          <li>Phone: <span>{{ $order->phone }}</span></li>
                          <li>Total Amount: <span>{{ $order->total_price }}</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="d-flex justify-content-between statistics_funfact c-fact align-items-center">
                    <div class="icon text-center"><i class="fa  fa-file"></i></div>
                    <div class="details w-100">
                      <div class="subtitle1 mb-3">Notes</div>
                      <p>{{ $order->order_notes ?? 'N/A' }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="dashboard_product_list account_user_deails ">
              <div class="order_table table-responsive">
                <h2>Items</h2>
                <table class="table">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">S.no</th>
                      <th scope="col">Name</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                      <th scope="col">Sub Total</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count(@$order->orderDetail) > 0)
                      @foreach (@$order->orderDetail as $key => $detail)
                        <tr>
                          <th scope="row">{{ $key+1 }}</th>
                          <td>{{ $detail->product_name }}</td>
                          <td>{{ $detail->product_quantity }}</td>
                          <td>${{ $detail->product_price }}</td>
                          <td>${{ $detail->product_price*$detail->product_quantity }}</td>
                          <td class="status">
                            @if ($detail->status == '1')
                              <span class="style4">Delivered</span>
                            @elseif ($detail->status == '2')
                              <span class="style1">Out for delivery</span>
                            @else
                              <span class="style3">In progress</span>
                            @endif
                          </td>
                        </tr>
                      @endforeach
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
