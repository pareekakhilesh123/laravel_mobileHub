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
                <div class="col-lg-12 message-box">
                  <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="col-lg-12 message-box">
                  <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="col-lg-12 message-box">
                  <input type="number" name="phone" placeholder="Mobile Number" required>
                </div>
                <div class="col-lg-12 message-box">
                  <textarea name="message" placeholder="Leave Your Message Here....." required></textarea>
                </div>
                <div class="col-lg-12 message-box">
                  <button type="submit" class="btn-1">Send Your Message</button>
                </div>
              </div>
            </form>
            <!-- ✅ Form End -->

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
</div>


