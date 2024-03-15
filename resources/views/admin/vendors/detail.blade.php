@extends('admin.layouts.app')
@section('content')

<!-- Shop Single Content -->
<section class="dashboard__content bgc-gmart-gray">
	<div class="container">
	    <div class="row pb50">
	      <div class="col-md-10">
	        <h2>Vendor Details</h2>
	      </div>
	      @if ($vendor->status == '0')
	      <div class="col-md-2">
	        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#vendorApprove">Approve</button>
	      </div>
	      @endif
	    </div>
		<div class="row wrap">
		  	<div class="col-xl-12">
		      	<div class="col-lg-12 z0">
				    <div class="column">
				        <div class="mt-5 sidebar mb-3 mb-xl-0">
				            <div class="row justify-content-between">
					            <div class="row justify-content-between mb-4">
									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Contact Person</h5>
										  <p>{{ $vendor->contact_person }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Company Name</h5>
										  <p>{{ $vendor->company_name }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Company Website?</h5>
										  <p>{{ $vendor->website_url }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Organization Number</h5>
										  <p>{{ $vendor->organization_number }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Email</h5>
										  <p>{{ $vendor->email }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Telephone</h5>
										  <p>{{ $vendor->telephone }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Area</h5>
										  <p>{{ $vendor->area }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Street Address</h5>
										  <p>{{ $vendor->street_address }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Zip Code</h5>
										  <p>{{ $vendor->zip_code }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Location</h5>
										  <p>{{ $vendor->location }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>You Have Tried This Concept Before?</h5>
										  <p>{{ $vendor->is_tried_this_concept_before == '1' ? 'Yes' : 'No' }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Are You A Swedish Company That Works With Travel Or Services And Hold F-Tax Form?</h5>
										  <p>{{ $vendor->is_hold_tax_form == '1' ? 'Yes' : 'No' }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Which Product/Service Do You Want To Market?</h5>
										  <p>{{ $vendor->which_product_you_want_to_market }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>What Does Your Company Do?</h5>
										  <p>{{ $vendor->what_your_comany_do }}</p>
										</ul>
									</div>

									<div class="col-lg-4">
										<ul class="detail-ul">
										  <h5>Company Logo</h5>
										  <img width="200px" src="{{ asset('images/' . $vendor->company_logo) }}" onerror="this.src='{{ asset('assets/images/image-placeholder.png') }}'" alt="Company Logo">
										</ul>
									</div>
					            </div>
					        </div>
				        </div>
					</div>
			    </div>
		  	</div>
		</div>
	</div>
</section>

<div class="modal fade c-fade" id="vendorApprove" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
  role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to approve this vendor? <br>Login credentials will be sent to their email.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{ route('admin.vendor.approve', $vendor->id) }}" class="btn btn-success text-light">Approve</a>
      </div>
    </div>
  </div>
</div>
@endsection
