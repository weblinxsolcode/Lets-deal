@extends('website.layouts.app')
@section('content')
<script src="{{ asset('assets/js/jquery-3.6.0.js') }}"></script>
<section class="shop-cart pt30">
  <div class="container">
    @if (session('cart'))
      <div class="row">
        <div class="col-sm-6 col-lg-4 m-auto">
          <div class="main-title text-center mb50">
            <h2 class="title">Shopping Cart</h2>
          </div>
        </div>
      </div>
      <div class="row mt15">
        <div class="col-lg-8 col-xl-9">
          <div class="shopping_cart_table table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">PRODUCT</th>
                  <th scope="col">PRICE</th>
                  <th scope="col">QUANTITY</th>
                  <th scope="col">SUB TOTAL</th>
                  <th scope="col">REMOVE</th>
                </tr>
              </thead>
              <tbody class="table_body">
                @if (session('cart'))
                  @php
                    $total_price = '0';
                  @endphp
                  @foreach (session('cart') as $key => $product)
                    @php
                    $total_price += $product['price']*$product['quantity'];
                    @endphp

                    <tr>
                      <th scope="row">
                        <ul class="cart_list d-block d-xl-flex">
                          <li class="ps-1 ps-sm-4 pe-1 pe-sm-4">
                            <img src="{{ asset('images/' . $product['image']) }}" style="width: 150px;" 
                            onerror="this.src='{{ asset('assets/images/image-placeholder.png') }}'" alt="Product Main Image">
                          </li>
                          <li class="ms-2 ms-md-3">
                            <a class="cart_title" href="{{ route('website.product.detail', $key) }}" target="blank">
                              <span class="fz16">{{ $product['title'] }}</span>
                            </a>
                          </li>
                        </ul>
                      </th>
                      <td>${{ $product['price'] }}</td>
                      <td>
                        <div class="cart_btn">
                          <div class="quantity-block">
                              <button class="quantity-arrow-minus inner_page decrement{{$key}}"> <span class="fa fa-minus"></span> </button>
                              <input class="quantity-num inner_page quantity_input{{$key}}" min="1" type="number" value="{{ $product['quantity'] }}" />
                              <button class="quantity-arrow-plus inner_page increment{{$key}}"> <span class="fas fa-plus"></span> </button>
                          </div>
                        </div>
                      </td>
                      <td class="">${{ $product['price']*$product['quantity'] }}</td>
                        <td>
                          <a href="{{ route('website.remove-cart-product', $key) }}" onclick="return confirm('Are you sure you want to remove this product?');">
                              <i style="color: red" class="fa fa-trash" aria-hidden="true"></i>
                          </a>
                        </td>
                    </tr>

                    <script type="text/javascript">
                      $('.decrement{{$key}}').on('click', function() {

                        updated_quantity = parseInt('{{ $product["quantity"] }}') - 1;
                        $.ajax({
                          type: 'POST',
                          url: "{{ route('website.cart.update-quantity') }}",
                          data: {
                              _token: '{{ csrf_token() }}',
                              product_id: '{{ $key }}',
                              quantity: updated_quantity,
                          },
                          success: function(response) {
                              if (response.status === 1) {
                                $('.quantity_input{{$key}}').val(updated_quantity);
                                // $('.shop-cart').load(document.URL +  ' .shop-cart');
                                location.reload();
                                toastr.success('quantity decrement')
                              } else {
                                  toastr.error('Oops! Something went wrong. Please try again later.');
                              }
                          },
                        });
                      });

                      $('.increment{{$key}}').on('click', function() {
                        $.ajax({
                            type: 'POST',
                            url: "{{ route('website.cart.update-quantity') }}",
                            data: {
                                _token: '{{ csrf_token() }}',
                                product_id: '{{ $key }}',
                                quantity: parseInt('{{ $product["quantity"] }}') + 1,
                            },
                            success: function(response) {
                                if (response.status === 1) {
                                  // $('.shop-cart').load(document.URL +  ' .shop-cart');
                                  location.reload();
                                  toastr.success('quantity increment')
                                } else {
                                    toastr.error('Oops! Something went wrong. Please try again later.');
                                }
                            },
                        });
                      });
                    </script>
                  @endforeach
                @endif
              </tbody>
            </table>
            <div class="checkout_form mt30">
              <div class="checkout_coupon posr d-block d-xl-flex">
                <a href="{{ route('website.product.index') }}" class="btn btn_shopping btn-white me-3">Continue Shopping</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xl-3">
          <div class="order_sidebar_widget style2">
            <h4 class="title">Cart Totals</h4>
            <ul>
              <!-- <li class="subtitle">
                <p>Product Subtotal <span class="float-end">$229.99</span></p>
              </li>
              <li class="subtitle">
                <p>Order Discounts <span class="float-end">-$30.01</span></p>
              </li>
              <li class="subtitle">
                <p>Estimated Shipping <span class="float-end">Free</span></p>
              </li>
              <li class="subtitle">
                <p>Estimated Taxes <span class="float-end">$26.00</span></p>
              </li>
              <li class="subtitle">
                <hr>
              </li> -->
              <li class="subtitle totals">
                <p>Total <span class="float-end">${{ $total_price ?? '' }}</span></p>
              </li>
            </ul>
            <div class="ui_kit_button payment_widget_btn">
              <a href="{{ route('website.checkout.index') }}"> <button type="button" class="btn btn-thm btn-block">Proceed to checkout</button></a>
            </div>
          </div>
        </div>
      </div>
    @else
      <div class="row">
        <div class="col-sm-6 col-lg-4 m-auto">
          <div class="main-title text-center mb50">
            <h2 class="title">Shopping Cart</h2>
            <p class="title">Your cart is empty!</p>
              <a href="{{ route('website.product.index') }}" class="btn btn_shopping btn-white me-3">Continue Shopping</a>
          </div>
        </div>
      </div>
    @endif
  </div>
</section>
@endsection
