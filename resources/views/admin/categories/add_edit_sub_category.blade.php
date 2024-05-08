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
                                    <form name="subCategoryForm" id="subCategoryForm" @if(empty($sub_category['id'])) action="{{ url('admin/add-edit-sub-category') }}" @else action="{{ url('admin/add-edit-sub-category/'.$sub_category['id']) }}" @endif method="POST">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="category_id">Category</label>
                                                <select id="category_id" class="form-control round" name="category_id">
                                                    <option value="">Select Category</option>
                                                    @foreach($categories as $categoryId => $categoryName)
                                                    <option value="{{ $categoryId }}" @if(isset($sub_category['category_id']) && $sub_category['category_id'] == $categoryId) selected @endif>{{ $categoryName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" class="form-control round" placeholder="Enter Title" name="title" @if(!empty($sub_category['title'])) value="{{ $sub_category['title'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="sub_title">Sub Title</label>
                                                <input type="text" id="sub_title" class="form-control round" placeholder="Enter Sub Title" name="sub_title" @if(!empty($sub_category['sub_title'])) value="{{ $sub_category['sub_title'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="investment_size">Investment Size</label>
                                                <input type="text" id="investment_size" class="form-control round" placeholder="Enter Investment SIze" name="investment_size" @if(!empty($sub_category['investment_size'])) value="{{ $sub_category['investment_size'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="net_income">Net Income</label>
                                                <input type="text" id="net_income" class="form-control round" placeholder="Enter Net Income" name="net_income" @if(!empty($sub_category['net_income'])) value="{{ $sub_category['net_income'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="irr">IRR</label>
                                                <input type="text" id="irr" class="form-control round" placeholder="Enter IRR" name="irr" @if(!empty($sub_category['irr'])) value="{{ $sub_category['irr'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="payback_period">Payback Period</label>
                                                <input type="text" id="payback_period" class="form-control round" placeholder="Enter Payback Period" name="payback_period" @if(!empty($sub_category['payback_period'])) value="{{ $sub_category['payback_period'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input type="text" id="description" class="form-control round" placeholder="Enter Description" name="description" @if(!empty($sub_category['description'])) value="{{ $sub_category['description'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="text" id="price" class="form-control round" placeholder="Enter Price" name="price" @if(!empty($sub_category['price'])) value="{{ $sub_category['price'] }}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-actions center">
                                            <a href="{{ url('admin/sub_categories') }}" class="btn btn-warning mr-1">
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
