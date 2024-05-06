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
    <title>Form Wizard - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href={{ asset('admin/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('admin/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/pickers/daterange/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/vendors/css/pickers/pickadate/pickadate.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/plugins/forms/wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/plugins/pickers/daterange/daterange.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   menu-collapsed fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">PROJECT INFORATION FORM</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Page</a>
                                </li>
                                <li class="breadcrumb-item active">Project Information Form
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Form wizard with number tabs section start -->
                <section id="number-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">PROJECT INFORMATION FORM</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
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
                                    @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{ url('user/project-form-submit') }}" id="projectForm" method="POST" class="number-tab-steps wizard-circle" enctype="multipart/form-data">@csrf

                                            <!-- Step 1 -->
                                            <h6>Step 1</h6>
                                            <fieldset>
                                                <div class="row match-height">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">PROJECT STATUS</h4>
                                                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                                            </div>
                                                            <div class="card-content collapse show">
                                                                <div class="card-body">
                                                                    <div class="d-inline-block custom-control custom-radio mr-1">
                                                                        <input type="radio" class="custom-control-input" name="status" id="new" value="New" {{ old('status') == 'New' ? 'checked' : '' }}>
                                                                        <label class="custom-control-label" for="new">New</label>
                                                                    </div>
                                                                    <div class="d-inline-block custom-control custom-radio mr-1">
                                                                        <input type="radio" class="custom-control-input" name="status" id="existing" value="Existing" {{ old('status') == 'Existing' ? 'checked' : '' }}>
                                                                        <label class="custom-control-label" for="existing">Existing - for BMRE</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">PROJECT TYPE</h4>
                                                            </div>
                                                            <div class="card-content collapse show">
                                                                <div class="card-body">
                                                                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                                        <input type="checkbox" class="custom-control-input" name="project_type[]" id="manufacturing" value="Manufacturing" {{ (is_array(old('project_type')) && in_array('Manufacturing', old('project_type'))) ? 'checked' : '' }}>
                                                                        <label class="custom-control-label" for="manufacturing">MANUFACTURING</label>
                                                                    </div>
                                                                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                                        <input type="checkbox" class="custom-control-input" name="project_type[]" id="service" value="Service" {{ (is_array(old('project_type')) && in_array('Service', old('project_type'))) ? 'checked' : '' }}>
                                                                        <label class="custom-control-label" for="service">SERVICE</label>
                                                                    </div>
                                                                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                                        <input type="checkbox" class="custom-control-input" name="project_type[]" id="trading" value="Trading" {{ (is_array(old('project_type')) && in_array('Trading', old('project_type'))) ? 'checked' : '' }}>
                                                                        <label class="custom-control-label" for="trading">TRADING</label>
                                                                    </div>
                                                                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                                        <input type="checkbox" class="custom-control-input" name="project_type[]" id="mixed" value="Mixed" {{ (is_array(old('project_type')) && in_array('Mixed', old('project_type'))) ? 'checked' : '' }}>
                                                                        <label class="custom-control-label" for="mixed">MIXED</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6>Step 2</h6>
                                            <fieldset>
                                                <h4 class="form-section"><i class="feather icon-user"></i>BASIC INFORMATION ON THE PROJECT</h4>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="project_name">Name of the Project</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="project_name" class="form-control" placeholder="Write the name of your project" name="project_name" value="{{ old('project_name') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="industry">Industry</label>
                                                    <div class="col-md-9">
                                                        <select id="industry" name="industry" class="form-control">
                                                            <option value="none" selected disabled>select industry</option>
                                                            <option value="design" {{ old('industry') == 'design' ? 'selected' : '' }}>Design</option>
                                                            <option value="development" {{ old('industry') == 'development' ? 'selected' : '' }}>Development</option>
                                                            <option value="illustration" {{ old('industry') == 'illustration' ? 'selected' : '' }}>Illustration</option>
                                                            <option value="branding" {{ old('industry') == 'branding' ? 'selected' : '' }}>Branding</option>
                                                            <option value="video" {{ old('industry') == 'video' ? 'selected' : '' }}>Video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="category">Project Category/Nature</label>
                                                    <div class="col-md-9">
                                                        <select id="category" name="category" class="form-control">
                                                            <option value="none" disabled>Select project category</option>
                                                            <option value="design" {{ old('category') == 'design' ? 'selected' : '' }}>Design</option>
                                                            <option value="development" {{ old('category') == 'development' ? 'selected' : '' }}>Development</option>
                                                            <option value="illustration" {{ old('category') == 'illustration' ? 'selected' : '' }}>Illustration</option>
                                                            <option value="branding" {{ old('category') == 'branding' ? 'selected' : '' }}>Branding</option>
                                                            <option value="video" {{ old('category') == 'video' ? 'selected' : '' }}>Video</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="products">Products/Services</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="products" class="form-control" placeholder="Write the name of your products or services" name="products" value="{{ old('products') }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="project_location">Location and Address of the Project</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="project_location" class="form-control" placeholder="Write the location and address of the project" name="project_location"  value="{{ old('project_location') }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="project_cost">Total Cost of the Project</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="project_cost" class="form-control" placeholder="Write the total cost of the project" name="project_cost"  value="{{ old('project_cost') }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="project_layout">Project Layout</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="project_layout" class="form-control" placeholder="Write the layout of the project" name="project_layout"  value="{{ old('project_layout') }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="existing_bank">Existing Banks and NBFIs</label>
                                                    <div class="col-md-9">
                                                        <select id="existing_bank" name="existing_bank" class="form-control">
                                                            <option value="none" disabled>Select existing banks & NBFIs</option>
                                                            <option value="design" {{ old('existing_bank') == 'design' ? 'selected' : '' }}>Design</option>
                                                            <option value="development" {{ old('existing_bank') == 'development' ? 'selected' : '' }}>Development</option>
                                                            <option value="illustration" {{ old('existing_bank') == 'illustration' ? 'selected' : '' }}>Illustration</option>
                                                            <option value="branding" {{ old('existing_bank') == 'branding' ? 'selected' : '' }}>Branding</option>
                                                            <option value="video" {{ old('existing_bank') == 'video' ? 'selected' : '' }}>Video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6>Step 3</h6>
                                            <fieldset>
                                                <h4 class="form-section"><i class="fa fa-usd"></i>FINANCIAL INFORMATIN OF THE PROJECT: </h4>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label  for="sponsors_equity">Equity % by Sponsors :</label>
                                                                <input type="text" id="sponsors_equity" class="form-control" placeholder="Write the equity % by sponsors" name="sponsors_equity" value="{{ old('sponsors_equity') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="project_debt">Debt % of the Project (already availed)</label>
                                                                <input type="text" id="project_debt" class="form-control" placeholder="Write the debt % of the project" name="project_debt" value="{{ old('project_debt') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location2">Existing Loan(s) Bank and other Financial Institutions Liabilities / Loan :</label>
                                                            <select class="custom-select form-control" id="location2" name="location">
                                                                <option value="">Select Existing Bank</option>
                                                                <option value="Amsterdam">Amsterdam</option>
                                                                <option value="Berlin">Berlin</option>
                                                                <option value="Frankfurt">Frankfurt</option>
                                                            </select>
                                                        </div>
                                                    </div> --}}

                                                <div class="row">
                                                    
                                                  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="loan_bank">Existing Loan(s) Bank and other Financial Institutions Liabilities / Loan :</label>
                                                            <select class="custom-select form-control" id="loan_bank" name="loan_bank">
                                                                <option value="">Select Bank/Institutions</option>
                                                                <option value="Amsterdam" {{ old('loan_bank') == 'Amsterdam' ? 'selected' : '' }}>Amsterdam</option>
                                                                <option value="Berlin" {{ old('loan_bank') == 'Berlin' ? 'selected' : '' }}>Berlin</option>
                                                                <option value="Frankfurt" {{ old('loan_bank') == 'Frankfurt' ? 'selected' : '' }}>Frankfurt</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="loan_status">For the Selected Bank / Financial Instiotuin, Status of Loan(s) (in Million Taka) :</label>
                                                            <input type="text" class="form-control" id="loan_status" name="loan_status" value="{{ old('loan_status') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="other_liabilities">Other Liabilities / Loan (in Million Taka) :</label>
                                                            <input type="text" class="form-control" id="other_liabilities" name="other_liabilities" value="{{ old('other_liabilities') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="yearly_revenue">Yearly Revenue (in Million Taka) :</label>
<textarea id="yearly_revenue" rows="3" class="form-control" name="yearly_revenue" 
                                                        placeholder=" *2017-2018
 *2018-2019 
 *2019-2020" >{{ old('yearly_revenue') }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="yearly_income">Yearly Net Income (in Million Taka) :</label>
<textarea id="yearly_income" rows="3" class="form-control" name="yearly_income" 
                                                        placeholder=" *2017-2018
 *2018-2019 
 *2019-2020">{{ old('yearly_income') }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 4 -->
                                            <h6>Step 4</h6>
                                            <fieldset>
                                                <h4 class="form-section"><i class="fa fa-usd"></i>CAPITAL INVESTMENT BREAKDOWN OF THE PROJECT: </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="land">Land and Land Development :</label>
                                                            <input type="text" class="form-control" id="land" name="land" value="{{ old('land') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="civil_works">Building and Civil Woks :</label>
                                                            <input type="text" class="form-control" id="civil_works" name="civil_works" value="{{ old('civil_works') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="machines">Machines and Equipments :</label>
                                                            <input type="text" class="form-control" id="machines" name="machines" value="{{ old('machines') }}">
                                                        </div>
                                                    </div>

                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mortage_assets">Details of Existing Mortage Assets with Value Estimation :</label>
                                                            <textarea id="mortage_assets" rows="3" class="form-control" name="mortage_assets" 
                                                        placeholder="Write Details of Existing Mortage Assets with Value Estimation" value="{{ old('mortage_assets') }}"></textarea>                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="other_assets">Other Asset(s) of the Project with Value Estimation (in Million Taka) :</label>
                                                            <textarea id="other_assets" rows="3" class="form-control" name="other_assets"
                                                        placeholder=" *Goodwill....
 *Etc........ 
 *Etc........">{{ old('other_assets') }}</textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </fieldset>

                                         <!-- Step 5 -->
                                            <h6>Step 5</h6>
                                            <fieldset>
                                                    <h4 class="form-section"><i class="feather icon-home"></i> COMPANY INFORMATION</h4>

                                                 <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="company_name">Official Name of the Company :</label>
                                                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="established_year">Year of Establishment :</label>
                                                            <input type="text" class="form-control" id="established_year" name="established_year" value="{{ old('established_year') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="legal_status">Legal Status of the Company :</label>
                                                            <input type="text" class="form-control" id="legal_status" name="legal_status" value="{{ old('legal_status') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="incorporation_number">Incorporation No. & Trade License :</label>
                                                            <input type="text" class="form-control" id="incorporation_number" name="incorporation_number" value="{{ old('incorporation_number') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="directors">No. of Directors :</label>
                                                            <input type="text" class="form-control" id="directors" name="directors" value="{{ old('directors') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="share_authorized">No. of Shares Authorized to Issue :</label>
                                                            <input type="text" class="form-control" id="share_authorized" name="share_authorized" value="{{ old('share_authorized') }}">
                                                        </div>
                                                    </div>                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="owners">Owners / Sponsor(s) :</label>
<textarea id="owners" rows="3" class="form-control" name="owners"
                                                        placeholder=" *A
 *B
 *C 
 *Etc........">{{ old('owners') }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="director_shares">Share Holding Position of the Director(s) :</label>
                                                            <textarea id="director_shares" rows="3" class="form-control" name="director_shares"
                                                        placeholder=" *A
 *B 
 *Etc........">{{ old('director_shares') }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="authorized_capital">Authorized Capital of the Company (in Million Taka) :</label>
                                                            <input type="text" class="form-control" id="authorized_capital" name="authorized_capital" value="{{ old('authorized_capital') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="paidup_capital">Paid-up Capital of the Company (in Million Taka) :</label>
                                                            <input type="text" class="form-control" id="paidup_capital" name="paidup_capital" value="{{ old('paidup_capital') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="key_persons">Key Persons :</label>
                                                            <input type="text" class="form-control" id="key_persons" name="key_persons" value="{{ old('key_persons') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="head_office_location">Address of the Head Office :</label>
                                                            <input type="text" class="form-control" id="head_office_location" name="head_office_location" value="{{ old('head_office_location') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="major_client">Major Client of the Company :</label>
<textarea id="major_client" rows="2" class="form-control" name="major_client" 
                                                        placeholder="Write the major client of the company ">{{ old('major_client') }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="competitors">Competitors :</label>
<textarea id="competitors" rows="2" class="form-control" name="competitors" 
                                                        placeholder=" Write the major competitors of the company">{{ old('competitors') }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="yearly_turnover">Yearly Turnover (in Million Taka) :</label>
<textarea id="yearly_turnover" rows="3" class="form-control" name="yearly_turnover" 
                                                        placeholder=" *2017-2018
 *2018-2019 
 *2019-2020">{{ old('yearly_turnover') }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="total_employess">No. of Employees :</label>
<textarea id="total_employess" rows="3" class="form-control" name="total_employess" 
                                                         placeholder=" *Factory 
 *Head Office">{{ old('total_employess') }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="work_value">Works (in Hand and in Process) with Work Order Value (in Million Taka) :</label>
<textarea id="work_value" rows="4" class="form-control" name="work_value"
                                                        placeholder=" The company has the following works:
 *A:
 *B:
 *C:
 *etc. ...">{{ old('work_value') }}</textarea>
                                                </div>
                                            </fieldset>

                                            <h6>Step 6</h6>
                                            <fieldset>
                                                {{-- <div class="form-group">
                                                    <label for="company_logo">Upload Company Logo :</label>
<label id="company_logo" class="file center-block">
                                                    <input type="file" id="company_logo" name="company_logo">
                                                    <span class="file-custom"></span>
                                                </label> 
                                               </div> --}}
                                                <div class="form-group">
                                                    <label for="company_logo">Upload Company Logo :</label>
<label id="company_logo" class="file center-block">
                                                    <input type="file" id="company_logo" name="company_logo">
                                                    <span class="file-custom"></span>
                                                </label> 
                                               </div>
                                               
                                               <div class="form-group">
                                                   <label for="project_picture">Upload Project Picture (If Existing) :</label>
<label id="project_picture" class="file center-block">
                                                   <input type="file" id="project_picture" name="project_picture">
                                                   <span class="file-custom"></span>
                                               </label> 
                                              </div>
                                                {{-- <div class="row">
                                                    <div class="col-md-6">
                                                    </div>
                                                    <div class="col-md-6">
                                                    </div>
                                                </div> --}}

                                                <div class="form-group">
                                                    <label for="land_picture">Upload Picture of Land (If New) :</label>
                                                    <label id="land_picture" class="file center-block">
                                                    <input type="file" id="land_picture" name="land_picture">
                                                    <span class="file-custom"></span>
                                                </label> 
                                               </div>

                                               <div class="form-group">
                                                   <label for="owners_pictures">Upload Picture of Owners or Management Body :</label>
                                                   <label id="owners_pictures" class="file center-block">
                                                   <input type="file" id="owners_pictures" name="owners_pictures">
                                                   <span class="file-custom"></span>
                                               </label> 
                                              </div>
                                                {{-- <div class="row">
                                                    <div class="col-md-6">
                                                    </div>
                                                    <div class="col-md-6">
                                                    </div>
                                                </div> --}}
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with number tabs section end -->

                
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">PIXINVENT </a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="feather icon-heart pink"></i></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ url('admin/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ url('admin/vendors/js/extensions/jquery.steps.min.js') }}"></script>
    <script src="{{ url('admin/vendors/js/pickers/dateTime/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('admin/vendors/js/pickers/daterange/daterangepicker.js') }}"></script>
    <script src="{{ url('admin/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ url('admin/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ url('admin/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ url('admin/js/core/app-menu.js') }}"></script>
    <script src="{{ url('admin/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ url('admin/js/scripts/forms/wizard-steps.js') }}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>