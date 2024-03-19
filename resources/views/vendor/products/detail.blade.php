@extends('vendor.layouts.app')
@section('content')
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
  <div class="container">
	<h2>Product Details</h2>
  </div>
</section>

<!-- Shop Single Content -->
<section class="shop-single-content pb80 pt0 ovh">
	<div class="container">
		<div class="row wrap">
		  	<div class="col-xl-12">
			    <div class="column">
				    <div class="shop_single_natabmenu">
				        <div class="d-block d-sm-flex align-items-start posr pb100-xs justify-content-center">
				          <div class="nav d-flex flex-sm-column nav-pills me-0 me-sm-3 custom_nav_list" id="v-pills-tab2"
				            role="tablist" aria-orientation="vertical">

				            <!-- Main image -->
							<button class="nav-link active" id="product-main-image-tab" data-bs-toggle="pill"
				              data-bs-target="#product-main-image" type="button" role="tab"
				              aria-controls="v-pills-messages" aria-selected="false">
								<img src="{{ asset('images/' . $product->main_image) }}" onerror="this.src='{{ asset('assets/images/image-placeholder.png') }}'" alt="Product Main Image">
							</button>

							<!-- Additional Images -->
				            @if (count(@$product->images) > 0)
					            @foreach (@$product->images as $product_image)
						            <button class="nav-link me-3 me-sm-0" id="product-image-tab{{$product_image->id}}" data-bs-toggle="pill" 
						              data-bs-target="#product-image{{$product_image->id}}" type="button" role="tab" 
						              aria-controls="v-pills-home" aria-selected="true">
										<img src="{{ asset('images/' . $product_image->image) }}" onerror="this.src='{{ asset('assets/images/image-placeholder.png') }}'" alt="Product Image">
									</button>
								@endforeach
							@endif


				          </div>
				          <div class="tab-content ms-0 m-xl-auto custom_tab_contents" id="v-pills-tabContent">

				          	<!-- Main image -->
				            <div class="tab-pane fade show active" id="product-main-image" role="tabpanel"
				              aria-labelledby="product-main-image-tab">
				              <div class="shop_single_navmenu_content justify-content-center">
				                <a class="product_popup popup-img" href="images/shop/ss3.png"><span
				                    class="flaticon-full-screen"></span></a>
				                <div class="zoomimg_wrapper m-auto hizoom hi3">
				                  <img class="zoom-img" id="zoom_03" src="{{ asset('images/' . $product->main_image) }}" 
				                  	onerror="this.src='{{ asset('assets/images/image-placeholder.png') }}'"
				                    data-zoom-image="{{ asset('images/' . $product->main_image) }}" width="510" alt="Product Main Image" />
				                </div>
				              </div>
				            </div>

				            <!-- Additional Images -->
				          	@if (count(@$product->images) > 0)
					            @foreach (@$product->images as $product_image)
						            <div class="tab-pane fade" id="product-image{{$product_image->id}}" role="tabpanel" aria-labelledby="product-image-tab{{$product_image->id}}">
						              <div class="shop_single_navmenu_content justify-content-center">
						                <a class="product_popup popup-img" href="images/shop/ss1.png"><span
						                    class="flaticon-full-screen"></span></a>
						                <div class="zoomimg_wrapper m-auto">
						                  <img class="zoom-img" id="zoom_03" src="{{ asset('images/' . $product_image->image) }}" 
						                  	onerror="this.src='{{ asset('assets/images/image-placeholder.png') }}'"
						                    data-zoom-image="{{ asset('images/' . $product->main_image) }}" width="510" alt="Product Image" />
						                </div>
						              </div>
						            </div>
								@endforeach
				            @endif

				          </div>
				        </div>
				     </div>
			      	<div class="col-lg-12 z0">
				        <div class="column">
				          <div class="mt-5 sidebar mb-3 mb-xl-0">

				            <h4 class="title mb15">{{ $product->title }}</h4>
				            <div class="row justify-content-between">
				              <div class="col-lg-12">
				                <p>{{ $product->product_description }}</p>
				              </div>
							<div class="col-lg-2">
								<div class="C-price mb25 mt20">NOK {{ $product->price }} <small><del class="mr10">NOK {{ $product->discount_price }}</del></small></div>
							</div>
							<!-- <div class="col-lg-4">
								<div class="d-grid mb-3">
									<a href="javascript:void(0)" class="btn btn-white bdr_thm ss_cart_btn">Buy Now</a>
								</div>
							</div> -->
			                <div class="col-lg-4">
			                    <div class="d-grid mb-3">
			                      <div class="share-options--1lVOA">

			                        <div class="share-options-icons--EWz4H">

			                        	@if (@$product->vendor->facebook_link != null)
				                        	<a href="{{ $product->vendor->facebook_link }}" target="_blank" rel="noopener noreferrer" class="share-option-icon--2mXCg">
				                            	<img src="{{ asset('assets/images/shop-items/facebook-68acf96b9911e04c8b75f060097a0bc6.svg') }}" alt="Facebook" height="24" width="24">
				                          	</a>
			                          	@endif

			                          	@if (@$product->vendor->twitter_link != null)
				                            <a href="{{ $product->vendor->twitter_link }}" target="_blank" rel="noopener noreferrer" class="share-option-icon--2mXCg">
				                              	<img src="{{ asset('assets/images/shop-items/twitter-52cba15fac1e175737041048b2dce361.svg') }}" alt="Twitter" height="24" width="24">
											</a>
										@endif

										@if (@$product->vendor->email != null)
										    <a href="mailto:{{ urlencode($product->vendor->email) }}?subject=Massageapparat för att motverka rynkor, ärr och dubbelhaka&amp;body=Kolla in den här dealen: https://letsdeal.se/deal/4btj1sywujmv/massageapparat-for-att-motverka-rynkor-arr-och-dubbelhaka" target="_blank" rel="noopener noreferrer" class="share-option-icon--2mXCg">
										        <img src="{{ asset('assets/images/shop-items/email-f3658c1a3f4ea73f876171699587359f.svg') }}" alt="E-mail" height="24" width="24">
										    </a>
										@endif

			                          </div>
			                      </div>
			                    </div>
			                </div>

				            <div class="row justify-content-between mb-4">
								<div class="col-lg-12">
									<strong><u><h5>Product information</h5></u></strong>
									{!! $product->product_information !!}
								</div>
								<hr/>
								<div class="col-lg-12">
									<strong><u><h5>Product information</h5></u></strong>
								  	{!! $product->terms_of_use !!}
								</div>
								<hr/>
				              	<div class="col-lg-12">
					                <strong><u><h5>Product information</h5></u></strong>
								  	{!! $product->more_about_the_product !!}
				              	</div>
				              	<hr/>
				              	<div class="col-lg-12">
					                <ul>
					                  <h4><b>Sold By</b></h4>
					                  <li>Shop in store</li>
					                  <li>Organization Number: {{ @$product->vendor->organization_number }}</li>
					                  <li> <a href="{{ @$product->vendor->website_url }}" target="_blant">{{ @$product->vendor->website_url }}</a></li>
					                </ul>
				              	</div>
				            </div>

				          </div>
				        </div>
				      </div>
				    </div>
			    <hr/>
		  	</div>
		</div>
	</div>
</section>
@endsection
