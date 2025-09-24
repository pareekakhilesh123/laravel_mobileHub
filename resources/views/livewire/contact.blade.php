<div>
  <section class="breadcrumb-header" id="page">
    <div class="overlay"></div>
    <div class="container">
      <div class="banner">
        <div class="head-info text-center">
          <h1>Contact Us</h1>
          <ul class="list-breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><i class="fas fa-angle-right"></i></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

 <section class="contact">
  <div class="container-fluid">
    <div class="row">
      <!-- Contact Form -->
      <div class="col-md-6">
        <div class="contact-text-box">
          <div class="sec-title">
            <h2>Leave Your Message</h2>
            <h3>Get In <span>Touch</span></h3>
          </div>

          <!--Form Start -->
        <form method="post" action="{{ route('postcontact') }}" id="itemForm" 
      enctype="multipart/form-data" class="needs-validation" novalidate>
  @csrf
  <div class="row g-3 p-3 bg-light shadow rounded">

    <!-- Heading -->
    <div class="col-12 text-center mb-3">
      <h3 class="fw-bold">Contact Us</h3>
      <p class="text-muted">We would love to hear from you!</p>
    </div>

    <!-- Name -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
      <div class="invalid-feedback">Please enter your name.</div>
    </div>

    <!-- Email -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">Email</label>
      <input type="email" name="email" class="form-control text-lowercase" placeholder="Enter your email" required>
      <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>

    <!-- Phone -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">Mobile Number</label>
      <input type="tel" name="phone" class="form-control" placeholder="10-digit number" 
             pattern="[0-9]{10}" maxlength="10" required>
      <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
    </div>

    <!-- Message -->
    <div class="col-md-12">
      <label class="form-label fw-semibold">Message</label>
      <textarea name="message" rows="4" class="form-control" placeholder="Leave your message here..." required></textarea>
      <div class="invalid-feedback">Message cannot be empty.</div>
    </div>

    <!-- Submit -->
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-primary px-5 py-2 mt-3 shadow-sm">
        Send Message
      </button>
    </div>
  </div>
</form>

          <!--  Form End -->

        </div>
      </div>

      <!-- Map Section -->
      <div class="col-md-6">
        <div class="map">
          <div class="map-box">
            <iframe src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<script>
  (function () {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();

  // ( numbers, max 10 digits)
  document.querySelector("input[name='phone']").addEventListener("input", function (e) {
    this.value = this.value.replace(/[^0-9]/g, "").slice(0, 10);
  });
</script>
</div>


