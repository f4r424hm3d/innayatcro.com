@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70" style="background-image: url('assets/img/breadcrumb.png')">
    <div class="container">
      <h2>Contact Us</h2>
      <ul>
        <li><a href="{{ url('/') }}/">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start Area -->
  <section class="otherspage-area pt-60">
    <div class="container">
      <div class="contact-toparea pb-75">

        <div class="row">
          <div class="col-lg-6">

            <div class="info-box7">
              <div class="info7-img"><img src="{{ url('/web') }}/assets/img/icon/location31.png" alt="location"></div>
              <span>Gurgaon Office</span>
              <h5>Mayfield Garden, B-16 Ground, Sector 50, Gurugram, Haryana 122002</h5>
            </div>

            <div class="info-box7">
              <div class="info7-img"><img src="{{ url('/web') }}/assets/img/icon/phone31.png" alt="phone"></div>
              <span>Helpline No.</span>
              <h3><a href="tel:+919870406867">+91-9870406867</a></h3>
            </div>

            <div class="info-box7">
              <div class="info7-img"><img src="{{ url('/web') }}/assets/img/icon/email31.png" alt="email"></div>
              <span>Email</span>
              <h3><a href="mailto:info@innayatcro.com">info@innayatcro.com</a></h3>
            </div>

          </div>

          <div class="col-lg-6">
            <div class="contact-form contact-page">
              <div class="section-title mb-10">
                <h2>Have Questions? <br> Get in Touch!</h2>
              </div>
              <div class="get-appointment-form">
                <form id="contact-form" action="" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="single-field">
                        <label for="name">Your Name</label>
                        <input type="text" placeholder="Write your name" name="name" id="name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="single-field">
                        <label for="email">Email</label>
                        <input type="email" placeholder="example@gmail.com" name="email" id="email">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="single-field">
                        <label for="phone">Phone Number</label>
                        <input type="text" placeholder="+66 555 666 888 22" name="phone" id="phone">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="single-field">
                        <label for="phone">Select Service</label>
                        <select name="depname">
                          <option>Select</option>
                          <option value="">Pre-clinical Operations</option>
                          <option value="">Clinical Operation</option>
                          <option value="">Medical Writing</option>
                          <option value="">Pharmacovigilance</option>
                          <option value="">Quality Assurance</option>
                          <option value="">Medical Affairs</option>
                          <option value="">Biostatistics & Programming</option>
                          <option value="">Regulatory Affairs</option>
                          <option value="">Data Management</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="single-field">
                        <label for="phone">Your Message</label>
                        <textarea name="message" placeholder="Write Your Message Here" id="message"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12 mb-0">
                      <p><span>*</span> Visit our agency or simply send us an email anytime you want. If you have any
                        questions, please feel free to contact us.</p>
                    </div>
                    <div class="col-md-5 col-sm-8">
                      <div class="single-field pt-20 pb-0">
                        <button class="button-1">Submit Now <i class="fa-solid fa-arrow-right"></i></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Otherpage Area -->

  <!-- Start Map Area -->
  <div class="contact-page-map-section">
    <div class="contact_map wow fadeInUp" data-wow-delay=".3s">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d895853.776830466!2d76.71196420371388!3d28.706728162325604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2279ac7be797%3A0xaccdeb80709c86ea!2sInnayat%20CRO!5e0!3m2!1sen!2sin!4v1697627186191!5m2!1sen!2sin"></iframe>
    </div>

  </div>
  <!-- End Map Area -->
@endsection
