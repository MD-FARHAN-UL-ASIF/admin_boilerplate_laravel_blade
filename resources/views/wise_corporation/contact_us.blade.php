 @extends('wise_corporation.layout.layout')
 @section('content')
     <main>
         <section class="container max-width custom-padding my-5">
             <div class="row gap-3">
                 <div class="col-12 col-md-6 contact-container">
                     <div class="mb-5">
                         <h4 class="fw-semibold">আমাদের সাথে যোগাযোগ করুন</h4>
                         <p>আমরা আপনার জন্য ২৪/৭ নিরন্তর সার্ভিস দিয়ে যাচ্ছি।</p>
                         <hr>
                     </div>
                      @if (Session::has('error_message'))
                                    <div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong> {{ Session::get('error_message') }}</strong>
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
                     <form name="contactForm" id="contactForm" action="{{ url('wise-corporation/contactFormSubmit') }}"
                         method="post" novalidate>@csrf
                         <div class="mb-3">
                             <label for="name" class="form-label fw-semibold">আপনার নাম</label>
                             <input type="text" class="form-control" id="name" name="name"
                                 placeholder="আপনার নামটি লিখুন" required>
                         </div>
                         <div class="row">
                             <div class="mb-3 col-12 col-sm-6">
                                 <label for="phone" class="form-label fw-semibold">ফোন নাম্বার</label>
                                 <input type="tel" class="form-control" id="phone" name="phone"
                                     placeholder="আপনার ফোন নাম্বার টি লিখুন" required>
                             </div>
                             <div class="mb-3 col-12 col-sm-6">
                                 <label for="email" class="form-label fw-semibold">ইমেইল</label>
                                 <input type="email" class="form-control" id="email" name = "email"
                                     placeholder="আপনার ইমেইল টি
                                     লিখুন" required>
                             </div>
                         </div>
                         <div class="mb-3">
                             <label for="subject" class="form-label fw-semibold">প্রসঙ্গ</label>
                             <input type="text" class="form-control" id="subject" name="subject"
                                 placeholder=" কোন প্রসঙ্গে যোগাযোগ করতে চান" required>
                         </div>
                         <div class="mb-3">
                             <label for="message" class="form-label fw-semibold">বার্তা</label>
                             <textarea class="form-control" id="message" name="message" rows="4" placeholder=" আপনার বার্তাটি লিখুন" required></textarea>
                         </div>
                         <button type="submit" class="btn submit-btn col-12 fw-bold">সাবমিট করুন</button>
                     </form>
                 </div>
                 <div class="col-12 col-md-5 map-container">
    <div style="position: relative; padding-bottom: 75%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7300.378273799061!2d90.4143969!3d23.8118725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70036f76d97%3A0x8b917cf4ad1c566d!2sWISE%20Corporation!5e0!3m2!1sen!2sbd!4v1715407797387!5m2!1sen!2sbd" 
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100% !important; border: 0;" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

             </div>
         </section>
     </main>
 @endsection
