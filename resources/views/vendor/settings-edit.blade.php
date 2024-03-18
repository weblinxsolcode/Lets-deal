@extends('vendor.layouts.app')
@section('content')
<div class="dashboard__content bgc-gmart-gray">
    <div class="row pb50">
      <div class="col-lg-12">
        <div class="dashboard_title_area">
          <h2>Settings</h2>
          <p class="para">Customize your vendor dashboard settings to tailor the platform to your specific needs.
            Update your profile information, adjust notification preferences, and configure other account settings.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="dashboard_setting_box">
          <div class="ui_kit_tab style2">
            <!-- nav tab Nav List Start -->
            <ul class="nav nav-tabs mb15" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="editprofile-tab" data-bs-toggle="tab"
                  data-bs-target="#editprofile" type="button" role="tab" aria-controls="editprofile"
                  aria-selected="true">Edit Profile</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="socialprofile-tab" data-bs-toggle="tab" data-bs-target="#socialprofile"
                  type="button" role="tab" aria-controls="socialprofile" aria-selected="false">Social
                  Profiles</button>
              </li>
            </ul>
            <!-- nav tab Nav List End -->
            <!-- nav tab contents Start -->
            <div class="tab-content pt20 row" id="myTabContent">
              <div class="tab-pane fade show active col-md-12" id="editprofile" role="tabpanel" aria-labelledby="editprofile-tab">
                <div class="account_details_page form_grid">
                  <form action="{{ route('vendor.setting.update-profile', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group mb-4">
                          <label class="form-label">Name</label>
                          <input class="form-control" name="name" required value="{{ $data->contact_person }}" type="text" placeholder="Enter your name">
                        </div>
                      </div>

                      <input type="hidden" value="update_profile" name="type">

                      <div class="col-md-6">
                        <div class="form-group mb-4">
                          <label class="form-label">Email</label>
                          <input class="form-control" type="email" readonly value="{{ $data->email }}">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group mb-4">
                          <label class="form-label">Profile Image (Optional)</label>
                          <input style="border: none" class="form-control" name="profile_image" type="file">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group mb-4">
                          <label class="form-label">New password (Optional)</label>
                          <input class="form-control" type="password" name="password" placeholder="Enter your new password.">
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group d-grid d-sm-flex mb0">
                          <button type="submit" class="style2 btn btn-thm me-3 mb15-520">Update Profile</button>
                          <button type="button" class="style2 btn btn-white">Cancel</button>
                        </div>
                      </div>

                    </div>
                  </form>
                </div>
              </div>
              <div class="tab-pane fade col-xl-8" id="socialprofile" role="tabpanel"
                aria-labelledby="socialprofile-tab">
                <div class="account_details_page form_grid">
                  <form action="{{ route('vendor.setting.update-profile', $data->id) }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group mb-4">
                          <label class="form-label">Facebook</label>
                          <input class="form-control" value="{{ $data->facebook_link }}" name="facebook_link" type="url" placeholder="Facebook Link">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mb-4">
                          <label class="form-label">Twitter</label>
                          <input class="form-control" value="{{ $data->twitter_link }}" name="twitter_link" type="url" placeholder="Twitter Link">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mb-4">
                          <label class="form-label">Intagram</label>
                          <input class="form-control" value="{{ $data->instagram_link }}" name="instagram_link" type="url" placeholder="Intagram Link">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mb30">
                          <label class="form-label">Linkedin</label>
                          <input class="form-control" value="{{ $data->linkedin_link }}" name="linkedin_link" type="url" placeholder="Linkedin Link">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group d-grid d-sm-flex mb0">
                          <button type="submit" class="style2 btn btn-thm me-3 mb15-520">Update Social
                            Links</button>
                          <button type="button" class="style2 btn btn-white">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- nav tab contents End -->
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection
