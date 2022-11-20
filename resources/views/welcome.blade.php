<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Finder | Car Finder | Home</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
    <meta name="keywords"
          content="bootstrap, business, directory, listings, e-commerce, car dealer, city guide, real estate, job board, user account, multipurpose, ui kit, html5, css3, javascript, gallery, slider, touch">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #1f1b2d;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner > span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #fff;;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #9691a4;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

    </style>
    <!-- Page loading scripts-->

    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="/vendor/simplebar/dist/simplebar.min.css">
    <link rel="stylesheet" media="screen" href="/vendor/tiny-slider/dist/tiny-slider.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
    <!-- Google Tag Manager-->
    {{--
    --}}
    <style></style>
    <style></style>
    <style></style>
    <style></style>
    <style></style>
    <style></style>
</head>
<!-- Body-->
<body class="bg-dark" style="">
<!-- Google Tag Manager (noscript)-->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
</noscript>
<!-- Demo switcher (offcanvas)-->
<div class="offcanvas offcanvas-end" id="demo-switcher" aria-hidden="true" style="visibility: hidden;">
    <div class="offcanvas-header d-block border-bottom">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="h5 mb-0">Choose Demo</h2>
            <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="d-flex"><a class="btn btn-outline-secondary btn-sm w-100 me-2" href="index.html"><i
                    class="fi-home me-2"></i>Main Page</a><a class="btn btn-outline-secondary btn-sm w-100"
                                                             href="components/typography.html"><i
                    class="fi-file me-2"></i>Docs / UI Kit</a></div>
    </div>
    <div class="offcanvas-footer border-top"><a class="btn btn-primary btn-lg w-100"
                                                href="https://themes.getbootstrap.com/product/finder-directory-listings-template-ui-kit/"
                                                target="_blank" rel="noopener"><i class="fi-cart fs-lg me-2"></i>Buy
            Finder</a></div>
</div>
<!-- Page loading spinner-->

<main class="page-wrapper">
    <!-- Sign In Modal-->
    <!-- Sign Up Modal-->
    <!-- Navbar-->
    <header class="navbar navbar-expand-lg navbar-dark fixed-top" data-scroll-header="" style="">
        <div class="container"><a class="navbar-brand me-3 me-xl-4" href="car-finder-home.html"><img class="d-block"
                                                                                                     src="img/logo/logo-light.svg"
                                                                                                     width="116"
                                                                                                     alt="Finder"></a>


            <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
                {{--                <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">--}}
                {{--                    <!-- Demos switcher-->--}}
                {{--                    <li class="nav-item dropdown me-lg-2"><a class="nav-link dropdown-toggle align-items-center pe-lg-4"--}}
                {{--                                                             href="#" data-bs-toggle="dropdown" role="button"--}}
                {{--                                                             aria-expanded="false"><i--}}
                {{--                                class="fi-layers me-2"></i>Demos<span--}}
                {{--                                class="d-none d-lg-block position-absolute top-50 end-0 translate-middle-y border-end border-light"--}}
                {{--                                style="width: 1px; height: 30px;"></span></a>--}}
                {{--                        <ul class="dropdown-menu dropdown-menu-dark">--}}
                {{--                            <li><a class="dropdown-item" href="real-estate-home-v1.html"><i--}}
                {{--                                        class="fi-building fs-base me-2"></i>Real Estate Demo</a></li>--}}
                {{--                            <li class="dropdown-divider"></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-home.html"><i class="fi-car fs-base me-2"></i>Car--}}
                {{--                                    Finder Demo</a></li>--}}
                {{--                            <li class="dropdown-divider"></li>--}}
                {{--                            <li><a class="dropdown-item" href="job-board-home-v1.html"><i--}}
                {{--                                        class="fi-briefcase fs-base me-2"></i>Job Board Demo</a></li>--}}
                {{--                            <li class="dropdown-divider"></li>--}}
                {{--                            <li><a class="dropdown-item" href="city-guide-home-v1.html"><i--}}
                {{--                                        class="fi-map-pin fs-base me-2"></i>City Guide Demo</a></li>--}}
                {{--                            <li class="dropdown-divider"></li>--}}
                {{--                            <li><a class="dropdown-item" href="index.html"><i class="fi-home fs-base me-2"></i>Main Page</a>--}}
                {{--                            </li>--}}
                {{--                            <li><a class="dropdown-item" href="components/typography.html"><i--}}
                {{--                                        class="fi-list fs-base me-2"></i>Components</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="docs/dev-setup.html"><i class="fi-file fs-base me-2"></i>Documentation</a>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
                {{--                    <!-- Menu items-->--}}
                {{--                    <li class="nav-item active"><a class="nav-link" href="car-finder-home.html">Home</a></li>--}}
                {{--                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"--}}
                {{--                                                     data-bs-toggle="dropdown" aria-expanded="false">Catalog</a>--}}
                {{--                        <ul class="dropdown-menu dropdown-menu-dark">--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-catalog-list.html">List View</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-catalog-grid.html">Grid View</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-single.html">Car Single Page</a></li>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"--}}
                {{--                                                     data-bs-toggle="dropdown" aria-expanded="false">Account</a>--}}
                {{--                        <ul class="dropdown-menu dropdown-menu-dark">--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-account-info.html">Personal Info</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-account-security.html">Password &amp;--}}
                {{--                                    Security</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-account-cars.html">My Cars</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-account-wishlist.html">Wishlist</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-account-reviews.html">Reviews</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-account-notifications.html">Notifications</a>--}}
                {{--                            </li>--}}
                {{--                            <li><a class="dropdown-item" href="signin-dark.html">Sign In</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="signup-dark.html">Sign Up</a></li>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"--}}
                {{--                                                     data-bs-toggle="dropdown" aria-expanded="false">Vendor</a>--}}
                {{--                        <ul class="dropdown-menu dropdown-menu-dark">--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-sell-car.html">Sell Car</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-promotion.html">Ad Promotion Page</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-vendor.html">Vendor Page</a></li>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"--}}
                {{--                                                     data-bs-toggle="dropdown" aria-expanded="false">Pages</a>--}}
                {{--                        <ul class="dropdown-menu dropdown-menu-dark">--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-about.html">About</a></li>--}}
                {{--                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" role="button"--}}
                {{--                                                    data-bs-toggle="dropdown" aria-expanded="false">Blog</a>--}}
                {{--                                <ul class="dropdown-menu dropdown-menu-dark">--}}
                {{--                                    <li><a class="dropdown-item" href="car-finder-blog.html">Blog Grid</a></li>--}}
                {{--                                    <li><a class="dropdown-item" href="car-finder-blog-single.html">Single Post</a></li>--}}
                {{--                                </ul>--}}
                {{--                            </li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-contacts.html">Contacts</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-help-center.html">Help Center</a></li>--}}
                {{--                            <li><a class="dropdown-item" href="car-finder-404.html">404 Not Found</a></li>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item d-lg-none"><a class="nav-link" href="#signin-modal" data-bs-toggle="modal"><i--}}
                {{--                                class="fi-user me-2"></i>Sign in</a></li>--}}
                {{--                </ul>--}}
            </div>
        </div>
    </header>
    <!-- Page content-->
    <!-- Hero + Search form-->
    <section class="bg-position-top-center bg-repeat-0 pt-5"
             style="background-image: url(img/car-finder/home/hero-bg.png); background-size: 1920px 630px;">
        <div class="container pt-5">
            <div class="row pt-lg-4 pt-xl-5">
                <div class="col-lg-4 col-md-5 pt-3 pt-md-4 pt-lg-5">
                    <h1 class="display-3 text-light pb-2 mb-5 me-md-n5">Простой способ найти подходящую машину</h1>
                    <p class="fs-lg text-light opacity-70">
                        {{--                                            Finder is a leading digital marketplace for the automotive industry that connects car shoppers with sellers.--}}
                    </p>
                </div>
                <div class="col-lg-8 col-md-7 pt-md-5"><img class="d-block mt-4 ms-auto"
                                                            src="img/car-finder/home/hero-img.png" width="800"
                                                            alt="Car"></div>
            </div>
        </div>
        <div class="container mt-4 mt-sm-3 mt-lg-n3 pb-5 mb-md-4">

            <form class="form-group form-group-light d-block">
                <div class="row g-0 ms-lg-n2">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="dropdown border-end-sm border-light" data-bs-toggle="select">
                            <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i class=" me-2">₽</i><span
                                    class="dropdown-toggle-label">Ценовой диапазон</span></button>
                            <input type="hidden" name="make">
                            <ul class="dropdown-menu dropdown-menu-dark" style="">
                                <li><a class="dropdown-item" href="#"><span
                                            class="dropdown-item-label">0 - 500 000</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">500 000 - 2 000 000</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">2 000 000 - 5 000 000</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">5 000 000 - 7 000 000</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">7 000 000 - 10 000 000</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <hr class="hr-light d-sm-none my-2">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="dropdown border-end-md border-light" data-bs-toggle="select">
                            <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-list me-2"></i><span
                                    class="dropdown-toggle-label">Модель</span></button>
                            <input type="hidden" name="model">
                            <ul class="dropdown-menu dropdown-menu-dark" style="">
                                <li><a class="dropdown-item" href="#"><span
                                            class="dropdown-item-label">Altima</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Juke</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Leaf</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span
                                            class="dropdown-item-label">Maxima</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Micra</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span
                                            class="dropdown-item-label">Murano</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Note</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span
                                            class="dropdown-item-label">Patrol</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <hr class="hr-light d-md-none my-2">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="dropdown border-end-sm border-light" data-bs-toggle="select">
                            <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="fi-car fs-lg me-2"></i><span class="dropdown-toggle-label">Тип ТС</span>
                            </button>
                            <input type="hidden" name="type">
                            <ul class="dropdown-menu dropdown-menu-dark" style="">
                                <li><a class="dropdown-item" href="#"><span
                                            class="dropdown-item-label">Compact</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Crossover</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Coupe</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span
                                            class="dropdown-item-label">Family MPV</span></a></li>
                                <li><a class="dropdown-item" href="#"><span
                                            class="dropdown-item-label">Pickup</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Sedan</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">SUV</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Wagon</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="hr-light d-sm-none my-2">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="dropdown border-light" data-bs-toggle="select">
                            <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="fi-entertainment fs-lg me-2"></i>
                                <span class="dropdown-toggle-label">Состояние</span>
                            </button>
                            <input type="hidden" name="type">
                            <ul class="dropdown-menu dropdown-menu-dark" style="">
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">НОВЫЙ</span></a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span
                                            class="dropdown-item-label">С ПРОБЕГОМ</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="hr-light  my-2">

                <div class="row g-0 ms-lg-n2">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="border-end-lg border-light input-group"><span
                                class="text-muted ps-2 ps-sm-3 input-group-text" id="search-icon"><i
                                    class="fi-user"></i></span><input placeholder="Ваше имя" aria-label="Search"
                                                                      aria-describedby="search-icon"
                                                                      class="form-control"></div>
                    </div>
                    <hr class="hr-light d-lg-none my-2">

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="border-end-lg border-light input-group"><span
                                class="text-muted ps-2 ps-sm-3 input-group-text" id="search-icon"><i
                                    class="fi-phone"></i></span><input placeholder="Телефон" aria-label="Search"
                                                                       aria-describedby="search-icon"
                                                                       class="form-control"></div>
                    </div>
                    <hr class="hr-light d-lg-none my-2">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="border-end-lg border-light input-group"><span
                                class="text-muted ps-2 ps-sm-3 input-group-text" id="search-icon"><i
                                    class="fi-mail"></i></span><input placeholder="Э-почта" aria-label="Search"
                                                                      aria-describedby="search-icon"
                                                                      class="form-control"></div>
                    </div>
                    <hr class="hr-light d-lg-none my-2">

                    <div class="col-lg-3 ">
                        <button type="button" class="w-100 btn btn-primary"> Отправить заявку</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
    <!-- Body type selection-->
    <!-- Top offers-->
    <!-- Brands-->
    <!-- Features-->

    <section class="mb-5 pb-2 pb-lg-5 container">
        <h2 class="h3 mb-4 pb-sm-2" style="color: white; text-align: center">Лизинг за три шага</h2>
        <div class="gy-sm-5 gy-3 row row-cols-lg-3 row-cols-sm-2 row-cols-1">
            <div class="col">
                <div class="shadow position-relative h-100 card border-0">
                    <div class="card-body">
                        <div class="h2 mb-2 text-primary">01</div>
                        <h5 class="mb-2 card-title">Оставьте заявку</h5>
                    </div>
                    <svg class="position-absolute top-0 end-0 mt-n2 d-sm-block d-none"
                         xmlns="http://www.w3.org/2000/svg" width="78" height="30" fill="none"
                         style="transform: translateY(-100%) translateX(70%);">
                        <path
                            d="M77.955 14.396c.128-2.86 0-4.67-.576-4.745s-1.279 1.607-2.11 4.378l-1.279 4.897-.563 2.683c-.612-1.434-1.352-2.81-2.212-4.113-2.718-4.072-6.226-7.569-10.321-10.288C54.205 2.687 46.332.186 38.233.008c-8.823-.165-17.491 2.305-24.874 7.087C6.581 11.549 2.118 17.395.66 22.191.033 24.057-.15 26.04.123 27.987c.243 1.367.627 2.037.755 2.012.396 0-.396-3.025 1.522-7.264s6.394-9.339 12.789-13.123c6.905-4.018 14.838-5.974 22.841-5.631 3.811.182 7.574.924 11.164 2.202 7.323 2.623 13.717 7.296 18.403 13.452 1.061 1.417 1.816 2.531 2.404 3.417l-1.637-.278-5.295-1.012c-3.031-.569-4.988-.848-5.179-.392s1.419 1.544 4.335 2.759a47.66 47.66 0 0 0 5.269 1.772c1.023.278 2.097.544 3.21.772.588.127 1.1.228 1.765.342.541.152 1.109.184 1.663.094a3.86 3.86 0 0 0 1.547-.613 2.76 2.76 0 0 0 .934-1.265c.088-.252.156-.51.205-.772l.09-.595.23-1.544.384-2.949c.217-1.873.371-3.569.435-5.062"
                            fill="#fd5631"></path>
                    </svg>
                </div>
            </div>
            <div class="col">
                <div class="shadow position-relative h-100 card border-0">
                    <div class="card-body">
                        <div class="h2 mb-2 text-primary">02</div>
                        <h5 class="mb-2 card-title">Согласуйте условия и подпишите договор</h5>
                       </div>
                    <svg class="position-absolute top-0 end-0 mt-n2 d-lg-block d-none"
                         xmlns="http://www.w3.org/2000/svg" width="78" height="30" fill="none"
                         style="transform: translateY(-100%) translateX(70%);">
                        <path
                            d="M77.955 14.396c.128-2.86 0-4.67-.576-4.745s-1.279 1.607-2.11 4.378l-1.279 4.897-.563 2.683c-.612-1.434-1.352-2.81-2.212-4.113-2.718-4.072-6.226-7.569-10.321-10.288C54.205 2.687 46.332.186 38.233.008c-8.823-.165-17.491 2.305-24.874 7.087C6.581 11.549 2.118 17.395.66 22.191.033 24.057-.15 26.04.123 27.987c.243 1.367.627 2.037.755 2.012.396 0-.396-3.025 1.522-7.264s6.394-9.339 12.789-13.123c6.905-4.018 14.838-5.974 22.841-5.631 3.811.182 7.574.924 11.164 2.202 7.323 2.623 13.717 7.296 18.403 13.452 1.061 1.417 1.816 2.531 2.404 3.417l-1.637-.278-5.295-1.012c-3.031-.569-4.988-.848-5.179-.392s1.419 1.544 4.335 2.759a47.66 47.66 0 0 0 5.269 1.772c1.023.278 2.097.544 3.21.772.588.127 1.1.228 1.765.342.541.152 1.109.184 1.663.094a3.86 3.86 0 0 0 1.547-.613 2.76 2.76 0 0 0 .934-1.265c.088-.252.156-.51.205-.772l.09-.595.23-1.544.384-2.949c.217-1.873.371-3.569.435-5.062"
                            fill="#fd5631"></path>
                    </svg>
                </div>
            </div>
            <div class="col">
                <div class="shadow position-relative h-100 card border-0">
                    <div class="card-body">
                        <div class="h2 mb-2 text-primary">03</div>
                        <h5 class="mb-2 card-title">Получите свой
                            автомобиль</h5>
                       </div>

                </div>
            </div>

        </div>
    </section>
    <section class="container pt-4 pt-md-5">

        <div class="row">
            <div class="col-md-5 col-lg-4 offset-lg-1 pt-4 mt-2 pt-md-5 mt-md-3">
                <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-file lead text-primary mt-1 order-md-2"></i>
                    <div class="text-md-end ps-3 ps-md-0 pe-md-3 order-md-1">
                        <h3 class="h6 text-light mb-1">Over 1 Million Listings</h3>
                        <p class="fs-sm text-light opacity-70 mb-0">That’s more than you’ll find on any other major
                            online automotive marketplace in the USA.</p>
                    </div>
                </div>
                <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-search lead text-primary mt-1 order-md-2"></i>
                    <div class="text-md-end ps-3 ps-md-0 pe-md-3 order-md-1">
                        <h3 class="h6 text-light mb-1">Personalized Search</h3>
                        <p class="fs-sm text-light opacity-70 mb-0">Our powerful search makes it easy to personalize
                            your results so you only see the cars and features you care about.</p>
                    </div>
                </div>
                <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-settings lead text-primary mt-1 order-md-2"></i>
                    <div class="text-md-end ps-3 ps-md-0 pe-md-3 order-md-1">
                        <h3 class="h6 text-light mb-1">Non-Stop Innovation</h3>
                        <p class="fs-sm text-light opacity-70 mb-0">Our team is constantly developing new features that
                            make the process of buying and selling a car simpler.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 d-none d-md-block">
                <div class="position-relative mx-auto h-100" style="max-width: 5rem; min-height: 26rem;">
                    <div class="rellax content-overlay pt-5" data-rellax-percentage="0.5"
                         style="transform: translate3d(0px, 0px, 0px);"><img class="pt-3 mt-5"
                                                                             src="img/car-finder/home/car.svg"
                                                                             alt="Car"></div>
                    <div class="position-absolute top-0 start-50 translate-middle-x h-100 overflow-hidden"><img
                            src="img/car-finder/home/road-line.svg" width="2" alt="Road line"></div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 pt-md-5 mt-md-3">
                <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-info-circle lead text-primary mt-1"></i>
                    <div class="ps-3">
                        <h3 class="h6 text-light mb-1">
                            Лизинг — это выгодно</h3>
                        <p class="fs-sm text-light opacity-70 mb-0">Благодаря лизинговым программам можно приобрести авто в лизинг для ИП и юридических лиц с небольшими затратами для бизнеса.</p>
                    </div>
                </div>
                <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-clock lead text-primary mt-1"></i>
                    <div class="ps-3">
                        <h3 class="h6 text-light mb-1">Быстрое одобрение</h3>
                        <p class="fs-sm text-light opacity-70 mb-0">Оценка клиента и принятие решения проходят за 1 день, потому что мы несём меньше рисков, чем банк</p>
                    </div>
                </div>
                <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-calculator lead text-primary mt-1"></i>
                    <div class="ps-3">
                        <h3 class="h6 text-light mb-1">Экономия на налогах</h3>
                        <p class="fs-sm text-light opacity-70 mb-0">С лизингом можно сэкономить на налоге на прибыль и вычетах НДС до 40%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest cars (carousel)-->
    <!-- CTA carousel-->
    <!-- Mobile app CTA-->
    <!-- Latest news (Blog)-->
</main>
<!-- Footer-->
<footer class="footer bg-faded-light">
    <div class="py-4 border-top border-light">
        <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between py-2">
            <!-- Copyright-->
            <p class="order-lg-1 order-2 fs-sm mb-2 mb-lg-0"><span class="text-light opacity-60">© All rights reserved. Made by </span><a
                    class="nav-link-light fw-bold" href="https://createx.studio/" target="_blank" rel="noopener">Createx
                    Studio</a></p>
            <div class="d-flex flex-lg-row flex-column align-items-center order-lg-2 order-1 ms-lg-4 mb-lg-0 mb-4">
                <!-- Links-->
                <div class="d-flex flex-wrap fs-sm mb-lg-0 mb-4 pe-lg-4">
                    <a class="nav-link-light px-2 mx-1" href="#">About</a>
                </div>
                <div class="d-flex align-items-center">
                    <!-- Language switcher-->
                    <!-- Socials-->
                    <div class="ms-4 ps-lg-2 text-nowrap"><a
                            class="btn btn-icon btn-translucent-light btn-xs rounded-circle ms-2" href="#"><i
                                class="fi-facebook"></i></a><a
                            class="btn btn-icon btn-translucent-light btn-xs rounded-circle ms-2" href="#"><i
                                class="fi-vk"></i></a><a
                            class="btn btn-icon btn-translucent-light btn-xs rounded-circle ms-2" href="#"><i
                                class="fi-telegram"></i></a><a
                            class="btn btn-icon btn-translucent-light btn-xs rounded-circle ms-2" href="#"><i
                                class="fi-messenger"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll=""><span
        class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i
        class="btn-scroll-top-icon fi-chevron-up"> </i></a>
<!-- Vendor scrits: js libraries and plugins-->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="vendor/simplebar/dist/simplebar.min.js"></script>
<script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="vendor/jarallax/dist/jarallax.min.js"></script>
<script src="vendor/rellax/rellax.min.js"></script>
<!-- Main theme script-->
<script src="js/theme.min.js"></script>

</body>
</html>
