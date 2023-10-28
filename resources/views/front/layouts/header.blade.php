@php
  use App\Models\Service;
  $services = Service::all();
@endphp
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  @stack('seo_meta_tag')
  @stack('head_schemas')
</head>

<body>
  <!-- Start Header Area -->
  <header class="header">
    <!-- Header Top -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <!-- Header Top Left -->
          <div class="col-lg-5">
            <div class="header-left">
              <i class="fa-solid fa-phone-alt"></i> Helpline No <a href="tel:+919870406867"><strong>(+91)
                  9870406867</strong></a>
              <span>/</span>
              <i class="fa-solid fa-envelope-open-text"></i> <a href="mailto:info@innayatcro.com">
                info@innayatcro.com</a>
            </div>
          </div>

          <!-- Header Top Right -->
          <div class="col-lg-7">
            <div class="header-right text-right">
              <div class="social-icon"> <span><i class="fa-solid fa-map-marker-alt"></i> Mayfield Garden, B-16 Ground,
                  Sector 50, Gurugram, Haryana 122002</span></div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Header Bottom -->
    <div class="header-bottom sticky-header">
      <div class="container">
        <div class="row">
          <!-- Logo -->
          <div class="col-lg-3 col-6 align-self-center">
            <div class="logo"><a href="{{ url('/') }}"><img src="{{ url('/web') }}/assets/img/logo.png"
                  alt="Logo"></a></div>
          </div>

          <div class="col-lg-9 col-6 align-self-center">

            <!-- Menu -->
            <div class="menu">
              <nav>
                <ul>
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ url('/about-us') }}">About us</a></li>
                  <li class="menu-item-has-children"><a href="{{ url('services') }}">Services</a>
                    <ul>
                      @foreach ($services as $row)
                        <li><a href="{{ url($row->service_slug) }}">{{ $row->service_name }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                  <li><a href="{{ url('/contact-us') }}">Contact us</a></li>
                  <li><a href="{{ url('/news') }}">News & Blog</a></li>
                </ul>
              </nav>
            </div>

            <!-- Menu OPen -->
            <div class="canvas_open_full">
              <div class="canvas_open"><a href="javascript:void()" aria-label="Menu Open"><i class="fa fa-bars"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Area -->

  <!-- Start Mobile Menu Area -->
  <div class="mobile-menu-area">
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="offcanvas_menu">
      <div class="offcanvas_menu_wrapper">
        <div class="canvas_close"><a href="javascript:void()" aria-label="Menu Open"><i class="bi bi-x-lg"></i></a>
        </div>
        <div class="mobile-logo"><a href="{{ url('/') }}"><img src="{{ url('/web') }}/assets/img/logo.png"
              alt="logo"></a></div>
        <div id="menu" class="text-left ">
          <ul class="offcanvas_main_menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about-us') }}">About us</a></li>
            <li class="menu-item-has-children"><a href="{{ url('services') }}">Services</a>
              <ul class="sub-menu">
                @foreach ($services as $row)
                  <li><a href="{{ url($row->service_slug) }}">{{ $row->service_name }}</a></li>
                @endforeach
              </ul>
            </li>
            <li><a href="{{ url('/contact-us') }}">Contact us</a></li>
            <li><a href="{{ url('/news') }}">News & Blog</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Mobile Menu Area -->
