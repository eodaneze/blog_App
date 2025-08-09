    <?php 
       require_once('./header.php');
    ?>
<body>
     <?php 
          require_once('./preloader.php');
          require_once('./theme-switch.php');
          require_once('./navbar.php')
       ?>

        <!-- Start Search Modal -->
        <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                     <form>
            <input type="text" class="form-control" placeholder="Search here....">
            <button type="submit"><i class="fi fi-rr-search"></i></button>
        </form>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-line"></i></button>
                </div>
            </div>
        </div>
        <!-- End Search Modal -->

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <h2 class="breadcrumb-title">Author</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="index.html">Home</a></li>
                    <li>Author</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Author Section Start -->
        <div class="author-wrap">
            <div class="container">
                <div class="author-box">
                    <div class="author-img">
                        <img src="assets/img/author/single-author.jpg" alt="Image">
                    </div>
                    <div class="author-info">
                        <h4>Scarlett Emily</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or ran domised words which don't look even slightly believable.</p>
                        <div class="author-profile">
                            <ul class="social-profile list-style">
                                <li><a href="https://www.fb.com" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                <li><a href="https://www.instagram.com" target="_blank"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="https://www.linkedin.com" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                            </ul>
                            <div class="author-stat">
                                <span>40 Articles</span>
                                <span>191 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Author Section End -->

        <!-- Post Section Start  -->
        <div class="popular-news-three ptb-100">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-8">
                        <div class="section-title-two mb-40">
                            <h2>Posts</h2>
                        </div>
                        <div class="popular-news-wrap">
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-70.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Lifestyle</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Live Your Best Life: Tips For Achieving A Healthy And Fulfilling Lifestyle</a></h3>
                                    <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet conse ctet fringilla purus leo dignissim congue. Mauris elementum accumsan.</p>
                                    <ul class="news-metainfo list-style">
                                        <li class="author">
                                            <span class="author-img">
                                                <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                            </span>
                                            <a href="author.html">James William</a>
                                        </li>
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-71.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Business</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Maximizing Profits: A Guide To Streamlining Your Business Operations</a></h3>
                                    <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet conse ctet fringilla purus leo dignissim congue. Mauris elementum accumsan.</p>
                                    <ul class="news-metainfo list-style">
                                        <li class="author">
                                            <span class="author-img">
                                                <img src="assets/img/author/author-thumb-2.webp" alt="Image">
                                            </span>
                                            <a href="author.html">Amela Mia</a>
                                        </li>
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-72.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Events</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Making Events Memorable: A Guide To Planning Successful Gatherings</a></h3>
                                    <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet conse ctet fringilla purus leo dignissim congue. Mauris elementum accumsan.</p>
                                    <ul class="news-metainfo list-style">
                                        <li class="author">
                                            <span class="author-img">
                                                <img src="assets/img/author/author-thumb-3.webp" alt="Image">
                                            </span>
                                            <a href="author.html">Ava Sophia</a>
                                        </li>
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-73.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Photography</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Capturing Life's Moments: A Guide to Improving Your Photography Skills</a></h3>
                                    <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet conse ctet fringilla purus leo dignissim congue. Mauris elementum accumsan.</p>
                                    <ul class="news-metainfo list-style">
                                        <li class="author">
                                            <span class="author-img">
                                                <img src="assets/img/author/author-thumb-4.webp" alt="Image">
                                            </span>
                                            <a href="author.html">Olivia Emma</a>
                                        </li>
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-74.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Culture</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Exploring the World's Diversity: A Journey Through Different Cultures</a></h3>
                                    <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet conse ctet fringilla purus leo dignissim congue. Mauris elementum accumsan.</p>
                                    <ul class="news-metainfo list-style">
                                        <li class="author">
                                            <span class="author-img">
                                                <img src="assets/img/author/author-thumb-5.webp" alt="Image">
                                            </span>
                                            <a href="author.html">Lima Noah</a>
                                        </li>
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="page-nav list-style text-center mt-5">
                            <li><a href="author.html"><i class="flaticon-arrow-left"></i></a></li>
                            <li><a class="active" href="author.html">01</a></li>
                            <li><a href="author.html">02</a></li>
                            <li><a href="author.html">03</a></li>
                            <li><a href="author.html"><i class="flaticon-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">Explore Topics</h3>
                                <ul class="category-widget list-style">
                                    <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg" alt="Image">Celebration <span>(6)</span></a></li>
                                    <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg" alt="Image">Culture<span>(3)</span></a></li>
                                    <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg" alt="Image">Fashion<span>(2)</span></a></li>
                                    <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg" alt="Image">Inspiration<span>(8)</span></a></li>
                                    <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg" alt="Image">Lifestyle<span>(6)</span></a></li>
                                    <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg" alt="Image">Politics<span>(2)</span></a></li>
                                    <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg" alt="Image">Trending<span>(4)</span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget-two">
                                <div class="contact-widget">
                                    <img src="assets/img/contact-bg.svg" alt="Image" class="contact-shape">
                                    <a href="index.html" class="logo">
                                        <img class="logo-light" src="assets/img/logo.webp" alt="Image">
                                        <img class="logo-dark" src="assets/img/logo-white.webp" alt="Image">
                                    </a>
                                    <p>Mauris mattis auctor cursus. Phasellus iso tellus tellus, imperdiet ut imperdiet eu, noiaculis a sem Donec vehicula luctus nunc in laoreet Aliquam</p>
                                    <ul class="social-profile list-style">
                                        <li><a href="https://www.fb.com" target="_blank"><i class="flaticon-facebook-1"></i></a></li>
                                        <li><a href="https://www.twitter.com" target="_blank"><i class="flaticon-twitter-1"></i></a></li>
                                        <li><a href="https://www.instagram.com" target="_blank"><i class="flaticon-instagram-2"></i></a></li>
                                        <li><a href="https://www.linkedin.com" target="_blank"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">Recommended</h3>
                                <div class="pp-post-wrap-two">
                                    <div class="news-card-one">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-thumb-4.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Bernie Nonummy Pelopai Iatis Eum Litora</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 22, 2024</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-one">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-thumb-5.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">How Youth Viral Diseases May The Year 2023</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 23, 2024</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-one">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-thumb-6.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To Smoke</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 14, 2024</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-one">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-thumb-7.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">First Prototype Flight Using Kinetic Launch System</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 07, 2024</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Post Section End -->

        <!-- Back to Top -->
        <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
            <i class="ri-arrow-up-line"></i>
        </button>

     <?php 
        require_once('./footer.php');
        require_once('./newletter.php');
        require_once('./script.php')
     ?>
    </body>
</html>