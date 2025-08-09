
        <!-- Start Navbar Area -->
         <div class="navbar-area header-one" id="navbar">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6 col-5">
                            <button class="subscribe-btn" data-bs-toggle="modal" data-bs-target="#newsletter-popup">Subscribe<i class="flaticon-right-arrow"></i></button>
                        </div>
                        <div class="col-lg-4 col-md-6 md-none">
                            <a class="navbar-brand" href="./">
                                <img class="logo-light" src="assets/img/logo-white.webp" alt="logo">
                                <img class="logo-dark" src="assets/img/logo-white.webp" alt="logo">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-7">
                            <ul class="social-profile list-style">
                                <li><a href="https://www.fb.com" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                <li><a href="https://www.instagram.com" target="_blank"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="https://www.linkedin.com" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <a class="sidebar-toggler md-none" data-bs-toggle="offcanvas" href="index.html#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                        <img src="assets/img/icons/menubar-white.svg" alt="Image">
                    </a>
                    <a class="navbar-brand d-lg-none" href="./">
                        <img class="logo-light" src="assets/img/logo-white.webp" alt="logo">
                        <img class="logo-dark" src="assets/img/logo-white.webp" alt="logo">
                    </a>
                    <button type="button" class="search-btn d-lg-none" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="flaticon-loupe"></i>
                    </button>
                    <a class="navbar-toggler" data-bs-toggle="offcanvas" href="index.html#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                        <span class="burger-menu">
                            <span class="top-bar"></span>
                            <span class="middle-bar"></span>
                            <span class="bottom-bar"></span>
                        </span>
                    </a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class=" nav-link active">
                                    Home
                                </a>
                              
                            </li>
                           
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Blogs
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="./blog-details.php" class="nav-link">
                                            Blog Details
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    My Account
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="politics.html" class="nav-link">
                                            Welcome Rex
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./author.php" class="nav-link">
                                            My Profile
                                        </a>
                                    </li>
                                </ul>
                            </li>
                         
                           
                           
                        </ul>
                        <div class="others-option d-flex align-items-center">
                            
                            <div class="option-item">
                                <button type="button" class="search-btn" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="flaticon-loupe"></i>
                                </button>
                            </div>
                            <div class="option-item">
                                <a href="./login.php" class="btn-two">Sign In</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Responsive Navbar Area -->
        <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a href="./" class="logo d-inline-block">
                    <img class="logo-light" src="assets/img/logo.webp" alt="logo">
                    <img class="logo-dark" src="assets/img/logo-white.webp" alt="logo">
                </a>
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="accordion" id="navbarAccordion">
                    <div class="accordion-item">
                        <button class="accordion-button collapsed active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Home
                        </button>
                    
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapbaxour" aria-expanded="false" aria-controls="collapbaxour">
                            Blog
                        </button>
                        <div id="collapbaxour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordion45">
                                    <div class="accordion-item">
                                        <a class="accordion-link" href="about.html">
                                            Blog Details
                                        </a>
                                    </div>
                                    
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            My Account
                        </button>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordion7">
                                    <div class="accordion-item">
                                        <a href="business.html" class="accordion-link">
                                            Welcome Rex
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="./author.php" class="accordion-link">
                                            Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="offcanvas-contact-info">
                    <h4>Contact Info</h4>
                    <ul class="contact-info list-style">
                        <li>
                            <i class="ri-map-pin-fill"></i>
                            <p>Mile 50 Abakaliki</p>
                        </li>
                        <li>
                            <i class="ri-mail-fill"></i>
                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#b4dcd1d8d8dbf4d6d5ccdb9ad7dbd9"><span class="__cf_email__" data-cfemail="fa929f969695ba989b8295d4999597">support@danielezeali.com</span></a>
                        </li>
                        <li>
                            <i class="ri-phone-fill"></i>
                            <a href="tel:1800123456789">+1 800 123 456 789</a>
                        </li>
                    </ul>
                    <ul class="social-profile list-style">
                        <li><a href="https://www.fb.com" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                        <li><a href="https://www.instagram.com" target="_blank"><i class="ri-instagram-line"></i></a></li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                        <li><a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    </ul>
                </div>
                <div class="others-option d-flex d-lg-none align-items-center">
                    <div class="option-item">
                        <a href="./login.php" class="btn-two">Sign In</a>
                    </div>
                </div>
            </div>
        </div>