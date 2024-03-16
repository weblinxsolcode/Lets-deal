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
        <h2>{{ @$title }}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="dashboard_product_list account_user_deails">
          <div class="row">
              <div class="col-12 text-end">
                  <button type="button" class="btn btn-order btn-thm" data-bs-toggle="modal" data-bs-target="#createCategory">
                      Add New Category
                  </button>
              </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="Mytable">
              <thead class="table-light">
                <tr>
                  <th scope="col">S.no</th>
                  <th scope="col">Title</th>
                  <th scope="col">Status</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($categories) > 0)
                @foreach ($categories as $key => $category)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $category->title }}</td>
                  <td>
                    @if ($category->status == '1')
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">In Active</span>
                    @endif
                  </td>
                  <td>{{ $category->created_at->format('d-M-Y') }}</td>
                  <td class="editing_list align-middle">
                    <ul>
                      <li class="list-inline-item mb-1 c-btn-color">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editCategory{{$key+1}}">
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

                <!-- Edit Modal -->
                <div class="modal fade c-fade" id="editCategory{{$key+1}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                  aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                        @csrf
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Edit Category</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <div class="row">
                            <div class="col-lg-12">
                              <div class="mb-3">
                                <label for="category-name" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" id="#category-name" name="title" value="{{ $category->title }}">
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="mb-3">
                                <label for="category-url" class="col-form-label">Status:</label>
                                <select name="status" class="form-control">
                                  <option {{ $category->status == '1' ? 'selected' : '' }} value="1">Active</option>
                                  <option {{ $category->status == '0' ? 'selected' : '' }} value="0">In Active</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- Delete Modal -->
                <div class="modal fade c-fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
                  role="dialog">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this category? Deleting this category will also remove its associated products.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="{{ route('admin.category.delete', $category->id) }}" class="btn btn-danger">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade c-fade" id="createCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="mb-3">
                <label for="category-name" class="col-form-label">Title:</label>
                <input type="text" class="form-control" id="#category-name" placeholder="Title" name="title" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Create Category</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
