@extends('admin.layout.layout')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-8 col-10 p-0">
                        <div class="card shadow-lg rounded">
                            <div class="card-header bg-transparent border-0">
                                <h2 class="error-code text-center mb-2">403</h2>
                                <h3 class="text-uppercase text-center font-weight-bold mb-3">Access Denied/Forbidden!</h3>
                                <p class="text-center text-muted">Uh oh! Looks like you're trying to access the Iron Throne without the proper credentials. It seems Cersei's guards caught wind of your plans and sent you back to the Wall! Better luck next time, maybe try bribing Tyrion with a barrel of wine or two. Valar Morghulis!</p>
                            </div>
                            <div class="card-content">
                                <div class="row py-2 justify-content-center">
                                    <div class="col-12 col-sm-6 mb-1 text-center">
                                        <a href="{{ url('admin/dashboard') }}" class="btn btn-primary btn-block"> <i class="feather icon-home mr-1"></i> Home</a>
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
