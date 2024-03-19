@extends('website.layouts.app')
@section('content')
<section class="shop-checkouts pt30">

  <h1 class="text-center fs-4">{{ $title ?? '' }}</h1>
  <form id="signUpForm" class="checkout_form" action="{{ route('website.checkout.store') }}" method="POST">
    @csrf
    <div class="form-header d-flex mb-4"> 
      <span class="stepIndicator">Billing Details</span>
      {{-- <!-- <span class="stepIndicator">Shipping Detail</span> --> --}}
      <span class="stepIndicator">Order Details</span>
    </div>

    <div class="step">
      <div class="row">
        <div class="col-sm-6 mt-2">
          <div class="form-group">
            <label class="form-label">First name *</label>
            <input class="form-control form_control" name="first_name"required type="text" placeholder="First Name">
          </div>
        </div>
        <div class="col-sm-6 mt-2">
          <div class="form-group">
            <label class="form-label">Last name *</label>
            <input class="form-control form_control" name="last_name" required type="text" placeholder="Last Name">
          </div>
        </div>
        <div class="col-sm-6 mt-2">
          <div class="form-group">
            <label class="form-label">Phone *</label>
            <input class="form-control form_control" name="phone" required type="text" placeholder="Phone">
          </div>
        </div>
        <div class="col-sm-6 mt-2">
          <div class="form-group">
            <label class="form-label">Email *</label>
            <input class="form-control form_control" name="email" required type="email" placeholder="Email">
          </div>
        </div>
        <div class="col-lg-12 mt-2">
          <div class="form-group">
            <label class="form-label">Country / Region *</label>
            <div class="checkout_country_form actegory">
              <select name="country" required class="selectpicker show-tick">
                <!-- <option value="">Select</option> -->
                <option value="Turkey">Turkey</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="Ukraine">Ukraine</option>
                <option value="Uruguay">Uruguay</option>
                <option value="UK">UK</option>
                <option value="Uzbekistan">Uzbekistan</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm-12 mt-2">
          <div class="form-group">
            <label class="form-label">State *</label>
            <div class="checkout_country_form">
              <select name="state" required class="selectpicker show-tick">
                <!-- <option value="">Select</option> -->
                <option value="Istanbul">Istanbul</option>
                <option value="London">London</option>
                <option value="NewYork">New York</option>
                <option value="Paris">Paris</option>
                <option value="Dubai">Dubai</option>
                <option value="Rome">Rome</option>
                <option value="Singapore">Singapore</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm-12 mt-2">
          <div class="form-group">
            <label class="form-label">Town / City *</label>
            <input class="form-control form_control" required name="city" type="text">
          </div>
        </div>
        <div class="col-sm-12 mt-2">
          <div class="form-group">
            <label class="form-label">Street address *</label>
            <input class="form-control form_control" name="street_address" required type="text">
          </div>
        </div>
        <div class="col-sm-12 mt-2">
          <div class="form-group">
            <label class="form-label">ZIP *</label>
            <input name="zip" class="form-control form_control" required type="text">
          </div>
        </div>
        <div class="col-sm-12 mt-2">
          <div class="form-group">
            <label class="ai_title">Order notes (optional)</label>
            <textarea name="order_notes" class="form-control resize-none" rows="6"
              placeholder="Order notes (optional)"></textarea>
          </div>
        </div>

      </div>
    </div>

    {{-- <!-- <div class="step">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group mb0">
            <div class="mb35 mt50">
              <h4 class="fz20">Shipping Details</h4>
            </div>
            <div class="ui_kit_checkbox">
              <label class="custom_checkbox">Ship to a different address?
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
            </div>
            <label class="ai_title">Order notes (optional)</label>
            <textarea name="form_message" class="form-control resize-none" rows="6"
              placeholder="">Order Notes</textarea>
          </div>
        </div>
      </div>
    </div> --> --}}

    <div class="step">
      <div class="row">
        <div class="col-lg-12">
          <div class="order_sidebar_widget checkout_page mb30 mb30">
            <h4 class="title">Your Order</h4>
            <ul>
              @php
                $total_price = '0';
              @endphp

              @if (session('cart'))
                @foreach (session('cart') as $key => $product)

                @php
                  $total_price += $product['price']*$product['quantity'];
                @endphp

                  <li>
                    <p class="product_name_qnt">{{ $product['title'] }} x {{ $product['quantity'] }} </p>
                    <span class="price">${{ $product['price']*$product['quantity'] }}</span>
                  </li>
                @endforeach
              @endif
              <hr>
              <!-- <li class="subtitle">
                <p>Sub Total <span class="float-end totals">${{ $total_price ?? '0' }}</span></p>
              </li> -->
              <!-- <li class="subtitle">
                <p>Shipping <span class="float-end totals">$20</span></p>
              </li> -->
              <li class="subtitle">
                <p>Total <span class="float-end totals">${{ $total_price ?? '0' }}</span></p>
                <input type="hidden" name="total_price" value="{{ $total_price }}">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="form-footer">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> 
    </div> <!-- end previous / next buttons -->
  </form>
</section>
@endsection

{{-- @section('js')
<script type="text/javascript">
  alert('test');
  $('.checkout_form').submit(function(e){
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        type: 'POST',
        url: formData.attr('action'),
        data: formData,
        contentType: false,
        processData: false,
        success: function(response){
            if (response.status === 0) {
                if (response.errors !== undefined && response.errors !== null && Object.keys(response.errors).length > 0) {
                    $.each(response.errors, function(field, messages) {
                        $.each(messages, function(index, message) {
                            toastr.error(message);
                        });
                    });
                } else if (response.error !== undefined && response.error !== null && response.error !== '') {
                    toastr.error(response.error);
                }
            } else if (response.status == 1) {
                toastr.success('Order has been placed successfully.')
                // Redirect after 2 seconds
                // setTimeout(function() {
                // window.location.href = '';
                // }, 2000);
            } else {
                toastr.error('Oops! Some thing went wrong. PLease try again later.')
            }
        }
    });
});
</script>
@endsection --}}
