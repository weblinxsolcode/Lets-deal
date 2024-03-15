<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords"
        content="auto parts, baby store, ecommerce, electronics, fashion, food, marketplace, modern, multi vendor, multipurpose, organic, responsive, shop, shopping, store">
    <meta name="description" content="Happicard - Multi-Vendor & Marketplace HTML Template">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Happicard - Admin | {{ @$title ?? '' }}</title>
</head>

<body data-spy="scroll">
    <section class="our-log-reg bgc-f5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xl-5 col-xxl-4 m-auto">
            <div class="log_reg_form mt70-992">
              <h2 class="title">Sign-In as Admin</h2>
              <div class="login_form">
                <form action="#">
                  <div class="mb-2 mr-sm-2">
                    <label class="form-label">Email Address</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Email Address">
                  </div>
                  <div class="form-group mb5">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Please Enter Your Password">
                  </div>
                    <a class="btn-fpswd float-end" href="javascript:void(0)">Forget your password?</a>
                  <!-- <button type="submit" class="btn btn-log btn-thm mt20">Login</button> -->
                  <a href="{{ route('admin.dashboard') }}" class="btn btn-log btn-thm mt20">Login</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>

</html>
