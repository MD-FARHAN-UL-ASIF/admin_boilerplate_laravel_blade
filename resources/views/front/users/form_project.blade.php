@extends('admin.layout.layout')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">PROJECT INFORMATION FORM</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/users') }}">Users</a></li>
                            <li class="breadcrumb-item active">PROJECT INFORMATION FORM</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="horizontal-form-layouts">
                    <div class="row justify-content-md-center">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="horz-layout-basic">Project Info</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>


                                        <form class="form form-horizontal">
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
                                                                    <input type="radio" class="custom-control-input" name="colorRadio" id="radio1">
                                                                    <label class="custom-control-label" for="radio1">New</label>
                                                                </div>
                                                                <div class="d-inline-block custom-control custom-radio mr-1">
                                                                    <input type="radio" class="custom-control-input" name="colorRadio" id="radio2" checked>
                                                                    <label class="custom-control-label" for="radio2">Existing - for BMRE</label>
                                                                </div>
                                                                {{-- <div class="d-inline-block custom-control custom-radio mr-1">
                                                                    <input type="radio" class="custom-control-input" name="colorRadio" id="radio3" disabled>
                                                                    <label class="custom-control-label" for="radio3">Disabled custom radio</label>
                                                                </div> --}}
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
                                            <input type="checkbox" class="custom-control-input" name="colorCheck" id="checkbox1">
                                            <label class="custom-control-label" for="checkbox1">MANUFACTURING</label>
                                        </div>
                                        <div class="d-inline-block custom-control custom-checkbox mr-1">
                                            <input type="checkbox" class="custom-control-input" name="colorCheck" checked id="checkbox2">
                                            <label class="custom-control-label" for="checkbox2">SERVICE</label>
                                        </div>
                                        <div class="d-inline-block custom-control custom-checkbox mr-1">
                                            <input type="checkbox" class="custom-control-input" name="colorCheck" checked id="checkbox3">
                                            <label class="custom-control-label" for="checkbox3">TRADING</label>
                                        </div>
                                        <div class="d-inline-block custom-control custom-checkbox mr-1">
                                            <input type="checkbox" class="custom-control-input" name="colorCheck" checked id="checkbox4">
                                            <label class="custom-control-label" for="checkbox4">MIXED</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="feather icon-user"></i> 1. BASIC INFORMATION ON THE PROJECT</h4>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput1">Name of the Project</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="Write the name of your project" name="fname">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput6">Industry</label>
                                                    <div class="col-md-9">
                                                        <select id="projectinput6" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">select industy</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput6">Project Category/Nature</label>
                                                    <div class="col-md-9">
                                                        <select id="projectinput6" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">select project category</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput3">Products/Services</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="Write the name of your products or services" name="email">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Location and Address of the Project</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the location and address of the project" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Total Cost of the Project</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the total cost of the project" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Project Layout</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the layout of the project" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput6">Existing Banks and NBFIs</label>
                                                    <div class="col-md-9">
                                                        <select id="projectinput6" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">select existing banks & NBFIs</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <h4 class="form-section"><i class="fa fa-usd"></i>2. FINANCIAL INFORMATIN OF THE PROJECT: </h4>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-6 label-control" for="projectinput4">Equity % by Sponsors</label>
                                                            <div class="col-md-6">
                                                                <input type="text" id="projectinput4" class="form-control" placeholder="Write the equity % by sponsors" name="equity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-6 label-control" for="projectinput5">Debt % of the Project <br>(already availed)</label>
                                                            <div class="col-md-6">
                                                                <input type="text" id="projectinput5" class="form-control" placeholder="Write the debt % of the project" name="debt">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput6">Existing Loan(s) Bank and other Financial Institutions Liabilities / Loan</label>
                                                    <div class="col-md-9">
                                                        <select id="projectinput6" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">select existing bank</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">For the Selected Bank / Financial Instiotuin,<br> Status of Loan(s) (in Million Taka)</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the location and address of the project" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Other Liabilities / Loan (in Million Taka)</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the location and address of the project" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Yearly Reveneue (in Million Taka)</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" 
                                                        placeholder=" *2017-2018
 *2018-2019 
 *2019-2020"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Yearly Net Income (in Million Taka)</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" 
                                                        placeholder=" *2017-2018
 *2018-2019 
 *2019-2020"></textarea>
                                                    </div>
                                                </div>
                                                <h4 class="form-section"><i class="fa fa-usd"></i>3. CAPITAL INVESTMENT BREAKDOWN OF THE PROJECT: </h4>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Land and Land Development</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Fixed Asste(s) of the Project with value estimation (in MIllion TAKA)" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Building and Civil Woks</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Fixed Asste(s) of the Project with value estimation (in MIllion TAKA)" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Machines and Equipments</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Fixed Asste(s) of the Project with value estimation (in MIllion TAKA)" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Other Asset(s) of the Project with Value Estimation (in Million Taka)</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" 
                                                        placeholder=" *Goodwill....
 *Etc........ 
 *Etc........"></textarea>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Details of Existing Mortage Assets with Value Estimation</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" 
                                                        placeholder="Write Details of Existing Mortage Assets with Value Estimation"></textarea>
                                                    </div>
                                                </div>



                                                <h4 class="form-section"><i class="feather icon-home"></i> COMPANY INFORMATION</h4>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput5">Official Name of the Company</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control" placeholder="Company Name" name="company">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">Upload Logo</label>
                                                    <div class="col-md-9">
                                                        <label id="projectinput8" class="file center-block">
                                                            <input type="file" id="file">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Year of Establishment</label>
                                                    <div class="col-md-2">
                                                        <input type="date" id="projectinput4" class="form-control" placeholder="" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Legal Status of the Company</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the legal status of the company" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Incorporation No. $ Trade License</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the incorporation no. and trade license" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">No. of Directors</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the incorporation no. and trade license" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Owners / Sponsor(s)</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" 
                                                        placeholder=" *A:
 *B: 
 *C:
 *etc. ...
 .."></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">No. of Shares Authorized to Issue</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the no. of shares authorized to issue" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Share Holding Position of the Director(s)</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" 
                                                        placeholder=" *A:
 *B: 
 *C:
 *etc. ...
 .."></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Authorized Capital of the Company (in Million Taka)</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the authorized capital of the company(in Million Taka)" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Paid-up Capital of the Company (in Million Taka)</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the paid-up capital of the company (in Million Taka)" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Key Persons</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the key persons" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Address of the Head Office</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Write the address of the head office" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Major Client of the Company</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="2" class="form-control" name="comment" 
                                                        placeholder=" Write the major client of the company"></textarea>
                                                    </div>
                                                </div>

                                                 <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Competitors</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="2" class="form-control" name="comment" 
                                                        placeholder=" Write the major client of the company"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Yearly Turnover (in Million Taka)</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="3" class="form-control" name="comment" 
                                                        placeholder=" *2017-2018
 *2018-2019 
 *2019-2020"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">No. of Employees</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="2" class="form-control" name="comment" 
                                                        placeholder=" *Factory
 *Head Office"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Works (in Hand and in Process) with Work Order Value (in Million Taka)</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" 
                                                        placeholder=" The company has the following works:
 *A:
 *B:
 *C:
 *etc. ..."></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions d-flex justify-content-center">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="feather icon-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
    </div>
</div>
@endsection
