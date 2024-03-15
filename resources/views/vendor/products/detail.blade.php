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
				            <button class="nav-link me-3 me-sm-0" id="v-pills-home-tab" data-bs-toggle="pill"
				              data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
				              aria-selected="true"><img src="{{ asset('assets/images/shop/ss1.png') }}" alt=""></button>
				            <button class="nav-link me-3 me-sm-0" id="v-pills-profile-tab" data-bs-toggle="pill"
				              data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
				              aria-selected="false"><img src="{{ asset('assets/images/shop/ss2.png') }}" alt=""></button>
				            <button class="nav-link active" id="v-pills-messages-tab" data-bs-toggle="pill"
				              data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
				              aria-selected="false"><img src="{{ asset('assets/images/shop/ss3.png') }}" alt=""></button>
				          </div>
				          <div class="tab-content ms-0 m-xl-auto custom_tab_contents" id="v-pills-tabContent">
				            <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				              <div class="shop_single_navmenu_content justify-content-center">
				                <a class="product_popup popup-img" href="images/shop/ss1.png"><span
				                    class="flaticon-full-screen"></span></a>
				                <div class="zoomimg_wrapper m-auto">
				                  <img class="zoom-img" id="zoom_01" src="{{ asset('assets/images/shop/ss1.png') }}"
				                    data-zoom-image="images/shop/ss1.png" width="510" alt="Shop Single Image" />
				                </div>
				              </div>
				            </div>
				            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				              <div class="shop_single_navmenu_content justify-content-center">
				                <a class="product_popup popup-img" href="images/shop/ss2.png"><span
				                    class="flaticon-full-screen"></span></a>
				                <div class="zoomimg_wrapper m-auto hizoom hi2">
				                  <img class="zoom-img" id="zoom_02" src="{{ asset('assets/images/shop/ss2.png') }}"
				                    data-zoom-image="images/shop/ss2.png" width="510" alt="Shop Single Image" />
				                </div>
				              </div>
				            </div>
				            <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel"
				              aria-labelledby="v-pills-messages-tab">
				              <div class="shop_single_navmenu_content justify-content-center">
				                <a class="product_popup popup-img" href="images/shop/ss3.png"><span
				                    class="flaticon-full-screen"></span></a>
				                <div class="zoomimg_wrapper m-auto hizoom hi3">
				                  <img class="zoom-img" id="zoom_03" src="{{ asset('assets/images/shop/ss3.png') }}"
				                    data-zoom-image="images/shop/ss3.png" width="510" alt="Shop Single Image" />
				                </div>
				              </div>
				            </div>
				          </div>
				        </div>
				     </div>
			      	<div class="col-lg-12 z0">
				        <div class="column">
				          <div class="mt-5 sidebar mb-3 mb-xl-0">

				            <h4 class="title mb15">Apple MacBook Pro 16" (2021) - Space Grey (Apple M1 Pro Chip / 1TB SSD / 16GB
				              RAM)</h4>
				            <div class="row justify-content-between">
				              <div class="col-lg-12">
				                <p>Tired of cleaning up after frying in the air fryer? Keep food scraps and other debris away from
				                  the fryer and avoid having to clean the fryer after use. These disposable papers can withstand
				                  heat up to 220 C.</p>
				              </div>
							<div class="col-lg-2">
								<div class="C-price mb25 mt20">NOK 1,419.92 <small><del class="mr10">NOK 3.399</del></small></div>
							</div>
			                 <div class="col-lg-4">
			                    <div class="d-grid mb-3">
			                      <div class="share-options--1lVOA">

			                        <div class="share-options-icons--EWz4H"><a href="#" target="_blank" rel="noopener noreferrer"
			                            class="share-option-icon--2mXCg"><img
			                              src="{{ asset('assets/images/shop-items/facebook-68acf96b9911e04c8b75f060097a0bc6.svg') }}" alt="Facebook"
			                              height="24" width="24"></a><a
			                            href="https://twitter.com/share?url=https://letsdeal.se/deal/4btj1sywujmv/massageapparat-for-att-motverka-rynkor-arr-och-dubbelhaka"
			                            target="_blank" rel="noopener noreferrer" class="share-option-icon--2mXCg"><img
			                              src="{{ asset('assets/images/shop-items/twitter-52cba15fac1e175737041048b2dce361.svg') }}" alt="Twitter"
			                              height="24" width="24"></a><a
			                            href="mailto:?subject=Massageapparat för att motverka rynkor, ärr och dubbelhaka&amp;body=Kolla in den här dealen: https://letsdeal.se/deal/4btj1sywujmv/massageapparat-for-att-motverka-rynkor-arr-och-dubbelhaka"
			                            target="_blank" rel="noopener noreferrer" class="share-option-icon--2mXCg"><img
			                              src="{{ asset('assets/images/shop-items/email-f3658c1a3f4ea73f876171699587359f.svg') }}" alt="E-mail"
			                              height="24" width="24"></a></div>
			                      </div>
			                    </div>
			                 </div>

				            <div class="row justify-content-between mb-4">
								<div class="col-lg-12">
									<ul class="detail-ul">
									  <h5>Product information</h5>
									  <li>Crank radio for emergency situations</li>
									  <li>Solar charger</li>
									  <li>Survival - camping</li>
									</ul>
								</div>
								<hr/>
								<div class="col-lg-12">
									<ul class="detail-ul">
									  <h5>Terms of Use</h5>
									  <li>General conditions according to LetsDeal's policy</li>
									  <li>Shipping is added</li>
									  <li>Delivery time approx. 2-6 working days</li>
									  <li>If you have questions, contact support directly via email at info@case4you.se</li>
									  <li style="list-style:none"> <a class="ms-2" href="mailto:someone@example.com">
									      someone@example.com</a></li>
									</ul>
								</div>
								<hr/>
				              	<div class="col-lg-12">
					                <ul class="detail-ul">
					                  <h5>More about the product</h5>
					                  <li>Note right now the delivery time is 12-13 working days!</li>
					                  <li>Crank radio with solar cells, flashlight and Powerbank function</li>
					                  <li>Robust crank radio that can be charged via the built-in crank, the solar panel or via the
					                    micro USB socket. Can charge mobile phone.</li>
					                  <li>n addition to being able to receive FM and AM radio broadcasts to ensure that you can receive
					                    important messages from our authorities or other social actors, it has a flashlight (LED) on one
					                    short side that ensures that you always have access to be able to see also in darkness.</li>
					                  <li>Vevradio can also charge the mobile phone in an emergency. There is a standard USB socket on
					                    the radio where you connect your normal charging cable to the mobile phone.</li>
					                  <li>Should you find yourself in danger, you can send out a loud alarm signal with the dynamordia's
					                    SOS button, hold the button and a siren will sound.</li>
					                </ul>
				              	</div>
				              	<div class="col-lg-12">
					                <a href="#" target="_blant" class="mx-2"> #Beauty</a>
					                <a href="#" class="mx-2">#Treatment</a>
					                <a href="#" class="mx-2">#Electronic</a>
				              	</div>
				              	<hr/>
				              	<div class="col-lg-12">
					                <ul>
					                  <h4><b>Sold By</b></h4>
					                  <li>Shop in store</li>
					                  <li>Organisationsnummer: 2310307</li>
					                  <li> <a href="#" target="_blant">Apple Store.com</a></li>
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