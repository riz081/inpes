<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>INP Excellent Service</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="/">INP<span>ES</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Profit</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
                    <li><a class="nav-link scrollto " href="#testimonials">Testimonial</a></li>
                    <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
                    <li class="dropdown"><a href="#"><span>Language</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="id">Indonesian</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="{{ route('login') }}" class="get-started-btn scrollto">Login</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Customer satisfaction and trust are our top priorities</h1>
                    <a href="#contact" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>INP Excellent Service</h3>
                            <p>
                                PT INP Excellent Service (INPES) is a company engaged in the service industry located at
                                Kalimantan street 1 No. 27 Kav-BR.24 GKB Gresik, East Java. PT INP Excellent Service
                                (INPES) offers four types of services, which are:
                            </p>
                            <a href="{{ route('about.en') }}" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Legal Consultant</h4>
                                    <p>INPES has a competent legal consultant team that provides reliable and practical
                                        legal solutions.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-book"></i>
                                    <h4>Visa Processing</h4>
                                    <p>INPES is a reliable partner for your visa processing needs for Indonesia.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-box"></i>
                                    <h4>Export</h4>
                                    <p>INPES is a trusted partner to assist you in expanding your business to
                                        international markets.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-restaurant"></i>
                                    <h4>Catering</h4>
                                    <p>INPES catering services will provide an unforgettable culinary experience for you
                                        and your guests.</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    @php
                        use App\Models\User;
                        use App\Models\Booking;
                        use App\Models\Service;
                        use App\Models\Worker;
                    @endphp

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="{{ \App\Models\User::where('type', '1')->count() }}" 
                                data-purecounter-end="{{ \App\Models\User::where('type', '1')->count() }}" 
                                data-purecounter-duration="1" 
                                class="purecounter"></span>
                            <p>Customer</p>
                          
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="{{ \App\Models\Booking::count() }}" 
                                data-purecounter-end="{{ \App\Models\Booking::count() }}" 
                                data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Project</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="{{ \App\Models\Service::count() }}" 
                                data-purecounter-end="{{ \App\Models\Service::count() }}" 
                                data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Help</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="{{ \App\Models\Worker::count() }}" 
                                data-purecounter-end="{{ \App\Models\Worker::count() }}" 
                                data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Worker</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Tabs Section ======= -->
        <section id="tabs" class="tabs">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="ri-file-list-3-line"></i>
                            <h4 class="d-none d-lg-block">Legal Consultant</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="ri-book-2-line"></i>
                            <h4 class="d-none d-lg-block">Visa Processing</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i class="ri-archive-line"></i>
                            <h4 class="d-none d-lg-block">Export</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i class="ri-restaurant-line"></i>
                            <h4 class="d-none d-lg-block">Catering</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
                                data-aos-delay="100">
                                <h3>Legal Consultant</h3>
                                <p>
                                    PT INP Excellent Service (INPES) has a competent team of legal consultants to
                                    provide reliable and practical legal solutions. Our legal consulting services cover
                                    various aspects of the law, from corporate to personal matters. With a broad
                                    understanding of the regulations and legal provisions in Indonesia, we are ready to
                                    assist you in understanding and navigating the complexity of the law to protect your
                                    interests. We aim to provide accurate legal advice and tailored solutions to meet
                                    your needs.
                                </p>
                                <ul class="fst-italic">
                                    <li><i class="ri-check-double-line"></i> Assistance in contract resolution and
                                        business disputes.</li>
                                    <li><i class="ri-check-double-line"></i> Legal guidance in the process of company
                                        acquisitions and mergers.</li>
                                    <li><i class="ri-check-double-line"></i> Handling personal legal matters, such as
                                        inheritance and divorce.</li>
                                </ul>
                                <p>
                                    Our team of legal consultants is committed to providing reliable and practical legal
                                    solutions tailored to your needs. We understand the complexity of the law and are
                                    ready to assist you in safeguarding your interests.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Visa Processing</h3>
                                <p>
                                    PT INP Excellent Service (INPES) is a reliable partner for your visa processing
                                    needs for Indonesia. We provide comprehensive services to assist you in obtaining
                                    various types of visas that suit your requirements, including business visas,
                                    tourist visas, and work visas.
                                </p>
                                <ul class="fst-italic">
                                    <li><i class="ri-check-double-line"></i> Business visa processing for business
                                        meetings and investments.</li>
                                    <li><i class="ri-check-double-line"></i> Tourist visas for travelers looking to
                                        explore the beauty of Indonesia.</li>
                                    <li><i class="ri-check-double-line"></i> Work visa processing for those who have
                                        secured official employment in Indonesia.</li>
                                </ul>
                                <p>
                                    We understand the importance of your travel to Indonesia, and we will guide you
                                    through the visa processing process carefully and efficiently.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Export</h3>
                                <p>
                                    PT INP Excellent Service (INPES) is the right partner to help you expand your
                                    business into international markets. Our services encompass a deep understanding of
                                    export regulations, supply chain management, and logistics. We will guide you
                                    through the export process, assist you in overcoming obstacles, and ensure your
                                    products efficiently reach the global market.
                                </p>
                                <ul class="fst-italic">
                                    <li><i class="ri-check-double-line"></i> Effective export planning.</li>
                                    <li><i class="ri-check-double-line"></i> Selection of optimal shipping routes and
                                        logistics arrangements.</li>
                                    <li><i class="ri-check-double-line"></i> In-depth knowledge of international trade
                                        rules and export regulations.</li>
                                    <li><i class="ri-check-double-line"></i> Assistance in handling the necessary
                                        export documents</li>
                                </ul>
                                <p>
                                    We are committed to helping your business thrive in the global market by providing
                                    efficient and reliable export solutions. Trust us to guide you on your export
                                    journey.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Catering</h3>
                                <p>
                                    PT INP Excellent Service (INPES) offers delicious and diverse catering services to
                                    meet your culinary event needs. From business gatherings to personal celebrations,
                                    we are ready to serve high-quality dishes that cater to your tastes and preferences.
                                </p>
                                <ul class="fst-italic">
                                    <li><i class="ri-check-double-line"></i> Diverse and customizable catering menu
                                        options.</li>
                                    <li><i class="ri-check-double-line"></i> Dishes prepared with high-quality
                                        ingredients.</li>
                                    <li><i class="ri-check-double-line"></i> Professional catering services tailored to
                                        your event needs.</li>
                                    <li><i class="ri-check-double-line"></i> An unforgettable culinary experience for
                                        you and your guests.</li>
                                </ul>
                                <p>
                                    Trust us to make your event more special through a selection of high-quality dishes
                                    served with care.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Tabs Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Profit</h2>
                    <p>What are the advantages of collaborating with us to fulfill your needs?</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-briefcase"></i>
                            <h4>Business Convenience</h4>
                            <p>Facilitate your business operations with full assistance from our services, including advice, guidance, and support.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-card-checklist"></i>
                            <h4>Professional Services</h4>
                            <p>Enjoy professional services that help meet your business needs with a trained workforce.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-file-earmark-check"></i>
                            <h4>Clear Documentation</h4>
                            <p>We will guide you through the service process with clear and accountable documentation.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-heart"></i>
                            <h4>Trust Us</h4>
                            <p>Trust us to provide services that support the growth of your business and manage all your needs professionally.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-hand-thumbs-up"></i>
                            <h4>Best Quality</h4>
                            <p>We are committed to delivering services with the best quality in every aspect to support the service processes we offer.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-lightbulb"></i>
                            <h4>Comprehensive Solutions</h4>
                            <p>We provide comprehensive solutions to assist your business needs, starting from the best recommendations from problem.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Here is the documentation of some of the customer projects we have handled.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Legal Consultant</h4>
                                {{-- <p>lorem ipsum</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Visa Processing</h4>
                                {{-- <p>Web</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Legal Consultant</h4>
                                {{-- <p>App</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Visa Processing</h4>
                                {{-- <p>Card</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Catering</h4>
                                {{-- <p>Lorem Ipsum</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Legal Consultant</h4>
                                {{-- <p>App</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Export</h4>
                                {{-- <p>Card</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Catering</h4>
                                {{-- <p>Card</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Export</h4>
                                {{-- <p>Web</p> --}}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Testimonial</h2>
                    <p>The opinions and experiences of those who have collaborated with us.</p>
                </div>

                <!-- Include other HTML code above -->
                
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                        <h3>{{ $testimonial->name }}</h3>
                                        <h4>{{ $testimonial->job }}</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {{ \Illuminate\Support\Str::limit($testimonial->message, 100) }}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Include other HTML code below -->


            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Our Process</h2>
                    <p>These are the stages in our service process</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="box" data-aos="fade-up" data-aos-delay="100">
                            <h2>1</h2>
                            <p> </p>
                            <h5>Booking</h5>
                            <p> </p>
                            <p class="fst-italic">Prospective customers place an order for our services by filling out
                                the collaboration request form on our website.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                            <h2>2</h2>
                            <p> </p>
                            <h5>Respond</h5>
                            <p> </p>
                            <p class="fst-italic">Our team will promptly contact the prospective customer regarding the
                                requested service order.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="300">
                            <h2>3</h2>
                            <p> </p>
                            <h5>Agreement</h5>
                            <p> </p>
                            <p class="fst-italic">If the customer and we agree on the business arrangement to be
                                carried out, the service process will be initiated.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>WHAT ARE COMMONLY ASKED QUESTIONS TO US ?</h2>
                </div>

                <ul class="faq-list accordion" data-aos="fade-up">

                    <li>
                        <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">What types of legal
                            services are offered by INP Excellent Service ? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                We provide various types of legal services, including legal representation, legal
                                consultation, contract resolution, and much more. Our services encompass all legal
                                aspects you might need.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">How does the visa
                            processing process work with INP Excellent Service ? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                We assist in visa processing by guiding you through the entire process, from document
                                preparation to the completion of the licensing process. We are committed to simplifying
                                and expediting your visa processing.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">What are the benefits
                            of using export services from INP Excellent Service ? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Our export services help you reach the global market by ensuring that your goods comply
                                with export regulations and rules. We provide full support to facilitate your export
                                process.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">What do clients often
                            ask about catering services at INP Excellent Service ? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Our clients often inquire about the various menu options we offer, the capacity of our
                                catering services, and the booking process. We offer a variety of food choices,
                                including local and international cuisine, and can accommodate events of any size, both
                                small and large. Our booking process is also very easy and quick.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Does INP Excellent
                            Service have experience in exporting goods ? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Yes, we have extensive experience in exporting goods to various countries. Our team
                                understands the export requirements and regulations in place, and we are ready to help
                                you successfully reach international markets.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">How can I contact INP
                            Excellent Service for more information ? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                You can contact us through our contact page on this website, or through the phone number
                                and email address listed there. We are very eager to assist you and answer all your
                                questions.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Form of Cooperation</h2>
                    <p>Complete the required data to collaborate with us</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-12">
                        <form action="{{ route('kirim', ['lang' => 'en']) }}" method="post" role="form"
                            class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                    @error('name')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                    @error('email')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="number" id="number"
                                    placeholder="Phone Number" required>
                                @error('number')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <select id="country_id" name="country_id" class="form-control" required>
                                    <option value="" disabled selected>Select Country</option>
                                    @foreach($country as $country)
                                        <option value="{{ $country->id }}">{{ $country->country }}</option>
                                    @endforeach
                                </select>
                                @error('country_id')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <select id="request_id" name="request_id" class="form-control" required>
                                    <option value="" disabled selected>Request</option>
                                    @foreach ($requests as $item)                                        
                                        <option value="{{ $item->id }}">{{ $item->request }}</option>
                                    @endforeach
                                </select>
                                @error('request_id')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <select id="service_id" name="service_id" class="form-control" required>
                                    <option value="" disabled selected>Select Services</option>
                                    @foreach ($service as $item)                                        
                                        <option value="{{ $item->id }}">{{ $item->service }}</option>
                                    @endforeach
                                </select>
                                @error('service_id')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                @error('message')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                {{-- <div class="error-message"></div> --}}
                                {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                            </div>
                            <div class="text-center"><button type="submit">Send</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>INP<span>ES</span></h3>
                        <p>
                            Kalimantan Street 1 GKB<br>
                            Cluster Centro No. 27<br>
                            Gresik, Jawa Timur, Indonesian <br><br>
                            <strong>Phone :</strong> 64486031<br>
                            <strong>Email :</strong> cs@inpexcellentservice.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Link</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#1">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#2">About</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#3">Profit</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#4">Gallery</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#5">Testimonial</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Service</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#1">Legal Consultant</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#2">Visa Processing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#3">Export</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#4">Catering</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>INP Excellent Service</h4>
                        <p>Providing the best service to our customers is an obligation for us</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>INPES</span></strong>. All Rights Reserved
                </div>

            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire(
                'Thank You!',
                '{{ session('success') }}',
                'success'
            )
        </script>
    @endif



</body>

</html>
