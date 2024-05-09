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
                                    <form name="bookForm" id="bookForm" enctype="multipart/form-data" @if(empty($books['id'])) action="{{ url('admin/add-edit-book') }}" @else action="{{ url('admin/add-edit-book/'.$books['id']) }}" @endif method="POST">
                                        @csrf
                                        <div class="form-body">
                                            <div class="media">
                                                    @if (!empty($books['image']))
                                                        <a href="{{ asset('admin/images/book_images/' . $books['image']) }}"
                                                            target="blank">
                                                            <img src="{{ asset('admin/images/book_images/' . $books['image']) }}"
                                                                class="rounded mr-75" alt="book image" height="64"
                                                                width="64">
                                                        </a>
                                                    @else
                                                        <a href="{{ asset('admin/images/book_images/no_image.jpg') }}"
                                                            target="blank">
                                                            <img src="{{ asset('admin/images/book_images/no_image.jpg') }}"
                                                                class="rounded mr-75" alt="book image" height="64"
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
                                                <label for="category_id">Category</label>
                                                <select id="category_id" class="form-control round" name="category_id">
                                                    <option value="">Select Category</option>
                                                    @foreach($categories as $categoryId => $categoryName)
                                                    <option value="{{ $categoryId }}" @if(isset($books['category_id']) && $books['category_id'] == $categoryId) selected @endif>{{ $categoryName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" class="form-control round" placeholder="Enter Title" name="title" @if(!empty($books['title'])) value="{{ $books['title'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="sub_title">Sub Title</label>
                                                <input type="text" id="sub_title" class="form-control round" placeholder="Enter Sub Title" name="sub_title" @if(!empty($books['sub_title'])) value="{{ $books['sub_title'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="investment_size">Investment Size</label>
                                                <input type="text" id="investment_size" class="form-control round" placeholder="Enter Investment SIze" name="investment_size" @if(!empty($books['investment_size'])) value="{{ $books['investment_size'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="net_income">Net Income</label>
                                                <input type="text" id="net_income" class="form-control round" placeholder="Enter Net Income" name="net_income" @if(!empty($books['net_income'])) value="{{ $books['net_income'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="irr">IRR</label>
                                                <input type="text" id="irr" class="form-control round" placeholder="Enter IRR" name="irr" @if(!empty($books['irr'])) value="{{ $books['irr'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="payback_period">Payback Period</label>
                                                <input type="text" id="payback_period" class="form-control round" placeholder="Enter Payback Period" name="payback_period" @if(!empty($books['payback_period'])) value="{{ $books['payback_period'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input type="text" id="description" class="form-control round" placeholder="Enter Description" name="description" @if(!empty($books['description'])) value="{{ $books['description'] }}" @endif>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="text" id="price" class="form-control round" placeholder="Enter Price" name="price" @if(!empty($books['price'])) value="{{ $books['price'] }}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-actions center">
                                            <a href="{{ url('admin/books') }}" class="btn btn-warning mr-1">
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
