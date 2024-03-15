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
    <title>Let's Deal</title>
    <link href="{{ asset('assets/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('assets/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon">
    <link href="{{ asset('assets/images/apple-touch-icon-60x60.png') }}" sizes="60x60" rel="apple-touch-icon">
    <link href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}" sizes="72x72" rel="apple-touch-icon">
    <link href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}" sizes="114x114" rel="apple-touch-icon">
    <link href="{{ asset('assets/images/apple-touch-icon-180x180.png') }}" sizes="180x180" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php
$mainArrays = [
    "Local" => [
        "Show Local",
        "Restaurants",
        "Beauty",
    ],
    "Products" => [
        "Show Products",
        "Fashion",
        "Electronics",
        "Home",
    ],
    "Travel & Hotels" => [
        "Travel & Hotels",
        "Show All",
        "Norway",
        "Abroad",
        "Package Deals"
    ]
];
?>

<body data-spy="scroll">
    <div class="wrapper ovh bgc-gmart-gray">

        @include('website.layouts.partials.header')

        <div class="body_content_wrapper position-relative pt30">
        	@yield('content')

        	@include('website.layouts.partials.footer')
		</div>
	</div>
</body>

<script src="{{ asset('assets/js/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>
<script src="{{ asset('assets/js/ace-responsive-menu.js') }}"></script>
<script src="{{ asset('assets/js/isotop.js') }}"></script>
<script src="{{ asset('assets/js/parallax.js') }}"></script>
<script src="{{ asset('assets/js/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/slider.js') }}"></script>
<script src="{{ asset('assets/js/range-slider.html') }}"></script>
<script src="{{ asset('assets/js/jquery.ez-plus.js') }}"></script>
<script src="{{ asset('assets/js/scrollbalance.js') }}"></script>
<!-- <!- Custom script for all pages ->  -->
<script src="{{ asset('assets/js/script.js') }}"></script>

@include('toastr')

</html>
