@extends('vendor.layouts.app')

@section('css')
<!-- include summernote css -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="dashboard__content bgc-gmart-gray">
    <div class="row pb20">
      <div class="col-lg-12">
        <div class="dashboard_title_area">
          <h2>New Product</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="dashboard_setting_box">
          <div class="ui_kit_tab style2">
            <form class="contact_form" name="contact_form" action="{{ route('vendor.product.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Title</label>
                    <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Title" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="dashboard_page sidebar_location_filter">
                    <div class="form-group mb-3">
                      <label class="form-label">Choose Category</label>
                      <div class="checkout_country_form actegory">
                        <select name="category_id" required class="selectpicker show-tick">
                          <option value="" disabled selected>PLease Select Category</option>
                          @foreach ($categories as $category)
                          <option {{ (old('category_id') == $category->id ? 'selected' : '') }} value="{{ $category->id }}">{{ $category->title }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Price</label>
                    <input class="form-control" type="number" min="1" value="{{ old('price') }}" name="price" placeholder="Price" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Discount Price</label>
                    <input class="form-control" type="number" min="1" value="{{ old('discount_price') }}" placeholder="Discount Price" name="discount_price" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Main Image</label>
                    <input class="form-control" style="height: max-content;" type="file" required name="main_image">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Additional Images (Up to 3)</label>
                    <input class="form-control" style="height: max-content;" type="file" required multiple name="additional_images[]">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Prodcut Url</label>
                    <input class="form-control" style="height: max-content;" type="url" value="{{ old('product_url') }}" name="product_url" required placeholder="https://">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">Quantity</label>
                    <input class="form-control" style="height: max-content;" type="number" value="{{ old('quantity') }}" min="1" name="quantity" required placeholder="quantity">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                    <label class="form-label">Product Description</label>
                    <textarea class="form-control" rows="4" name="product_description" required placeholder="Product Description">{{ old('product_description') }}</textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                    <label class="form-label">Product Information</label>
                    <textarea class="form-control summernote" rows="8" name="product_information" required placeholder="Product Information">{{ old('product_information') }}</textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                    <label class="form-label">Term Of Use</label>
                    <textarea class="form-control summernote" rows="8" name="terms_of_use" required placeholder="Terms Of Use">{{ old('terms_of_use') }}</textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                    <label class="form-label">More about the product</label>
                    <textarea class="form-control summernote" rows="8" name="more_about_the_product" required placeholder="More About The Product">{{ old('more_about_the_product') }}</textarea>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group d-grid d-sm-flex mb0">
                    <button type="submit" class="style2 btn btn-thm me-3 mb15-520">Create</button>
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

@section('js')
<!-- include summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.summernote').summernote({
      height: 200,
    });
  });
</script>
@endsection
