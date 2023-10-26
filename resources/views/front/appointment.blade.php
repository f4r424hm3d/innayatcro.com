@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70" style="background-image: url('assets/img/breadcrumb.png')">
    <div class="container">
      <h2>Appointment</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Appointment</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start get Appointment section -->
  <section class="get-appointment-area">
    <div class="shap"> <img class="shap2 heartbeat" src="{{ url('web/') }}/assets/img/shap/shap5.png" alt="shap"> <img
        class="shap3 heartbeat" src="{{ url('web/') }}/assets/img/shap/shap2.png" alt="shap"> <img class="shap4"
        src="{{ url('web/') }}/assets/img/shap/shap1.png" alt="shap"> </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 mb-35">
          <div class="section-title text-center">
            <h3>Need a Doctor for Check-up?</h3>
            <h2>We Provide The Best Medical Services For You And Your family.</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="get-appointment-form">
            <form action="{{ url('inquiry/appointment/') }}/" method="post">
              @csrf
              <input type="hidden" name="source" value="appointment">
              <input type="hidden" name="source_path" value="{{ URL::full() }}">
              <div class="row">

                <div class="col-lg-3 col-sm-6">
                  <div class="single-field">
                    <label for="treatment_id">Treatment</label>
                    <select name="treatment_id" id="treatment_id">
                      <option>Select Treatment</option>
                      @foreach ($treatments as $row)
                        <option value="{{ $row->id }}">{{ $row->treatment_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                {{-- <div class="col-lg-3 col-sm-6">
                  <div class="single-field">
                    <label for="docname">Doctor</label>
                    <select name="docname" id="docname">
                      <option>Select Doctor</option>
                      <option value="">Dr. Jaya Balan</option>
                    </select>
                  </div>
                </div> --}}

                <div class="col-lg-3 col-sm-6">
                  <div class="single-field">
                    <label for="name">Your Name</label>
                    <input type="text" placeholder="Write your name" name="name" id="name"
                      value="{{ old('name') }}">
                    @error('name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                  <div class="single-field">
                    <label for="phone">Phone Number</label>
                    <input type="text" placeholder="+66 555 666 888 22" name="mobile" id="mobile"
                      value="{{ old('mobile') }}">
                    @error('mobile')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                  <div class="single-field">
                    <label for="email">Email</label>
                    <input type="email" placeholder="example@gmail.com" name="email" id="email"
                      value="{{ old('email') }}">
                    @error('email')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                  <div class="single-field">
                    <label for="appointment_date">Date</label>
                    <input type="date" name="appointment_date" id="appointment_date"
                      value="{{ old('appointment_date') }}">
                    @error('appointment_date')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-9 col-sm-6">
                  <div class="single-field">
                    <label for="message">Message</label>
                    <input type="text" name="message" id="message" value="{{ old('message') }}">
                    @error('message')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-3col-md-6 align-self-end">
                  <div class="single-field">
                    <button class="button-1" type="submit">Get Appointment <i
                        class="fa-solid fa-arrow-right"></i></button>
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
