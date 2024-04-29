<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="A brief description of your website">
    <meta name="keywords" content="keywords, separated, by, commas">
    <meta name="author" content="Your Name">
    <title>Register</title>
    <link rel="apple-touch-icon" href="{{ asset('admin/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/forms/icheck/custom.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/components.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/pages/login-register.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column bg-full-screen-image menu-collapsed blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
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
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0 pb-0">
                                    <div class="card-title text-center">
                                        <img src="{{ asset('admin/images/logo/stack-logo-dark.png') }}" alt="branding logo">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Using
                                            Email</span></p>
                                    <div class="card-body">
                                        @if (Session::has('error_message'))
                            <div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Oh snap! </strong>{{ Session::get('error_message') }}
                            </div>
                        @endif
                        @if (Session::has('success_message'))
                            <div class="alert bg-success alert-icon-left alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Well done!</strong> {{ Session::get('success_message') }}
                            </div>
                        @endif
                                        <form id="registerForm" class="form-horizontal" action="{{ route('user.register') }}" method="post" novalidate>
                                            @csrf
                                            <label for="name">Name:</label>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your User Name">
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                            </fieldset>
                                            <label for="mobile">Phone:</label>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile Number">
                                                <div class="form-control-position">
                                                    <i class="feather icon-phone-call"></i>
                                                </div>
                                            </fieldset>
                                            <label for="email">E-mail:</label>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-mail"></i>
                                                </div>
                                            </fieldset>
                                            <label for="password">Password:</label>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </fieldset>
                                            <button type="submit" class="btn btn-outline-primary btn-block"><i class="feather icon-user"></i> Register</button>
                                        </form>
                                        <a href="login-with-bg-image.html" class="btn btn-outline-danger btn-block mt-2"><i class="feather icon-unlock"></i> Login</a>
                                    </div>
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
    <script src="{{ url('admin/vendors/js/vendors.min.js') }}"></script>
    <!-- END: Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ url('admin/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ url('admin/vendors/js/forms/icheck/icheck.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ url('admin/js/core/app-menu.js') }}"></script>
    <script src="{{ url('admin/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Custom JS-->
    <script src="{{ url('front/assets/js/custom.js') }}"></script>
    <!-- END: Custom JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ url('admin/js/scripts/forms/form-login-register.js') }}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
