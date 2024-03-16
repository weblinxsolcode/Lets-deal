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
        <h2>{{ @$title }}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="dashboard_product_list account_user_deails">
          <div class="row">
              <div class="col-12 text-end">
                  <a href="{{ route('vendor.product.create') }}" class="btn btn-order btn-thm">
                      Add New Product
                  </a>
              </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="Mytable">
              <thead class="table-light">
                <tr>
                  <th scope="col">S.no</th>
                  <th scope="col">Main Image</th>
                  <th scope="col">Title</th>
                  <th scope="col">Category</th>
                  <th scope="col">Quantiy</th>
                  <th scope="col">Price</th>
                  <th scope="col">Discount Price</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($products) > 0)
                @foreach ($products as $key => $product)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>
                    <img width="100px" src="{{ asset('images/' . $product->main_image) }}" onerror="this.src='{{ asset('assets/images/image-placeholder.png') }}'" alt="Image">
                  </td>
                  <td>{{ $product->title }}</td>
                  <td>{{ @$product->category->title ?? '-' }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>${{ $product->price }}</td>
                  <td>${{ $product->discount_price }}</td>
                  <td>
                    @if ($product->status == '1')
                    <span class="badge badge-success">Approved</span>
                    @else
                    <span class="badge badge-warning">Pending</span>
                    @endif
                  </td>
                  <td class="editing_list align-middle">
                    <ul>
                      <!-- <li class="list-inline-item mb-1 c-btn-color ">
                        <a href="{{ route('vendor.product.edit') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Edit" data-bs-original-title="View" aria-label="View"><i class="fa-solid fa-pencil"
                            style="color:white"></i></a>
                      </li>
                      <li class="list-inline-item mb-1 c-danger ">
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fa-solid fa-trash" style="color:white"></i>
                        </button>
                      </li>
 -->                      <li class="list-inline-item mb-1 c-btn-color ">
                        <a href="{{ route('vendor.product.detail', $product->id) }}" data-bs-toggle="tooltip" data-bs-placement="top"
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
