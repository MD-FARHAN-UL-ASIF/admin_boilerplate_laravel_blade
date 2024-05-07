   @extends('wise_corporation.layout.layout')

    @section('content')

        <section class="hero-section">
            <div class="container max-width custom-padding">
                <div class="carousel">
                    <div class="carousel-container">
                        <img class="img-fluid" src="{{  asset('front/assets/images/01.png') }}" alt="">
                    </div>
                    <div class="carousel-container">
                        <img class="img-fluid" src="{{  asset('front/assets/images/02.jpg') }}" alt="">
                    </div>
                    <div class="carousel-container">
                        <img class="img-fluid" src="{{  asset('front/assets/images/03.png') }}" alt="">
                    </div>
                    <div class="carousel-container">
                        <img class="img-fluid" src="{{  asset('front/assets/images/04.png') }}" alt="">
                    </div>
                    <div class="carousel-container">
                        <img class="img-fluid" src="{{  asset('front/assets/images/05.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- About -->
        <section class="about-section" id="about">
            <div class="container max-width">
                <div class="row py-5 gap-5 align-items-center about-element-container">
                    <div class="col-12 col-md-6 d-flex flex-column custom-padding">
                        <h3 class="about-heading fw-bold">
                            আমাদের সম্পর্কে
                            <div class="b-bottom"></div>
                        </h3>
                        <p class="about-descripttion py-1">
                            <strong>Wise Corporation</strong> বাংলাদেশের অন্যতম ব্যবসায়িক ও ম্যানেজমেন্ট পরামর্শক
                            প্রতিষ্ঠান।
                            বাংলাদেশে ব্যবসার সুবিধার্থে আমরা ২০১০ সালে আমাদের যাত্রা শুরু করি। দীর্ঘ এই পরিক্রমায় আমরা
                            প্রায় ২৬৫ টি প্রকল্পে ৫০-এর অধিক প্রতিষ্ঠানকে সেবা দিয়েছি।
                        </p>
                        <p class="about-descripttion py-1">
                            আমরা প্রকৃত ডাটা সোর্স সহ প্রতিটি শিল্পপ্রতিষ্ঠান বিষয়ক গবেষণা করি এবং আমাদের বিশেষজ্ঞ
                            পরামর্শদাতাদের দল অত্যন্ত আন্তরিকতার সাথে বিজনেস বিষয়ক দৃষ্টিভঙ্গি থেকে ডাটা বিশ্লেষণ এবং
                            মার্কেট এনালাইসিস করে থাকে। শুধু তাই নয়, আমরা যেভাবে ফিনান্সিয়াল সেক্টর নিয়ে কাজ করে থাকি তা
                            আপনার বিজনেস এবং প্রজেক্ট-কে সফলের উৎকর্ষে পৌঁছে দিবে, ইনশাল্লাহ।
                        </p>
                        <p class="about-descripttion py-1">
                            আমাদের কাছে বাংলাদেশের প্রধান শিল্পগুলি সম্মন্ধে একটি বড় ডাটা ভান্ডার রয়েছে এবং এটি আমাদের
                            মার্কেট এনালাইসিস, বাজার পর্যবেক্ষণ, ফিউচার এসেসমেন্ট ইত্যাদি বিষয়ক জ্ঞান আরোহন করতে অত্যন্ত
                            সাহায্য করে যা আমরা আমাদের সম্মানিত ক্লায়েন্টদেরকে কাজের মাধ্যমে সরবরাহ করে থাকি।
                        </p>
                        <p class="about-descripttion py-1">
                            আমরা সার্বক্ষণিক আপনাকে সার্ভিস দেয়ার জন্য প্রস্তুত।
                        </p>
                        <!-- <div class="">
                            <button class="border-0 rounded-1 bg-danger py-2 px-4 btn-stylish">
                                <a class="nav-link text-white py-auto fw-medium fs-5" aria-current="page" href="#">
                                    <i aria-hidden="true" class="far fa-hand-point-right"></i> Read More</a>
                            </button>
                        </div> -->
                    </div>
                    <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
                        <div class="about-img-element">
                            <img class="container-fluid rounded-3" src="{{  asset('front/assets/images/wise.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- resources -->
        <section class="resources-section py-5">
            <div class="container max-width px-0">
                <h3 class="resources-heading text-center custom-padding">
                    আমাদের সার্ভিস সমূহ
                    <span class="d-flex justify-content-center">
                        <div class="b-bottom-middle"></div>
                    </span>
                </h3>
                <p class="resources-description py-2 custom-padding">
                    Bankable Project Profile (ব্যাংকের জন্য উপযুক্ত প্রজেক্ট প্রোফাইল), প্রকল্পের সম্ভাব্যতা, প্রোফাইল
                    এবং রিপোর্ট ইত্যাদি যে কোনো ধরণের ডকুমেন্টিং সার্ভিস এর জন্য আমাদের সাথে যোগাযোগ করুন।
                </p>
                <div class="row resource-package-container d-flex justify-content-center gy-3">
                    <!-- 1st card -->
                    <div class="col-12 col-lg-4 col-md-5 p-0 d-flex justify-content-center card-container p-1">
                        <div class="card shadow border-0" style="max-width: 22rem;">
                            <img class="card-img-top rounded" src="{{  asset('front/assets/images/tmp-1.png') }}" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-text fs-5 text-center mb-3">
                                        <a class="text-decoration-none resource-link" href="{{ url ('wise-corporation/project-profile') }}">
                                            একটি সফল ব্যবসা শুরু হয় ওই ব্যাবসার সঠিক পরিকল্পনা এবং ডকুমেন্টেশন দিয়ে
                                            যতক্ষণ না ব্যবসাটি সফল হয়। প্রজেক্ট প্রোফাইলিং এবং রিপোর্টিং এ আপনাকে
                                            সাহায্য করতে পেরে আমরা খুশি।
                                        </a>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="border-0 rounded-4 py-2 px-4 btn-stylish col-8">
                                        <a class="nav-link text-white py-auto fw-medium fs-6" aria-current="page"
                                           href="{{ url ('wise-corporation/project-profile') }}"">প্রজেক্ট প্রোফাইল</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd card -->
                    <div class="col-12 col-lg-4 col-md-5 p-0 d-flex justify-content-center card-container p-1">
                        <div class="card shadow border-0" style="max-width: 22rem;">
                            <img class="card-img-top rounded" src="{{  asset('front/assets/images/tmp-2.jpeg') }}" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-text fs-5 text-center mb-3">
                                        <a class="text-decoration-none resource-link" href="./service.html">
                                            আমাদের পরিপূর্ণ এবং ব্যাপক ব্যাবসায়িক বিশ্লেষণ (আর্থিক, শিল্প, বাজার এবং
                                            প্রযুক্তিগত) আপনাকে সঠিক সিদ্ধান্ত নিতে সহযোগিতা করবে।
                                        </a>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="border-0 rounded-4 py-2 px-4 btn-stylish col-8">
                                        <a class="nav-link text-white py-auto fw-medium fs-6" aria-current="page"
                                            href="./service.html">বিজনেস প্ল্যান তৈরী করা</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 card -->
                    <div class="col-12 col-lg-4 col-md-5 p-0 d-flex justify-content-center card-container p-1">
                        <div class="card shadow border-0" style="max-width: 22rem;">
                            <img class="card-img-top rounded" src="{{  asset('front/assets/images/tmp-3.jpeg') }}" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-text fs-5 text-center mb-3">
                                        <a class="text-decoration-none resource-link" href="#">
                                            আমরা বাজারের অবস্থা বোঝার জন্য অসংখ্য মার্কেট স্টাডি করেছি এবং ক্লায়েন্টদের
                                            প্রয়োজন অনুযায়ী বাংলাদেশের মার্কেটের জন্য অসংখ্য
                                            প্রজেক্ট নিয়ে কাজ করেছি।
                                        </a>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="border-0 rounded-4 py-2 px-4 btn-stylish col-8">
                                        <a class="nav-link text-white py-auto fw-medium fs-6" aria-current="page"
                                            href="#">মার্কেট স্টাডি</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4th card -->
                    <div class="col-12 col-lg-4 col-md-5 p-0 d-flex justify-content-center card-container p-1">
                        <div class="card shadow border-0" style="max-width: 22rem;">
                            <img class="card-img-top rounded" src="{{  asset('front/assets/images/tmp-4.jpeg') }}" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-text fs-5 text-center mb-3">
                                        <a class="text-decoration-none resource-link" href="./project_profile.html">
                                            ব্যাংকের প্রয়োজন অনুসারে আমরা আপনার জন্য একাউন্টিং ও ফিনান্সিয়াল এনালাইসিস
                                            করে দেবো যা আমাদের সুদীর্ঘ ব্যাঙ্কিং ক্যারিয়ার এর সুস্পষ্ট প্রতিফলন।
                                        </a>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="border-0 rounded-4 py-2 px-4 btn-stylish col-8">
                                        <a class="nav-link text-white py-auto fw-medium fs-6" aria-current="page"
                                            href="./project_profile.html">ফিনান্সিয়াল এনালাইসিস </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 5th card -->
                    <div class="col-12 col-lg-4 col-md-5 p-0 d-flex justify-content-center card-container p-1">
                        <div class="card shadow border-0" style="max-width: 22rem;">
                            <img class="card-img-top rounded" src="{{  asset('front/assets/images/tmp-5.jpeg') }}" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-text fs-5 text-center mb-3">
                                        <a class="text-decoration-none resource-link" href="./service.html">
                                            ওয়ার্ল্ড ব্যাঙ্ক, বাংলাদেশ ব্যাঙ্ক সহ অন্যান্য স্পেশাল ফান্ড থেকে আপনার
                                            প্রজেক্ট ফাইন্যান্স ensure করতে আমাদের সুদক্ষ ও সুচিন্তিত পরামর্শ এবং
                                            ডকুমেন্ট প্রিপারেশন সার্ভিস গ্রহণ করুন।
                                        </a>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="border-0 rounded-4 py-2 px-4 btn-stylish col-8">
                                        <a class="nav-link text-white py-auto fw-medium fs-6" aria-current="page"
                                            href="./service.html">ফান্ড ম্যানেজমেন্ট</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 6th card -->
                    <div class="col-12 col-lg-4 col-md-5 p-0 d-flex justify-content-center card-container p-1">
                        <div class="card shadow border-0" style="max-width: 22rem;">
                            <img class="card-img-top rounded" src="{{  asset('front/assets/images/04.png') }}" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-text fs-5 text-center mb-3">
                                        <a class="text-decoration-none resource-link" href="#">
                                            <!-- কোম্পানি প্রোফাইল এবং অন্যান্য সার্ভিসেস -->
                                            কনসেপ্ট নোট, কোম্পানি প্রোফাইল, ব্যাঙ্ক লেটার, বায়ার লেটার, সাপ্লাইআর লেটার প্রকিউরমেন্ট লেটার আমাদের থেকে গ্রহণ করুন।
                                        </a>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="border-0 rounded-4 py-2 px-4 btn-stylish col-8">
                                        <a class="nav-link text-white py-auto fw-medium fs-6" aria-current="page"
                                            href="#">কোম্পানি প্রোফাইল</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section>
            <div class="container max-width custom-padding py-5">
                <h3 class="resources-heading text-center custom-padding">
                    আমাদের প্যাকেজ সমূহ
                    <span class="d-flex justify-content-center">
                        <div class="b-bottom-middle"></div>
                    </span>
                </h3>
                <p class="resources-description py-2 custom-padding">
                    বিশেষ সুযোগ সুবিধা পেতে আপনার পছন্দের প্যাকেজটি বেছে নিন। তথ্য এবং নথি চূড়ান্ত করতে আমাদের পক্ষ থেকে কল করা হবে এবং তারপর থেকে মেয়াদ শুরু হবে। পূর্ববর্তী নথিগুলির জন্য - পর্যালোচনা করার পর, মূল্য নির্ধারণ করা হবে।
                </p>
                <div class="row row-cols-1 row-cols-md-3 d-flex justify-content-center pricing-section">
                    <div class="col-12 col-lg-4 col-md-5 p-1 d-flex justify-content-center card-container" id="1st plan">
                        <div class="card h-100 pricing-plan" style="max-width: 22rem; width: 18rem;">
                            <div class="pricing-plan-top">
                                <div class="pricing-plan-title">
                                    <span>Silver</span>
                                    <div class="pricing-plan-title-badge">
                                        <svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg" q:key="B4_0"><path d="M8.00065 14.1667C10.8541 14.1667 13.1673 11.6667 13.1673 8.66667C13.1673 5.222 10.0918 2.78077 8.85307 1.9372C8.56929 1.74395 8.19435 1.82757 7.99678 2.10835L6.38863 4.39386C6.15096 4.73163 5.66501 4.77276 5.37203 4.48167C5.11194 4.22325 4.68797 4.22046 4.45454 4.5032C3.37417 5.81171 2.83398 7.44093 2.83398 8.66667C2.83398 11.6667 5.14718 14.1667 8.00065 14.1667ZM8.00065 14.1667C9.10522 14.1667 10.0007 13.1446 10.0007 11.8838C10.0007 10.495 8.89191 9.48319 8.32548 9.05691C8.13084 8.91044 7.87046 8.91044 7.67583 9.05691C7.1094 9.48319 6.00065 10.495 6.00065 11.8838C6.00065 13.1446 6.89608 14.1667 8.00065 14.1667Z" stroke="#FCFBFA" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                        <span>Popular</span>
                                    </div>
                                </div>
                                <div class="pricing-plan-price">
                                    <div class="pricing-plan-price-value">
                                        ৳ ৫০০০
                                    </div>
                                    <div class="pricing-plan-price-label">৩ দিন</div>
                                </div>
                                <a href="#" class="button button-primary text-decoration-none" q:key="qO_1" q:id="1z">
                                    Get started with Pro
                                </a>
                            </div>
                            <div class="pricing-plan-separator">
                                <svg fill="none" height="2" viewBox="0 0 232 2" width="232"
                                    xmlns="http://www.w3.org/2000/svg" q:key="4c_0">
                                    <line stroke="#D6CFC2" stroke-dasharray="0.01 6" stroke-linecap="round"
                                        stroke-width="1.5" x1="0.75" x2="231.25" y1="1.25" y2="1.25"></line>
                                </svg>
                            </div>
                            <div class="pricing-plan-features">
                                <div class="pricing-plan-label">
                                    Everything on
                                    <span class="pricing-plan-label-plan">
                                        Starter
                                    </span>
                                    plus:
                                </div>
                                <div class="pricing-plan-features-item">
                                    <svg fill="none" height="16" viewBox="0 0 16 16" width="16"
                                        xmlns="http://www.w3.org/2000/svg" q:key="G6_0">
                                        <path
                                            d="M10.0007 6.33331L7.00065 9.99998L5.66732 8.66665M14.1673 7.99998C14.1673 11.4057 11.4064 14.1666 8.00065 14.1666C4.5949 14.1666 1.83398 11.4057 1.83398 7.99998C1.83398 4.59422 4.5949 1.83331 8.00065 1.83331C11.4064 1.83331 14.1673 4.59422 14.1673 7.99998Z"
                                            stroke="#888581" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5"></path>
                                    </svg>
                                    <span>
                                        Plan Description
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-5 d-flex justify-content-center p-1 card-container" id="2nd plan">
                        <div class="card h-100 pricing-plan" style="max-width: 22rem; width: 18rem;">
                            <div class="pricing-plan-top">
                                <div class="pricing-plan-title">
                                    <span>Gold</span>
                                    <div class="pricing-plan-title-badge">
                                        <svg fill="none" height="16" viewBox="0 0 16 16" width="16"
                                            xmlns="http://www.w3.org/2000/svg" q:key="B4_0">
                                            <path
                                                d="M8.00065 14.1667C10.8541 14.1667 13.1673 11.6667 13.1673 8.66667C13.1673 5.222 10.0918 2.78077 8.85307 1.9372C8.56929 1.74395 8.19435 1.82757 7.99678 2.10835L6.38863 4.39386C6.15096 4.73163 5.66501 4.77276 5.37203 4.48167C5.11194 4.22325 4.68797 4.22046 4.45454 4.5032C3.37417 5.81171 2.83398 7.44093 2.83398 8.66667C2.83398 11.6667 5.14718 14.1667 8.00065 14.1667ZM8.00065 14.1667C9.10522 14.1667 10.0007 13.1446 10.0007 11.8838C10.0007 10.495 8.89191 9.48319 8.32548 9.05691C8.13084 8.91044 7.87046 8.91044 7.67583 9.05691C7.1094 9.48319 6.00065 10.495 6.00065 11.8838C6.00065 13.1446 6.89608 14.1667 8.00065 14.1667Z"
                                                stroke="#FCFBFA" stroke-linejoin="round" stroke-width="1.5"></path>
                                        </svg>
                                        <span>Popular</span>
                                    </div>
                                </div>
                                <div class="pricing-plan-price">
                                    <div class="pricing-plan-price-value">
                                        ৳ ৫০০০
                                    </div>
                                    <div class="pricing-plan-price-label">editor/mo</div>
                                </div>
                                <a href="#" class="button button-primary text-decoration-none" q:key="qO_1" q:id="1z">
                                    Get started with Pro
                                </a>
                            </div>
                            <div class="pricing-plan-separator">
                                <svg fill="none" height="2" viewBox="0 0 232 2" width="232"
                                    xmlns="http://www.w3.org/2000/svg" q:key="4c_0">
                                    <line stroke="#D6CFC2" stroke-dasharray="0.01 6" stroke-linecap="round"
                                        stroke-width="1.5" x1="0.75" x2="231.25" y1="1.25" y2="1.25"></line>
                                </svg>
                            </div>
                            <div class="pricing-plan-features">
                                <div class="pricing-plan-label">
                                    Everything on
                                    <span class="pricing-plan-label-plan">
                                        Starter
                                    </span>
                                    plus:
                                </div>
                                <div class="pricing-plan-features-item">
                                    <svg fill="none" height="16" viewBox="0 0 16 16" width="16"
                                        xmlns="http://www.w3.org/2000/svg" q:key="G6_0">
                                        <path
                                            d="M10.0007 6.33331L7.00065 9.99998L5.66732 8.66665M14.1673 7.99998C14.1673 11.4057 11.4064 14.1666 8.00065 14.1666C4.5949 14.1666 1.83398 11.4057 1.83398 7.99998C1.83398 4.59422 4.5949 1.83331 8.00065 1.83331C11.4064 1.83331 14.1673 4.59422 14.1673 7.99998Z"
                                            stroke="#888581" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5"></path>
                                    </svg>
                                    <span>
                                        Plan Description
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-5 d-flex justify-content-center p-1 card-container" id="3rd plan">
                        <div class="card h-100 pricing-plan" style="max-width: 22rem; width: 18rem;">
                            <div class="pricing-plan-top">
                                <div class="pricing-plan-title">
                                    <span>Platinum</span>
                                    <div class="pricing-plan-title-badge">
                                        <svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg" q:key="B4_0"><path d="M8.00065 14.1667C10.8541 14.1667 13.1673 11.6667 13.1673 8.66667C13.1673 5.222 10.0918 2.78077 8.85307 1.9372C8.56929 1.74395 8.19435 1.82757 7.99678 2.10835L6.38863 4.39386C6.15096 4.73163 5.66501 4.77276 5.37203 4.48167C5.11194 4.22325 4.68797 4.22046 4.45454 4.5032C3.37417 5.81171 2.83398 7.44093 2.83398 8.66667C2.83398 11.6667 5.14718 14.1667 8.00065 14.1667ZM8.00065 14.1667C9.10522 14.1667 10.0007 13.1446 10.0007 11.8838C10.0007 10.495 8.89191 9.48319 8.32548 9.05691C8.13084 8.91044 7.87046 8.91044 7.67583 9.05691C7.1094 9.48319 6.00065 10.495 6.00065 11.8838C6.00065 13.1446 6.89608 14.1667 8.00065 14.1667Z" stroke="#FCFBFA" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                        <span>Popular</span>
                                    </div>
                                </div>
                                <div class="pricing-plan-price">
                                    <div class="pricing-plan-price-value">
                                        ৳ ৫০০০
                                    </div>
                                    <div class="pricing-plan-price-label">editor/mo</div>
                                </div>
                                <a href="#" class="button button-primary text-decoration-none" q:key="qO_1" q:id="1z">
                                    Get started with Pro
                                </a>
                            </div>
                            <div class="pricing-plan-separator">
                                <svg fill="none" height="2" viewBox="0 0 232 2" width="232"
                                    xmlns="http://www.w3.org/2000/svg" q:key="4c_0">
                                    <line stroke="#D6CFC2" stroke-dasharray="0.01 6" stroke-linecap="round"
                                        stroke-width="1.5" x1="0.75" x2="231.25" y1="1.25" y2="1.25"></line>
                                </svg>
                            </div>
                            <div class="pricing-plan-features">
                                <div class="pricing-plan-label">
                                    Everything on
                                    <span class="pricing-plan-label-plan">
                                        Starter
                                    </span>
                                    plus:
                                </div>
                                <div class="pricing-plan-features-item">
                                    <svg fill="none" height="16" viewBox="0 0 16 16" width="16"
                                        xmlns="http://www.w3.org/2000/svg" q:key="G6_0">
                                        <path
                                            d="M10.0007 6.33331L7.00065 9.99998L5.66732 8.66665M14.1673 7.99998C14.1673 11.4057 11.4064 14.1666 8.00065 14.1666C4.5949 14.1666 1.83398 11.4057 1.83398 7.99998C1.83398 4.59422 4.5949 1.83331 8.00065 1.83331C11.4064 1.83331 14.1673 4.59422 14.1673 7.99998Z"
                                            stroke="#888581" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5"></path>
                                    </svg>
                                    <span>
                                        Plan Description
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    @endsection
