@extends('vendor.layouts.app')
@section('content')
<div class="dashboard__content bgc-gmart-gray">
    <div class="row pb50">
      <div class="col-lg-12">
        <div class="dashboard_title_area">
          <h2>Products</h2>
          <p class="para">Easily add, edit, or remove products from your inventory. Ensure accurate product
            information and images to attract customers and drive sales.</p>
          <!-- Button trigger modal -->


          <!-- Modal -->


        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="dashboard_product_list account_user_deails">
          <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-sm-6 col-lg-6">
                  <div class="dashboard_page header_search_widget mb30 mb15-520">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search product"
                        aria-label="Recipient's username">
                      <div class="input-group-append">
                        <button class="btn" type="button"><span class="fa fa-search"></span></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                  <div class="dashboard_page sidebar_location_filter mb30 mb5-520">
                    <div class="form-group">
                      <div class="checkout_country_form actegory">
                        <select class="selectpicker show-tick">
                          <option>Select Category</option>
                          <option value="Computers">Computers</option>
                          <option value="Technologies">Technologies</option>
                          <option value="electronic">electronic</option>
                          <option value="Home&Kitchen">Home & Kitchen</option>
                          <option value="Clothing&Accessories">Clothing & Accessories</option>
                          <option value="Babies&Moms">Babies & Moms</option>
                          <option value="Health&Beauty">Health & Beauty</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-sm-6 col-lg-3">
                <div class="dashboard_page sidebar_location_filter mb30 mb5-520">
                  <div class="form-group">
                    <div class="checkout_country_form">
                      <select class="selectpicker show-tick">
                        <option>Status</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Cancel">Cancel</option>
                        <option value="InProgress">In Progress</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div> -->
            <div class="col-sm-6 col-lg-3">
              <div class="dashboard_page_add_listing text-center text-lg-end mb30 mb15-520 d-grid">
                <a href="{{ route('vendor.product.create') }}" class="btn btn-new btn-lg btn-thm">Add New Products</a>
              </div>
            </div>
          </div>
          <div class="order_table table-responsive">
            <table class="table table-bordered">
              <thead class="table-light">
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Categories</th>
                  <th scope="col">Quantiy</th>
                  <th scope="col">Price</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="pro-pic"><a href="product-detail.php"> <img src="{{ asset('assets/images/shop-items/shop-item5.png') }}"
                        alt=""></a></th>
                  <th scope="row">#1923</th>
                  <td><a href="product-detail.php">Apple MacBook Pro 16" (2021)</a></td>
                  <td>Computers,</td>
                  <td>9</td>
                  <td>$250</td>
                  <td class="status"><span class="style4">Stock</span></td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href="{{ route('vendor.product.edit') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Edit" data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-pencil"
                            style="color:white"></i></a>
                      </li>
                      <li class="list-inline-item mb-1 c-danger ">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href="{{ route('vendor.product.detail') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="View" data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-eye"
                            style="color:white"></i></a>
                      </li>
                    </ul>
                  </td>

                </tr>
                <tr>
                  <td class="pro-pic"> <img src="{{ asset('assets/images/shop-items/shop-item2.png') }}" alt=""></td>
                  <th scope="row">#1923</th>
                  <td><a href="product-detail.php">Apple MacBook Pro 16" (2021)</a></td>
                  <td>Computers,</td>
                  <td>0</td>
                  <td>$250</td>
                  <td class="status"><span class="style2">Out Stock</span></td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                          data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-pencil"
                            style="color:white"></i></a>
                      </li>
                      <li class="list-inline-item mb-1 c-danger ">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href=product-detail.php target="_blank" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="View" data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-eye"
                            style="color:white"></i></a>
                      </li>
                    </ul>
                  </td>

                </tr>

                <tr>
                  <th class="pro-pic"><a href="product-detail.php"> <img src="{{ asset('assets/images/shop-items/shop-item5.png') }}"
                        alt=""></a></th>
                  <th scope="row">#1923</th>
                  <td><a href="product-detail.php">Apple MacBook Pro 16" (2021)</a></td>
                  <td>Computers,</td>
                  <td>9</td>
                  <td>$250</td>
                  <td class="status"><span class="style4">Stock</span></td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                          data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-pencil"
                            style="color:white"></i></a>
                      </li>
                      <li class="list-inline-item mb-1 c-danger ">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href=product-detail.php target="_blank" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="View" data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-eye"
                            style="color:white"></i></a>
                      </li>
                    </ul>
                  </td>

                </tr>
                <tr>
                  <td class="pro-pic"> <img src="{{ asset('assets/images/shop-items/shop-item2.png') }}" alt=""></td>
                  <th scope="row">#1923</th>
                  <td><a href="product-detail.php">Apple MacBook Pro 16" (2021)</a></td>
                  <td>Computers,</td>
                  <td>0</td>
                  <td>$250</td>
                  <td class="status"><span class="style2">Out Stock</span></td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                          data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-pencil"
                            style="color:white"></i></a>
                      </li>
                      <li class="list-inline-item mb-1 c-danger ">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href=product-detail.php target="_blank" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="View" data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-eye"
                            style="color:white"></i></a>
                      </li>
                    </ul>
                  </td>

                </tr>
                <tr>
                  <th class="pro-pic"><a href="product-detail.php"> <img src="{{ asset('assets/images/shop-items/shop-item5.png') }}"
                        alt=""></a></th>
                  <th scope="row">#1923</th>
                  <td><a href="product-detail.php">Apple MacBook Pro 16" (2021)</a></td>
                  <td>Computers,</td>
                  <td>9</td>
                  <td>$250</td>
                  <td class="status"><span class="style4">Stock</span></td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                          data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-pencil"
                            style="color:white"></i></a>
                      </li>
                      <li class="list-inline-item mb-1 c-danger ">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href=product-detail.php target="_blank" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="View" data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-eye"
                            style="color:white"></i></a>
                      </li>
                    </ul>
                  </td>

                </tr>
                <tr>
                  <td class="pro-pic"> <img src="{{ asset('assets/images/shop-items/shop-item2.png') }}" alt=""></td>
                  <th scope="row">#1923</th>
                  <td><a href="product-detail.php">Apple MacBook Pro 16" (2021)</a></td>
                  <td>Computers,</td>
                  <td>0</td>
                  <td>$250</td>
                  <td class="status"><span class="style2">Out Stock</span></td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                          data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-pencil"
                            style="color:white"></i></a>
                      </li>
                      <li class="list-inline-item mb-1 c-danger ">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href=product-detail.php target="_blank" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="View" data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-eye"
                            style="color:white"></i></a>
                      </li>
                    </ul>
                  </td>

                </tr>
              </tbody>
            </table>
          </div>
          <div class="mbp_pagination mt30 text-center">
            <ul class="page_navigation">
              <li class="page-item">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                    class="fas fa-angle-left"></span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
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

<div class="modal fade c-fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this Product?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>
@endsection
