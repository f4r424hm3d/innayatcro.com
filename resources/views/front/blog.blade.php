@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70" style="background-image: url('assets/img/breadcrumb.png')">
    <div class="container">
      <h2>News & Blog</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>News & Blog</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start Blog Area -->
  <section class="blog-area homep2 pt-110 pb-80">
    <div class="container">
      <div class="row">
        @foreach ($blogs as $row)
          <div class="col-lg-4 col-md-6 mb-30">
            <div class="blog-single-item">
              <div class="thumbnail"><img src="{{ asset($row->thumbnail_path) }}" alt="blog"></div>
              <div class="content">
                <div class="auth"><span>{{ $row->getCategory->category_name }}</span>
                  <span>{{ getFormattedDate($row->created_at, 'd M, Y') }}</span>
                </div>
                <h3>{{ $row->title }}</h3>
                <a class="blog-btn" href="{{ url($row->slug) }}">Read more <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Blog Area -->
@endsection
