    <header>
        <div class="bg-first text-white py-3">
            <div class="container max-width">
                <div class="row custom-padding top-contacts">
                    <div class="col-12 col-md-6 d-flex gap-3 social-links-top-left">
                        <div class="d-flex align-items-center text-center">
                            <ion-icon name="mail"></ion-icon>
                            <span class="text-control-6 fs-6 px-1">
                                <a class="text-decoration-none" style="color: #ffffff;"
                                    href="mailto:wisecorporationbd@gmail.com">wisecorporationbd@gmail.com</a>
                            </span>
                        </div>
                        <div class="d-flex align-items-center text-center">
                            <ion-icon name="call"></ion-icon>
                            <span class="text-control-6 fs-6 px-1">
                                <a class="text-decoration-none" style="color: #ffffff;"
                                    href="tel:01790-188891">01790-188891</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex gap-5 social-links-top-right">
                        <div class="">
                            <a class="text-decoration-none text-white"
                                href="https://www.facebook.com/WiseCorporationBD">
                                <div class="social-fb d-flex align-items-center">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                    <span class="text-control-6 fs-6 px-1">ফেসবুক পেজ</span>
                                </div>
                            </a>
                        </div>
                        <div class="">
                            <a class="text-decoration-none text-white" href="#">
                                <div class="social-yt d-flex align-items-center">
                                    <ion-icon name="logo-youtube"></ion-icon>
                                    <span class="text-control-6 fs-6 px-1">ইউটিউব</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container max-width">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand w-25" href="/">
                        <img class="py-2" height="auto" width="80%" src="{{ asset('front/assets/images/logo_wise.jpeg') }}" alt="">
                    </a>
                    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start w-75" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a class="navbar-brand" href="#">
                                <img class="py-2" height="auto" width="50%" src="{{ asset('front/assets/images/logo_wise.jpeg') }}" alt="">
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item nav-style">
                                    <a class="nav-link fw-semibold px-md-4" aria-current="page"
                                        href="{{ url ('wise-corporation/project-profile') }}">প্রজেক্ট প্রোফাইল</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold px-md-4" aria-current="page"
                                        href="{{ url ('wise-corporation/service') }}">সার্ভিস</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link fw-semibold px-md-4" aria-current="page"
                                        href="./service.html">সার্ভিস সমূহ</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="#">
                                                    বিজনেস প্ল্যান তৈরী করা
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    মার্কেট স্টাডি
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    ফিনান্সিয়াল এনালাইসিস 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    ফান্ড ম্যানেজমেন্ট
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    কোম্পানি প্রোফাইল
                                                </a>
                                            </li>
                                        </ul>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold px-md-4" aria-current="page" href="#">আমাদের
                                        সম্পর্কে</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-item btn-stylish rounded-4 py-1 px-3 mx-1 contact-btn">
                        <a class="nav-link text-white fw-semibold py-auto" aria-current="page"
                            href="./contact_us.html">যোগাযোগ করুন</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>