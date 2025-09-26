<div>
    <!-- 1section -->
    <section class="header" id="page">

        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner display-table">
                        <div class="head-info table-cell text-center">
                            <div class="top-handline">Powering the Future with Smart Electronic Solutions</div>
                            <h1 class="handline">Smart Technology. Smarter Solutions.</h1>
                            <p>Delivering cutting-edge electronic & IT solutions that shape the future of technology and
                                empower industries worldwide.</p>
                            <div class="buttons">
                                <a href="{{route('products')}}" class="btn-1">Get Started</a>
                                <a href="{{route('contact')}}" class="btn-2">read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2section -->
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


    <!-- 3section  About-->
    <section class="blog area py-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center mb-5">
                        <h2>Our Products</h2>
                        <h3>Accessories That <span>Power Your Lifestyle</span></h3>
                        <p>
                            At <strong>MobileHub</strong>, we create accessories that combine innovation, style,
                            and performance. From fast chargers to crystal-clear audio devices,
                            our products are designed to make your mobile experience smarter and better every day.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($products as $product)
               <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="blog-item h-100">
            <!-- Product Image -->
            <div class="img-blog">
                <img class="img-fluid products-img-radius w-100 h-100" 
                    style="object-fit: cover; max-height: 280px;" 
                    src="{{ asset('allimage/' . $product->thumbnail_image) }}" 
                    alt="{{ $product->product_title }}">
            </div>

            <!-- Product Text -->
            <div class="text-blog p-3">
                <h5 class="title-blog">
                    <a href="{{ url('detailprod/' . $product->id) }}">
                        {{ $product->product_title }}
                    </a>
                </h5>
                <p>
                    {{ Str::limit(strip_tags($product->product_description), 100, '...') }}
                </p>
                <div class="buttons">
                    <a href="{{ url('detailprod/' . $product->id) }}" class="blog-open mt-2">Read More</a>
                </div>
            </div>
        </div>
    </div>
                @endforeach


                <div class="col-md-12">
                                <div class="pagination-blog-area">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('products') }}" class="btn-1">View All</a>
                                    </div>
                                </div>
                            </div>

            </div>
    </section>



    <!-- ::  4section About One -->
    <section class="questions-and-presentation " id="about">
        <div class="features py-100-70 blog-item">
            <div class="container">

                <!-- Section Title -->
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="sec-title text-center">
                            <h2 class="fw-bold">Key Features</h2>
                            <h3 class="mb-3">Accessories That Power<span> Your Lifestyle </span></h3>
                            <p class="text-muted">
                                At <strong>MobileHub</strong>, our accessories are crafted to make your daily life
                                smarter and easier.
                                From fast charging to premium audio and durable designs, we focus on delivering
                                technology that lasts.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Features Items -->
                <div class="row">

                    <!-- Feature 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="features-item p-4 text-center shadow-sm rounded bg-white h-100">
                            <div class="icon-and-title mb-2">
                                <i class="fas fa-bolt"></i>
                                <div class="title">
                                    <h4 class="fw-bold mb-0" style="float: left;">Fast Charging</h4>
                                </div>
                            </div>
                            <p>High-speed chargers and cables that ensure safe, efficient, and reliable charging for all
                                your devices.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="features-item p-4 text-center shadow-sm rounded bg-white h-100">
                            <div class="icon-and-title mb-2">
                                <i class="fas fa-headphones-alt"></i>
                                <div class="title">
                                    <h4 class="fw-bold mb-0" style="float: left;">Premium Sound</h4>
                                </div>
                            </div>
                            <p>Crystal-clear audio accessories including earphones and headphones, built for music
                                lovers and professionals alike.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="features-item p-4 text-center shadow-sm rounded bg-white h-100">
                            <div class="icon-and-title mb-2">
                                <i class="fas fa-shield-alt"></i>
                                <div class="title">
                                    <h4 class="fw-bold mb-0" style="float: left;">Durability & Safety</h4>
                                </div>
                            </div>
                            <p>Rugged, long-lasting accessories designed with advanced safety features to protect your
                                devices from damage.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!--  5Section  -->
    <section class="questions-and-presentation  ">
        <div style="background-color: #f9f9f9;" class=" py-100-70 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="sec-title text-center">
                            <h2>What Clients Said</h2>
                            <h3>Great Talk From <span>Customer</span></h3>
                            <p>Postup Help You Determining A Goal, Choosing Your Tools And Developing Your Businesses To
                                Make It
                                Distinct. We Build Best Digital Products That Function</p>
                        </div>
                    </div>

                    <div class="container industry-section">
                        <div class="row g-4 ">

                            <div class="col-6 col-md-3 mb-4">
                                <div class="industry-card">
                                    <img src="{{asset('assets/images/icon/icon-1.svg')}}" alt="" class="img-fluid mb-2"
                                        style=" height:70px;">
                                    <h5>Telecom</h5>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 mb-4">
                                <div class="industry-card">
                                    <img src="{{asset('assets/images/icon/icon-2.svg')}}" alt="" class="img-fluid mb-2"
                                        style=" height:70px;">
                                    <h5>Telecom</h5>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 mb-4">
                                <div class="industry-card">
                                    <img src="{{asset('assets/images/icon/icon-3.svg')}}" alt="" class="img-fluid mb-2"
                                        style="height:70px;">
                                    <h5>Telecom</h5>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 mb-4">
                                <div class="industry-card">
                                    <img src="{{asset('assets/images/icon/icon-4.svg')}}" alt="" class="img-fluid mb-2"
                                        style=" height:70px;">
                                    <h5>Telecom</h5>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 mb-4">
                                <div class="industry-card">
                                    <img src="{{asset('assets/images/icon/icon-5.svg')}}" alt="" class="img-fluid mb-2"
                                        style=" height:70px;">
                                    <h5>Telecom</h5>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 mb-4">
                                <div class="industry-card">
                                    <img src="{{asset('assets/images/icon/icon-6.svg')}}" alt="" class="img-fluid mb-2"
                                        style=" height:70px;">
                                    <h5>Telecom</h5>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 mb-4">
                                <div class="industry-card">
                                    <img src="{{asset('assets/images/icon/icon-7.svg')}}" alt="" class="img-fluid mb-2"
                                        style="height:70px;">
                                    <h5>Telecom</h5>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 mb-4">
                                <div class="industry-card">
                                    <img src="{{asset('assets/images/icon/icon-8.svg')}}" alt="" class="img-fluid mb-2"
                                        style=" height:70px;">
                                    <h5>Telecom</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--  6section component -->
    <section class="statistic py-100-70">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center">
                        <h2 style="color: #FFFFFF;">Our Statistics</h2>
                        <h3 style="color: #f9f9f9;">Some <span>Facts</span> About Us</h3>
                        <p style="color: #fff888;">Postup Help You Determining A Goal, Choosing Your Tools And
                            Developing Your Businesses To Make It Distinct. We Build Best Digital Products That Function
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="item-statistic">
                        <i class="lnr lnr-coffee-cup"></i>
                        <div class="count">129</div>
                        <div class="name-count">Cup Of Tea</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="item-statistic">
                        <i class="lnr lnr-magic-wand"></i>
                        <div class="count">123</div>
                        <div class="name-count">Awesome jobs</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="item-statistic">
                        <i class="lnr lnr-gift"></i>
                        <div class="count">105</div>
                        <div class="name-count">Winning Awards</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="item-statistic">
                        <i class="lnr lnr-flag"></i>
                        <div class="count">208</div>
                        <div class="name-count">Working hours</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  7Section -->
    <section class="testimonials py-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center">
                        <h2>What Clients Said</h2>
                        <h3>Great Talk From <span>Customer</span></h3>
                        <p>Postup Help You Determining A Goal, Choosing Your Tools And Developing Your Businesses To
                            Make It Distinct. We Build Best Digital Products That Function</p>
                    </div>
                </div>
            </div>
            <div class="testimonials-box owl-carousel owl-theme">
                <div class="testimonials-item">
                    <div class="box-item">
                        <i class="fas fa-quote-right item-quote"></i>
                        <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <ul class="rate-star">
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item-talk">
                        <div class="img-box">
                            <img class="img-fluid" src="assets/images/testimonials/01_testimonials.jpg"
                                alt="01 Testimonials">
                        </div>
                        <div class="info">
                            <h5>Amir Mohamed</h5>
                            <span>Front End</span>
                        </div>
                    </div>
                </div>
                <div class="testimonials-item">
                    <div class="box-item">
                        <i class="fas fa-quote-right item-quote"></i>
                        <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <ul class="rate-star">
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item-talk">
                        <div class="img-box">
                            <img class="img-fluid" src="assets/images/testimonials/02_testimonials.jpg"
                                alt="02 Testimonials">
                        </div>
                        <div class="info">
                            <h5>Abdelrazek Ali</h5>
                            <span>Back End</span>
                        </div>
                    </div>
                </div>
                <div class="testimonials-item">
                    <div class="box-item">
                        <i class="fas fa-quote-right item-quote"></i>
                        <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <ul class="rate-star">
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star active"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item-talk">
                        <div class="img-box">
                            <img class="img-fluid" src="assets/images/testimonials/03_testimonials.jpg"
                                alt="03 Testimonials">
                        </div>
                        <div class="info">
                            <h5>Ahmed Nagah</h5>
                            <span>Mobile App</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- 8section -->
    <section class="sponsors py-100">
        <div class="overlay-3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center ">
                        <h2>Our Clients</h2>
                        <h3>Some Of Our <span>Clients</span></h3>
                        <p>Postup Help You Determining A Goal, Choosing Your Tools And
                            Developing Your Businesses To Make It Distinct. We Build Best Digital Products That
                            Function</p>
                    </div>
                </div>
            </div>
            <div class="sponsors-box owl-carousel owl-theme">
                <div class="sponsors-item">
                    <img class="img-fluid" src="assets/images/sponsors/01_sponsors.png" alt="01 Sponsors">
                </div>
                <div class="sponsors-item">
                    <img class="img-fluid" src="assets/images/sponsors/02_sponsors.png" alt="02 Sponsors">
                </div>
                <div class="sponsors-item">
                    <img class="img-fluid" src="assets/images/sponsors/03_sponsors.png" alt="03 Sponsors">
                </div>
                <div class="sponsors-item">
                    <img class="img-fluid" src="assets/images/sponsors/04_sponsors.png" alt="04 Sponsors">
                </div>
                <div class="sponsors-item">
                    <img class="img-fluid" src="assets/images/sponsors/05_sponsors.png" alt="05 Sponsors">
                </div>
                <div class="sponsors-item">
                    <img class="img-fluid" src="assets/images/sponsors/06_sponsors.png" alt="06 Sponsors">
                </div>
                <div class="sponsors-item">
                    <img class="img-fluid" src="assets/images/sponsors/07_sponsors.png" alt="07 Sponsors">
                </div>
                <div class="sponsors-item">
                    <img class="img-fluid" src="assets/images/sponsors/08_sponsors.png" alt="08 Sponsors">
                </div>
            </div>
        </div>
    </section>












    <!-- 9section -->








    <!-- 10section -->






    <!-- 11section  -->





</div>