@extends('admin.layouts.app')
@section('content')
<div class="dashboard__content bgc-gmart-gray">
    <div class="row pb20">
      <div class="col-lg-12">
        <div class="dashboard_title_area">
          <h2>Edit Product</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="dashboard_setting_box">
          <div class="ui_kit_tab style2">
            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Product Title</label>
                    <input class="form-control" type="text" placeholder="Product Title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="dashboard_page sidebar_location_filter">
                    <div class="form-group mb-3">
                      <label class="form-label">Choose Category</label>
                      <div class="checkout_country_form actegory">
                        <select class="selectpicker show-tick">
                          <option>Select</option>
                          <option value="Category 1">Category 1</option>
                          <option value="Category 2">Category 2</option>
                          <option value="Category 3">Category 3</option>
                          <option value="Category 4">Category 4</option>
                          <option value="Category 5">Category 5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Company Name*</label>
                    <input class="form-control" type="number" placeholder="Company Name*">
                  </div>
                </div> -->
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">SKU</label>
                    <input class="form-control" type="number" placeholder="SKU">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Tags</label>
                    <input class="form-control" type="text" placeholder="Tags">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Price</label>
                    <input class="form-control" type="number" placeholder="Price">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Discount Price</label>
                    <input class="form-control" type="number" placeholder="Discount Price">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Main Image</label>
                    <input class="form-control" style="height: max-content;" type="file">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Images</label>
                    <input class="form-control" style="height: max-content;" type="file">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Prodcut Url</label>
                    <input class="form-control" style="height: max-content;" type="url">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Quantity</label>
                    <input class="form-control" style="height: max-content;" type="number">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                    <label class="form-label">Prodcut Descriptions</label>
                    <textarea class="form-control" rows="4"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                    <label class="form-label">Product Information</label>
                    <textarea class="form-control" rows="4"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                    <label class="form-label">Term Of Use</label>
                    <textarea class="form-control" rows="4"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                    <label class="form-label">More about the product</label>
                    <textarea class="form-control" rows="4"></textarea>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group d-grid d-sm-flex mb0">
                    <button type="button" class="style2 btn btn-thm me-3 mb15-520">Update</button>
                    <button type="button" class="style2 btn btn-white">Cancel</button>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
