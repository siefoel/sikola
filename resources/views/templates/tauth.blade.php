<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 12:34:59 GMT -->
<head>
    <!--  Title -->
    <title>@yield('title')</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    @yield('css')
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset('dist')}}/css/style.min.css" />
  </head>
  <body>
    <!--  Body Wrapper -->
    @yield('auth')
    
    <!--  Import Js Files -->
    <script src="{{asset('dist')}}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('dist')}}/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{asset('dist')}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="{{asset('dist')}}/js/app.min.js"></script>
    <script src="{{asset('dist')}}/js/app.init.js"></script>
    <script src="{{asset('dist')}}/js/app-style-switcher.js"></script>
    <script src="{{asset('dist')}}/js/sidebarmenu.js"></script>
    @yield('js')
    <script src="{{asset('dist')}}/js/custom.js"></script>
    
  </body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 12:34:59 GMT -->
</html>