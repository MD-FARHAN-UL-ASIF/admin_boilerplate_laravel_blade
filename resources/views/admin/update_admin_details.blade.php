@extends('admin.layout.layout')
@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="striped-row-layout-card-center">Update Admin Details</h4>
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
                <div class="card-content collpase show">
                    <div class="card-body">

                        <div class="card-text">
                            <p>“Every lie we tell incurs a debt to the truth. Sooner or
                                later, that debt is paid.” <code>~Chernobyl</code> </p>
                        </div>
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
                        <form class="form form-horizontal striped-rows" method="POST"
                            action="{{ url('admin/update_password') }}">
                            @csrf
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="admin_email">Email</label>
                                    <div class="col-md-9">
                                        <input id="admin_email" class="form-control"
                                            value="{{ Auth::guard('admin')->user()->email }}" readonly="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="current_password">Current Password</label>
                                    <div class="col-md-9">
                                        <input type="password" id="current_password" class="form-control"
                                            name="current_password" placeholder="Please enter your current password">
                                        <span id="verifyCurrentPassword"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="new_password">New Password</label>
                                    <div class="col-md-9">
                                        <input type="password" id="new_password" class="form-control" name="new_password"
                                            placeholder="Please enter your new password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="confirm_password">Confirm New
                                        Password</label>
                                    <div class="col-md-9">
                                        <input type="password" id="confirm_password" class="form-control"
                                            name="confirm_password" placeholder="Please enter your previous password">
                                        <span id="verifyConfirmPassword"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions center">
                                <a href="{{ url('admin/dashboard') }}" class="btn btn-warning mr-1">
                                    <i class="feather icon-x"></i> Cancel
                                </a>
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
@endsection
