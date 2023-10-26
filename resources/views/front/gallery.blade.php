@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70" style="background-image: url('assets/img/breadcrumb.png')">
    <div class="container">
      <h2>Gallery</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Gallery</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <div class="page-section-full pt-70 pb-50">
    <div class="container">
      <div class="row">

        @foreach ($rows as $row)
          <div class="col-lg-4 col-sm-6 mb-30">
            <div class="gallery-item-single"><img src="{{ asset($row->image_path) }}"
                alt="{{ $row->title ?? 'Gallery Image' }}">
              <div class="overly-icon">
                <a href="{{ asset($row->image_path) }}">
                  <img src="{{ asset($row->image_path) }}" alt="{{ $row->title ?? 'Gallery Image' }}">
                </a>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </div>
@endsection
