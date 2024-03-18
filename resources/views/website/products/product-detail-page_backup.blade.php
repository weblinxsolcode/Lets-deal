@extends('website.layouts.app')
@section('content')
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-xl-6">
        <div class="breadcrumb_content">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Electronics</a></li>
            <li class="breadcrumb-item"><a href="#">Computers</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Desktop Computers</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Shop Single Content -->
<section class="shop-single-content pb80 pt0 ovh">
  <div class="container">
    <div class="row wrap">
      <div class="col-xl-7">
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
                      <img class="zoom-img" id="zoom_01" src="{{ asset('assets/images/shop/ss1.png') }}" data-zoom-image="images/shop/ss1.png"
                        width="510" alt="Shop Single Image" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <div class="shop_single_navmenu_content justify-content-center">
                    <a class="product_popup popup-img" href="images/shop/ss2.png"><span
                        class="flaticon-full-screen"></span></a>
                    <div class="zoomimg_wrapper m-auto hizoom hi2">
                      <img class="zoom-img" id="zoom_02" src="{{ asset('assets/images/shop/ss2.png') }}" data-zoom-image="images/shop/ss2.png"
                        width="510" alt="Shop Single Image" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel"
                  aria-labelledby="v-pills-messages-tab">
                  <div class="shop_single_navmenu_content justify-content-center">
                    <a class="product_popup popup-img" href="images/shop/ss3.png"><span
                        class="flaticon-full-screen"></span></a>
                    <div class="zoomimg_wrapper m-auto hizoom hi3">
                      <img class="zoom-img" id="zoom_03" src="{{ asset('assets/images/shop/ss3.png') }}" data-zoom-image="images/shop/ss3.png"
                        width="510" alt="Shop Single Image" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="shop_single_product_details ps-0 mt-4 d-block d-xl-none">
            <div class="sspd_price mt-4 mb25">NOK 3.399 <small><del class="mr10">NOK 1,419.92</del></small></div>
            <div class="mb-0">
              <ul class="cart_btn_widget shop_single3_style db-767 d-flex mb-0">
                <li class="me-3 mb-2">
                  <div class="cart_btn home_page_sidebar">
                    <div class="quantity-block home_page_sidebar">
                      <button class="quantity-arrow-minus2 shop_single_page_sidebar"><img src="{{ asset('assets/images/icons/minus.svg') }}"                          alt=""></button>
                      <input class="quantity-num2 shop_single_page_sidebar" type="number" value="3">
                      <button class="quantity-arrow-plus2 shop_single_page_sidebar"> <span
                          class="flaticon-close"></span> </button>
                    </div>
                  </div>
                </li>
                <li class="me-0 me-sm-3 mb-3"><a href="#" class="btn btn-thm bdrs60">Add to cart</a></li>
                <li class="me-0 me-sm-3 mb-3"><a href="#" class="btn btn-white bdr_thm bdrs60">Buy Now</a></li>
              </ul>
              <ul class="shop_single_wishlist_area db-400 d-flex align-items-center mb-3">
                <li class="pe-2 ms-2 ms-sm-0"><a href="#"><span class="flaticon-heart me-2"></span>Wishlist</a></li>
                <li class="pe-2 ms-2"><a href="#"><span class="flaticon-graph me-2"></span>Compare</a></li>
                <li class="pe-2 ms-2"><a href="#"><span class="flaticon-question me-2"></span>Ask a Question</a></li>
                <li class="ms-2"><a href="#"><span class="flaticon-share me-2"></span>Share</a></li>
              </ul>
            </div>
            <hr>
            <div class="vendor_iconbox style2 d-flex mb-1 mt-4">
              <span class="icon fz30 heading-color"><span class="flaticon-truck"></span></span>
              <div class="details ms-3 mt-0">
                <p class="heading-color">Free Shipping & Returns: On all orders over NOK 200.00</p>
              </div>
            </div>
            <div class="vendor_iconbox style2 d-flex mb-1">
              <span class="icon fz30 heading-color"><span class="flaticon-shop"></span></span>
              <div class="details ms-3 mt-0">
                <p class="heading-color">Sold and shipped by <a href="#" class="fw500 heading-color fz16">TFN-STORE |
                    TUFAN STORE LLC Fulfilled by Zenmart</a></p>
              </div>
            </div>
            <div class="vendor_iconbox style2 d-flex mb-0">
              <span class="icon fz30 heading-color"><span class="flaticon-return-box"></span></span>
              <div class="details ms-3 mt-0">
                <p class="heading-color">Free 15-Day returns <a class="tdu" href="#">Details</a></p>
              </div>
            </div>
            <hr>
            <div class="shop_single_siderbar_mini_content mt-4">
              <h4>More seller options (2)</h4>
              <p>Starting from NOK 1,249.00</p>
              <a class="tdu" href="#">Compare all sellers</a>
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
                      <a href="#" class="btn btn-white bdr_thm ss_cart_btn">Buy Now</a>
                    </div>
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
                </div>
                <div class="row justify-content-between mb-4">
                  <div class="col-lg-4">
                    <ul class="detail-ul">
                      <h5>Product information</h5>
                      <li>Crank radio for emergency situations</li>
                      <li>Solar charger</li>
                      <li>Survival - camping</li>
                    </ul>
                  </div>
                  <div class="col-lg-4">
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
                  <div class="col-lg-12 mt-5">
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
                  <div class=" col-lg-12 d-flex justify-content-end">
                    <a href="#" target="_blant" class="mx-2"> #Beauty</a>
                    <a href="#" class="mx-2">#Treatment</a>
                    <a href="#" class="mx-2">#Electronic</a>
                  </div>
                  <hr />
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
        <hr />
      </div>

      <div class="col-lg-5">
        <div class="row justify-content-end">
          <div class=" col-lg-8 p-0">
            <div class="shop_item bdr1 m--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item5.png') }}" alt="Shop Item5">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Sony</div>
                <div class="title"><a href="product-detail.php">HP 14" Laptop - Silver (Intel Core i3-1115G4/512GB
                    SSD/8GB RAM/Windows 10)</a></div>
                <div class="review d-flex db-500">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class=" col-lg-8 p-0">
            <div class="shop_item bdr1 m--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item5.png') }}" alt="Shop Item5">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Sony</div>
                <div class="title"><a href="product-detail.php">HP 14" Laptop - Silver (Intel Core i3-1115G4/512GB
                    SSD/8GB RAM/Windows 10)</a></div>
                <div class="review d-flex db-500">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
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
<!-- <section class="c-slider-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-title">
          <h2 class="title">Related products</h2>
        </div>
        <div
          class="navi_pagi_top_right related_product_slider slider_dib_sm shop_item_6grid_slider owl-theme owl-carousel">
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item1.png') }}" alt="Shop Item1">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">SAMSUNG</div>
                <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i7-1165G7/512GB SSD/12GB
                    RAM/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item7.png') }}" alt="Shop Item7">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">SONY</div>
                <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB
                    SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item3.png') }}" alt="Shop Item3">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">SONY</div>
                <div class="title"><a href="#">Microsoft Surface Laptop Go 12.4" Multi-Touch - Intel Core i5, 8GB RAM,
                    128GB SSD, Windows 10 Home in S Mode - Certified Refurbished</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 399.00 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item4.png') }}" alt="Shop Item4">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Eastsport</div>
                <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i5-1135G7/512GB SSD/8GB
                    RAM/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item5.png') }}" alt="Shop Item5">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">rolex</div>
                <div class="title"><a href="#">ASUS VivoBook 15 X515 15.6" Laptop - Slate Grey (Intel Core
                    i3-1005G1/256GB SSD/8GB RAM/Win 11 S)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item6.png') }}" alt="Shop item6">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Rolex</div>
                <div class="title"><a href="#">ASUS ROG Strix G15 15.6" Gaming Laptop (AMD Ryzen 7 4800H/512GB SSD/16GB
                    RAM/GeForce RTX 3050/Win 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item1.png') }}" alt="Shop Item1">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">SAMSUNG</div>
                <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i7-1165G7/512GB SSD/12GB
                    RAM/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item6.png') }}" alt="Shop Item6">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">SONY</div>
                <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB
                    SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item3.png') }}" alt="Shop Item3">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Eastsport</div>
                <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB
                    SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item4.png') }}" alt="Shop Item4">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Rolex</div>
                <div class="title"><a href="#">Apple MacBook Air 13.3" w/ Touch ID (Fall 2020) - Space Grey (Apple M1
                    Chip / 256GB SSD / 8GB RAM) - En</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item5.png') }}" alt="Shop Item5">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Sony</div>
                <div class="title"><a href="#">HP 14" Laptop - Silver (Intel Core i3-1115G4/512GB SSD/8GB RAM/Windows
                    10)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item6.png') }}" alt="Shop item6">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Rolex</div>
                <div class="title"><a href="#">ASUS ROG Strix G15 15.6" Gaming Laptop (AMD Ryzen 7 4800H/512GB SSD/16GB
                    RAM/GeForce RTX 3050/Win 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt50">
      <div class="col-lg-12">
        <div class="main-title">
          <h2 class="title">You may also like</h2>
        </div>
        <div
          class="navi_pagi_top_right related_product_slider slider_dib_sm shop_item_6grid_slider owl-theme owl-carousel">
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item1.png') }}" alt="Shop Item1">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">SAMSUNG</div>
                <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i7-1165G7/512GB SSD/12GB
                    RAM/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item7.png') }}" alt="Shop Item7">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">SONY</div>
                <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB
                    SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item3.png') }}" alt="Shop Item3">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">SONY</div>
                <div class="title"><a href="#">Microsoft Surface Laptop Go 12.4" Multi-Touch - Intel Core i5, 8GB RAM,
                    128GB SSD, Windows 10 Home in S Mode - Certified Refurbished</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 399.00 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item4.png') }}" alt="Shop Item4">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Eastsport</div>
                <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i5-1135G7/512GB SSD/8GB
                    RAM/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item5.png') }}" alt="Shop Item5">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">rolex</div>
                <div class="title"><a href="#">ASUS VivoBook 15 X515 15.6" Laptop - Slate Grey (Intel Core
                    i3-1005G1/256GB SSD/8GB RAM/Win 11 S)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item6.png') }}" alt="Shop item6">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Rolex</div>
                <div class="title"><a href="#">ASUS ROG Strix G15 15.6" Gaming Laptop (AMD Ryzen 7 4800H/512GB SSD/16GB
                    RAM/GeForce RTX 3050/Win 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item1.png') }}" alt="Shop Item1">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">SAMSUNG</div>
                <div class="title"><a href="#">Acer Aspire 5 15.6" Laptop - Silver (Intel Core i7-1165G7/512GB SSD/12GB
                    RAM/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item6.png') }}" alt="Shop Item6">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">SONY</div>
                <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB
                    SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item3.png') }}" alt="Shop Item3">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Eastsport</div>
                <div class="title"><a href="#">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core i5-10300H/512GB
                    SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item4.png') }}" alt="Shop Item4">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Rolex</div>
                <div class="title"><a href="#">Apple MacBook Air 13.3" w/ Touch ID (Fall 2020) - Space Grey (Apple M1
                    Chip / 256GB SSD / 8GB RAM) - En</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item5.png') }}" alt="Shop Item5">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Sony</div>
                <div class="title"><a href="#">HP 14" Laptop - Silver (Intel Core i3-1115G4/512GB SSD/8GB RAM/Windows
                    10)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 32.50 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="shop_item small_style bdr1 px-2 px-sm-3 mx--1">
              <div class="thumb pb30">
                <img class="w100" src="{{ asset('assets/images/shop-items/shop-item6.png') }}" alt="Shop item6">
                <div class="thumb_info">
                  <ul class="mb0">
                    <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                    <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                    <li><a href="page-shop-list-v6.html"><span class="flaticon-graph"></span></a></li>
                  </ul>
                </div>

              </div>
              <div class="details">
                <div class="sub_title">Rolex</div>
                <div class="title"><a href="#">ASUS ROG Strix G15 15.6" Gaming Laptop (AMD Ryzen 7 4800H/512GB SSD/16GB
                    RAM/GeForce RTX 3050/Win 11)</a></div>
                <div class="review d-flex db-400">
                  <ul class="mb0 me-2">
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <div class="review_count"><a href="#">3,014 reviews</a></div>
                </div>
                <div class="si_footer">
                  <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
@endsection