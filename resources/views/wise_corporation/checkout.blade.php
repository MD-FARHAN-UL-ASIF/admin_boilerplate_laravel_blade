@extends('wise_corporation.layout.layout')
@section('content')   
   <main>
        <section class="container max-width custom-padding">
            <div class="shadow rounded mb-5">
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                        <div class="checkout-img-container">
                            <img class="container-fluid" src="{{ asset('front/assets/images/paper_2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 custom-padding">
                        <h4 class="text-center fw-bold cart-heading">অর্ডার করতে আপনার নাম, ফোন নম্বর এবং ইমেইল
                            অ্যাড্রেসটি দিন
                        </h4>
                        <form action="">
                            <div class="row my-3 cart-content d-flex justify-content-between">
                                <div class="col-12 col-md-5 cart-item">
                                    <h6 class="fw-bold">Billing Details</h6>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control py-2" id="name" placeholder="Ken Miles"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control py-2" id="phone"
                                            placeholder="(+880) 1712345678" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control py-2" id="email"
                                            placeholder="demo@gmail.com" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 cart-item">
                                    <h6 class="fw-bold">Your Order</h6>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-start fw-semibold">Product</th>
                                                <th scope="col" class="text-center fw-semibold">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start">চাঁদের পাহাড়</td>
                                                <td class="text-center">220 ৳</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Subtotal</td>
                                                <td class="text-center">220 ৳</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Total</td>
                                                <td class="text-center fw-semibold">220 ৳</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <label for="agree"> <input type="checkbox" name="agree" id="agree" required> I have
                                        read and agreed to the website's <a href="{{ url('wise-corporation/terms&condition') }}"
                                            class="text-decoration-none">Terms and Condetions</a>, <a
                                            href="{{ url('wise-corporation/privacy-policy') }}" class="text-decoration-none">Privacy Policy</a>
                                        and
                                        <a href="{{ url('wise-corporation/refund-policy') }}" class="text-decoration-none">Refund Policy</a>.
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center my-3">
                                <!-- Submit button with icon inside -->
                                <button class="col-12 col-md-6 py-2 fs-5 fw-semibold border-0 rounded cart-btn d-flex align-items-center justify-content-center gap-2"
                                    type="submit">
                                    <span>
                                        Place Order
                                    </span>
                                    <ion-icon class="fs-5 text-white" name="lock-closed"></ion-icon>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h4 class="text-center fw-bold bg-black text-white py-3 rounded">ম্যানুয়ালি অর্ডার করতে হোয়াটসঅ্যাপ অথবা ফেসবুকে মেসেজ দিন</h4>
                <div class="row gap-2 mt-3">
                    <div class="col-12 col-lg-3 col-md-4 border py-2 rounded fw-semibold buy-offline">
                        <a href="#" class="text-decoration-none text-dark gap-3 d-flex align-items-center">
                            <ion-icon class="fs-5 text-success" name="logo-whatsapp"></ion-icon>
                        <span>Chat on WhatsApp</span>
                        </a>
                    </div>
                    <div class="col-12 col-lg-3 col-md-4 border py-2 rounded fw-semibold buy-offline">
                        <a href="#" class="text-decoration-none text-dark gap-3 d-flex align-items-center">
                            <ion-icon class="fs-5 text-primary" name="logo-facebook"></ion-icon>
                        <span>Chat on Facebook</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection