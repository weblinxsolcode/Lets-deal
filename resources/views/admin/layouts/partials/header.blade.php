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
                            <a href="{{ route('admin.dashboard') }}" class="logo">Admin<span class="text-thm">.</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xl-6 d-flex justify-content-md-end justify-content-xl-end">
                    <div class="text-center text-md-end text-lg-end header_right_widgets d-none d-md-block">
                        <img src="{{ asset('assets/images/resource/user.png') }}" alt="user.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>