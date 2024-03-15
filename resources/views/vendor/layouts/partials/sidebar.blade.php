<div class="dashboard__sidebar">
  <div class="dashboard_sidebar_list">
    <div class="sidebar_list_item" >
      <a class="{{ Route::is('vendor.dashboard') ? '-is-active' : '' }}" href="{{ route('vendor.dashboard') }}" class="items-center" ><i class="fa fa-house mr15"></i>Dashboard</a>
    </div>
    <!-- <div class="sidebar_list_item ">
      <a href="{{ route('vendor.order.index') }}" class="items-center"><i class="fa fa-shopping-cart mr15"></i>Order</a>
    </div> -->
    <div class="sidebar_list_item ">
      <a class="{{ Route::is(['vendor.product.index', 'vendor.product.create', 'vendor.product.edit', 'vendor.product.detail']) ? '-is-active' : '' }}" href="{{ route('vendor.product.index') }}" class="items-center"><i class="fa fa-bars mr15"></i>Products</a>
    </div>

    <!-- <div class="sidebar_list_item ">
      <a href="vendor-customer.php" class="items-center"><i class="fa fa-user mr15"></i>Customer</a>
    </div> -->
    <div class="sidebar_list_item ">
      <a class="{{ Route::is('vendor.category.index') ? '-is-active' : '' }}" href="{{ route('vendor.category.index') }}" class="items-center"><i class="fa fa-filter mr15"></i>Categories</a>
    </div>
    <!-- <div class="sidebar_list_item ">
      <a href="page-dashboard-message.html" class="items-center"><i class="fa fa-envelope mr15"></i>Message</a>
    </div> -->
    <div class="sidebar_list_item ">
      <a class="{{ Route::is('vendor.setting.edit') ? '-is-active' : '' }}" href="{{ route('vendor.setting.edit') }}" class="items-center"><i class="fa fa-gear mr15"></i>Settings</a>
    </div>
    <div class="sidebar_list_item ">
      <a href="{{ route('vendor.logout') }}" class="items-center"><i class="fa fa-right-from-bracket mr15"></i>Logout</a>
    </div>
  </div>
</div>
