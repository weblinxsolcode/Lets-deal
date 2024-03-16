<div class="dashboard__sidebar">
  <div class="dashboard_sidebar_list">
    <div class="sidebar_list_item" >
      <a class="{{ Route::is('admin.dashboard') ? '-is-active' : '' }}" href="{{ route('admin.dashboard') }}" class="items-center" ><i class="fa fa-house mr15"></i>Dashboard</a>
    </div>
    <!-- <div class="sidebar_list_item ">
      <a href="{{ route('vendor.order.index') }}" class="items-center"><i class="fa fa-shopping-cart mr15"></i>Order</a>
    </div> -->
    <div class="sidebar_list_item ">
      <a class="{{ Route::is(['admin.vendor.index', 'admin.vendor.detail']) ? '-is-active' : '' }}" href="{{ route('admin.vendor.index') }}" class="items-center"><i class="fa fa-filter mr15"></i>Vendors</a>
    </div>

    <div class="sidebar_list_item ">
      <a class="{{ Route::is('admin.category.index') ? '-is-active' : '' }}" href="{{ route('admin.category.index') }}" class="items-center"><i class="fa fa-filter mr15"></i>Categories</a>
    </div>

    <!-- <div class="sidebar_list_item ">
      <a href="vendor-customer.php" class="items-center"><i class="fa fa-user mr15"></i>Customer</a>
    </div> -->
    <!-- <div class="sidebar_list_item ">
      <a href="page-dashboard-message.html" class="items-center"><i class="fa fa-envelope mr15"></i>Message</a>
    </div> -->
    {{-- <div class="sidebar_list_item ">
      <a class="{{ Route::is('admin.setting.edit') ? '-is-active' : '' }}" href="{{ route('admin.setting.edit') }}" class="items-center"><i class="fa fa-gear mr15"></i>Settings</a>
    </div> --}}
    <div class="sidebar_list_item ">
      <a href="{{ route('admin.logout') }}" class="items-center"><i class="fa fa-right-from-bracket mr15"></i>Logout</a>
    </div>
  </div>
</div>
