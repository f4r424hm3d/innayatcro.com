@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70" style="background-image: url('assets/img/breadcrumb.png')">
    <div class="container">
      <h2>{{ $blog->title }}</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>News & Blog</li>
        <li>{{ $blog->title }}</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start Blog Details Section -->
  <section class="blog-details-section pt-120 pb-90">
    <div class="container">
      <div class="row">

        <div class="col-lg-8 mb-30">
          <div class="blog-details-full">
            <div class="thumbnail"><img src="{{ asset($blog->thumbnail_path) }}" alt="{{ $blog->title }}"></div>
            <div class="b-auth-section mt-30 mb-20">
              <div class="row">
                <div class="col-md-6 order-md-first order-last">
                  <div class="left-a">
                    @if ($blog->user_id != null)
                      <span class="img"><img src="{{ url('web/') }}/assets/img/auth-img.png" alt="auth"></span>
                      <span>by <a href="{{ url('/about-us') }}">Dr {{ $blog->getUser->name }}</a></span>
                    @endif
                    <span>{{ getFormattedDate($blog->created_at, 'd M, Y') }}</span>
                  </div>
                </div>
                {{-- <div class="col-md-6 align-self-center text-right">
                  <div class="blog-share">
                    <span><a href="#"><i class="fa-solid fa-link"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-linkedin"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-twitter"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-facebook-f"></i></a></span>
                  </div>
                </div> --}}
              </div>
            </div>
            <!-- Content -->
            <div class="content">
              {!! $blog->description !!}
            </div>
            <!-- Author Content -->
            <div class="blog-author-section mt-20 mb-60">
              <div class="thumb"><img src="{{ url('web/') }}/assets/img/b-auth.png" alt="img"></div>
              <div class="content-auth">
                <div class="auth-header">
                  <h4><a href="#">Dr {{ $blog->getUser->name }}</a></h4>
                  <div class="a-social-icon">
                    <span><a href="#"><i class="fa-brands fa-facebook-f"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-dribbble"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-behance"></i></a></span>
                  </div>
                </div>
                <p>Fusce condimentum enim vestibulum libero gravida, ut accumsan quam bibendum. Curabitur gravida
                  faucibus est sit amet cursus. Duis accumsan vel arcu pretium viverra.</p>
              </div>
            </div>

            <!-- Next Prev -->
            <div class="singlepage-navigation border-0">
              <div class="row">
                <div class="col-sm-6">
                  <a href="#">
                    <div class="singlepage-navi-icon"><i class="fa-solid fa-arrow-left-long"></i></div>
                    <div class="singlepage-navi-text"><span>Prev Blog</span>
                      <h5>Blog Name Here</h5>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6">
                  <a class="float-right" href="#">
                    <div class="singlepage-navi-text"><span>Next Blog</span>
                      <h5>Blog Name Here</h5>
                    </div>
                    <div class="singlepage-navi-icon"><i class="fa-solid fa-arrow-right-long"></i></div>
                  </a>
                </div>
              </div>
            </div>

            @if ($blogs->count() > 0)
              <!-- Related Post Section -->
              <div class="related-blog-section mt-120 mb-0">
                <div class="row">
                  <div class="col-lg-12 mb-20">
                    <div class="section-title">
                      <h2>Related Blogs</h2>
                    </div>
                  </div>
                </div>

                <div class="row">
                  @foreach ($blogs as $row)
                    <!-- Single -->
                    <div class="col-lg-6 col-md-6 mb-30">
                      <div class="blog-single-item">
                        <div class="thumbnail"><img src="{{ asset($row->thumbnail_path) }}" alt="{{ $row->title }}">
                        </div>
                        <div class="content">
                          <div class="auth">
                            <span>by <a href="{{ url('/about-us') }}">Dr Jay Balan</a></span>
                            <span>{{ getFormattedDate($row->created_at, 'd M, Y') }}</span>
                          </div>
                          <h3>{{ $row->title }}</h3>
                          <a class="button-1" href="{{ url($row->slug) }}">Read more <i
                              class="fa-solid fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            @endif

            <!-- End Cooment Section -->
          </div>
        </div>

        <!-- Sidebar Widgets -->
        <div class="col-lg-4 mb-30">
          <!-- Sidebar Widgets -->
          <div class="sidebar-widgets">

            @if ($blogs->count() > 0)
              <div class="sidebar-single-widget socialicon-widget mb-30">
                <h5 class="pb-20">Trending Blogs</h5>
                <div class="sidebar-blog-widgets">

                  <div class="single-item">
                    <div class="thumb"><a href="{{ url($row->slug) }}"><img src="{{ asset($row->thumbnail_path) }}"
                          alt="blog"></a></div>
                    <div class="content">
                      <span>by <a href="{{ url('/about-us') }}">Dr {{ $blog->getUser->name }}</a></span>
                      <h4><a href="{{ url($row->slug) }}">{{ $row->title }}</a>
                      </h4>
                    </div>
                  </div>

                </div>
              </div>
            @endif

            @include('front.forms.sidebar-form')

            @if ($treatments->count() > 0)
              <div class="sidebar-single-widget category-widget mb-30">
                <h5 class="pb-10">Treatments</h5>
                <ul>
                  @foreach ($treatments as $row)
                    <li>
                      <a href="{{ url($row->treatment_slug) }}">
                        <i class="fa-solid fa-caret-right"></i> M{{ $row->treatment_name }}
                      </a>
                    </li>
                  @endforeach
                </ul>
              </div>
            @endif

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog Details Section -->
@endsection
