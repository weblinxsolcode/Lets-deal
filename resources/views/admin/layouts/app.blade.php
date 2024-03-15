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
    <link rel="stylesheet" href="{{ asset('assets/css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Happicard - Admin | {{ @$title ?? '' }}</title>
    <link href="{{ asset('assets/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('assets/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon">
    <link href="{{ asset('assets/images/apple-touch-icon-60x60.png') }}" sizes="60x60" rel="apple-touch-icon">
    <link href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}" sizes="72x72" rel="apple-touch-icon">
    <link href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}" sizes="114x114" rel="apple-touch-icon">
    <link href="{{ asset('assets/images/apple-touch-icon-180x180.png') }}" sizes="180x180" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('css')
</head>

<body data-spy="scroll">
    <div class="wrapper">
        @include('admin.layouts.partials.header')

        <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper pr30 pr0-md">
                @include('admin.layouts.partials.sidebar')
              <div class="dashboard__main pl0-md">
                @yield('content')
                @include('admin.layouts.partials.footer')
                
              </div>
            </div>
        </div>
        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
    </div>
</body>

<script src="{{ asset('assets/js/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/chart.min.js') }}"></script>
<script src="{{ asset('assets/js/chart-custome.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>
<script src="{{ asset('assets/js/ace-responsive-menu.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/slider.js') }}"></script> 
<script src="{{ asset('assets/js/dashboard-script.js') }}"></script>
<!-- Custom script for all pages --> 
<script src="{{ asset('js/script.js') }}"></script>
<!-- Datatable -->
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
      // Pie chart
      new Chart(document.getElementById("chartjs-dashboard-pie"), {
        type: "pie",
        data: {
          labels: ["Direct", "Affiliate", "E-mail", "Other"],
          datasets: [{
            data: [2602, 1253, 541, 1465],
            backgroundColor: [
              window.theme.primary,
              window.theme.warning,
              window.theme.danger,
              "#E8EAED"
            ],
            borderWidth: 5,
            borderColor: window.theme.white
          }]
        },
        options: {
          responsive: !window.MSInputMethodContext,
          maintainAspectRatio: false,
          cutoutPercentage: 70,
          legend: {
            display: false
          }
        }
      });
    });
</script>
<script type="text/javascript">
  let table = new DataTable('#Mytable');
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@include('toastr')

</html>
