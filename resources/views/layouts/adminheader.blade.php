    <!DOCTYPE html>
    <html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">


    <!-- Mirrored from prium.github.io/phoenix/v1.23.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Sep 2025 09:51:58 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>MobileHub</title>

        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('adassets/img/favicons/favicon12.jpeg')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('adassets/img/favicons/favicon12.jpeg')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('adassets/img/favicons/favicon12.jpeg')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('adassets/img/favicons/favicon12.jpeg')}}">
        <link rel="manifest" href="{{asset('adassets/img/favicons/favicon121.jpeg')}}">
        <meta name="msapplication-TileImage" content="{{asset('adassets/img/favicons/favicon12.jpeg')}}">
        <meta name="theme-color" content="#ffffff">
        <script src="{{asset('adassets/vendors/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('adassets/js/config.js')}}"></script>
        <script src="{{asset('adassets/js/pages/advance-ajax-table.js')}}"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Font Awesome for icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
        <!-- SheetJS for XLSX export -->
        <script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
            rel="stylesheet">
        <link href="{{asset('adassets/vendors/simplebar/simplebar.min.css')}}" rel="stylesheet">
        <!-- <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v4.0.8/css/line.css">  -->
        <link href="{{asset('adassets/css/theme-rtl.min.css')}}" type="text/css" rel="stylesheet" id="style-rtl">
        <link href="{{asset('adassets/css/theme.min.css')}}" type="text/css" rel="stylesheet" id="style-default">
        <link href="{{asset('adassets/css/user-rtl.min.css')}}" type="text/css" rel="stylesheet" id="user-style-rtl">
        <link href="{{asset('adassets/css/user.min.css')}}" type="text/css" rel="stylesheet" id="user-style-default">

        <script>
            var phoenixIsRTL = window.config.config.phoenixIsRTL;
            if (phoenixIsRTL) {
                var linkDefault = document.getElementById('style-default');
                var userLinkDefault = document.getElementById('user-style-default');
                linkDefault.setAttribute('disabled', true);
                userLinkDefault.setAttribute('disabled', true);
                document.querySelector('html').setAttribute('dir', 'rtl');
            } else {
                var linkRTL = document.getElementById('style-rtl');
                var userLinkRTL = document.getElementById('user-style-rtl');
                linkRTL.setAttribute('disabled', true);
                userLinkRTL.setAttribute('disabled', true);
            }
        </script>
        <link href="{{asset('adassets/vendors/leaflet/leaflet.css')}}" rel="stylesheet">
        <link href="{{asset('adassets/vendors/leaflet.markercluster/MarkerCluster.css')}}" rel="stylesheet">
        <link href="{{asset('adassets/vendors/leaflet.markercluster/MarkerCluster.Default.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <!-- scrollbar removed-->
                    <div class="navbar-vertical-content">
                        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                            <li class="nav-item">

    <div class="nav-item-wrapper">
    <a class="nav-link dropdown-indicator label-1" href="{{route('Dashboard')}}">
        <div class="d-flex align-items-center">
        <div><span style="padding-left:10px;"></span></div>
        <span class="nav-link-icon">
            <span data-feather="pie-chart"></span>
        </span>
        <span class="nav-link-text">Dashboard</span>
        </div>
    </a>
    </div>

                            </li>

                            <!-- <li class="nav-item">
                                <p class="navbar-vertical-label">Employee</p>
                                <hr class="navbar-vertical-line" />

                                <div class="nav-item-wrapper">
                                    <a class="nav-link dropdown-indicator label-1" href="#Employeemenu" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="Employeemenu">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon-wrapper"><span
                                                    class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                                            <span class="nav-link-icon"><span data-feather="users"></span></span>
                                            <span class="nav-link-text">Employee Details</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="Employeemenu">
                                            <li class="nav-item"><a class="nav-link" href="#">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Add
                                                            New Employee</span></div>
                                                </a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">View
                                                            Employee</span></div>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li> -->

                            <li class="nav-item">
                                <p class="navbar-vertical-label">Categories</p>
                                <hr class="navbar-vertical-line" />

                                <div class="nav-item-wrapper">
                                    <a class="nav-link dropdown-indicator label-1" href="#appointmentsMenu" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="appointmentsMenu">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon-wrapper"><span
                                                    class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                                            <span class="nav-link-icon"><span data-feather="calendar"></span></span>
                                            <span class="nav-link-text">Category Details</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="appointmentsMenu">
                                            <li class="nav-item"> 
                                                <a class="nav-link label-1 {{ request()->routeIs('Maincategory') ? 'active' : '' }}"
    href="{{ route('Maincategory') }}">
                                            
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Main
                                                            Category</span></div>
                                                </a></li>
                                            <li class="nav-item">
                                                <a class="nav-link label-1 {{ request()->routeIs('Subcategory') ? 'active' : '' }}"
    href="{{ route('Subcategory') }}">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sub-Category</span></div>
                                                </a></li>

                                        </ul>
                                    </div>
                                </div>

                                
    <li class="nav-item">
    <p class="navbar-vertical-label">Products</p>
    <hr class="navbar-vertical-line" />

    <div class="nav-item-wrapper">
        <a class="nav-link dropdown-indicator label-1" href="#productsMenu" role="button"
            data-bs-toggle="collapse" aria-expanded="false" aria-controls="productsMenu">
            <div class="d-flex align-items-center">
                <div class="dropdown-indicator-icon-wrapper">
                    <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                </div>
                <span class="nav-link-icon"><span data-feather="package"></span></span>
                <span class="nav-link-text">Product</span>
            </div>
        </a>

        <div class="parent-wrapper label-1">
            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                id="productsMenu">

                <!-- Add Product -->
                <li class="nav-item">
                    <a class="nav-link label-1 {{ request()->routeIs('Insertproduct') ? 'active' : '' }}"
                        href="{{ route('Insertproduct') }}">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-text">Add Product</span>
                        </div>
                    </a>
                </li>

                <!-- Product List -->
                <li class="nav-item">
                    <a class="nav-link label-1 {{ request()->routeIs('Productlist') ? 'active' : '' }}"
                        href="#">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-text">Product List</span>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</li>


    <div class="nav-item-wrapper">
      <a class="nav-link label-1 {{ request()->routeIs('Enquiry') ? 'active' : '' }}"
         href="{{ route('Enquiry') }}">
        <div class="d-flex align-items-center">
          <span class="nav-link-icon"><span data-feather="message-square"></span></span>
          <span class="nav-link-text">Enquiry</span>
        </div>
      </a>
    </div>


                        </ul>
                    </div>
                </div>
            
            </nav>
            <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                            aria-controls="navbarVerticalCollapse" aria-expanded="false"
                            aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                    class="toggle-line"></span></span></button>
                        <a class="navbar-brand me-1 me-sm-3" href="{{route('Dashboard')}}">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <!-- <img src="{{asset('adassets/img/icons/logo2.jpeg')}}"   alt="" width="27" /> -->
                                    <h5 class="logo-text  ms-2 d-none d-sm-block">MobileHub</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
                        style="width:25rem;">
                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search"
                                placeholder="Search..." aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                            data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>

                    </div>
                    <ul class="navbar-nav navbar-nav-icons flex-row">
                        <li class="nav-item">
                        
                        </li>
                        <li class="nav-item d-lg-none"><a class="nav-link" href="#" data-bs-toggle="modal"
                                data-bs-target="#searchBoxModal"><span class="d-block" style="height:20px;width:20px;"><span
                                        data-feather="search"
                                        style="height:19px;width:19px;margin-bottom: 2px;"></span></span></a></li>
                    
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                                aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                                </svg></a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
                                aria-labelledby="navbarDropdownNindeDots">
                                <div class="card bg-body-emphasis position-relative border-0">
                                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                        <div class="row text-center align-items-center gx-0 gy-0">
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/behance.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/google-cloud.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/slack.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/gitlab.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/bitbucket.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        BitBucket</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/google-drive.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/trello.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/figma.webp" alt=""
                                                        width="20" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/twitter.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/pinterest.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Pinterest</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/ln.webp" alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Linkedin</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/google-maps.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/google-photos.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img src="adassets/img/nav-icons/spotify.webp" alt=""
                                                        width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify
                                                    </p>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                                role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="avatar avatar-l ">
                                    <img class="rounded-circle " src=
                                    {{asset('adassets/img/team/40x40/57.webp')}}  alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                                aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-4 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-circle " src= {{asset('adassets/img/team/72x72/57.webp')}} alt="" />
                                            </div>
                                            <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                                        </div>
                                        <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                                id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="user"></span><span>Profile</span></a></li>
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                                                        class="me-2 text-body align-bottom" data-feather="pie-chart"></span>
                                                    Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom" data-feather="lock"></span>Posts
                                                    &amp; Activity</a></li>
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="help-circle"></span>Help Center</a></li>
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="globe"></span>Language</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top border-translucent">
                                        <ul class="nav d-flex flex-column my-3">
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="user-plus"></span>Add another account</a></li>
                                        </ul>
                                        <hr />
                                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a>
                                        </div>
                                        <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                                class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a
                                                class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                                                class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>





            <script>
                var navbarTopShape = window.config.config.phoenixNavbarTopShape;
                var navbarPosition = window.config.config.phoenixNavbarPosition;
                var body = document.querySelector('body');
                var navbarDefault = document.querySelector('#navbarDefault');
                var navbarTop = document.querySelector('#navbarTop');
                var topNavSlim = document.querySelector('#topNavSlim');
                var navbarTopSlim = document.querySelector('#navbarTopSlim');
                var navbarCombo = document.querySelector('#navbarCombo');
                var navbarComboSlim = document.querySelector('#navbarComboSlim');
                var dualNav = document.querySelector('#dualNav');

                var documentElement = document.documentElement;
                var navbarVertical = document.querySelector('.navbar-vertical');

                if (navbarPosition === 'dual-nav') {
                    topNavSlim?.remove();
                    navbarTop?.remove();
                    navbarTopSlim?.remove();
                    navbarCombo?.remove();
                    navbarComboSlim?.remove();
                    navbarDefault?.remove();
                    navbarVertical?.remove();
                    dualNav.removeAttribute('style');
                    document.documentElement.setAttribute('data-navigation-type', 'dual');

                } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                    navbarDefault?.remove();
                    navbarTop?.remove();
                    navbarTopSlim?.remove();
                    navbarCombo?.remove();
                    navbarComboSlim?.remove();
                    topNavSlim.style.display = 'block';
                    navbarVertical.style.display = 'inline-block';
                    document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

                } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                    navbarDefault?.remove();
                    navbarVertical?.remove();
                    navbarTop?.remove();
                    topNavSlim?.remove();
                    navbarCombo?.remove();
                    navbarComboSlim?.remove();
                    dualNav?.remove();
                    navbarTopSlim.removeAttribute('style');
                    document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
                } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                    navbarDefault?.remove();
                    navbarTop?.remove();
                    topNavSlim?.remove();
                    navbarCombo?.remove();
                    navbarTopSlim?.remove();
                    dualNav?.remove();
                    navbarComboSlim.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                    document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
                } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                    navbarDefault?.remove();
                    topNavSlim?.remove();
                    navbarVertical?.remove();
                    navbarTopSlim?.remove();
                    navbarCombo?.remove();
                    navbarComboSlim?.remove();
                    dualNav?.remove();
                    navbarTop.removeAttribute('style');
                    document.documentElement.setAttribute('data-navigation-type', 'horizontal');
                } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                    topNavSlim?.remove();
                    navbarTop?.remove();
                    navbarTopSlim?.remove();
                    navbarDefault?.remove();
                    navbarComboSlim?.remove();
                    dualNav?.remove();
                    navbarCombo.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                    document.documentElement.setAttribute('data-navigation-type', 'combo');
                } else {
                    topNavSlim?.remove();
                    navbarTop?.remove();
                    navbarTopSlim?.remove();
                    navbarCombo?.remove();
                    navbarComboSlim?.remove();
                    dualNav?.remove();
                    navbarDefault.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                }

                var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
                var navbarTop = document.querySelector('.navbar-top');
                if (navbarTopStyle === 'darker') {
                    navbarTop.setAttribute('data-navbar-appearance', 'darker');
                }

                var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
                var navbarVertical = document.querySelector('.navbar-vertical');
                if (navbarVerticalStyle === 'darker') {
                    navbarVertical.setAttribute('data-navbar-appearance', 'darker');
                }
            </script>


            <div class="content">
                <main>
                    {{$slot}}
                </main>
            </div>






            <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
                data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
                <div class="modal-dialog">
                    <div class="modal-content mt-15 rounded-pill">
                        <div class="modal-body p-0">
                            <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}'
                                style="width: auto;">
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                        class="form-control search-input fuzzy-search rounded-pill form-control-lg"
                                        type="search" placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                                <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                                    data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </main>
        <!-- ===============================================-->


        </div>
        </div>
        </a>

        <!-- ===============================================-->
        <!--    JavaScripts-->
            
        <!-- ===============================================-->
        <script src="{{asset('adassets/vendors/popper/popper.min.js')}}'"></script>
        <script src="{{asset('adassets/vendors/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('adassets/vendors/anchorjs/anchor.min.js')}}}"></script>
        <script src="{{asset('adassets/vendors/is/is.min.js')}}"></script>
        <script src="{{asset('adassets/vendors/fontawesome/all.min.js')}}"></script>
        <script src="{{asset('adassets/vendors/lodash/lodash.min.js')}}"></script>
        <script src="{{asset('adassets/vendors/list.js/list.min.js')}}"></script>
        <script src="{{asset('adassets/vendors/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('adassets/vendors/dayjs/dayjs.min.js')}}"></script>
        <script src="{{asset('adassets/vendors/leaflet/leaflet.js')}}"></script>
        <script src="{{asset('adassets/vendors/leaflet.markercluster/leaflet.markercluster.js')}}"></script>
        <script src="{{asset('adassets/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js')}}"></script>
        <script src="{{asset('adassets/js/phoenix.js')}}"></script>
        <script src="{{asset('adassets/vendors/echarts/echarts.min.js')}}"></script>
        <!-- <script src="{{asset('adassets/js/dashboards/ecommerce-dashboard.js')}}"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://unpkg.com/feather-icons"></script>
        <script>
            feather.replace();
        </script>

    </body>


    <!-- Mirrored from prium.github.io/phoenix/v1.23.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Sep 2025 09:53:29 GMT -->

    </html>