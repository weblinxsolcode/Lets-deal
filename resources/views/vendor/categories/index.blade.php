@extends('vendor.layouts.app')

@section('css')
<style type="text/css">
  .current {
    background-color: #f5c34b !important;
    border: 1px solid #f5c34b !important;
    border-radius: 100% !important;
  }
  .dt-paging-button {
    border: 1px solid #eaeaea !important;
    border-radius: 100% !important;
  }
</style>
@endsection

@section('content')
<div class="dashboard__content bgc-gmart-gray">
    <div class="row pb50">
      <div class="col-lg-12">
        <div class="dashboard_title_area">
          <h2>Categories</h2>
          <p class="para">Organize your products into categories to make browsing easier for customers. Create,
            edit, or delete categories to ensure your inventory is well-structured and easily navigable.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="dashboard_product_list account_user_deails">
          <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
           <!--  <div class="col-sm-6 col-lg-4">
              <div class="dashboard_page header_search_widget mb30 mb15-520">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search categories"
                    aria-label="Recipient's username">
                  <div class="input-group-append">
                    <button class="btn" type="button"><span class="fa fa-search"></span></button>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-sm-12">
              <div class="dashboard_page_add_listing text-center text-sm-end mb30 mb15-520">
                <button type="button" class="btn btn-order btn-lg btn-thm" data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop">
                  Add New
                </button>
              </div>
            </div>
          </div>
          <div class="order_table table-responsive">
            <table class="table" id="Mytable">
              <thead class="table-light">
                <tr>
                  <th scope="col">Category name</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col">Category url</th>
                  <th scope="col">Created at</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Home & Kitchen</td>
                  <td></td>
                  <td></td>
                  <td>home-kitchen</td>
                  <td>Aug 15, 2022</td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#edit-cat">
                          <i class="fa-solid fa-pencil" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-danger">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#delete">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>

                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>Furniture</td>
                  <td></td>
                  <td></td>
                  <td>furniture</td>
                  <td>Aug 15, 2022</td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#edit-cat">
                          <i class="fa-solid fa-pencil" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-danger">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#delete">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>

                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>Electronics</td>
                  <td></td>
                  <td></td>
                  <td>electronics</td>
                  <td>Aug 15, 2022</td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#edit-cat">
                          <i class="fa-solid fa-pencil" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-danger">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#delete">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>

                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>Clothing & Accessories</td>
                  <td></td>
                  <td></td>
                  <td>clothing-accessories</td>
                  <td>Aug 15, 2022</td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#edit-cat">
                          <i class="fa-solid fa-pencil" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-danger">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#delete">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>

                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>Grocery & Market</td>
                  <td></td>
                  <td></td>
                  <td>grocery-market</td>
                  <td>Aug 15, 2022</td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#edit-cat">
                          <i class="fa-solid fa-pencil" style="color:white"></i>
                        </button>
                      </li>
                      <li class="list-inline-item mb-1 c-danger">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#delete">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
 </div>

<!-- Modal -->
<div class="modal fade c-fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add New</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="category-name" class="col-form-label">Category Name:</label>
              <input type="text" class="form-control" id="#category-name">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="category-url" class="col-form-label">Category url:</label>
              <input type="url" class="form-control" id="#category-url">
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade c-fade" id="edit-cat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="category-name" class="col-form-label">Category Name:</label>
              <input type="text" class="form-control" id="#category-name">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="category-url" class="col-form-label">Category url:</label>
              <input type="url" class="form-control" id="#category-url">
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade c-fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
  role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this Category?</h5>
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
