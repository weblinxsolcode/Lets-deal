@php
    $user = App\Models\User::find(session('user_id'));
@endphp
<div class="col-lg-3 col-xl-2 dn-md">
    <div class="users_account_details extra-dashboard-menu">
        <div class="account_details_user d-flex pb10 bb1 mb10">
            <img class="me-3" src="{{ asset('assets/images/team/ad-thumb.png') }}" alt="Generic placeholder image">
            <div class="content_details text-start">
                <h5 class="title">{{ $user->name }}</h5>
                <!-- <a class="stitle" href="javascript:void(0)">{{ $user->email }}</a> -->
            </div>
        </div>
        <div class="ed_menu_list">
            <ul>
                <li>
                    <a href="{{ route('website.user-dashboard.index') }}" 
                       @if(Route::is(['website.user-dashboard.index'])) 
                           style="color: #f5c34b; text-decoration: underline;" 
                       @endif>
                       <span class="fa fa-user"></span> Account Details
                    </a>
                </li>

                <li>
                    <a href="{{ route('website.user-order.index') }}" 
                       @if(Route::is(['website.user-order.index', 'website.user-order.detail'])) 
                           style="color: #f5c34b; text-decoration: underline;" 
                       @endif>
                       <span class="fa fa-shopping-bag"></span> Orders
                    </a>
                </li>

                <li><a href="{{ route('user.logout') }}"><span class="fa fa-right-from-bracket"></span>Logout</a></li>
            </ul>
        </div>
    </div>
</div>
