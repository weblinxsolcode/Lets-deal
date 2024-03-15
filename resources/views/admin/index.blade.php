@extends('admin.layouts.app')
@section('content')
<div class="dashboard__content bgc-gmart-gray">
	<div class="row pb50">
		<div class="col-lg-12">
		  <div class="dashboard_title_area">
		    <h2>Admin Dashboard</h2>
		    <p class="para">Get a comprehensive overview of your vendor activities, including sales performance, order statuses, and inventory insights. Monitor key metrics and take informed actions to optimize your business operations</p>
		  </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-xxl-3">
		  <div class="d-flex justify-content-between statistics_funfact align-items-center">
		    <div class="details">
		      <div class="subtitle1">Total Orders</div>
		      <div class="title">50k</div>
		  
		    </div>
		    <div class="icon text-center mt-4"><i class="fa fa-shopping-cart"></i></div>
		  </div>
		</div>
		<div class="col-lg-6 col-xxl-3">
		  <div class="d-flex justify-content-between statistics_funfact align-items-center">
		    <div class="details">
		      <div class="subtitle1">Pending orders</div>
		      <div class="title">66,894</div>
		     
		    </div>
		    <div class="icon text-center mt-4"><i class="fa fa-shopping-cart"></i></div>
		  </div>
		</div>
		<div class="col-lg-6 col-xxl-3">
		  <div class="d-flex justify-content-between statistics_funfact align-items-center">
		    <div class="details">
		      <div class="subtitle1">Complete order</div>
		      <div class="title">583.35M</div>
		    
		    </div>
		    <div class="icon text-center mt-4"><i class="fa fa fa-shopping-cart"></i></div>
		  </div>  
		</div>
		<div class="col-lg-6 col-xxl-3">
		  <div class="d-flex justify-content-between statistics_funfact align-items-center">
		    <div class="details">
		      <div class="subtitle1">Total Earnings</div>
		      <div class="title">$365.89k   </div>
		   
		    </div>
		    <div class="icon text-center mt-4"><i class="fa fa-dollar"></i></div>
		  </div>
		</div>
		<div class="col-lg-6 col-xxl-3">
		  <div class="d-flex justify-content-between statistics_funfact align-items-center">
		    <div class="details">
		      <div class="subtitle1"> Customers</div>
		      <div class="title">365k   </div>
		   
		    </div>
		    <div class="icon text-center mt-4"><i class="fa fa-user"></i></div>
		  </div>
		</div>
		<div class="col-lg-6 col-xxl-3">
		  <div class="d-flex justify-content-between statistics_funfact align-items-center">
		    <div class="details">
		      <div class="subtitle1"> Today order</div>
		      <div class="title">$369k   </div>
		   
		    </div>
		    <div class="icon text-center mt-4"><i class="fa  fa-shopping-cart"></i></div>
		  </div>
		</div>
		<div class="col-lg-6 col-xxl-3">
		  <div class="d-flex justify-content-between statistics_funfact align-items-center">
		    <div class="details">
		      <div class="subtitle1">   Week order</div>
		      <div class="title">300k   </div>
		   
		    </div>
		    <div class="icon text-center mt-4"><i class="fa  fa-shopping-cart"></i></div>
		  </div>
		</div>
		<div class="col-lg-6 col-xxl-3">
		  <div class="d-flex justify-content-between statistics_funfact align-items-center">
		    <div class="details">
		      <div class="subtitle1">Month Order</div>
		      <div class="title">4000k </div>
		   
		    </div>
		    <div class="icon text-center mt-4"><i class="fa fa-shopping-cart"></i></div>
		  </div>
		</div>
	</div>
</div>
@endsection
