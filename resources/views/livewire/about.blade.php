<div>

<style>
    .mission-section h2 {
  font-size: 26px;
  margin-bottom: 15px;
  text-transform: uppercase;
}

.mission-section p {
  font-size: 16px;
  line-height: 1.7;
  color: #333;
}

.mission-section img {
  border-radius: 12px;
  transition: transform 0.3s ease-in-out;
}

.mission-section img:hover {
  transform: scale(1.05);
}
</style>


<section class="breadcrumb-header" id="page">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner">
                    <div class="head-info text-center">
                        <h1>About Us </h1>
                        <ul class="list-breadcrumb">
                            <li><a  href="{{ route('home') }}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>



           <section class="py-5 ">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>About US </h2>
                    <h3>Innovation Needs
                        <span>the Right Circuit</span>
                    </h3>
                    <!-- <p>From concept to production—MobileHub designs, engineers, and manufactures high-precision
                                    electronic solutions. We build robust digital products—PCBs, embedded systems, and IoT
                                    devices—that perform flawlessly in the real world.</p> -->
                </div>
            </div>

            <div class="row g-4 align-items-stretch">

                <!-- Left Card -->
                <div class="col-md-6">
                    <div
                        class="rounded  text-white position-relative d-flex flex-column justify-content-center">
                        <img src="assets/images/sponsors/09_sponsors.jpg" alt="Sponsor showcase" class="rounded"
                            style="height: 400px; object-fit: cover;" />
                    </div>
                </div>

                <!-- Right Side  -->
                <div class="sec-title  col-md-6 d-flex flex-column justify-content-center ">
                    <h3 class="fw-bold mb-4 pl-3 ">About Mobile hub </h3>

                    <div class="mb-3 d-flex sec-title ">
                        <i class="bi bi-plus-circle text-primary fs-4 me-3"></i>
                        <div>
                            <p> Welcome to <strong> MobileHub</strong>, your trusted destination for high-quality
                                adapters
                                and electronic accessories.
                                We believe that even the smallest product can make the biggest difference in your daily
                                life.
                            </p>
                        </div>
                    </div>

                    <div class="mb-3 d-flex sec-title">
                        <i class="bi bi-check2-square text-primary fs-4 me-3"></i>
                        <div>
                            <p> <strong>With a commitment to reliability, durability, and innovation, our
                                    products</strong>
                                are designed to keep your devices connected and your life moving without interruptions.
                                From
                                adapters to essential tech accessories, every item we create undergoes strict quality
                                checks
                                to ensure long-lasting performance.
                            </p>
                        </div>
                    </div>

                    <div class="mb-3 d-flex">
                        <i class="bi bi-clock-history text-primary fs-4 me-3"></i>
                        <div>
                            <p> <strong>At MobileHub ,</strong> we don’t just sell products — we build trust. Our
                                mission is
                                to deliver smart, affordable, and dependable solutions that simplify your everyday tech
                                experience.
                            </p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
 

<section class="mission-section py-5">
  <div class="container">
    <div class="row align-items-center mb-5">
      <!-- Text Left | Image Right -->
      <div class="col-md-6">
        <h2 class="fw-bold">OUR MISSION</h2>
        <p>
          Our mission is to preserve the rich heritage of traditional Indian
          craftsmanship while providing customers with high-quality, authentic
          products. We aim to support local artisans and bring the timeless art
          of hand-block printing and pure cotton fabric to homes worldwide.
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="{{asset('assets/images/sponsors/09_sponsors.jpg')}}" alt="Our Mission" class="img-fluid rounded-3 shadow-sm" />
      </div>
    </div>

    <div class="row align-items-center">
      <!-- Image Left | Text Right -->
      <div class="col-md-6 text-center">
        <img src="{{asset('assets/images/sponsors/09_sponsors1.jpg')}}" alt="Sustainability" class="img-fluid rounded-3 shadow-sm" />
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold">SUSTAINABILITY & VALUES</h2>
        <p>
          We strongly believe in eco-friendly practices, sustainable production,
          and fair trade. By using natural dyes, pure cotton, and ethical
          methods, we ensure our products are both skin-friendly and
          environmentally responsible, keeping tradition alive for future
          generations.
        </p>
      </div>
    </div>
  </div>
</section>

    

      
 

   <x-testimonials />


</div>


