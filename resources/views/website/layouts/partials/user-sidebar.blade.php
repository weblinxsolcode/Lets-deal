<div class="col-lg-3 col-xl-2 dn-md">
    <div class="users_account_details extra-dashboard-menu">
        <div class="account_details_user d-flex pb10 bb1 mb10">
            <img class="me-3" src="{{ asset('assets/images/team/ad-thumb.png') }}" alt="Generic placeholder image">
            <div class="content_details text-start">
                <h5 class="title">Ali Tufan</h5>
                <a class="stitle" href="mailto:alitfn58@gmail.com">alitfn58@gmail.com</a>
            </div>
        </div>
        <div class="ed_menu_list">
            <ul>
                <li><a href="my-account.php"><span class="fa fa-user"></span>Account Details</a></li>
                <li><a class="active" href="user-order.php"><span class="fa fa-shopping-bag"></span>Order</a>
                </li>
                <li><a href="user-address.php"><span class="fa fa-location-dot"></span>Address</a></li>
                <li><a href="{{ route('user.logout') }}"><span class="fa fa-right-from-bracket"></span>Logout</a></li>
            </ul>
        </div>
    </div>
</div>
