@extends('admin.layout.layout')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Users List</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                            {{-- <li class="breadcrumb-item"><a href="{{ url('admin/cms-page') }}">Cms Page</a></li> --}}
                            <li class="breadcrumb-item active">Users List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @if (Session::has('success_message'))
        <div class="alert bg-success alert-icon-left alert-dismissible mb-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done!</strong> {{ Session::get('success_message') }}
        </div>
        @endif
        <div class="content-body">
            <section id="column">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ url('admin/add-edit-user') }}"><button type="button" class="btn btn-secondary btn-min-width mr-1 mb-1"><i class="feather icon-edit"></i> Add User</button></a>
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
                                <div class="card-body card-dashboard">
                                    <table id="subadmins" class="table table-striped table-bordered custom-toolbar-elements">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>IMAGE</th>
                                                <th>NAME</th>
                                                <th>ADDRESS</th>
                                                <th>CITY</th>
                                                <th>STATE</th>
                                                <th>COUNTRY</th>
                                                <th>ZIPCODE</th>
                                                <th>MOBILE</th>
                                                <th>EMAIL</th>
                                                <th>STATUS</th>
                                                <th>CREATED AT</th>
                                                <th>ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user )
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td style="background-image: url('{{ !empty($user->image) ? asset('admin/images/user_images/' . $user->image) : asset('admin/images/user_images/no_image.jpg') }}'); background-size: cover; background-position: center center; height: 40px;"></td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>{{ $user->city }}</td>
                                                <td>{{ $user->state }}</td>
                                                <td>{{ $user->country }}</td>
                                                <td>{{ $user->zipcode }}</td>
                                                <td>{{ $user->mobile }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td class="text-center">
                                                    @if($user->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>{{ date("F j, Y, g:i a", strtotime($user->created_at)) }}</td>
                                                <td>
                                                    @if($user -> status==1)
                                                    <a class="updateUserStatus" id="user-{{ $user->id }}" user_id = "{{ $user->id }}" href="javascript:void(0)">
                                                        <i class="fa fa-toggle-on" status = "Active"></i></a>
                                                    @else
                                                        <a class="updateUserStatus" id="user-{{ $user->id }}" user_id = "{{ $user->id }}" href="javascript:void(0)">
                                                        <i class="fa fa-toggle-off" status = "Inactive"></i></a>
                                                    @endif

                                                    &nbsp;&nbsp;
                                                        <a href="{{ url('admin/add-edit-user/'.$user->id) }}"><i class="fa fa-edit"></i></a>
                                                    {{-- &nbsp;&nbsp; --}}
                                                        {{-- <a href="{{ url('admin/delete-subadmin/'.$subadmin->id) }}"><i class="fa fa-trash"></i></a>
                                                        &nbsp;&nbsp;
                                                        <a href="{{ url('admin/update-permission/'.$subadmin->id) }}"><i class="fa fa-lock"></i></a> --}}
                                                </td> 
                                                {{-- <td><!-- Add actions here if needed --></td> --}}
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>IMAGE</th>
                                                <th>NAME</th>
                                                <th>ADDRESS</th>
                                                <th>CITY</th>
                                                <th>STATE</th>
                                                <th>COUNTRY</th>
                                                <th>ZIPCODE</th>
                                                <th>MOBILE</th>
                                                <th>EMAIL</th>
                                                <th>STATUS</th>
                                                <th>CREATED AT</th>
                                                <th>ACTIONS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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
