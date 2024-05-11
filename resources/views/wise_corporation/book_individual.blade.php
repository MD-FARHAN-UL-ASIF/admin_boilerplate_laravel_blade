@extends('wise_corporation.layout.layout')

@section('content')
    <main class="bg__main py-5">
        <section class="container max-width custom-padding">
            @if (!empty($category['image']))
                <img src="{{ asset('admin/images/category_images/' . $category['image']) }}" class="col-12 img-fluid" alt="Service Image">
            @else
                <img src="{{ asset('admin/images/category_images/no_image.jpg') }}" class="col-12 img-fluid" alt="No Image">
            @endif
        </section>
        <section class="container max-width custom-padding pt-5">
            <div class="row justify-content-between align-items-center py-2 --breadcrumb">
                <div class="col-12 col-sm-5">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item fw-semibold"><a class="text-decoration-none" href="#">হোম</a></li>
                            <li class="breadcrumb-item fw-semibold" aria-current="page">
                                <a class="text-decoration-none" href="#">{{ $book->category->name }}</a>
                            </li>
                            <li class="breadcrumb-item active fw-semibold" aria-current="page">{{ $book['title'] }}</li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="col-12 col-sm-5 d-flex justify-content-end">
                    <div>
                        <label class="fw-semibold" for="toShow">এখন দেখছেন</label> 
                        <select class="rounded p-1" name="toShow" id="toShow">
                            <option class="form-control" value="25">25</option>
                            <option class="form-control" value="25">50</option>
                            <option class="form-control" value="25">100</option>
                        </select>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-between align-items-center category">
                        <div class="col-12 col-lg-4 order-lg-2">
                            <div class="img-container">
                                @if (!empty($book['image']))
                                    <img src="{{ asset('admin/images/book_images/' . $book['image']) }}" class="category-img img-fluid" alt="Book Image">
                                @else
                                    <img src="{{ asset('admin/images/book_images/no_image.jpg') }}" class="category-img img-fluid" alt="No Image">
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-md-8 order-lg-1">
                            <h3 class="mb-3">{{ $book['title'] }}</h3>
                            <h5 class="mb-3">{{ $book['sub_title'] }}</h5>
                            <table class="table table-borderless" style="background-color: transparent; width: 100%;">
                                <tbody>
                                    <tr style="background-color: transparent;">
                                        <td class="fw-semibold" style="width: 35%;">ইনভেস্টমেন্ট সাইজ:</td>
                                        <td>{{ $book['investment_size'] }}</td>
                                    </tr>
                                    <tr style="background-color: transparent;">
                                        <td class="fw-semibold" style="width: 35%;">নেট ইনকাম:</td>
                                        <td>{{ $book['net_income'] }}</td>
                                    </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">IRR:</td>
                                                <td>{{ $book['irr'] }}</td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">পেব্যাক পিরিয়ড:</td>
                                                <td>{{ $book['payback_period'] }}</td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">বিবরণ:</td>
                                                <td class="category__description">
                                                    {{ $book['description'] }}
                                                </td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">মূল্য:</td>
                                                <td>{{ $book['price'] }}<span class="fw-semibold">৳</span></td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">সর্বশেষ সংস্করণ:</td>
                                                <td>{{ date("F j, Y, g:i a", strtotime($book['updated_at'])); }}</td>
                                            </tr>                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 order-3 row justify-content-around">
                            <button class="mt-3 btn-buy border-0 rounded-4 py-2 px-4 col-12 col-md-4 col-sm-4">
                                <a class="text-decoration-none text-white py-auto fw-medium fs-6" aria-current="page" href="{{ url('wise-corporation/checkout') }}">ক্রয় করুন</a>
                            </button>
                            <button class="mt-3 btn-buy border-0 rounded-4 py-2 px-4 col-12 col-md-4 col-sm-4 _df_button" source="{{ url('front/assets/documents/CAIE_A review of applications in federated learning_deposit.pdf') }}">
                                <span class="text-white fw-medium fs-6">স্যাম্পল দেখুন</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
