<div>

    <section class="breadcrumb-header" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner">
                <div class="head-info text-center">
                    <h1>Product Details</h1>
                    <ul class="list-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- :: Single Product Section -->
    <section class="product-details py-100">
        <div class="container">
            <div class="row align-items-start ">

                <!-- Product Gallery -->
                <div class="col-lg-6 mb-4 mb-lg-0" style="gap: 10px">

                    <!-- Thumbnails -->
                    <div class="product-thumbs me-3 justify-content-center mr-3">
                        <img src="assets/images/blog/6.jpg" alt="Thumb 1" onclick="changeImage(this)">
                        <img src="assets/images/blog/7.jpg" alt="Thumb 2" onclick="changeImage(this)">
                        <img src="assets/images/blog/2.jpg" alt="Thumb 3" onclick="changeImage(this)">
                        <img src="assets/images/blog/1.jpg" alt="Thumb 4" onclick="changeImage(this)">
                    </div>

                    <!-- Main Image -->
                    <div class="product-image flex-grow-1 text-center">
                        <img id="main-product-img" src="assets/images/blog/6.jpg" alt="Demo Phone"
                            class="img-fluid rounded shadow">
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6">
                    <div class="product-info">
                        <h2 class="mb-3">{{$data->product_title}}</h2>
                        <!-- <h4 class="text-primary mb-3">₹19,999</h4> -->
                        <p class="mb-4 text-dark">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fringilla enim ac dui
                            porta commodo. Nam dapibus ipsum id augue efficitur eleifend. Vestibulum dolor lectus,
                            placerat a arcu vitae, aliquet dapibus mauris. Suspendisse potenti. Nulla velit elit, rutrum
                            ac placerat id, venenatis quis augue. Pellentesque imperdiet egestas malesuada. Duis quis
                            eros nibh. Aenean a metus posuere, vehicula eros accumsan, pretium mi. Suspendisse sed dolor
                            molestie, ultricies elit vel, semper magna. Integer non dignissim sem. Nulla leo turpis,
                            fermentum vel malesuada rutrum, pharetra quis erat. Pellentesque habitant morbi tristique
                            senectus et netus et malesuada fames ac turpis egestas.
                        </p>


                        <div class="col-md-12">
                            <h3 class="mb-3 text-dark">Product Details</h3>
                            <p>
                                • Display: 6.5-inch Full HD+ <br>
                                • Processor: Octa-core 2.4 GHz <br>
                                • Camera: 64MP + 12MP Dual Rear, 32MP Front <br>
                                • Battery: 5000mAh with Fast Charging <br>
                                • Storage: 128GB Internal, Expandable up to 512GB
                            </p>
                        </div>
                        <div class="d-flex gap-3 ">
                            <a href="{{route('contact')}}" class="btn btn-outline-dark">
                                <i class="fas fa-phone"></i> Enquire Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>


    <!-- 2section  About-->
    <section class="blog area py-100">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="sec-title text-center mb-5">
                            <h2>Our Products</h2>
                            <h3>Accessories That <span>Power Your
                                    Lifestyle</span></h3>
                            <p>
                                At <strong>MobileHub</strong>, we create accessories that combine innovation, style, and
                                performance.
                                From fast chargers to crystal-clear audio devices, our products are designed to make
                                your mobile
                                experience smarter and better every day.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="blog-item">
                                    <div class="img-blog ">
                                        <img class="img-fluid products-img-radius " src="assets/images/blog/1.jpg"
                                            alt="01 Blog">
                                    </div>
                                    <div class="text-blog p-20">
                                        <div class="time-and-tag ">
                                            <!-- <span class="time">May 5, 2019</span> -->

                                        </div>
                                        <h5 class="title-blog"><a href="single-blog.html">Steps To Encourage Yourself To
                                                Work</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor
                                            ...</p>
                                        <div class="buttons">
                                            <a href="single-blog.html" class="blog-open mt-11">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-item">
                                    <div class="img-blog">
                                        <img class="img-fluid products-img-radius" src="assets/images/blog/2.jpg"
                                            alt="02 Blog">
                                    </div>
                                    <div class="text-blog p-20">

                                        <div class="time-and-tag">
                                            <!-- <span class="time">May 11, 2019</span> -->

                                        </div>
                                        <h5 class="title-blog"><a href="single-blog.html">Steps To Encourage Yourself To
                                                Work</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor
                                            ...</p>
                                        <a href="single-blog.html" class="blog-open mt-11">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-item">
                                    <div class="img-blog">
                                        <img class="img-fluid products-img-radius" src="assets/images/blog/3.jpg"
                                            alt="03 Blog">
                                    </div>
                                    <div class="text-blog p-20">

                                        <div class="time-and-tag">
                                            <!-- <span class="time">May 28, 2019</span> -->

                                        </div>
                                        <h5 class="title-blog"><a href="single-blog.html">Steps To Encourage Yourself To
                                                Work</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor
                                            ...</p>
                                        <a href="single-blog.html" class="blog-open mt-11">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-item">
                                    <div class="img-blog">
                                        <img class="img-fluid products-img-radius" src="assets/images/blog/4.jpg"
                                            alt="01 Blog">
                                    </div>
                                    <div class="text-blog p-20">

                                        <div class="time-and-tag">
                                            <!-- <span class="time">May 5, 2019</span> -->

                                        </div>
                                        <h5 class="title-blog"><a href="single-blog.html">Steps To Encourage Yourself To
                                                Work</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor
                                            ...</p>
                                        <a href="single-blog.html" class="blog-open mt-11">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-item">
                                    <div class="img-blog ">
                                        <img class="img-fluid products-img-radius" src="assets/images/blog/5.jpg"
                                            alt="03 Blog">
                                    </div>
                                    <div class="text-blog p-20">

                                        <div class="time-and-tag">
                                            <!-- <span class="time">May 28, 2019</span> -->

                                        </div>
                                        <h5 class="title-blog"><a href="single-blog.html">Steps To Encourage Yourself To
                                                Work</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor
                                            ...</p>
                                        <a href="single-blog.html" class="blog-open mt-11">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-item">
                                    <div class="img-blog">
                                        <img class="img-fluid products-img-radius" src="assets/images/blog/6.jpg"
                                            alt="03 Blog">
                                    </div>
                                    <div class="text-blog p-20">

                                        <div class="time-and-tag">
                                            <!-- <span class="time">May 28, 2019</span> -->

                                        </div>
                                        <h5 class="title-blog"><a href="single-blog.html ">Steps To Encourage Yourself
                                                To Work</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor
                                            ...</p>
                                        <a href="single-blog.html" class="blog-open mt-11">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pagination-blog-area">
                                    <div class="d-flex justify-content-center">
                                        <span class="btn-1">View All</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        class="rounded shadow-lg text-white position-relative d-flex flex-column justify-content-center">
                        <img src="assets/images/sponsors/09_sponsors.jpg" alt="Sponsor showcase" class="rounded"
                            style="height: 400px; object-fit: cover;" />
                    </div>
                </div>

                <!-- Right Side  -->
                <div class="sec-title  col-md-6 d-flex flex-column justify-content-center text-dark">
                    <h4 class="fw-bold mb-4">About Mobile hub</h4>

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




    <script>
    function changeImage(element) {
        let mainImg = document.getElementById("main-product-img");
        mainImg.src = element.src;
    }



    function changeImage(element) {
        // Main image change karo
        let mainImg = document.getElementById("main-product-img");
        mainImg.src = element.src;

        // Sare thumbnails se 'active' class hatao
        let thumbs = document.querySelectorAll(".product-thumbs img");
        thumbs.forEach(img => img.classList.remove("active"));

        // Jo click hua uspar 'active' class lagao
        element.classList.add("active");
    }

    // By default pehli image ko active bana do
    document.addEventListener("DOMContentLoaded", () => {
        let firstThumb = document.querySelector(".product-thumbs img");
        if (firstThumb) {
            firstThumb.classList.add("active");
        }
    });
    </script>

</div>