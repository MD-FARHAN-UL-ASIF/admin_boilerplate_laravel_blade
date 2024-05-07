   @extends('wise_corporation.layout.layout')

    @section('content')
        <main class="py-5">
        <section class="container max-width custom-padding">
            <img class="col-12 img-fluid" src="./assets/images/demo.png" alt="">
        </section>
        <section class="container max-width custom-padding pt-5">
            <div class="row justify-content-between align-items-center py-2 --breadcrumb">
                <div class="col-12 col-sm-5">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item fw-semibold"><a class="text-decoration-none"
                                    href="#">হোম</a></li>
                            <li class="breadcrumb-item fw-semibold" aria-current="page">
                                <a class="text-decoration-none" href="#">
                                    ক্যাটাগরি
                                </a>
                            </li>
                            <li class="breadcrumb-item active fw-semibold" aria-current="page">কৃষি</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-sm-5 d-flex justify-content-end">
                    <div>
                        <label class="fw-semibold" for="toShow">এখন দেখছেন</label> 
                        <select class="rounded p-1" name="toShow" id="toShow">
                            <option class="form-control" value="25">25</option>
                            <option class="form-control" value="25">50</option>
                            <option class="form-control" value="25">100</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- order-2 -->
                <div class="co-12 col-md-8 order-lg-3 order-md-1 pp__category__list">
                    <div class="row gap-3 mx-1">
                        <div class="col-12">
                            <div class="row justify-content-between align-items-center category">
                                <div class="col-12 col-lg-4 order-lg-2">
                                    <div class="img-container">
                                        <img class="category-img" src="{{ asset('front/assets/images/1.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 order-lg-1">
                                    <h3 class="mb-3">title</h3>
                                    <h5 class="mb-3">sub heading</h5>
                                    <table class="table table-borderless"
                                        style="background-color: transparent; width: 100%;">
                                        <tbody>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">ইনভেস্টমেন্ট সাইজ:</td>
                                                <td>১,১৭০,০০০,০০০ (একশত সতের কোটি টাকা)</td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">নেট ইনকাম:</td>
                                                <td>২৩৫,৬০০,০০০ (তেইশ কোটি ছাপ্পান্ন লক্ষ টাকা) - প্রতি বছর</td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">IRR:</td>
                                                <td>১৩.৭১%</td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">পেব্যাক পিরিয়ড:</td>
                                                <td>৪.৭ বছর</td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">বিবরণ:</td>
                                                <td class="category__description">
                                                    একটি শান্ত সকালে, নদীর তীরে বসে সূর্যোদয় দেখছিলাম। আকাশে রঙিন আলো
                                                    ফুটে উঠছিল, আর পাখিরা কিচিরমিচির শব্দ করছিল। নদীর পানি শান্ত ছিল এবং
                                                    হালকা বাতাসে পাতারা দুলছিল। এই মনোরম পরিবেশে বসে কিছুক্ষণ প্রকৃতির
                                                    সৌন্দর্য উপভোগ করলাম। হঠাৎ কাছের একটি গাছ থেকে একটি পাখি উড়ে গেল
                                                    এবং আমি তার উড়ন্ত শৈলীর প্রশংসা করলাম। সকালে এই শান্ত মুহূর্তটি
                                                    আমার মনে দীর্ঘকাল ধরে থাকবে।
                                                </td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">মূল্য:</td>
                                                <td>২০,০০০<span class="fw-semibold">৳</span></td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">সর্বশেষ সংস্করণ:</td>
                                                <td>২রা মে, ২০২৪</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 order-3 row justify-content-around">
                                    <button class="mt-3 btn-buy border-0 rounded-4 py-2 px-4 col-12 col-md-4 col-sm-4">
                                        <a class="text-decoration-none text-white py-auto fw-medium fs-6"
                                            aria-current="page" href="{{ url('wise-corporation/checkout') }}">ক্রয় করুন</a>
                                    </button>
                                    <button class="mt-3 btn-buy border-0 rounded-4 py-2 px-4 col-12 col-md-4 col-sm-4 _df_button"
                                        source="{{ url('front/assets/documents/CAIE_A review of applications in federated learning_deposit.pdf') }}">
                                        <span class="text-white fw-medium fs-6">
                                            স্যাম্পল দেখুন
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row justify-content-between align-items-center category">
                                <div class="col-12 col-lg-4 order-lg-2">
                                    <div class="img-container">
                                        <img class="category-img" src="{{ url('front/assets/images/1.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 order-lg-1">
                                    <h3 class="mb-3">title</h3>
                                    <h5 class="mb-3">sub heading</h5>
                                    <table class="table table-borderless"
                                        style="background-color: transparent; width: 100%;">
                                        <tbody>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">ইনভেস্টমেন্ট সাইজ:</td>
                                                <td>১,১৭০,০০০,০০০ (একশত সতের কোটি টাকা)</td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">নেট ইনকাম:</td>
                                                <td>২৩৫,৬০০,০০০ (তেইশ কোটি ছাপ্পান্ন লক্ষ টাকা) - প্রতি বছর</td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">IRR:</td>
                                                <td>১৩.৭১%</td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">পেব্যাক পিরিয়ড:</td>
                                                <td>৪.৭ বছর</td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">বিবরণ:</td>
                                                <td class="category__description">
                                                    একটি শান্ত সকালে, নদীর তীরে বসে সূর্যোদয় দেখছিলাম। আকাশে রঙিন আলো
                                                    ফুটে উঠছিল, আর পাখিরা কিচিরমিচির শব্দ করছিল। নদীর পানি শান্ত ছিল এবং
                                                    হালকা বাতাসে পাতারা দুলছিল। এই মনোরম পরিবেশে বসে কিছুক্ষণ প্রকৃতির
                                                    সৌন্দর্য উপভোগ করলাম। হঠাৎ কাছের একটি গাছ থেকে একটি পাখি উড়ে গেল
                                                    এবং আমি তার উড়ন্ত শৈলীর প্রশংসা করলাম। সকালে এই শান্ত মুহূর্তটি
                                                    আমার মনে দীর্ঘকাল ধরে থাকবে।
                                                </td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">মূল্য:</td>
                                                <td>২০,০০০<span class="fw-semibold">৳</span></td>
                                            </tr>
                                            <tr style="background-color: transparent;">
                                                <td class="fw-semibold" style="width: 35%;">সর্বশেষ সংস্করণ:</td>
                                                <td>২রা মে, ২০২৪</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 order-3 row justify-content-around">
                                    <button class="mt-3 btn-buy border-0 rounded-4 py-2 px-4 col-12 col-md-4 col-sm-4">
                                        <a class="text-decoration-none text-white py-auto fw-medium fs-6"
                                            aria-current="page" href="./checkout.html">ক্রয় করুন</a>
                                    </button>
                                    <button class="mt-3 btn-buy border-0 rounded-4 py-2 px-4 col-12 col-md-4 col-sm-4 _df_button"
                                        source="./assets/documents/CAIE_A review of applications in federated learning_deposit.pdf">
                                        <span class="text-white fw-medium fs-6">
                                            স্যাম্পল দেখুন
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- middle -->
                <!-- <div class="col-12 col-md-1 order-2 order-md-2 order-lg-2 order-sm-2 empty-div"></div> -->
                <!-- order-1 -->
                <div class="co-12 col-md-4 order-lg-1 order-md-3 order-sm-3 pp__category__list">
                    <div class="bg-dark rounded mb-3 p-3">
                        <h4 class="text-white">কীওয়ার্ড</h4>
                        <form class="row justify-content-center mt-3 rounded serach-bg align-items-center gap-3">
                            <div class="col-12 input-field-group">
                                <input class="input-field" type="text" name="keyword" id="keyword"
                                    placeholder="কীওয়ার্ড দিয়ে অনুসন্ধান করুন">
                                <div class="icon-container">
                                    <ion-icon name="search"></ion-icon>
                                </div>
                            </div>

                            <div class="col-12">
                                <input class="form-control btn btn-success fw-bold" type="submit"
                                    value="অনুসন্ধান করুন">
                            </div>
                        </form>
                    </div>
                    <div class="bg-dark rounded p-3">
                        <h4 class="text-white">প্রকারভেদ সমূহ</h4>
                        <div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="agriculture"
                                    value="agriculture">
                                <label for="agriculture" class="text-white">কৃষি</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="rmg" value="rmg">
                                <label for="rmg" class="text-white">RMG ও টেক্সটাইল</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="services" value="services">
                                <label for="services" class="text-white">সার্ভিস সমূহ</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="healthcare"
                                    value="healthcare">
                                <label for="healthcare" class="text-white">স্বাস্থ্যসেবা</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="electricalAndElectronics"
                                    value="electricalAndElectronics"><label for="electricalAndElectronics"
                                    class="text-white">ইলেকট্রিক্যাল এবং ইলেকট্রনিক্স</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="digitalAndIt"
                                    value="digitalAndIt">
                                <label for="digitalAndIt" class="text-white">ডিজিটাল এবং আইটি</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="powerAndEnergy"
                                    value="powerAndEnergy">
                                <label for="powerAndEnergy" class="text-white">পাওয়ার ও এনার্জি</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="consumerGoods"
                                    value="consumerGoods">
                                <label for="consumerGoods" class="text-white">ভোগ্যপণ্য</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="tourism" value="tourism">
                                <label for="tourism" class="text-white">পর্যটন শিল্প</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="foodAndBeverage"
                                    value="foodAndBeverage">
                                <label for="foodAndBeverage" class="text-white">খাদ্য ও পানীয়</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="leatherAndJute"
                                    value="leatherAndJute">
                                <label for="leatherAndJute" class="text-white">চামড়া এবং পাট ইত্যাদি</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="pharmaceuticals"
                                    value="pharmaceuticals">
                                <label for="pharmaceuticals" class="text-white">ফার্মাসিউটিক্যালস</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 py-1">
                                <input type="radio" class="radio-btn" name="category" id="others" value="others">
                                <label for="others" class="text-white">
                                    অন্নান্য
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection