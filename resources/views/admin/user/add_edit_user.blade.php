@extends('admin.layout.layout')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">{{ $title }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/users') }}">Users</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <section id="column">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
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
                                        <p>“I'm quite good at spending money, but a lifetime of outrageous wealth hasn't taught me much about managing it.” <code>~Tyrion Lannister</code> </p>
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
                                    @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    <form name= "userForm" id="userForm" @if(empty($userdata['id'])) action = "{{ url('admin/add-edit-user') }}" @else action="{{ url('admin/add-edit-user/'.$userdata['id']) }}" @endif method="POST" enctype="multipart/form-data">@csrf
                                        <div class="form-body">
                                    <div class="media">
                                        @if (!empty($userdata['image']))
                                            <a href="{{ asset('admin/images/user_images/' . $userdata['image']) }}"
                                                target="blank">
                                                <img src="{{ asset('admin/images/user_images/' . $userdata['image']) }}"
                                                    class="rounded mr-75" alt="profile image" height="64"
                                                    width="64">
                                            </a>
                                        @else
                                            <a href="{{ asset('admin/images/user_images/no_image.jpg') }}"
                                                target="blank">
                                                <img src="{{ asset('admin/images/user_images/no_image.jpg') }}"
                                                    class="rounded mr-75" alt="profile image" height="64"
                                                    width="64">
                                            </a>
                                        @endif
                                            <div class="media-body mt-75">
                                                <div
                                                    class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                    <label
                                                        class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                        for="image">Upload new photo</label>
                                                    <input type="file" id="image"
                                                        name="image" accept="image/*" hidden>
                                                    <button
                                                        class="btn btn-sm btn-secondary ml-50">Reset</button>
                                                </div>
                                                <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or
                                                        PNG. Max size of 800kB</small></p>
                                            </div>
                                    </div>
                                            <div class="form-group">
                                                <label for="name">NAME</label>
                                                <input type="text" id="name" class="form-control round" placeholder="Enter Your Name" name="name"
                                                @if(!empty($userdata['name'])) value="{{ $userdata['name'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">ADDRESS</label>
                                                <input type="text" id="address" class="form-control round" placeholder="Enter Your Address Here" name="address"
                                                @if(!empty($userdata['address'])) value="{{ $userdata['address'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="city">CITY</label>
                                                <input type="text" id="city" class="form-control round" placeholder="Enter City Here" name="city"
                                                @if(!empty($userdata['city'])) value="{{ $userdata['city'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="state">DIVISION</label>
                                                <input type="text" id="state" class="form-control round" placeholder="Enter  division/state Here" name="state"
                                                @if(!empty($userdata['state'])) value="{{ $userdata['state'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="country">COUNTRY</label>
                                                <input type="text" id="country" class="form-control round" placeholder="Enter  Country Here" name="country"
                                                @if(!empty($userdata['country'])) value="{{ $userdata['country'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="zipcode">POSTAL CODE</label>
                                                <input type="text" id="zipcode" class="form-control round" placeholder="Enter  Postal/Zip Here" name="zipcode"
                                                @if(!empty($userdata['zipcode'])) value="{{ $userdata['zipcode'] }}" @endif>
                                            </div>                                                                                                                                    
                                            <div class="form-group">
                                                <label for="mobile">MOBILE</label>
                                                <input type="text" id="mobile" class="form-control round" placeholder="Enter  Mobile Number Here" name="mobile"
                                                @if(!empty($userdata['mobile'])) value="{{ $userdata['mobile'] }}" @endif>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">EMAIL</label>
                                                <input @if($userdata['id'] != "") disabled="" @else required="" @endif
                                                type="email" id="email" class="form-control round" placeholder="Enter Your Email" name="email"
                                                @if(!empty($userdata['email'])) value="{{ $userdata['email'] }}" @endif>
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" class="form-control round" placeholder="Enter Password" name="password"
                                                @if(!empty($userdata['password'])) value="{{ $userdata['password'] }}" @endif>
                                            </div>
                                        </div>

                                        <div class="form-actions center">
                                            <a href="{{ url('admin/users') }}" class="btn btn-warning mr-1">
                                                <i class="feather icon-x"></i> Cancel
                                            </a>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection