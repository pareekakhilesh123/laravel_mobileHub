<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from postup-jade.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Sep 2025 09:47:22 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>


    <!-- :: Required Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Postup is a Powerful & flexible Creative Agency & Business HTML5 Template. It’s Designed for any types of creative agency, SEO agency, digital marketing, business, startup corporation, landing page and much much more… . We have used latest Bootstrap and HTML. This template is Easy to customize and can bring beauty to your business website interface. Clean Design, UI and UX make it more attractive and eye catchy. This template is very well commented and also have proper help documentation to customize it easily.">
    <meta name="keywords"
        content="agency, architecture, clean, creative, design studio, ecommerce HTML, finance, interior, marketing, minimal, onepage, portfolio, restaurant, startup, accountants, advisors, business, coach, coaches, coaching, consultant, consulting, corporate, finance, mentors, professional services, responsive">

    <!-- :: Title -->
    <title>Mobile Hub --Title</title>

    <!-- :: Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;display=swap">
<!-- icons  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- :: Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">

    <!-- :: Linearicons CSS -->
    <link rel="stylesheet" href="assets/fonts/linearicons/css/style.css">

    <!-- :: Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- :: lity CSS -->
    <link rel="stylesheet" href="assets/css/lity.min.css">

    <!-- :: Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">

    <!-- :: Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- :: Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- :: Style Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- :: Loading -->
    <div class="loading">
        <div class="display-table">
            <div class="table-cell">
                <div class="loading-box">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- :: Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">MobileHub</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navtoggleid"
                aria-controls="navtoggleid" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lnr lnr-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navtoggleid">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownList-1" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownList-1">
                            <a class="dropdown-item" href="{{route('products')}}">All Products</a>
                  
                            <a class="dropdown-item" href="{{route('home')}}">Our Gallery</a>
                            <a class="dropdown-item" href="{{route('home')}}">Our Partner</a>
                            <a class="dropdown-item" href="{{route('home')}}">Testimonials</a>
                            <a class="dropdown-item"href="{{route('home')}}">FAQ</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownList-1" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Industries
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownList-1">
                            <a class="dropdown-item" href="{{route('Industries')}}">Multinational Corporations</a>
                            <a class="dropdown-item" href="{{route('contact')}}">Small & Medium Enterprises</a>
                            <!-- <a class="dropdown-item" href="our-gallery.html">Our Gallery</a>
                            <a class="dropdown-item" href="our-partner.html">Our Partner</a>
                            <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                            <a class="dropdown-item" href="fqa.html">FAQ</a> -->
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownList-2" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownList-2">
                            <a class="dropdown-item" href="{{route('blogs')}}">Blog</a>
                            <a class="dropdown-item" href="single-blog.html">Single Blog</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">contact</a>
                    </li>



                </ul>
            </div>
            <div class="social-media">
                <ul class="icon-nav">
                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                    <li><a href="#" class="open-search-box"><i class="fas fa-search"></i></a></li>
                    <li><a href="#" class="open-side-menu-box"><i class="fas fa-th-list"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- :: Search Box -->
    <div class="search-box">
        <a href="#" class="exit-search-box"><i class="fas fa-times"></i></a>
        <form>
            <input type="search" placeholder="Search Here..">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <!-- :: Side Menu Box -->
    <div class="side-menu-box">
        <a href="#" class="exit-side-menu-box"><i class="fas fa-times"></i></a>
        <div class="inner-side-menu">
            <div class="about-side-menu">
                <h2>Postup</h2>
                <p>Postup Help You Determining A Goal, Choosing Your Tools And Developing Your Businesses To Make It
                    Distinct. We Build Best Digital Products That Function</p>
            </div>
            <div class="latest-works-side-menu">
                <h3>Latest Works</h3>
                <ul>
                    <li>
                        <img class="img-fluid" src="assets/images/gallery/01_gallery.jpg" alt="01 Gallery">
                        <a class="open-photo" href="#">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/images/gallery/02_gallery.jpg" alt="02 Gallery">
                        <a class="open-photo" href="#">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/images/gallery/03_gallery.jpg" alt="03 Gallery">
                        <a class="open-photo" href="#">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/images/gallery/04_gallery.jpg" alt="04 Gallery">
                        <a class="open-photo" href="#">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/images/gallery/05_gallery.jpg" alt="05 Gallery">
                        <a class="open-photo" href="#">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/images/gallery/06_gallery.jpg" alt="06 Gallery">
                        <a class="open-photo" href="#">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contact-side-menu">
                <h3>Contact Us</h3>
                <div class="contact-info">
                    <i class="lnr lnr-location"></i>
                    <div class="info-box">
                        <p>US - Los Angeles</p>
                        <p>15 Street Name Here</p>
                    </div>
                </div>
                <div class="contact-info">
                    <i class="lnr lnr-envelope"></i>
                    <div class="info-box">
                        <p>Email@example.com</p>
                        <p>Support@yourwebsite.com</p>
                    </div>
                </div>
                <div class="contact-info">
                    <i class="lnr lnr-phone-handset"></i>
                    <div class="info-box">
                        <p>00201912149318</p>
                        <p>00204911318912</p>
                    </div>
                </div>
            </div>
            <div class="follow-side-menu">
                <h3>Follow Us</h3>
                <ul class="icon">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- :: Header -->

    <main>
        {{$slot}}
    </main>
    <!-- :: Footer -->
  <footer class="">
    <div class="container">
        <div class="row g-4">

            <!-- Company Info -->
            <div class="col-md-4 p-100">
                <h4 class="fw-bold text-uppercase mb-3">MobileHub</h4>
                <p>
                    Powering the Future with Smart Electronic & IT Solutions.
                    We deliver innovation, reliability, and quality to industries worldwide.
                </p>
                <div class="d-flex social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2">
                <h5 class="fw-bold mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('blogs')}}">Blog</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>

            <!-- Industries -->
            <div class="col-md-3">
                <h5 class="fw-bold mb-3">Industries</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Telecom</a></li>
                    <li><a href="#">IT Solutions</a></li>
                    <li><a href="#">Healthcare</a></li>
                    <li><a href="#">Education</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-3">
                <h5 class="fw-bold mb-3">Contact Us</h5>
                <div class="contact-info"><i class="fas fa-map-marker-alt"></i><span>Los Angeles, USA</span></div>
                <div class="contact-info"><i class="fas fa-envelope"></i><span>support@mobilehub.com</span></div>
                <div class="contact-info"><i class="fas fa-phone-alt"></i><span>+1 234 567 890</span></div>
            </div>
        </div>

        <hr class="my-4">

        <!-- Bottom -->
        <div class="text-center pb-3">
            <p class="mb-0">&copy; 2025 MobileHub. All Rights Reserved.</p>
        </div>
    </div>
</footer>


    <!-- :: Scroll Up -->
    <div class="scroll-up">
        <a href="#page" class="move-section btn-style">
            <i class="lnr lnr-chevron-up"></i>
        </a>
    </div>

    <!-- :: JS -->
    <!-- :: jQuery -->
    <script src="assets/js/jquery-3.5.0.min.js"></script>

    <!-- :: Popper -->
    <script src="assets/js/popper.min.js"></script>

    <!-- :: Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- :: Lity -->
    <script src="assets/js/lity.min.js"></script>

    <!-- :: Owl Carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- :: Mixitup -->
    <script src="assets/js/mixitup.min.js"></script>

    <!-- :: Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!-- :: Waypoints -->
    <script src="assets/js/jquery.waypoints.min.js"></script>

    <!-- :: CounterUp -->
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!-- :: Main -->
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from postup-jade.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Sep 2025 09:47:50 GMT -->

</html>