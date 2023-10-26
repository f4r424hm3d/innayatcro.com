@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70" style="background-image: url('assets/img/breadcrumb.png')">
    <div class="container">
      <h2>Services</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Services</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start Services Area -->
  <section class="blog-area homep2 pt-110 pb-80">
    <div class="container">
      <div class="row">

        @foreach ($rows as $row)
          <div class="col-lg-4 col-md-6 mb-30">
            <div class="blog-single-item">
              <div class="thumbnail"><img src="{{ asset($row->image_path) }}" alt="treatment"></div>
              <div class="content">
                <h3 class="mb-2">{{ $row->service_name }}</h3>
                <a class="blog-btn" href="{{ url($row->service_slug) }}">Read more <i
                    class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>
  <!-- End Services Area -->
@endsection
