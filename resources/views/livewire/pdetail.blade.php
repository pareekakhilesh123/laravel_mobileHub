<div>
    <style>
    .thumb-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        cursor: pointer;
        transition: transform 0.2s;
        border: 2px solid transparent;
        border-radius: 4px;
    }

    .thumb-img:hover {
        transform: scale(1.05);
        border: 2px solid #666;
    }

    .thumb-img.active {
        border: 2px solid #000;
    }

    /* Scrollable thumbs for mobile */
    .thumb-scroll {
        overflow-x: auto;
        padding: 10px 0;
        scrollbar-width: thin;
    }

    .thumb-scroll::-webkit-scrollbar {
        height: 6px;
    }

    .thumb-scroll::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 4px;
    }

    /* Mobile Responsive */
    @media (max-width: 767px) {
        .main-img {
            width: 100%;
            max-height: 350px;
            object-fit: contain;
        }

        .product-thumbs {
            flex-direction: row;
        }
        .rowdir{
            align-items: center;
        }
    }
    </style>

    <section class="breadcrumb-header" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner">
                <div class="head-info text-center">
                    <h1>Product Details</h1>
                    <ul class="list-breadcrumb">
                        <li><a  href="{{ route('home') }}">Home</a></li>
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
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex flex-md-row rowdir" style="gap: 10px ">

                    <!-- Thumbnails -->
                    <div class="product-thumbs me-3 justify-content-center mr-3" style="
   
">
                        {{-- Thumbnail Image --}}
                        <img src="{{ asset('allimage/' . $data->thumbnail_image) }}" alt="Main Thumb"
                            class="thumb-img active" onclick="changeImage(this)">

                        {{-- Extra Images (comma separated) --}}
                        @php
                        $images = $data->images ? explode(',', $data->images) : [];
                        @endphp
                        @foreach($images as $img)
                        <img src="{{ asset('allimage/' . trim($img)) }}" alt="Thumb" class="thumb-img"
                            onclick="changeImage(this)">
                        @endforeach
                    </div>

                    <!-- Main Image -->
                    <div class="product-image flex-grow-1 text-center">
                        <img id="main-product-img" src="{{ asset('allimage/' . $data->thumbnail_image) }}"
                            alt="{{ $data->product_title }}" class="img-fluid rounded shadow">
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6">
                    <div class="product-info">
                        <h2 class="mb-3">{{ $data->product_title }}</h2>

                        <div class="d-flex gap-3">
                            <a href="javascript:void(0)" class="btn btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">
                                <i class="fas fa-phone" style="transform: rotate(90deg);"></i> Enquire Now
                            </a>
                        </div>

                        <h3 class="my-3 text-dark">Product Information</h3>
                        <div class="accordion mb-3" id="productAccordion">

                            <!-- Product Description -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFeature">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFeature" aria-expanded="true"
                                        aria-controls="collapseFeature">
                                        View Specification / Features
                                    </button>
                                </h2>
                                <div id="collapseFeature" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFeature" data-bs-parent="#productAccordion">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark">
                                            @php
                                            $keys = $data->feature_key ? explode(',', $data->feature_key) : [];
                                            $values = $data->feature_value ? explode(',', $data->feature_value) : [];
                                            @endphp
                                            @forelse($keys as $i => $key)
                                            • <strong>{{ trim($key) }}</strong> : {{ $values[$i] ?? '' }} <br>
                                            @empty
                                            <span class="text-muted">No features added</span>
                                            @endforelse
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Features -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingDesc">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseDesc" aria-expanded="false"
                                        aria-controls="collapseDesc">
                                        View Product Description
                                    </button>
                                </h2>
                                <div id="collapseDesc" class="accordion-collapse collapse" aria-labelledby="headingDesc"
                                    data-bs-parent="#productAccordion">
                                    <div class="accordion-body">
                                        <p class="mb-0 text-dark">
                                            {!! $data->product_description !!}
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>



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
                @foreach($relproducts as $product)
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
                                <a href="{{ url('detailprod/' . $product->id . '/' . str_replace(' ', '_', $product->product_title)) }}">
                                    {{ $product->product_title }}
                                </a>
                            </h5>
                            <p>
                                {{ Str::limit(strip_tags($product->product_description), 100, '...') }}
                            </p>
                            <div class="buttons">
                                <a href="{{ url('detailprod/' . $product->id . '/' . str_replace(' ', '_', $product->product_title)) }}" class="blog-open mt-2">Read More</a>
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
                        <img src="{{asset('assets/images/sponsors/09_sponsors.jpg')}}" alt="Sponsor showcase"
                            class="rounded" style="height: 400px; object-fit: cover;" />
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

        <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header bg-dark text-white">
                        <h5 class="modal-title" id="enquiryModalLabel">Product Enquire</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form method="post" action="{{ route('enqpost') }}" id="itemForm" enctype="multipart/form-data"
                            class="needs-validation" novalidate>
                            @csrf
                            <div class="row g-3 p-2">

                                <!-- Product title (readonly show + hidden for submit) -->
                                <div class="col-md-12">
                                    <label class="form-label fw-semibold text-dark">Product Name</label>
                                    <input type="text" name="product_title" value="{{ $data->product_title }}"
                                        class="form-control" readonly>
                                    <input type="hidden" name="product_id" value="{{ $data->id }}" required>
                                </div>

                                <!-- Name -->
                                <div class="col-md-12">
                                    <label class="form-label fw-semibold text-dark">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name"
                                        required oninput="name_validate(this)">
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-12">
                                    <label class="form-label fw-semibold text-dark">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email"
                                        required>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-12">
                                    <label class="form-label fw-semibold text-dark">Mobile Number</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="10-digit number"
                                        pattern="[0-9]{10}" maxlength="10" required oninput="mobile_valid(this)>
                                    <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
                                </div>

                                <!-- Message -->
                                <div class="col-md-12">
                                    <label class="form-label fw-semibold text-dark">Message</label>
                                    <textarea name="message" rows="4" class="form-control"
                                        placeholder="Leave your message here..." required></textarea>
                                    <div class="invalid-feedback">Message cannot be empty.</div>
                                </div>

                                <!-- Success message (hidden by default) -->
                                <div class="col-12">
                                    <div id="successMessage" class="alert alert-success d-none mt-2">
                                         Your enquiry has been submitted successfully!
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-2 mt-3 shadow-sm">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>

                        <script>
                        // Bootstrap validation + success message
                        (function() {
                            'use strict'

                            const form = document.getElementById('itemForm');
                            const successMsg = document.getElementById('successMessage');

                            form.addEventListener('submit', function(event) {
                                // Check if form is valid
                                if (!form.checkValidity()) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                } else {
                                    // Agar valid hai -> success message show kare
                                    event
                                        .preventDefault(); // remove this line agar backend pe submit karna ho
                                    successMsg.classList.remove('d-none');

                                    // Optional: 3s baad success message hide ho jaye
                                    setTimeout(() => {
                                        successMsg.classList.add('d-none');
                                        form.reset(); // form clear
                                        form.classList.remove('was-validated');
                                    }, 3000);
                                }

                                form.classList.add('was-validated');
                            }, false)
                        })();
                        </script>

                    </div>


                </div>
            </div>
        </div>



    </section>




  <script>
function changeImage(element) {
    
    document.getElementById("main-product-img").src = element.src;
 
    let thumbs = document.querySelectorAll(".product-thumbs img");
    thumbs.forEach(img => img.classList.remove("active"));
 
    element.classList.add("active");
}
 
document.addEventListener("DOMContentLoaded", () => {
    let firstThumb = document.querySelector(".product-thumbs img");
    if (firstThumb) {
        firstThumb.classList.add("active");
        document.getElementById("main-product-img").src = firstThumb.src;
    }
});
</script>


</div>