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
                            <li class="breadcrumb-item"><a href="{{ url('admin/subadmins') }}">Sub Admin</a></li>
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
                                    <form name="subadminForm" id="subadminForm" action="{{ url('admin/update-permission/'.$id) }}" method="POST">
                                        @csrf
                                        <div class="form-body">
                                            <input type="hidden" name="admin_id" value="{{ $id }}">
                                            @php
                                                // Define a list of permissions
                                                $permissions = [
                                                    ['module' => 'cms_pages', 'label' => 'CMS Pages'],
                                                    ['module' => 'users', 'label' => 'Users']
                                                    // Add more permissions as needed
                                                ];
                                            @endphp
                                            @foreach ($permissions as $permission)
                                                <div class="form-group">
                                                    <label for="{{ $permission['module'] }}">{{ ucfirst(str_replace('_', ' ', $permission['label'])) }}</label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" class="form-check-input" id="{{ $permission['module'] }}ViewAccess" name="{{ $permission['module'] }}[view]" value="1" @if(!empty($subadminPermission) && optional($subadminPermission->where('module', $permission['module'])->first())['view_access'] == 1) checked @endif>
                                                        <label class="form-check-label" for="{{ $permission['module'] }}ViewAccess">View Access</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" class="form-check-input" id="{{ $permission['module'] }}EditAccess" name="{{ $permission['module'] }}[edit]" value="1" @if(!empty($subadminPermission) && optional($subadminPermission->where('module', $permission['module'])->first())['edit_access'] == 1) checked @endif>
                                                        <label class="form-check-label" for="{{ $permission['module'] }}EditAccess">View/Edit Access</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" class="form-check-input" id="{{ $permission['module'] }}FullAccess" name="{{ $permission['module'] }}[full]" value="1" @if(!empty($subadminPermission) && optional($subadminPermission->where('module', $permission['module'])->first())['full_access'] == 1) checked @endif>
                                                        <label class="form-check-label" for="{{ $permission['module'] }}FullAccess">Full Access</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="form-actions center">
                                            <a href="{{ url('admin/subadmins') }}" class="btn btn-warning mr-1">
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
            </section>
        </div>
    </div>
</div>
@endsection
