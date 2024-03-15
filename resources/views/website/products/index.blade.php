@extends('website.layouts.app')
@section('content')
<section class="our-listing pt0">
  <div class="container">
    <div class="row mt60">
      <div class="col-lg-12 col-xl-12 pl50 pl15-md">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-title bb1 pb10">
              <h2 class="title">Products</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 d-none">
            <div class="filter_components">
              <ul class="mb0 align-items-center text-center text-lg-start">
                <li class="list-inline-item me-2 mb-3">
                  <p class="pagination_page_count">Showing 1–20 of 175 results</p>
                </li>
                <li class="list-inline-item me-2 list mb-3 pl10"><a href="#">20</a></li>
                <li class="list-inline-item me-2 list mb-3 pl10"><a href="#">40</a></li>
                <li class="list-inline-item me-2 list mb-3 pl10"><a href="#">60</a></li>
                <li class="list-inline-item me-2 list mb-3 pl10"><a href="#">All</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 d-none">
            <div class="filter_components text-center text-lg-end ">
              <ul class="mb-2 mb-md-0">
                <li class="list-inline-item d-lg-none me-2 mb-3"><a class="all-filter-btn flter_btn" href="#"><span
                      class="flaticon-sort me-2"></span>All Filter</a></li>
                <li class="list-inline-item me-0">
                  <div class="page_control_shorting mb20 text-center text-md-end">
                    <select class="selectpicker show-tick">
                      <option>Default sorting</option>
                      <option>Best Seller</option>
                      <option>Best Match</option>
                      <option>Price Low</option>
                      <option>Price High</option>
                    </select>
                  </div>
                </li>
                <li class="d-none d-lg-inline-block list px-2"><a href="#">List</a></li>
                <li class="d-none d-lg-inline-block gird ps-2"><a href="#">Grid</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item1.png') }}" alt="Shop Item1">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">SAMSUNG</div>
                  <div class="title"><a href="{{ route('website.product.detail') }}">Acer Aspire 5 15.6" Laptop - Silver (Intel Core
                      i7-1165G7/512GB SSD/12GB RAM/Windows 11)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item2.png') }}" alt="Shop Item2">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="product-detail.php">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core
                      i5-10300H/512GB SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item3.png') }}" alt="Shop Item3">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">Eastsport</div>
                  <div class="title"><a href="product-detail.php">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core
                      i5-10300H/512GB SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item4.png') }}" alt="Shop Item4">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">Rolex</div>
                  <div class="title"><a href="product-detail.php">Apple MacBook Air 13.3" w/ Touch ID (Fall 2020) -
                      Space Grey (Apple M1 Chip / 256GB SSD / 8GB RAM) - En</a></div>
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
                    <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item10.png') }}" alt="Shop Item10">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">SAMSUNG</div>
                  <div class="title"><a href="product-detail.php">Acer Aspire 5 15.6" Laptop - Silver (Intel Core
                      i7-1165G7/512GB SSD/12GB RAM/Windows 11)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item4.png') }}" alt="Shop Item4">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="product-detail.php">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core
                      i5-10300H/512GB SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item8.png') }}" alt="Shop Item8">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">Eastsport</div>
                  <div class="title"><a href="product-detail.php">Acer Nitro 5 15.6" Gaming Laptop - Black (Intel Core
                      i5-10300H/512GB SSD/12GB RAM/GTX 1650/Windows 11)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item8.png') }}" alt="Shop Item8">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">Rolex</div>
                  <div class="title"><a href="product-detail.php">Apple MacBook Air 13.3" w/ Touch ID (Fall 2020) -
                      Space Grey (Apple M1 Chip / 256GB SSD / 8GB RAM) - En</a></div>
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
                    <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item11.png') }}" alt="Shop Item11">
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item12.png') }}" alt="Shop Item12">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">rolex</div>
                  <div class="title"><a href="product-detail.php">Apple MacBook Pro 13.3" Retina (Intel Core i5 2.7 GHz
                      / 8GB RAM / 128GB SSD) 2015 - Model MF839LL/A* w/ Apple Original Charger - Certified
                      Refurbished</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item11.png') }}" alt="Shop Item11">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="product-detail.php">Apple MacBook Air 13.3" w/ Touch ID (2020) - Space
                      Grey (Intel Core i3 1.1GHz/256GB SSD/8GB RAM) -En - Certified Refurbished</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item15.png') }}" alt="Shop Item15">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="product-detail.php">Dell Inspiron 3000 15.6" Touchscreen Laptop - Black
                      (Intel Core i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item5.png') }}" alt="Shop Item14">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">Eastsport</div>
                  <div class="title"><a href="product-detail.php">LG Gram 17" Laptop -Obsidian Black (Intel Evo Core
                      i7-1165G7/1TB SSD/16GB RAM) -En -Only at Best Buy</a></div>
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
                    <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item16.png') }}" alt="Shop Item13">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">rolex</div>
                  <div class="title"><a href="product-detail.php">HP 15.6" Touchscreen Laptop - Natural Silver (AMD
                      Ryzen 5 5625U/1TB SSD/12GB RAM/Windows 11)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item12.png') }}" alt="Shop Item18">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">Eastsport</div>
                  <div class="title"><a href="product-detail.php">HP 17.3" Laptop - Natural Silver (Intel Core
                      i5-1135G7/1TB HDD/256GB SSD/16GB RAM/Windows 10)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item11.png') }}" alt="Shop Item1">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">rolex</div>
                  <div class="title"><a href="product-detail.php">Dell XPS 13 13.4" Touchscreen Laptop - Silver (Intel
                      Evo i7-1195G7/512GB SSD/16GB RAM/Win 11 Pro)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item17.png') }}" alt="Shop Item17">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="product-detail.php">Samsung Galaxy Book 15.6" Laptop - Silver (Intel Core
                      i5-1135G7/256GB SSD/8GB RAM/Windows 11)</a></div>
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
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item14.png') }}" alt="Shop Item14">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">SONY</div>
                  <div class="title"><a href="product-detail.php">ASUS VivoBook 15 X515 15.6" Laptop - Grey (Intel
                      Pentium Silver N5030/256GB SSD/8GB RAM/Windows 11)</a></div>
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
                    <div class="price">NOK 18.124 <small><del>NOK 45</del></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" col-lg-12 col-sm-6 col-lg-4 col-xl-3 p-0">
              <div class="shop_item bdr1 m--1">
                <div class="thumb pb30">
                  <img class="w100" src="{{ asset('assets/images/shop-items/shop-item13.png') }}" alt="Shop Item16">
                  <div class="thumb_info">
                    <ul class="mb0">
                      <li><a href="javascript:void(0)"><span class="flaticon-heart"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-show"></span></a></li>
                      <li><a href="javascript:void(0)"><span class="flaticon-graph"></span></a></li>
                    </ul>
                  </div>

                </div>
                <div class="details">
                  <div class="sub_title">rolex</div>
                  <div class="title"><a href="product-detail.php">HP ENVY 13.3" Laptop - Natural Silver (Intel Evo
                      i5-1135G7/512GB SSD/8GB RAM/Windows 10)</a></div>
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
          <div class="row">
            <div class="col-lg-12">
              <div class="mbp_pagination mt30 text-center">
                <ul class="page_navigation">
                  <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                        class="fas fa-angle-left"></span></a>
                  </li>
                  <li class="page-item ctive"><a class="page-link" href="#">1</a></li>
                  <li class="page-item a" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">...</a></li>
                  <li class="page-item"><a class="page-link" href="#">20</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
                  </li>
                </ul>
                <p class="mt20 pagination_page_count text-center">1 – 20 of 300+ properties found</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
