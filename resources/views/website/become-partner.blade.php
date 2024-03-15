@extends('website.layouts.app')
@section('content')
<div class="body_content_wrapper position-relative">
  <!-- Our Contact -->
	<section class="our-contact pt55 pb30">
	    <div class="container">
	      <div class="row">
	        <div class="col-lg-6">
	          <div class="contact_page_content">
	            <div class="main-title">
	              <h2 class="mtitle">Become a partner</h2>
	              <h5>What types of collaborations do we do in each category:</h5>
	              <div>
	                <h5>Local:</h5>
	                <p>We collaborate with local businesses in the big cities of Gothenburg, Stockholm and Malmö and the
	                  surrounding area. All of these offer quality services and products in areas such as home, food,
	                  vehicles, experiences or beauty and health.</p>
	                <h5>Products:</h5>
	                <p>We collaborate with both well-established and smaller brands, e-retailers both nationally and
	                  internationally. Together, we offer our visitors a wide and fun range of high-quality products.</p>
	                <h5>Trips:</h5>
	                <p>We also collaborate with travel companies and hotels at both national and international level. The
	                  destinations these offer can be anything from New York to small mansions in the Swedish countryside.
	                </p>
	                <h5>Contact us today</h5>
	                <p>Leave your details below and you will be contacted shortly by one of our friendly partner managers:
	                </p>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="col-lg-6">
	          <div class="form_grid">
	            <div class="wrapper">
	              <form class="contact_form" action="{{ route('website.become-partner.store') }}" method="post" enctype="multipart/form-data">
	              	@csrf
	                <div class="row">
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">COMPANY NAME</label>
	                      <input class="form-control" required type="text" placeholder="COMPANY NAME" name="company_name">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">COMPANY LOGO</label>
	                      <input class="form-control" required type="file" name="company_logo">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">CONTACT PERSON</label>
	                      <input class="form-control" required type="text" placeholder="CONTACT PERSON" name="contact_person">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">ORGANIZATION NUMBER *</label>
	                      <input class="form-control" required type="text" placeholder="ORGANIZATION NUMBER" name="organization_number">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">E-MAIL</label>
	                      <input class="form-control" required type="email" placeholder="E-MAIL" name="email">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">TELEFON *</label>
	                      <input class="form-control" required type="text" placeholder="TELEFON" name="telephone">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">AREA *</label>
	                      <input class="form-control" required type="text" placeholder="AREA" name="area">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">STREET ADDRESS</label>
	                      <input class="form-control" type="text" placeholder="STREET ADDRESS" name="street_address">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">ZIP CODE</label>
	                      <input class="form-control" required type="text" placeholder="ZIP CODE" name="zip_code">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">LOCATION</label>
	                      <input class="form-control" required type="text" placeholder="LOCATION" name="location">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <label class="form-label">ARE YOU A SWEDISH COMPANY THAT WORKS WITH TRAVEL OR SERVICES AND HOLD
	                      F-TAX FORM *</label>
	                    <div class="form-group mb-4 d-flex align-items-center gap-2">
	                      <div class="d-flex align-items-center gap-2">
	                        <label for="yes_ftx" style="font-size:large;">Yes</label>
	                        <input type="radio" required name="is_hold_tax_form" value="1" class="mx-2" id="yes_ftx">
	                      </div>
	                      <div class="d-flex align-items-center">
	                        <label for="no_ftx" style="font-size:large;">No</label>
	                        <input type="radio" required name="is_hold_tax_form" value="0" class="mx-2" id="no_ftx">
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <label class="form-label">WE HAVE TRIED THIS CONCEPT BEFORE *</label>
	                    <div class="form-group mb-4 d-flex align-items-center gap-2">
	                      <div class="d-flex align-items-center gap-2">
	                        <label for="yes_bft" style="font-size:large;">Yes</label>
	                        <input type="radio" required name="is_tried_this_concept_before" value="1" class="mx-2" class="mx-2" id="yes_bft">
	                      </div>
	                      <div class="d-flex align-items-center">
	                        <label for="no_bft" style="font-size:large;">No</label>
	                        <input type="radio" required name="is_tried_this_concept_before" value="0" class="mx-2" id="no_bft">
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">WHICH PRODUCT/SERVICE DO YOU WANT TO MARKET?</label>
	                      <textarea class="w-100 form-control" required rows="3" name="which_product_you_want_to_market"></textarea>
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="form-group mb-4">
	                      <label class="form-label">WHAT DOES YOUR COMPANY DO?</label>
	                      <textarea class="w-100 form-control" required rows="3" name="what_your_comany_do"></textarea>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group mb-4">
	                      <label class="form-label">WEBSITE</label>
	                      <input class="form-control" type="url" required name="website_url" placeholder="https://">
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group mb-4">
	                      <!-- <a href="javascript:void(0)"> -->
	                      	<button type="submit" class="btn btn-thm">Send</button>
	                      <!-- </a> -->
	                    </div>
	                  </div>
	                </div>
	              </form>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	</section>
</div>
@endsection
