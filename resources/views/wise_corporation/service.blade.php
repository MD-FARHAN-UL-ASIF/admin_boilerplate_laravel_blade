      @extends('wise_corporation.layout.layout')

    @section('content')
        <main>
            <section
                class="header-bg text-white py-5 d-flex flex-column align-items-center justify-content-center gap-5">
                <div class="container max-width custom-padding">
                    <div class="d-flex align-items-center justify-content-center flex-column">
                        <h1 class="text-one text-center fw-bold">
                            <span class="text-success">আমাদের সার্ভিসগুলো পেতে কন্ট্যাক্ট নম্বরে যোগাযোগ করুন। </span> 
                        </h1>
                        <p>
                            <div class="d-flex align-items-center justify-content-center gap-2 fs-5">
                                <ion-icon name="mail"></ion-icon> 
                                <span>
                                    ইমেইল করুন: 
                                </span>
                                <a 
                                    class="text-decoration-none text-white"
                                    href="mailto:wisecorporationbd@gmail.com">
                                    wisecorporationbd@gmail.com
                                </a>
                            </div>
                        </p> 
                        <p>
                            <div class="d-flex align-items-center justify-content-center gap-2 fs-5">
                                <ion-icon name="call"></ion-icon>
                                <span>
                                    কল করুন: 
                                </span>
                                <a 
                                    class="text-decoration-none text-white"
                                    href="tel:01790-188891">
                                    01790-188891
                                </a>
                            </div>
                        </p> 
                    </div>
                </div>
            </section>
            
            <section class="services">
                <div class="max-width container custom-padding py-5">
                    <div class="row mb-5 gap-5">
                        <div class="col-12 col-md-4">
                            <img class="img-fluid rounded" style="height: 220px;" src="{{ asset ('front/assets/images/tmp-2.jpeg') }}" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            <h1 class="fs-3 fw-bold">বিজনেস প্ল্যান তৈরী</h1>
                            <p class="service__description">
                                আমরা আপনার প্রজেক্টের ধরণ ও ক্যাটাগরি অনুসারে একটি সঠিক বিসনেস প্ল্যান তৈরী করার মাধ্যমে আপনার প্রোডাক্ট এবং সার্ভিসকে মার্কেটে সুসংহত করতে সাহায্য করতে পারি। বিস্তারিত জানতে Learn More বাটন-এ ক্লিক করুন।
                            </p>
                            <button class="px-3 py-1 border-0 rounded-3 button">Learn More</button>
                        </div>
                    </div>
                    <div class="row mb-5 gap-5">
                        <div class="col-12 col-md-4">
                            <img class="img-fluid rounded" style="height: 220px;" src="{{ asset ('front/assets/images/tmp-3.jpeg') }}" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            <h1 class="fs-3 fw-bold">মার্কেট স্টাডি</h1>
                            <p class="service__description">
                                আমরা আপনার প্রজেক্টের ধরণ ও ক্যাটাগরি অনুসারে একটি সঠিক বিসনেস প্ল্যান তৈরী করার মাধ্যমে আপনার প্রোডাক্ট এবং সার্ভিসকে মার্কেটে সুসংহত করতে সাহায্য করতে পারি। বিস্তারিত জানতে Learn More বাটন-এ ক্লিক করুন।
                            </p>
                            <button class="px-3 py-1 border-0 rounded-3 button">Learn More</button>
                        </div>
                    </div>
                    <div class="row mb-5 gap-5">
                        <div class="col-12 col-md-4">
                            <img class="img-fluid rounded" style="height: 220px;" src="{{ asset ('front/assets/images/tmp-4.jpeg') }}" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            <h1 class="fs-3 fw-bold">ফিনান্সিয়াল এনালাইসিস</h1>
                            <p class="service__description">আমরা আপনার প্রজেক্টের ধরণ ও ক্যাটাগরি অনুসারে একটি সঠিক বিসনেস প্ল্যান তৈরী করার মাধ্যমে আপনার প্রোডাক্ট এবং সার্ভিসকে মার্কেটে সুসংহত করতে সাহায্য করতে পারি। বিস্তারিত জানতে Learn More বাটন-এ ক্লিক করুন।</p>
                            <button class="px-3 py-1 border-0 rounded-3 button">Learn More</button>
                        </div>
                    </div>
                    <div class="row mb-5 gap-5">
                        <div class="col-12 col-md-4">
                            <img class="img-fluid rounded" style="height: 220px;" src="{{ asset ('front/assets/images/tmp-5.jpeg') }}" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            <h1 class="fs-3 fw-bold">ফান্ড ম্যানেজমেন্ট</h1>
                            <p class="service__description">
                                আমরা আপনার প্রজেক্টের ধরণ ও ক্যাটাগরি অনুসারে একটি সঠিক বিসনেস প্ল্যান তৈরী করার মাধ্যমে আপনার প্রোডাক্ট এবং সার্ভিসকে মার্কেটে সুসংহত করতে সাহায্য করতে পারি। বিস্তারিত জানতে Learn More বাটন-এ ক্লিক করুন।
                            </p>
                            <button class="px-3 py-1 border-0 rounded-3 button">Learn More</button>
                        </div>
                    </div>
                    <div class="row gap-5">
                        <div class="col-12 col-md-4">
                            <div>
                                <img class="img-fluid rounded" style="height: 220px;" src="{{ asset ('front/assets/images/tmp-6.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h1 class="fs-3 fw-bold">কোম্পানি প্রোফাইল</h1>
                            <p class="service__description">
                                আমরা আপনার প্রজেক্টের ধরণ ও ক্যাটাগরি অনুসারে একটি সঠিক বিসনেস প্ল্যান তৈরী করার মাধ্যমে আপনার প্রোডাক্ট এবং সার্ভিসকে মার্কেটে সুসংহত করতে সাহায্য করতে পারি। বিস্তারিত জানতে Learn More বাটন-এ ক্লিক করুন।
                            </p>
                            <button class="px-3 py-1 border-0 rounded-3 button">Learn More</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    @endsection