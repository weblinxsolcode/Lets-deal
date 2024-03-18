{{-- <header class="dashboard_header">
    <div class="header__container pt20 pb20 pl30 pr30">
        <div class="row justify-between items-center">
          <div class="col-sm-4 col-xl-2">
            <div class="text-center text-lg-start d-flex mb15-520">
              <div class="fz20 me-4">
                <a href="#" class="dashboard_sidebar_toggle_icon text-thm1 vam"><i
                    class="fa-sharp fa-solid fa-bars-staggered"></i></a>
              </div>
              <div class="dashboard_header_logo">
                <a href="{{ route('vendor.dashboard') }}" class="logo">Vendor<span class="text-thm">.</span></a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xl-3 d-none d-md-block">
            <!-- <div class="header_search_widget mb15-520">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username">
                <div class="input-group-append">
                  <button class="btn" type="button"><span class="fa fa-search"></span></button>
                </div>
              </div>
            </div> -->
          </div>
          <div class="col-sm-9  col-xl-6 offset-xl-1 d-none d-md-block">
            <div class="text-center text-lg-end header_right_widgets">
                <img src="{{ asset('assets/images/resource/user.png') }}" alt="user.png">
            </div>
          </div>
        </div>
    </div>
</header> --}}

<?php
$vendor = App\Models\Vendor::find(session('vendor_id'));
?>
<header class="dashboard_header">
    <div class="header__container pt-20 pb-20 pl-30 pr-30">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-4 col-xl-2">
                    <div class="text-center text-lg-start d-flex mb-15 mb-5-520">
                        <div class="fz-20 me-4">
                            <a href="#" class="dashboard_sidebar_toggle_icon text-thm1 vam">
                                <i class="fa-sharp fa-solid fa-bars-staggered"></i>
                            </a>
                        </div>
                        <div class="dashboard_header_logo">
                            <a href="{{ route('vendor.dashboard') }}" class="logo">Vendor<span class="text-thm">.</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xl-6 d-flex justify-content-md-end justify-content-xl-end">
                    <div class="text-center text-md-end text-lg-end header_right_widgets d-none d-md-block">
                        <!-- <img src="{{ asset('assets/images/resource/user.png') }}" alt="user.png"> -->
                        <img width="50px" src="{{ asset('images/' . @$vendor->profile_image) }}" onerror="this.src='{{ asset('assets/images/image-placeholder.png') }}'" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
