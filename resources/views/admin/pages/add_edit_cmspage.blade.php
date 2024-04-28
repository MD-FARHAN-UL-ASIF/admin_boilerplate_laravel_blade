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
                            <li class="breadcrumb-item"><a href="{{ url('admin/cms-page') }}">Cms Page</a></li>
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
                                    <form name= "cmsForm" id="cmsForm" @if(empty($cmspage['id'])) action = "{{ url('admin/add-edit-cms-page') }}" @else action="{{ url('admin/add-edit-cms-page/'.$cmspage['id']) }}" @endif method="POST">@csrf
                                        <div class="form-body">

                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" class="form-control round" placeholder="Enter Page Title" name="title"
                                                @if(!empty($cmspage['title'])) value="{{ $cmspage['title'] }}" @endif>
                                            </div>

                                            <div class="form-group">
                                                <label for="url">URL</label>
                                                <input type="text" id="url" class="form-control round" placeholder="Enter Page URL" name="url"
                                                @if(!empty($cmspage['url'])) value="{{ $cmspage['url'] }}" @endif>
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea id="description" rows="5" class="form-control round" name="description" placeholder="Enter page description">
    @if(!empty($cmspage['description'])) {{ $cmspage['description'] }} @endif
</textarea>

                                            </div>

                                            <div class="form-group">
                                                <label for="meta_title">Meta Title</label>
                                                <input type="text" id="meta_title" class="form-control round" placeholder="Enter Page Meta Title" name="meta_title"
                                                @if(!empty($cmspage['meta_title'])) value="{{ $cmspage['meta_title'] }}" @endif>
                                            </div>

                                            <div class="form-group">
                                                <label for="meta_description">Meta Description</label>
                                                <textarea id="meta_description" rows="5" class="form-control round" name="meta_description" placeholder="Enter page meta description">
                                                 @if(!empty($cmspage['meta_description'])) {{ $cmspage['meta_description'] }} @endif
                                                </textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="meta_keywordsl">Meta Keywords</label>
                                                <input type="text" id="meta_keywordsl" class="form-control round" placeholder="Enter Page Meta Keywords" name="meta_keywords"
                                                @if(!empty($cmspage['meta_keywords'])) value="{{ $cmspage['meta_keywords'] }}" @endif>
                                            </div>
                                        </div>

                                        <div class="form-actions center">
                                            <a href="{{ url('admin/cms-page') }}" class="btn btn-warning mr-1">
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
