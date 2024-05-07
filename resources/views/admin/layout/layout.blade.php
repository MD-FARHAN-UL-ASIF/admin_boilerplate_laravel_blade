<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin Dashboard - FARHANX</title>
    <link rel="apple-touch-icon" href="{{ asset('admin/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/ico/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/vendors.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/forms/icheck/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/pickers/daterange/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/pickers/pickadate/pickadate.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/components.css') }}">
    <!-- END: Theme CSS-->
        <!-- Form WIZARD: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/plugins/forms/wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/plugins/pickers/daterange/daterange.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/fonts/simple-line-icons/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/pages/card-statistics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/pages/vertical-timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/tables/datatable/datatables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/plugins/forms/checkboxes-radios.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   menu-collapsed fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">


    @include('admin.layout.header')
    @include('admin.layout.sidebar')
    @yield('content')

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    @include('admin.layout.footer')



    <!-- BEGIN: Vendor JS-->
    <script src="{{ url('admin/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ url('admin/vendors/js/charts/apexcharts/apexcharts.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ url('admin/js/core/app-menu.js') }}"></script>
    <script src="{{ url('admin/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ url('admin/js/scripts/cards/card-statistics.js') }}"></script>
    <!-- END: Page JS-->

    <!-- Custom Js -->
    <script src="{{ url('admin/assets/js/custom.js') }}"></script>

    <!-- BEGIN: update Admin details-->
    <script src="{{ url('admin/js/scripts/pages/account-setting.js') }}"></script>
    <!-- END: update Admin details-->
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ url('admin/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ url('admin/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('admin/vendors/js/tables/buttons.flash.min.js') }}"></script>
    <script src="{{ url('admin/vendors/js/tables/jszip.min.js') }}"></script>
    <script src="{{ url('admin/vendors/js/tables/pdfmake.min.js') }}"></script>
    <script src="{{ url('admin/vendors/js/tables/vfs_fonts.js') }}"></script>
    <script src="{{ url('admin/vendors/js/tables/buttons.html5.min.js') }}"></script>
    <script src="{{ url('admin/vendors/js/tables/buttons.print.min.js') }}"></script>
    <!-- END: Page Vendor JS-->
       <!-- BEGIN: Page JS-->
           <script src="{{ url('admin/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.js') }}"></script>

    <script src="{{ url('admin/js/scripts/tables/datatables/datatable-advanced.js') }}"></script>
        <script src="{{  url('admin/js/scripts/forms/wizard-steps.js') }}"></script>
    <script src="{{  url('admin/vendors/js/extensions/jquery.steps.min.js ') }}"></script>
    <script src="{{  url('admin/vendors/js/pickers/dateTime/moment-with-locales.min.js ') }}"></script>
    <script src="{{  url('admin/vendors/js/pickers/daterange/daterangepicker.js ') }}"></script>
    <script src="{{  url('admin/vendors/js/pickers/pickadate/picker.js ') }}"></script>
    <script src="{{  url('admin/vendors/js/pickers/pickadate/picker.date.js ') }}"></script>
    <script src="{{  url('admin/vendors/js/forms/validation/jquery.validate.min.js ') }}"></script>
        <script src="{{  url('admin/js/scripts/forms/checkbox-radio.js') }}"></script>
            <script src="{{  url('admin/vendors/js/forms/icheck/icheck.min.js') }}"></script>


        {{-- <script src="{{ url('admin/js/scripts/tables/datatables/datatable-advanced.min.js') }}"></script> --}}

    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
