@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70"
    style="background-image: url('{{ url('/web') }}/assets/img/breadcrumb.png')">
    <div class="container">
      <h2>About Us</h2>
      <ul>
        <li><a href="{{ url('/') }}/">Home</a></li>
        <li>About Us</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start About Area -->
  <section class="about-area pt-110 pb-110">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-5 col-lg-6">
          <div class="helpline-image"><img class="homeabout-main" src="{{ url('/web') }}/assets/img/about2.png"
              alt="About Image">
            <div class="homeabout-shape2"><img class="heartbeat" src="{{ url('/web') }}/assets/img/shap/shap5.png"
                alt="Shape"> </div>
            <div class="homeabout-shape4"><img src="{{ url('/web') }}/assets/img/shap/helpline-shape2.png"
                alt="Shape"> </div>
            <div class="homeabout-shape5"><img class="shap-bounce"
                src="{{ url('/web') }}/assets/img/shap/helpline-shap.png" alt="Shape">
            </div>
          </div>
        </div>
        <div class="col-xl-7 col-lg-6">
          <div class="about-content">
            <div class="section-title">
              <h3>Our Profile</h3>
              <h2>About Us</h2>
              <p class="text-justify">A well organised international self-regulating management service Centre, Innayat,
                establishes in the year 2020. With the headquarters in Haryana, it sprouts rapidly in Malaysia, Bangalore,
                & Gurgaon. Around the world, it lends its service to the clients who claim the services in Medical Devices
                industries, Pharmaceuticals, Nutraceuticals, Herbs, & in Cosmetics excessively. With at most prompt time
                and quality, it heals the requirements of pharmaceutical companies to transform their ideas and concepts
                into a successful product with efficient drug development. Our innovative approaches to the clients’ needs
                make us unique among the CROs.</p>
              <p>A team of highly qualified & focused professionals accomplishes clinical trials. Our core activities
                include Clinical Operations, Data Management, Pharmacovigilance, Biostatistics and SAS Programming,
                Regulatory Affairs, Medical, and Allied Services. The experience and the flexibility to respond to the
                specific tasks with a specific time frame are our main attractions to the clients in the world. If you are
                interested in a clinical trial organization with expertise, experience, and a professional, do contact: <a
                  href="tel:+919870406867">+91-9870406867</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Area -->

  <!-- Start Area -->
  <section class="why-choose-area pt-110 pb-110 section-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-30">
          <div class="section-title text-center">
            <h2 class="mb-1">Real People Real Solutions</h2>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-4 mb-30">
          <div class="info-box-2">
            <div class="icon"><img src="{{ url('/web') }}/assets/img/icon/mission-gray.png" alt="Mission">
              <img class="hover-img" src="{{ url('/web') }}/assets/img/icon/mission-color.png" alt="Mission">
            </div>
            <div class="content">
              <h4>Our Mission</h4>
              <p>Contributing to a safer and healthier world by providing our clients with innovative and high quality
                laboratory, research and advisory services and also creating more opportunities.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-30">
          <div class="info-box-2">
            <div class="icon"><img src="{{ url('/web') }}/assets/img/icon/vision-gray.png" alt="Vision">
              <img class="hover-img" src="{{ url('/web') }}/assets/img/icon/vision-color.png" alt="Vision">
            </div>
            <div class="content">
              <h4>Our Vision</h4>
              <p>Become a global leader to serve science.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-30">
          <div class="info-box-2">
            <div class="icon"><img src="{{ url('/web') }}/assets/img/icon/values-gray.png" alt="Values">
              <img class="hover-img" src="{{ url('/web') }}/assets/img/icon/values-color.png" alt="Values">
            </div>
            <div class="content">
              <h4>Our Values</h4>
              <p>Quality, Customer focus, Virtuous, Team Spirit</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Area -->

  <!-- Start -->
  <section class="homepage-project pt-95 pb-110">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-xl-4">
          <div class="section-title">
            <h3>Services</h3>
            <h2 class="pb-0">We're offering</h2>
          </div>
        </div>
      </div>

      <div class="row pt-50">
        <div class="col-md-12">
          <div class="project-homeslide owl-carousel owl-theme">

            @foreach ($services as $row)
              <div class="project-single">
                <div class="project-img">
                  <img src="{{ asset($row->image_path) }}" alt="{{ $row->service_name }}">
                  <div class="project-hover"><a href="{{ url($row->service_slug) }}"><i
                        class="fa-solid fa-arrow-right"></i></a></div>
                </div>
                <div class="project-content">
                  <h3 class="mb-10">{{ $row->service_name }}</h3>
                  <a class="blog-btn" href="{{ url($row->service_slug) }}">Read more <i
                      class="fa-solid fa-arrow-right"></i></a>
                  {{-- <p>INNYATCRO provides critical preclinical research data and innovative solutions through the conduct of
                    the right studies.</p> --}}
                </div>
              </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Homepage Project -->

  <!-- Start get section -->
  <section class="get-appointment-area style-2 section-bg">
    <div class="container">
      <div class="row">
        <!-- Conent -->
        <div class="col-lg-6 align-self-end">
          <div class="section-title">
            <h3>Need a Service?</h3>
            <h2 class="text-capitalize">Get in Touch</h2>
          </div>
          <div class="get-appointment-image mt-10">
            <img src="{{ url('/web') }}/assets/img/bappointment.png" alt="Get in Touch">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="get-appointment-form style-2">
            <form id="contact-for" action="{{ url('inquiry/contact-us/') }}/" method="POST">
              @csrf
              <input type="hidden" name="source" value="contact-us">
              <input type="hidden" name="source_path" value="{{ URL::full() }}">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-field">
                    <label for="name">Your Name</label>
                    <input type="text" placeholder="Write your name" name="name" id="name"
                      value="{{ old('name') }}">
                    @error('name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-field">
                    <label for="phone">Phone Number</label>
                    <input type="text" placeholder="+66 555 666 888 22" name="mobile" id="mobile"
                      value="{{ old('mobile') }}">
                    @error('mobile')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-field">
                    <label for="email">Email</label>
                    <input type="email" placeholder="example@gmail.com" name="email" id="email"
                      value="{{ old('email') }}">
                    @error('email')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-field">
                    <label for="service_id">Service</label>
                    <select name="service_id" id="service_id">
                      <option>Select Service</option>
                      @foreach ($services as $row)
                        <option value="{{ $row->id }}">{{ $row->service_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="single-field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Write Your Message" id="message">{{ old('message') }}</textarea>
                    @error('message')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <!-- Single -->
                <div class="col-lg-12 mt-30">
                  <div class="single-field">
                    <button class="button-1" type="submit">Send Now <i class="fa-solid fa-arrow-right"></i></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End get Appointment section -->
@endsection
