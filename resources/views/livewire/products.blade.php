<div>

 <section class="breadcrumb-header" id="page">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner">
                    <div class="head-info text-center">
                        <h1>Our Products </h1>
                        <ul class="list-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Products</li>
                        </ul>
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
            @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="blog-item">
                    <!-- Product Image -->
                    <div class="img-blog">
                        <img class="img-fluid products-img-radius"
                             src="{{ asset('allimage/'.$product->thumbnail_image) }}"
                             alt="{{ $product->product_title }}">
                    </div>

                    <!-- Product Text -->
                    <div class="text-blog p-20">
                        <h5 class="title-blog">
                            <a href="{{ url('detailprod/'.$product->id) }}">
                                {{ $product->product_title }}
                            </a>
                        </h5>
                        <p>
                            {{ Str::limit(strip_tags($product->product_description), 100, '...') }}
                        </p>
                        <div class="buttons">
                            <a href="{{ url('detailprod/'.$product->id) }}" class="blog-open mt-11">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Pagination (अगर चाहिए) -->
            <div class="col-md-12">
                <div class="pagination-blog-area">
                    <div class="d-flex justify-content-center">
                        {{ $products->links() }} {{-- अगर paginate() use करोगे तो --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="testimonials py-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="sec-title text-center">
                            <h2>What Clients Said</h2>
                            <h3>Great Talk From <span>Customer</span></h3>
                            <p>Postup Help You Determining A Goal, Choosing Your Tools And Developing Your Businesses To Make It Distinct. We Build Best Digital Products That Function</p>
                        </div>
                    </div>
                </div>
                <div class="testimonials-box owl-carousel owl-theme">
                    <div class="testimonials-item">
                        <div class="box-item">
                            <i class="fas fa-quote-right item-quote"></i>
                            <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
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
                                <img class="img-fluid" src="assets/images/testimonials/01_testimonials.jpg" alt="01 Testimonials">
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
                            <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
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
                                <img class="img-fluid" src="assets/images/testimonials/02_testimonials.jpg" alt="02 Testimonials">
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
                            <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
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
                                <img class="img-fluid" src="assets/images/testimonials/03_testimonials.jpg" alt="03 Testimonials">
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


</div>


