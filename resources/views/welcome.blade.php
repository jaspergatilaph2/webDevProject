<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Southern Leyte State U - Bontoc Campus</title>
    <link rel="stylesheet"
        href="{{asset('dashboard/bootstrap/css/bootstrap.min.css?h=012df120f3b0c7b81bee90c64257b484')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('dashboard/css/styles.min.css?h=da10d2cad830becf02e68a25f1c16321')}}">
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
                        <ul class="dropdown-menu bg-dark text-center w-100" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="#faculty-staff">Faculty & Staff</a></li>
                            <li><a class="dropdown-item text-white" href="#organizational-charts">Organizational
                                    Charts</a></li>
                            <li><a class="dropdown-item text-white" href="#mission-vision">Mission & Vision</a></li>
                        </ul>
                    </li>

                    <!-- Other Navbar Items -->
                    <li class="nav-item"><a class="nav-link text-white" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#portfolio">Portfolio</a></li>
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
                        <h1 class="text-uppercase"><strong>Your Favorite Source of Free Bootstrap Themes</strong></h1>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">We can help you build better websites using the Bootstrap CSS framework!
                        Just download your template and start going, no strings attached!</p>
                    <a class="btn btn-primary btn-xl" role="button" href="#services">Find Out More</a>
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

    <section id="about" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-8 text-center mx-auto">
                    <h2 class="text-white section-heading">We've got what you need!</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">Bootstrap has everything you need to get your new website up and running
                        in no time! All of the templates and themes are open source, free to download, and easy to use.
                        No strings attached!</p><a class="btn btn-light btn-xl" role="button" href="#services">Get
                        Started!</a>
                </div>
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
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-diamond fa-4x text-primary mb-3 sr-icons"
                            data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i>
                        <h3 class="mb-3">Sturdy Templates</h3>
                        <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-paper-plane fa-4x text-primary mb-3 sr-icons"
                            data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
                        <h3 class="mb-3">Ready to Ship</h3>
                        <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-newspaper-o fa-4x text-primary mb-3 sr-icons"
                            data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
                        <h3 class="mb-3">Up to Date</h3>
                        <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-heart fa-4x text-primary mb-3 sr-icons"
                            data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
                        <h3 class="mb-3">Made with Love</h3>
                        <p class="text-muted mb-0">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="p-0">
        <div class="container-fluid p-0">
            <div class="row g-0 popup-gallery">
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href=""><img class="img-fluid"
                            src="{{ asset('dashboard/img/fullsize/1.jpg') }}">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Project Name</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href=""><img class="img-fluid"
                            src="{{ asset('dashboard/img/fullsize/2.jpg') }}">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Project Name</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href=""><img class="img-fluid"
                            src="{{ asset('dashboard/img/fullsize/3.jpg') }}">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Project Name</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href=""><img class="img-fluid"
                            src="{{ asset('dashboard/img/fullsize/4.jpg') }}">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Project Name</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href=""><img class="img-fluid"
                            src="{{ asset('dashboard/img/fullsize/5.jpg') }}">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Project Name</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href=""><img class="img-fluid"
                            src="{{ asset('dashboard/img/fullsize/6.jpg') }}">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Project Name</span></div>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </section>
    <section class="text-white bg-dark">
        <div class="container text-center">
            <h2 class="mb-4">Lorem Ipsum!</h2><a class="btn btn-light btn-xl sr-button" role="button" data-aos="zoom-in"
                data-aos-duration="400" data-aos-once="true" href="#">Download Now!</a>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an
                        email and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center ms-auto"><i class="fa fa-phone fa-3x mb-3 sr-contact"
                        data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center ms-auto">
                    <i class="fa fa-facebook fa-3x mb-3" data-aos="zoom-in" data-aos-duration="300"
                        data-aos-once="true"></i>
                    <p><a href="https://www.facebook.com/slsubitsofficial" class="text-dark" style="text-decoration:none; text-transform:uppercase;">slsubitsofficial</a></p>
                </div>
                <div class="col-lg-4 text-center me-auto"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact"
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
    <script src="{{asset('dashboard/js/script.js')}}"></script>
    <script src="{{asset('background/js/dropdown.js')}}"></script>
    <script src="{{asset('background/js/navbar.js')}}"></script>

</body>

</html>