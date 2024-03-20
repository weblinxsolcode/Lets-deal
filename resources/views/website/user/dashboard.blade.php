@extends('website.layouts.app')
@section('content')
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
            @include('website.user.sidebar')
            <div class="col-lg-9 col-xl-9">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="dashboard_navigationbar dn db-md mt50">
                      <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn"><i class="fas fa-bars pr10"></i> Dashboard
                          Navigation</button>
                        <ul id="myDropdown" class="dropdown-content">
                          <li><a class="active" href="page-account-details.html"><span class="fa fa-user"></span>Account
                              Details</a></li>
                          <li><a href="page-account-order.html"><span class="fa fa-shopping-bag"></span>Order</a></li>
                          <li><a href="page-account-address.html"><span class="fa fa-location"></span>Address</a></li>
                          <li><a href="page-account-invoice.html"><span class="fa fa-history"></span>Order History</a></li>
                          <li><a href="page-login.html"><span class="fa fa-long-arrow-alt-down"></span>Logout</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-12">
                    <div class="account_user_deails pl40 pl0-md">
                      <h2 class="title mb30 ">Account Details</h2>
                      <div class="ui_kit_tab style2">
                        <!-- nav tab contents Start -->
                        <div class="row">
                          <div class="col-xl-12">
                            <div class="account_user_deails">
                              <div class="row">
                                <div class="col-lg-12 border-bottom border-top py-3">
                                  <div class="dboard_address mb30-md">
                                    <p class="fw-bold">Name</p>
                                    <p>Ali Tufan</p>
                                    <p class="fw-bold">Username</p>
                                    <p>alidt123651</p>
                                    <p class="fw-bold">Email address</p>
                                    <p>example@gmail.com</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 d-flex justify-content-between align-items-center">
                            <div class="form-group d-flex mt-4">
                              <div class="form-group d-flex mb0">
                                <button type="button" class="btn btn-thm me-3" data-bs-target="#forgetModal"
                                  data-bs-toggle="modal">Forget Password</button>
                                <button type="button" class="btn btn-thm me-3" data-bs-target="#AccountModal"
                                  data-bs-toggle="modal">Update</button>
                              </div>
                            </div>
                            <div class="form-group d-flex mt-4">

                              <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete My
                                Account</button>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="forgetModal" tabindex="-1" aria-labelledby="forgetModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="forgetModalLabel">Forget Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group mb-4">
                                        <label class="form-label">Current Password</label>
                                        <input class="form-control" type="text" placeholder="Current Password">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group mb-4">
                                        <label class="form-label">New Password</label>
                                        <input class="form-control" type="text" placeholder="New Password">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group mb-4">
                                        <label class="form-label">Repeat New Password</label>
                                        <input class="form-control" type="text" placeholder="Repeat New Password">
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-thm">Update Password</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="AccountModal" tabindex="-1" aria-labelledby="AccountModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="AccountModalLabel">Account Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">

                                <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group mb-4">
                                        <label class="form-label">First Name</label>
                                        <input class="form-control" type="text" placeholder="Your Name">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group mb-4">
                                        <label class="form-label">Last Name</label>
                                        <input class="form-control" type="text" placeholder="Your Name">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group mb-4">
                                        <label class="form-label">Email</label>
                                        <input class="form-control email" type="email" placeholder="Your Email">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group mb-4">
                                        <label class="form-label">Phone Number</label>
                                        <input class="form-control" type="number" placeholder="Phone Number">
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-thm">Update Changes</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- nav tab contents End -->
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
