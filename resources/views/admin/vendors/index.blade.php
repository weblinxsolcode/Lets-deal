@extends('admin.layouts.app')

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
          <h2>Vendors</h2>
          <p class="para">Easily add, edit, or remove products from your inventory. Ensure accurate product
            information and images to attract customers and drive sales.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="dashboard_product_list account_user_deails">
          {{-- <!-- <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
              <div class="col-sm-6 col-lg-3">
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
              </div>
            <div class="col-sm-6 col-lg-3">
              <div class="dashboard_page_add_listing text-center text-lg-end mb30 mb15-520 d-grid">
                <a href="{{ route('admin.vendor.create') }}" class="btn btn-new btn-lg btn-thm">Add New Vendor</a>
              </div>
            </div>
          </div> --> --}}
          <div class="table-responsive">
            <table class="table table-bordered" id="Mytable">
              <thead class="table-light">
                <tr>
                  <th scope="col">S.no</th>
                  <th scope="col">Company logo</th>
                  <th scope="col">Contact Person</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">Website</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($vendors) > 0)
                @foreach ($vendors as $key => $vendor)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <th>
                    <img width="100px" src="{{ asset('images/' . $vendor->company_logo) }}" onerror="this.src='{{ asset('assets/images/image-placeholder.png') }}'" alt="Company Logo">
                  </th>
                  <th>{{ $vendor->contact_person }}</th>
                  <th>{{ $vendor->email }}</th>
                  <th>{{ $vendor->telephone }}</th>
                  <th>{{ $vendor->website_url }}</th>
                  <td>
                    @if ($vendor->status == '1')
                    <span class="badge badge-success">Approved</span>
                    @else
                    <span class="badge badge-warning">Pending</span>
                    @endif
                  </td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href="{{ route('admin.vendor.detail', $vendor->id) }}" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="View" data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-eye"
                            style="color:white"></i></a>
                      </li>
                    </ul>
                  </td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
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
