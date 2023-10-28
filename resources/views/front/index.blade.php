@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Hero Slider -->
  <section class="hero-slider-area mt--2">

    <div class="hero-slider-full owl-carousel">

      <div class="hero-slider-item h-slider d-flex align-items-center"
        style="background-image: url('{{ url('/web') }}/assets/img/slider/1.webp');">
        <div class="overlay"></div>
        <div class="shap-img">
          <img class="shap1 heartbeat" src="{{ url('/web') }}/assets/img/shap/shap5.png" alt="shap">
          <img class="shap3 rotateme" src="{{ url('/web') }}/assets/img/shap/light.png" alt="shap">
          <img class="shap4 heartbeat" src="{{ url('/web') }}/assets/img/shap/shap2.png" alt="shap">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="hero-caption">
                <h2>Pre-Clinical<br>Research Services</h2>
                <p>Right studies at the right time using proven experimental design, quality compliant management systems,
                  experienced professionals, and state-of-the-art facilities with current technologies</p>
                <a class="button-1" href="pre-clinical-operations.html">Explore Now <i
                    class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hero-slider-item h-slider d-flex align-items-center"
        style="background-image: url('{{ url('/web') }}/assets/img/slider/2.webp');">
        <div class="overlay"></div>
        <div class="shap-img">
          <img class="shap1 heartbeat" src="{{ url('/web') }}/assets/img/shap/shap5.png" alt="shap">
          <img class="shap3 rotateme" src="{{ url('/web') }}/assets/img/shap/light.png" alt="shap">
          <img class="shap4 heartbeat" src="{{ url('/web') }}/assets/img/shap/shap2.png" alt="shap">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="hero-caption">
                <h2>Clinical Research<br>Services</h2>
                <p>We understand the standard operating procedures and regional operational requirements to facilitate
                  Phase I to IV clinical trials including proof of concept study. We are experienced in managing clinical
                  trials of varied sizes and complexity in different therapeutic areas</p>
                <a class="button-1" href="clinical-operation.html">Explore Now <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hero-slider-item h-slider d-flex align-items-center"
        style="background-image: url('{{ url('/web') }}/assets/img/slider/3.webp');">
        <div class="overlay"></div>
        <div class="shap-img">
          <img class="shap1 heartbeat" src="{{ url('/web') }}/assets/img/shap/shap5.png" alt="shap">
          <img class="shap3 rotateme" src="{{ url('/web') }}/assets/img/shap/light.png" alt="shap">
          <img class="shap4 heartbeat" src="{{ url('/web') }}/assets/img/shap/shap2.png" alt="shap">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="hero-caption">
                <h2>Quality Assurance</h2>
                <p>We ensure that your projects will receive the highest level of quality by implementing Quality
                  Management Systems by understanding the need for required compliance as per regulatory requirements.</p>
                <a class="button-1" href="quality-assurance.html">Explore Now <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hero-slider-item h-slider d-flex align-items-center"
        style="background-image: url('{{ url('/web') }}/assets/img/slider/4.webp');">
        <div class="overlay"></div>
        <div class="shap-img">
          <img class="shap1 heartbeat" src="{{ url('/web') }}/assets/img/shap/shap5.png" alt="shap">
          <img class="shap3 rotateme" src="{{ url('/web') }}/assets/img/shap/light.png" alt="shap">
          <img class="shap4 heartbeat" src="{{ url('/web') }}/assets/img/shap/shap2.png" alt="shap">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="hero-caption">
                <h2>Data Management</h2>
                <p>Our team remains involved at every stage of data management and works closely with study sites to
                  generate clean datasets with total quality.</p>
                <a class="button-1" href="data-management.html">Explore Now <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Hero Slider -->

  <!-- Start About Area -->
  <section class="about-area pt-110 pb-110">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-5 col-lg-6">
          <div class="helpline-image"><img class="homeabout-main" src="{{ url('/web') }}/assets/img/about2.png"
              alt="About Image">
            <div class="homeabout-shape1">
              <h2>1.5K+</h2>
              <p>Visitors</p>
            </div>
            <div class="homeabout-shape2"><img class="heartbeat" src="{{ url('/web') }}/assets/img/shap/shap5.png"
                alt="Shape"> </div>
            <div class="homeabout-shape3"><img src="{{ url('/web') }}/assets/img/shap/shap3.png" alt="Shape"> </div>
            <div class="homeabout-shape4"><img src="{{ url('/web') }}/assets/img/shap/helpline-shape2.png"
                alt="Shape"> </div>
            <div class="homeabout-shape5"><img class="shap-bounce"
                src="{{ url('/web') }}/assets/img/shap/helpline-shap.png" alt="Shape"></div>
          </div>
        </div>
        <div class="col-xl-7 col-lg-6">
          <div class="about-content">
            <div class="section-title">
              <h3>Our Profile</h3>
              <h2>About Innayat CRO</h2>
              <p class="text-justify">A well organised international self-regulating management service Centre, Innayat,
                establishes in the year 2020. With the headquarters in Haryana, it sprouts rapidly in Malaysia, Bangalore,
                & Gurgaon. Around the world, it lends its service to the clients who claim the services in Medical Devices
                industries, Pharmaceuticals, Nutraceuticals, Herbs, & in Cosmetics excessively. With at most prompt time
                and quality, it heals the requirements of pharmaceutical companies to transform their ideas and concepts
                into a successful product with efficient drug development. Our innovative approaches to the clients’ needs
                make us unique among the CROs.</p>
              <div class="button-area-about-footer mt-15">
                <a class="button-1 mr-10" href="{{ url('/about-us') }}/">About More <i
                    class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Area -->

  <!-- Start Section -->
  <section class="team-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title mb-30">
            <h3>Our Services</h3>
            <h2>Where can We Help You?</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="what-we-best-area section-bg">
    <div class="what-we-best-img"><img src="{{ url('/web') }}/assets/img/services/clinical-research.jpg"
        alt="Clinical Research Services"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-6">
          <div class="what-we-best-content">
            <div class="section-title">
              <h5>Clinical Trials Management</h5>
              <h2 class="pb-10">Clinical Research Services</h2>
              <p class="text-justify">Our Clinical Operations team is experienced in managing clinical trials of varied
                sizes and complexity in different therapeutic areas like Infectious Diseases, Oncology, Cardiology,
                Gastroenterology, Nephrology, Diabetes, Obstetrics & Gynaecology, Urology, Pain Management, Dermatology,
                Ophthalmology, Neurology, Psychiatry, and Parenteral nutrition. Our team has executed many NDA, ANDA, and
                Biosimilar products clinical development programs including vaccines. The team comprises people with the
                right attitude, flexibility, reliability, and commitment to excellence.</p>
              </p>
            </div>
            <div class="button-area-about-footer mt-15">
              <a class="button-1 mr-10" href="https://www.innayatcro.com/clinical-operation">Explore Now <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-area homep2 pt-40 pb-30">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 mb-10">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('/web') }}/assets/img/services/regulatory-affairs.jpg"
                alt="Regulatory Affairs">
            </div>
            <div class="content">
              <h3 class="mb-2">Regulatory Affairs</h3>
              <p class="mb-15">Our Regulatory Affairs department has competency in handling multiple regulatory
                activities from clinical trial applications.</p>
              <a class="button-1" href="https://www.innayatcro.com/regulatory-ventures">Explore Now <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('/web') }}/assets/img/services/data-management.jpg"
                alt="Data Management"></div>
            <div class="content">
              <h3 class="mb-2">Data Management</h3>
              <p class="mb-15">Our data management team can manage multi-center, multi-country studies in both
                electronic and paper based format.</p>
              <a class="button-1" href="https://www.innayatcro.com/data-management">Explore Now <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('/web') }}/assets/img/services/pre-clinical-research.jpg"
                alt="Pre-Clinical Research Services"></div>
            <div class="content">
              <h3 class="mb-2">Pre-Clinical Research Services</h3>
              <p class="mb-15">INNYATCRO provides critical preclinical research data and innovative solutions through
                the conduct of the right studies.</p>
              <a class="button-1" href="https://www.innayatcro.com/pre-clinical-research">Explore Now <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Start Section -->

  <!-- Start Area -->
  <section class="why-choose-area pt-110 pb-110 section-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mb-30">
          <div class="section-title">
            <h2 class="mb-1">Our Focus<br>We're offering</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
              scrambled it to make a type specimen book.</p>
            <img src="{{ url('/web') }}/assets/img/care.jpg" class="img-fluid rounded-3" alt="img">
          </div>
        </div>

        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-6 mb-30">
              <div class="info-box-2">
                <div class="icon"><img src="{{ url('/web') }}/assets/img/icon/icon1.png" alt="img">
                  <img class="hover-img" src="{{ url('/web') }}/assets/img/icon/icon1w.png" alt="img">
                </div>
                <div class="content">
                  <h4>Speed</h4>
                  <p>Faster you reach each milestone, the faster your compound can be advanced to the next stage.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-30">
              <div class="info-box-2">
                <div class="icon"><img src="{{ url('/web') }}/assets/img/icon/icon1.png" alt="img">
                  <img class="hover-img" src="{{ url('/web') }}/assets/img/icon/icon1w.png" alt="img">
                </div>
                <div class="content">
                  <h4>Quality</h4>
                  <p>We are passionate and determined about what we do and want our name to stand for Excellence.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-30">
              <div class="info-box-2">
                <div class="icon"><img src="{{ url('/web') }}/assets/img/icon/icon1.png" alt="img">
                  <img class="hover-img" src="{{ url('/web') }}/assets/img/icon/icon1w.png" alt="img">
                </div>
                <div class="content">
                  <h4>Customer Focus</h4>
                  <p>We build long lasting, collaborate relationships with our customers and work with them as partners.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-30">
              <div class="info-box-2">
                <div class="icon"><img src="{{ url('/web') }}/assets/img/icon/icon1.png" alt="img">
                  <img class="hover-img" src="{{ url('/web') }}/assets/img/icon/icon1w.png" alt="img">
                </div>
                <div class="content">
                  <h4>Disciplined Timelines</h4>
                  <p>We value the importance of time and adhere to our commitments.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Area -->

  <!-- Start Blog Area -->
  <section class="blog-area homep2 pt-110 pb-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center mb-50">
          <div class="section-title">
            <h3>Our Blogs</h3>
            <h2 class="mb-0">Latest News & Blogs</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Single -->
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('/web') }}/assets/img/blog/blog1.png" alt="blog"></div>
            <div class="content">
              <div class="auth"><span>by Creativemela</span> <span>22 Aug 2023</span></div>
              <h3>Fusce tincidunt commodo sapien, quis porttitor ipsum fringillaet.</h3>
              <a class="blog-btn" href="blog-detail.html">Explore Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('/web') }}/assets/img/blog/blog2.png" alt="blog"></div>
            <div class="content">
              <div class="auth"><span>by Creativemela</span> <span>22 Aug 2023</span></div>
              <h3>Fusce tincidunt commodo sapien, quis porttitor ipsum fringillaet.</h3>
              <a class="blog-btn" href="blog-detail.html">Explore Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('/web') }}/assets/img/blog/blog3.png" alt="blog"></div>
            <div class="content">
              <div class="auth"><span>by Creativemela</span> <span>22 Aug 2023</span></div>
              <h3>Fusce tincidunt commodo sapien, quis porttitor ipsum fringillaet.</h3>
              <a class="blog-btn" href="blog-detail.html">Explore Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>

      <div class="button-area-about-footer mt-15">
        <a class="button-1 mr-10" href="{{ url('/news') }}/">View All <i class="fa-solid fa-arrow-right"></i></a>
      </div>

    </div>
  </section>
  <!-- End Blog Area -->
@endsection
