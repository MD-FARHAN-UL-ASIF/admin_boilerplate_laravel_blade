@extends('admin.layout.layout')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">CATEGORIES</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                                <a href="{{ url('admin/add-edit-category') }}"><button type="button" class="btn btn-secondary btn-min-width mr-1 mb-1"><i class="feather icon-edit"></i> Add Category</button></a>
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
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NAME</th>
                                                    <th>IMAGE</th>
                                                    <th class="text-center">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category['id'] }}</td>
                                                    <td>{{ $category['name'] }}</td>
                                                    <td>
                                                        @if (!empty($category['image']))
                                                        <img src="{{ asset('admin/images/category_images/' . $category['image']) }}" class="img-fluid rounded" style="width: 200px; height: 100px ; object-fit: cover;" alt="Service Image">
                                                        @else
                                                        <img src="{{ asset('admin/images/category_images/no_image.jpg') }}" class="img-fluid rounded" style="width: 200px; height: 100px; object-fit: cover;" alt="No Image">
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ url('admin/add-edit-category/'. $category['id'] ) }}"><i class="fa fa-edit"></i></a>
                                                    &nbsp;&nbsp;
                                                    &nbsp;&nbsp;
                                                    &nbsp;&nbsp;
                                                    &nbsp;&nbsp;
                                                        <a href="{{ url('admin/delete-category/'.$category['id']) }}"><i class="fa fa-trash"></i></a>      
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NAME</th>
                                                    <th>IMAGE</th>
                                                    <th class="text-center">ACTION</th>

                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
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
