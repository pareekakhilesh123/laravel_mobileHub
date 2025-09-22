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
            <div class="row">
              
              <!-- Name -->
              <div class="col-lg-12 message-box ">
                <input type="text" name="name" class="form-control " placeholder="Name" required>
                <div class="invalid-feedback ">Please enter your name.</div>
              </div>

              <!-- Email -->
              <div class="col-lg-12 message-box ">
                <input type="email" name="email" class="form-control text-lowercase" placeholder="Email" required>
                <div class="invalid-feedback ">Please enter a valid email address.</div>
              </div>

              <!-- Phone -->
              <div class="col-lg-12 message-box ">
                <input type="tel" name="phone" class="form-control" placeholder="Mobile Number" 
                       pattern="[0-9]{10}" maxlength="10" required>
                <div class="invalid-feedback ">Please enter a valid 10-digit mobile number.</div>
              </div>

              <!-- Message -->
              <div class="col-lg-12 message-box ">
                <textarea name="message" class="form-control" placeholder="Leave Your Message Here....." required></textarea>
                <div class="invalid-feedback ">Message cannot be empty.</div>
              </div>

              <!-- Submit -->
              <div class="col-lg-12 message-box">
                <button type="submit" class="btn-1">Send Your Message</button>
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


