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
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">আপনার নাম</label>
                            <input type="text" class="form-control" id="name" placeholder="আপনার নামটি লিখুন" required>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12 col-sm-6">
                                <label for="phone" class="form-label fw-semibold">ফোন নাম্বার</label>
                                <input type="tel" class="form-control" id="phone" placeholder="আপনার ফোন নাম্বার টি লিখুন" required>
                            </div>
                            <div class="mb-3 col-12 col-sm-6">
                                <label for="email" class="form-label fw-semibold">ইমেইল</label>
                                <input type="email" class="form-control" id="email" placeholder="আপনার ইমেইল টি লিখুন" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label fw-semibold">প্রসঙ্গ</label>
                            <input type="text" class="form-control" id="subject" placeholder="কোন প্রসঙ্গে যোগাযোগ করতে চান" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fw-semibold">বার্তা</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="আপনার বার্তাটি লিখুন" required></textarea>
                        </div>
                        <button type="submit" class="btn submit-btn col-12 fw-bold">সাবমিট করুন</button>
                    </form>
                </div>
                <div class="col-12 col-md-5 map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d645.2656522081877!2d90.41238936957501!3d23.81241990846591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1714388731377!5m2!1sen!2sbd" class="" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>
@endsection