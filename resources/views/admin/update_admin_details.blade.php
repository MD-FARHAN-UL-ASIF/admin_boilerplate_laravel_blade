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
                            <p>“Don’t waste your time looking back. You’re not going that way.” <code>~Vikings</code> </p>
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
                            action="{{ url('admin/update_admin_details') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                                    <div class="media">
                                                        @if (!empty(Auth::guard('admin')->user()->image))
                                                            <a href="{{ asset('admin/images/admin_images/' . Auth::guard('admin')->user()->image) }}"
                                                                target="blank">
                                                                <img src="{{ asset('admin/images/admin_images/' . Auth::guard('admin')->user()->image) }}"
                                                                    class="rounded mr-75" alt="profile image" height="64"
                                                                    width="64">
                                                            </a>
                                                        @else
                                                            <a href="{{ asset('admin/images/admin_images/no_image.jpg') }}"
                                                                target="blank">
                                                                <img src="{{ asset('admin/images/admin_images/no_image.jpg') }}"
                                                                    class="rounded mr-75" alt="profile image" height="64"
                                                                    width="64">
                                                            </a>
                                                        @endif
                                                            <div class="media-body mt-75">
                                                                <div
                                                                    class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                                    <label
                                                                        class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                                        for="admin_image">Upload new photo</label>
                                                                    <input type="file" id="admin_image"
                                                                        name="admin_image" accept="image/*" hidden>
                                                                    <button
                                                                        class="btn btn-sm btn-secondary ml-50">Reset</button>
                                                                </div>
                                                                <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or
                                                                        PNG. Max size of 800kB</small></p>
                                                            </div>
                                                    </div>
                                                    <hr>
                                                    <form novalidate>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="admin_email">Email</label>
                                                                        <input type="email" class="form-control"
                                                                            id="admin_email"
                                                                            value="{{ Auth::guard('admin')->user()->email }}"
                                                                            readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="type">Role</label>
                                                                        <input type="text" class="form-control"
                                                                            id="type"
                                                                            value="{{ Auth::guard('admin')->user()->type }}"
                                                                            readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="admin_name">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="admin_name" name="admin_name"
                                                                            value="{{ Auth::guard('admin')->user()->name }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="admin_mobile">Mobile</label>
                                                                        <input type="text" class="form-control"
                                                                            id="admin_mobile" name="admin_mobile"
                                                                            value="{{ Auth::guard('admin')->user()->mobile }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                    changes</button>
                                                                <a href="{{ url('admin/dashboard') }}"
                                                                    class="btn btn-light mr-1">
                                                                    <i class="feather icon-x"></i> Cancel
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
