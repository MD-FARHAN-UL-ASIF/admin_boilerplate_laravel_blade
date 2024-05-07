@extends('wise_corporation.layout.layout')

@section('content')
    <main>
        <section class="container max-width custom-padding my-5">
            <div class="root col-12 col-md-10 col-lg-5 shadow p-3">
                <div class="d-flex gap-3 align-items-center product-info py-3">
                    <div class="product-img-container">
                        <img class="product-img" src="{{  asset('front/assets/images/1.png') }}" height="100px" width="100px"
                            alt="product image">
                    </div>
                    <div class="product-details-container">
                        <h6 class="title">Product Name</h6>
                        <h6 class="category">Category</h6>
                        <h6 class="price">Price</h6>
                    </div>
                </div>
                <div class="py-3">
                    <ul class="progress-steps">
                        <li class="step">
                            <span></span>
                            <p class="status">
                                Order Received
                                <br>
                                <span class="date">
                                    21st November, 2019
                                </span>
                            </p>

                        </li>
                        <li class="step">
                            <span></span>
                            <p class="status">
                                Order Processed
                                <br>
                                <span class="date">
                                    21st November, 2019
                                </span>
                            </p>

                        </li>
                        <li class="step">
                            <span></span>
                            <p class="status">
                                Manufracturing In Progress
                                <br>
                                <span class="date">
                                    21st November, 2019
                                </span>
                            </p>

                        </li>
                        <li class="step">
                            <span></span>
                            <p class="status">
                                Order Dispatched
                                <br>
                                <span class="date">
                                    21st November, 2019
                                </span>
                            </p>

                        </li>
                        <li class="step">
                            <span></span>
                            <p class="status">
                                Order Deliverd
                                <br>
                                <span class="date">
                                    21st November, 2019
                                </span>
                            </p>

                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection