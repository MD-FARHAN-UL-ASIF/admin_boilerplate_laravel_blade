<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>FARHANX</title>
    <link rel="apple-touch-icon" href="{{  asset('admin/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{  asset('admin/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{  url('admin/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{  url('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  url('admin/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  url('admin/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  url('admin/css/components.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{  url('admin/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  url('admin/css/core/colors/palette-gradient.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{  url('admin/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column   menu-collapsed blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                                <div class="card-header border-0 pb-0">
                                    <div class="card-title text-center">
                                        <img src="{{  asset('admin/images/logo/stack-logo-dark.png' ) }}" alt="branding logo">
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>We will send
                                            you a link to reset password.</span></h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p id="reset-success"></p>
<form class="form-horizontal" id="resetPasswordForm" action="javascript:;" method="post" novalidate>@csrf
<input type="hidden" name="email" value="{{ base64_decode($code) }}">
    <input type="hidden" name="code" value="{{ $code }}">
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control form-control-lg" id="reset-password" name="password" placeholder="Your New Password" required>
                                                <p class="reset-password"></p>
                                                <div class="form-control-position">
                                                    <i class="feather icon-lock"></i>
                                                </div>
                                            </fieldset>
                                            <button type="submit" class="btn btn-outline-primary btn-lg btn-block"><i class="feather icon-unlock"></i> Reset Password</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer border-0">
                                    <p class="float-sm-left text-center"><a href="{{ url('user/login') }}" class="card-link">Login</a></p>
                                    <p class="float-sm-right text-center">New to Stack ? <a href="{{ url('user/register') }}" class="card-link">Create Account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{  url('admin/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{  url('admin/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{  url('admin/js/core/app-menu.js') }}"></script>
    <script src="{{  url('admin/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{  url('admin/js/scripts/forms/form-login-register.js') }}"></script>
    <!-- END: Page JS-->
    <!--  Custom JS-->
        <script src="{{ url('front/js/custom.js') }}"></script>


</body>
<!-- END: Body-->

</html>