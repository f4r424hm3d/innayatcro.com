<div class="sidebar-single-widget widget-appointment mb-30">
  <h5 class="pb-20">Make an appointment</h5>
  <div class="get-appointment-form">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    @error('g-recaptcha-response')
      <span class="text-danger">{{ $message }}</span>
    @enderror
    <form action="{{ url('inquiry/appointment') }}" method="post">
      @csrf
      <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
      <input type="hidden" name="source" value="appointment">
      <input type="hidden" name="source_path" value="{{ URL::full() }}">

      <div class="single-field">
        <input type="text" placeholder="Write your name" name="name" id="name" value="{{ old('name') }}">
        @error('name')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="single-field">
        <input type="text" placeholder="+66 555 666 888 22" name="mobile" id="mobile"
          value="{{ old('mobile') }}">
        @error('mobile')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="single-field">
        <input type="email" placeholder="example@gmail.com" name="email" id="email" value="{{ old('email') }}">
        @error('email')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="single-field">
        <select name="service_id" id="service_id">
          <option>Select Service</option>
          @foreach ($allServices as $row)
            <option value="{{ $row->id }}" {{ old('service_id') == $row->id ? 'selected' : '' }}>
              {{ $row->service_name }}</option>
          @endforeach
        </select>
      </div>
      <div class="single-field">
        <input type="date" name="appointment_date" id="appointment_date" value="{{ old('appointment_date') }}">
        @error('appointment_date')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="single-field">
        <textarea name="message" id="message">{{ old('message') }}</textarea>
        @error('message')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="align-self-end">
        <div class="single-field pb-0">
          <button class="button-1" type="submit">Get Appointment <i class="fa-solid fa-arrow-right"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('6LdJY00pAAAAAG9ZbnKhYWi9vHMbtKaVFvF7RH82', {
        action: 'appointment_sidebar'
      })
      .then(function(token) {
        // Set the reCAPTCHA token in the hidden input field
        document.getElementById('g-recaptcha-response').value = token;
      });
  });
</script>
