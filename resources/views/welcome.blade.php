<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Southern Leyte State U - Bontoc Campus</title>
    <link rel="stylesheet"
        href="{{asset('dashboard/bootstrap/css/bootstrap.min.css?h=012df120f3b0c7b81bee90c64257b484')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('dashboard/css/styles.min.css?h=da10d2cad830becf02e68a25f1c16321')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('dashboard/img/image.png') }}" type="image/x-icon">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top text-white" style="background-color: transparent;">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <img src="{{ asset('dashboard/img/BITSLOGO.jpeg') }}" alt="BITS Logo" class="img-fluid"
                    style="max-width: 50px; border-radius: 50%;">
            </a>

            <!-- Navbar Toggler for Mobile -->
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-align-justify"></i>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-center">
                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown text-md-start text-center">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu bg-white text-center w-105" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark" href="#faculty-staff">Faculty & Staff</a></li>
                            <li><a class="dropdown-item text-dark" href="#organizational-charts">Organizational
                                    Charts</a></li>
                            <li><a class="dropdown-item text-dark" href="#Officers">Officers</a></li>
                            <li><a class="dropdown-item text-dark" href="#mission-vision">Teams</a></li>
                            <li><a class="dropdown-item text-dark" href="#mission-vision">Mission & Vision</a></li>
                        </ul>
                    </li>

                    <!-- Other Navbar Items -->
                    <li class="nav-item"><a class="nav-link text-white" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#Events">Events</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <header id="carouselHeader" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active"
                style="background-image:url('/dashboard/img/bsit.jpg'); background-size: cover; background-position: center; height: 100vh;">
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item"
                style="background-image:url('/dashboard/img/backgroundV1.jpg'); background-size: cover; background-position: center; height: 100vh;">
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item"
                style="background-image:url('/dashboard/img/backgroundV2.jpg'); background-size: cover; background-position: center; height: 100vh;">
            </div>
        </div>

        <!-- Fixed Content -->
        <div class="carousel-overlay text-center text-white d-flex masthead"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; background: rgba(0,0,0,0.4);">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="text-uppercase"><strong>Welcome To Bontoc Info Tech Society</strong></h1>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5 h2">"Bontoc Information Technology Society: Empowering Innovation and
                        Connectivity"</p>
                    <a class="btn btn-primary btn-xl mt-3" role="button" href="#services">Find Out More</a>

                    <!-- Video Trigger Button -->

                    <button type="button" class="btn btn-primary btn-xl mt-3" data-bs-toggle="modal"
                        data-bs-target="#videoModal">
                        <i class="fa-solid fa-video me-2"></i> Watch Video
                    </button>
                </div>
            </div>
        </div>

        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="videoModalLabel">Bontoc Info Tech Society</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video id="modalVideo" width="100%" height="auto" controls>
                            <source src="{{ asset('dashboard/video/Bontoc-Info-Tech.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <a class="carousel-control-prev" href="#carouselHeader" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselHeader" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </header>

    <!-- Faculty And Staff -->
    <section id="faculty-staff" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);" data-aos="fade-up"
        data-aos-duration="1000">
        <div class="container">
            <h1 class="text-center mb-3" id="faculty-staff">Faculty & Staff</h1>
            <div id="facultyCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-aos="zoom-in" data-aos-duration="1000">
                        <div
                            class="card bg-dark text-white p-4 d-flex flex-column flex-md-row align-items-center text-center text-md-start w-100">
                            <div class="col-12 col-md-5 text-center mb-3 mb-md-0">
                                <img src="{{ asset('dashboard/img/faculty/16.2.jpeg') }}" alt="Sherwin G. Caday"
                                    class="img-fluid rounded">
                                <h3 class="mt-3 fw-bold">Sherwin G. Caday</h3>
                                <p class="mb-1">Assistant Professor IV</p>
                                <p class="mb-0"><i class="fa-solid fa-envelope"></i> scaday@southernleytestateu.edu.ph
                                </p>
                            </div>
                            <div class="col-12 col-md-7 ps-md-4">
                                <hr class="light my-3 d-md-none">
                                <h4 class="fw-bold" style="color:#fc466b;">Quotes</h4>
                                <p>"Information Technology is at the heart of every breakthrough..."</p>
                                <h4 class="fw-bold mt-3">Educational Attainment</h4>
                                <p>PhD Technology Management (CAR)</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" data-aos="zoom-in" data-aos-duration="1000">
                        <div
                            class="card bg-dark text-white p-4 d-flex flex-column flex-md-row align-items-center text-center text-md-start w-100">
                            <div class="col-12 col-md-5 text-center mb-3 mb-md-0">
                                <img src="{{ asset('dashboard/img/faculty/16.3.jpeg') }}" alt="Rexal Toledo"
                                    class="img-fluid rounded">
                                <h3 class="mt-3 fw-bold">Rexal Toledo</h3>
                                <p class="mb-1">Assistant Professor IV</p>
                                <p class="mb-0"><i class="fa-solid fa-envelope"></i> scaday@southernleytestateu.edu.ph
                                </p>
                            </div>
                            <div class="col-12 col-md-7 ps-md-4">
                                <hr class="light my-3 d-md-none">
                                <h4 class="fw-bold" style="color: #fc466b;">Quotes</h4>
                                <p>"In the digital age, Information Technology is the foundation..."</p>
                                <h4 class="fw-bold mt-3">Educational Attainment</h4>
                                <p>PhD Technology Management (CAR)</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" data-aos="zoom-in" data-aos-duration="1000">
                        <div
                            class="card bg-dark text-white p-4 d-flex flex-column flex-md-row align-items-center text-center text-md-start w-100">
                            <div class="col-12 col-md-5 text-center mb-3 mb-md-0">
                                <img src="{{ asset('dashboard/img/faculty/16.4.jpeg') }}" alt="Junnie Ryh Sumacot"
                                    class="img-fluid rounded">
                                <h3 class="mt-3 fw-bold">Junnie Ryh Sumacot</h3>
                                <p class="mb-1">Assistant Professor IV</p>
                                <p class="mb-0"><i class="fa-solid fa-envelope"></i> scaday@southernleytestateu.edu.ph
                                </p>
                            </div>
                            <div class="col-12 col-md-7 ps-md-4">
                                <hr class="light my-3 d-md-none">
                                <h4 class="fw-bold" style="color: #fc466b;">Quotes</h4>
                                <p>"Information Technology is the engine that accelerates the pace of change..."</p>
                                <h4 class="fw-bold mt-3">Educational Attainment</h4>
                                <p>PhD Technology Management (CAR)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#facultyCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#facultyCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="services" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 21%, rgba(0,212,255,1) 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container text-center py-5">
            <div class="row g-4 mt-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('dashboard/img/Services/Alumni.png') }}" class="card-img-top"
                            alt="Emergency Room">
                        <div class="card-body text-center">
                            <img src="{{ asset('dashboard/img/Icons/icons8-graduate-50.png') }}" alt="Graduate Icon"
                                class="mb-2">
                            <h5 class="card-title">Class Alumni Of 2024</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000" style="height: 100%;">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('dashboard/img/Services/SLSUISA.png') }}" class="card-img-top"
                            alt="Emergency Room" style="height: 100%;">
                        <div class="card-body text-center">
                            <img src="{{ asset('dashboard/img/Icons/icons8-services-50.png') }}" alt="Graduate Icon"
                                class="mb-2">
                            <h5 class="card-title">CISA Services</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('dashboard/img/Services/SIS.png') }}" class="card-img-top"
                            alt="Emergency Room">
                        <div class="card-body text-center">
                            <img src="{{ asset('dashboard/img/Icons/icons8-website-50.png') }}" alt="Graduate Icon"
                                class="mb-2">
                            <h5 class="card-title">Student Portal</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('dashboard/img/Services/Qr_attendance.png') }}" class="card-img-top"
                            alt="Emergency Room">
                        <div class="card-body text-center">
                            <img src="{{ asset('dashboard/img/Icons/icons8-attendance-50.png') }}" alt="Graduate Icon"
                                class="mb-2">
                            <h5 class="card-title">Student Portal</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Officers Section -->
    <<section id="Officers" class="p-0" data-aos="fade-up" data-aos-duration="1000">
        <div class="container-fluid p-0">
            <!-- Header Title -->
            <div class="text-center py-4" data-aos="zoom-in" data-aos-duration="1000">
                <h2 class="text-uppercase fw-bold">Officers</h2>
            </div>

            <div class="row g-0 popup-gallery">
                <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <a class="portfolio-box" href="#">
                        <img class="img-fluid w-100" src="{{ asset('dashboard/img/officers/17.4.jpeg') }}"
                            alt="Mark Angelo Lasala">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Mark Angelo Lasala</span></div>
                                <div class="project-name"><span>President</span></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <a class="portfolio-box" href="#">
                        <img class="img-fluid w-100" src="{{ asset('dashboard/img/officers/17.5.jpeg') }}"
                            alt="Jessica Flores">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Jessica Flores</span></div>
                                <div class="project-name"><span>Secretary</span></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <a class="portfolio-box" href="#">
                        <img class="img-fluid w-100" src="{{ asset('dashboard/img/officers/17.2.jpeg') }}"
                            alt="Marivel Bermiso">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Marivel Bermiso</span></div>
                                <div class="project-name"><span>Treasurer</span></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <a class="portfolio-box" href="#">
                        <img class="img-fluid w-100" src="{{ asset('dashboard/img/officers/17.8.jpeg') }}"
                            alt="John Brunz Camarista">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>John Brunz Camarista</span></div>
                                <div class="project-name"><span>1A Representative</span></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="800">
                    <a class="portfolio-box" href="#">
                        <img class="img-fluid w-100" src="{{ asset('dashboard/img/officers/17.1.jpeg') }}"
                            alt="Klaire Valenzuela">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Klaire Valenzuela</span></div>
                                <div class="project-name"><span>1B Representative</span></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="1000">
                    <a class="portfolio-box" href="#">
                        <img class="img-fluid w-100" src="{{ asset('dashboard/img/officers/17.3.jpeg') }}"
                            alt="Danica Marie Cabahug">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Danica Marie Cabahug</span></div>
                                <div class="project-name"><span>2A Representative</span></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="1200">
                    <a class="portfolio-box" href="#">
                        <img class="img-fluid w-100" src="{{ asset('dashboard/img/officers/17.6.jpeg') }}"
                            alt="Annalou Oclarit">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Annalou Oclarit</span></div>
                                <div class="project-name"><span>2B Representative</span></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="1400">
                    <a class="portfolio-box" href="#">
                        <img class="img-fluid w-100" src="{{ asset('dashboard/img/officers/17.7.jpeg') }}"
                            alt="Rufa Mae Daniel">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Rufa Mae Daniel</span></div>
                                <div class="project-name"><span>3B Representative</span></div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        </section>

        <section class="text-white bg-dark">
            <div class="container text-center">
                <h2 class="mb-4">Lorem Ipsum!</h2><a class="btn btn-light btn-xl sr-button" role="button"
                    data-aos="zoom-in" data-aos-duration="400" data-aos-once="true" href="#">Download Now!</a>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-center mx-auto">
                        <h2 class="section-heading">Let's Get In Touch!</h2>
                        <hr class="my-4">
                        <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send
                            us an
                            email and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-center ms-auto"><i class="fa fa-phone fa-3x mb-3 sr-contact"
                            data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                        <p>123-456-6789</p>
                    </div>
                    <div class="col-lg-4 text-center ms-auto">
                        <i class="fab fa-facebook-f fa-3x mb-3" data-aos="zoom-in" data-aos-duration="300"
                            data-aos-once="true"></i>
                        <p><a href="https://www.facebook.com/slsubitsofficial" class="text-dark"
                                style="text-decoration:none; text-transform:uppercase;">slsubitsofficial</a></p>
                    </div>
                    <div class="col-lg-4 text-center me-auto"><i class="fa-solid fa-envelope fa-3x mb-3 sr-contact"
                            data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                        <p><a href="mailto:your-email@your-domain.com">email@example.com</a></p>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
        <script src="{{asset('dashboard/js/script.min.js?h=1f1474540c6d9b8543d4811bb81de4ff')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="{{asset('dashboard/js/script.js')}}"></script>
        <script src="{{asset('background/js/dropdown.js')}}"></script>
        <script src="{{asset('background/js/navbar.js')}}"></script>
        <script src="{{ asset('dashboard/js/video.js') }}"></script>
        <script src="{{ asset('dashboard/js/smoothScrolling.js') }}"></script>
        <script src="{{ asset('dashboard/js/scroll.js') }}"></script>
</body>

</html>