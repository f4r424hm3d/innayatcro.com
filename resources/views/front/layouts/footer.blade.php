  @php
    use App\Models\Service;
    $footerSer1 = Service::offset(0)
        ->limit(5)
        ->get();
    $footerSer2 = Service::offset(5)
        ->limit(5)
        ->get();
  @endphp
  <!-- Start Footer Area -->
  <footer class="footer">
    <div class="footer-top pt-70 pb-50" style="background-image: url('{{ url('/web') }}/assets/img/footer-bg.png');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="footer-widegts-single">
              <h3 class="title">Contact Info</h3>
              <ul class="contact-info">
                <li><i class="fa-solid fa-location-dot"></i>Mayfield Garden, B-16 Ground, Sector 50, Gurugram, Haryana
                  122002</li>
                <li><i class="fa-solid fa-phone"></i><a href="tel:+919870406867"><strong>(+91) 9870406867</strong></a>
                </li>
                <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@innayatcro.com">info@innayatcro.com</a>
                </li>
                <li><i class="fa fa-clock"></i>Mon-Sat: 9:00 AM to 5:00 PM</li>
              </ul>
              <div class="footer-social mt-30">
                <span><a href="https://www.facebook.com" aria-label="Facebook"><i
                      class="fa-brands fa-facebook"></i></a></span>
                <span><a href="https://www.instagram.com" aria-label="Instagram"><i
                      class="fa-brands fa-instagram"></i></a></span>
                <span><a href="https://www.linkedin.com" aria-label="Linkedin"><i
                      class="fa-brands fa-linkedin-in"></i></a></span>
              </div>
            </div>
          </div>

          <div class="col-lg-2">
            <div class="footer-widegts-single">
              <h3 class="title">Quick Links</h3>
              <ul>
                <li><a href="{{ url('/') }}/">Home</a></li>
                <li><a href="{{ url('/about-us') }}/">About us</a></li>
                <li><a href="{{ url('services') }}/">Services</a></li>
                <li><a href="{{ url('/contact-us') }}/">Contact us</a></li>
                <li><a href="{{ url('/news') }}/">News & Blog</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="footer-widegts-single">
              <h3 class="title">Services</h3>
              <ul>
                @foreach ($footerSer1 as $row)
                  <li><a href="{{ url($row->service_slug) }}">{{ $row->service_name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="footer-widegts-single mtmn">
              <h3 class="title hidden-xs">&nbsp;</h3>
              <ul>
                @foreach ($footerSer2 as $row)
                  <li><a href="{{ url($row->service_slug) }}">{{ $row->service_name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom pt-25 pb-25">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="copyright-text">
              <p>Copyright by InnayatCRO. All rights reserved in 2023.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Area -->
  <div class="scroll-area"> <i class="bi bi-arrow-up"></i> </div>
  <!-- Js File -->
  <script src="{{ url('web/') }}/assets/js/modernizr.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/jquery-3.6.3.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/popper.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/bootstrap.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/wow.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/owl.carousel.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/jquery.nice-select.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/mixitup.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/ajax-form.js"></script>
  <script src="{{ url('web/') }}/assets/js/mobile-menu.js"></script>
  <script src="{{ url('web/') }}/assets/js/script.js"></script>
  </body>

  </html>
