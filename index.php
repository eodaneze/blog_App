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

        <!-- Trending Section Start -->
        <div class="container-fluid">
            <div class="trending-news-box">
                <div class="row gx-5">
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                        <h4>Trending Now</h4>
                        <div class="trending-prev"><i class="flaticon-left-arrow"></i></div>
                        <div class="trending-next"><i class="flaticon-right-arrow"></i></div>
                    </div>
                    <div class="col-xxl-10 col-xl-9 col-lg-9 col-md-8">
                        <div class="trending-news-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide news-card-one">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/trending-1.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Climate Change & Your Future Health</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide news-card-one">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/trending-2.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Female Hawks Win $10,000 Funding Boost</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide news-card-one">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/trending-3.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Goodwin Must Break Clarkson Hold</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide news-card-one">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/trending-4.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Major GWC Collection Is Coming To QVC</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Section End -->

        <!-- News Section Start -->
        <div class="container-fluid pb-75">
            <div class="news-col-wrap">
                <div class="news-col-one">
                    <div class="news-card-two">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-1.webp" alt="Image">
                            <a href="business.html" class="news-cat">Politics</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="business-details.html">What The Federal Infrastructure Package Means For Minnesota</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 25, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-3.webp" alt="Image">
                        </div>
                        <div class="news-card-info">
                            <a href="business.html" class="news-cat">Fashion</a>
                            <h3><a href="business-details.html">How To Recreate The High Pony-tail That Celebrities Love</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>11 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-4.webp" alt="Image">
                        </div>
                        <div class="news-card-info">
                            <a href="business.html" class="news-cat">Fashion</a>
                            <h3><a href="business-details.html">Tempores Imperdiet Rhoncus Ipsam Lobortis Kolats.</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 14, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-5.webp" alt="Image">
                        </div>
                        <div class="news-card-info">
                            <a href="business.html" class="news-cat">Fashion</a>
                            <h3><a href="business-details.html">Beauty Queens Need Beauty Material & Products</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 10, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-col-two">
                    <div class="news-card-four">
                        <img src="assets/img/news/news-58.webp" alt="Image">
                        <div class="news-card-info">
                            <h3><a href="business-details.html">Best VR Headsets For PC And Gaming This Year</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 08, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>14 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-five">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-59.webp" alt="Image">
                            <a href="business.html" class="news-cat">Fashion</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To Smoke Light In</a></h3>
                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 08, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-five">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-60.webp" alt="Image">
                            <a href="business.html" class="news-cat">Travel</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="business-details.html">Selective Focus Photography Of Orange Fox Life</a></h3>
                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>11 Min Read</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-col-three">
                    <div class="news-card-two">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-2.webp" alt="Image">
                            <a href="business.html" class="news-cat">Politics</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="business-details.html">Elijah James: The Nashville Photographer Shares Her Unique Journey</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-7.webp" alt="Image">
                        </div>
                        <div class="news-card-info">
                            <a href="business.html" class="news-cat">Travel</a>
                            <h3><a href="business-details.html">A Complimentary Day At Mandarin The Oriental</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 15, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-6.webp" alt="Image">
                        </div>
                        <div class="news-card-info">
                            <a href="business.html" class="news-cat">Business</a>
                            <h3><a href="business-details.html">First Prototype Flight Using Kinetic Launch System</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 22, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-8.webp" alt="Image">
                        </div>
                        <div class="news-card-info">
                            <a href="business.html" class="news-cat">Health</a>
                            <h3><a href="business-details.html">Life Health Continues To Spread Rapidly, Are Many People</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 15, 2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News Section End -->

        <!-- Editor Section Start -->
        <div class="bg_gray editor-news pt-100 pb-75">
            <div class="container-fluid">
                <div class="row gx-5">
                    <div class="col-xl-6">
                        <div class="editor-box">
                            <div class="row align-items-end mb-40">
                                <div class="col-xl-6 col-md-6">
                                    <h2 class="section-title">Editor's Pick<img class="section-title-img" src="assets/img/section-img.webp" alt="Image"></h2>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <ul class="nav nav-tabs news-tablist" role="tablist">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button" role="tab">Poilitics</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_2" type="button" role="tab">Sports</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_3" type="button" role="tab">Business</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content editor-news-content">
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-38.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Politics</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                                        </div>
                                                        <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">How Maps Reshape American Politics In World</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-39.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Politics</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-2.webp" alt="Image">
                                                        </div>
                                                        <h5>By <a href="author.html">ELIJAH JAMES</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">Will Humans be able to live in Mars in the future?</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 22, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-40.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Politics</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-3.webp" alt="Image">
                                                        </div>
                                                        <h5>By<a href="author.html">BANKS GAIN</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">Here’s the proof momentum
                                                        strategy work</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-41.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Politics</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-4.webp" alt="Image">
                                                        </div>
                                                        <h5>By <a href="author.html">HARPAR LUNA</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">The Promise And Potential Of Synthetic Assets</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 14, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_2" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-42.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Sports</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-5.webp" alt="Image">
                                                        </div>
                                                        <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">Joe Gibbs discusses Ty Gibbs incident at Martinsville</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 07, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-43.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Sports</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-2.webp" alt="Image">
                                                        </div>
                                                        <h5>By <a href="author.html">ELIJAH JAMES</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">The Heart of a Champion: Mental Toughness in Sports</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-44.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Sports</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-3.webp" alt="Image">
                                                        </div>
                                                        <h5>By<a href="author.html">BANKS GAIN</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">Breaking Barriers: Inspiring Stories in Sports</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-45.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Sports</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-4.webp" alt="Image">
                                                        </div>
                                                        <h5>By <a href="author.html">HARPAR LUNA</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">Unleashing Your Inner Athlete: The Power of Sports</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>14 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_3" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-46.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Business</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                                        </div>
                                                        <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">Navigating the Entrepreneurial Journey: Tips for Success</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-47.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Business</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-2.webp" alt="Image">
                                                        </div>
                                                        <h5>By <a href="author.html">ELIJAH JAMES</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">Revolutionizing Business: The Power of Innovation</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-48.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Business</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-3.webp" alt="Image">
                                                        </div>
                                                        <h5>By<a href="author.html">BANKS GAIN</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">From Start-Up to Scale-Up: Growing Your Business</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 22, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="news-card-six">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-49.webp" alt="Image">
                                                    <a href="business.html" class="news-cat">Business</a>
                                                </div>
                                                <div class="news-card-info">
                                                    <div class="news-author">
                                                        <div class="news-author-img">
                                                            <img src="assets/img/author/author-thumb-4.webp" alt="Image">
                                                        </div>
                                                        <h5>By <a href="author.html">HARPAR LUNA</a></h5>
                                                    </div>
                                                    <h3><a href="business-details.html">Building a Thriving Business: Strategies for Success</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 05, 2024</a></li>
                                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="pp-news-box">
                            <ul class="nav nav-tabs news-tablist-two" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_10" type="button" role="tab">Popular News</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_11" type="button" role="tab">Recent News</button>
                                </li>
                            </ul>
                            <div class="tab-content news-tab-content">
                                <div class="tab-pane fade show active" id="tab_10" role="tabpanel">
                                    <div class="news-card-seven">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-50.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <a href="business.html" class="news-cat">Lifestyle</a>
                                            <h3><a href="business-details.html">Jiraiya Banks Wants to Teach You How to Build a House</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a></li>
                                                <li><i class="fi fi-rr-comment"></i>03</li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-seven">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-51.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <a href="business.html" class="news-cat">Photography</a>
                                            <h3><a href="business-details.html">The Secret Math Behind Mind Reading Magic Tricks</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 25, 2024</a></li>
                                                <li><i class="fi fi-rr-comment"></i>03</li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-seven">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-52.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <a href="business.html" class="news-cat">Business</a>
                                            <h3><a href="business-details.html">Recovery and Cleanup in Florida After Hurricane Ian</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Msr 15, 2024</a></li>
                                                <li><i class="fi fi-rr-comment"></i>03</li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-seven">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-53.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <a href="business.html" class="news-cat">Sports</a>
                                            <h3><a href="business-details.html">6 Romantic places You Want to Visit with Your Partner</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 22, 2024</a></li>
                                                <li><i class="fi fi-rr-comment"></i>03</li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_11" role="tabpanel">
                                    <div class="news-card-seven">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-54.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <a href="business.html" class="news-cat">Lifestyle</a>
                                            <h3><a href="business-details.html">Discovering Your Personal Bliss: A Guide to a Fulfilling Lifestyle</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 15, 2024</a></li>
                                                <li><i class="fi fi-rr-comment"></i>03</li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-seven">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-55.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <a href="business.html" class="news-cat">Photography</a>
                                            <h3><a href="business-details.html">Capturing Life's Moments: Tips for Better Photography</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 14, 2024</a></li>
                                                <li><i class="fi fi-rr-comment"></i>03</li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-seven">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-56.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <a href="business.html" class="news-cat">Business</a>
                                            <h3><a href="business-details.html">Empowering Your Business: Strategies for Growth</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 18, 2024</a></li>
                                                <li><i class="fi fi-rr-comment"></i>03</li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-seven">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-57.webp" alt="Image">
                                        </div>
                                        <div class="news-card-info">
                                            <a href="business.html" class="news-cat">Sports</a>
                                            <h3><a href="business-details.html">Unleashing Your Inner Champion: The Excitement of Sports Competition</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 22, 2024</a></li>
                                                <li><i class="fi fi-rr-comment"></i>03</li>
                                                <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
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
        <!-- Editor Section End -->

        <!-- Featured Post Section Start -->
        <div class="selected-news ptb-100">
            <div class="container-fluid">
                <div class="content-wrapper">
                    <div class="left-content">
                        <div class="row align-items-end mb-40">
                            <div class="col-md-7">
                                <h2 class="section-title">Selected Posts<img class="section-title-img" src="assets/img/section-img.webp" alt="Image"></h2>
                            </div>
                            <div class="col-md-5 text-md-end">
                                <a href="business.html" class="link-one">View All News<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="row gx-45">
                            <div class="col-xl-7">
                                <div class="news-card-four">
                                    <img src="assets/img/news/news-31.webp" alt="Image">
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Kyrgios And Djokovic Agree To Post-match Meal</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 25, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-five">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-32.webp" alt="Image">
                                        <a href="business.html" class="news-cat">Sports</a>
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange</a></h3>
                                        <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-five">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-33.webp" alt="Image">
                                        <a href="business.html" class="news-cat">Fashion</a>
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Selective Focus Photography Of Orange Fox Life</a></h3>
                                        <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="news-card-two">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-34.webp" alt="Image">
                                        <a href="business.html" class="news-cat">Politics</a>
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Beyond Good & Evil 2 Has Been In Development Longer Than Literally Any Game, Ever</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-35.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Travel</a>
                                        <h3><a href="business-details.html">World Trending Best 10 Website Travel Tips For Runners Groups Of</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 22, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-36.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Business</a>
                                        <h3><a href="business-details.html">How To Find The Right Template For Your Specific Product</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-37.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Health</a>
                                        <h3><a href="business-details.html">Life Health Continues To Spread Rapidly, Are Many People</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 16, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="promo-wrap">
                                    <div class="promo-card bg-f">
                                        <img src="assets/img/promo-shape-2.webp" alt="Image" class="promo-shape">
                                        <div class="promo-content">
                                            <a href="index.html" class="logo"><img src="assets/img/logo-white.webp" alt="Image"></a>
                                            <p>The European languages are members of the same family.</p>
                                        </div>
                                        <div class="promo-img">
                                            <img src="assets/img/promo-img.webp" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Social Links</h3>
                            <ul class="social-widget list-style">
                                <li>
                                    <a href="https://www.fb.com" target="_blank">
                                        <span><img src="assets/img/icons/facebook.svg" alt="Image"></span>
                                        Facebook
                                    </a>
                                    <p>28 <br> Likes</p>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com" target="_blank">
                                        <span><img src="assets/img/icons/twitter.svg" alt="Image"></span>
                                        Twitter
                                    </a>
                                    <p>289k Followers</p>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com" target="_blank">
                                        <span><img src="assets/img/icons/instagram.svg" alt="Image"></span>
                                        Instagram
                                    </a>
                                    <p>231k Followers</p>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com" target="_blank">
                                        <span><img src="assets/img/icons/pinterest.svg" alt="Image"></span>
                                        Pinterest
                                    </a>
                                    <p>28k Followers</p>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com" target="_blank">
                                        <span><img src="assets/img/icons/youtube.svg" alt="Image"></span>
                                        Youtube
                                    </a>
                                    <p>159k Subscribers</p>
                                </li>
                                <li>
                                    <a href="https://www.soundcloud.com" target="_blank">
                                        <span><img src="assets/img/icons/soundcloud.svg" alt="Image"></span>
                                        Soundcloud
                                    </a>
                                    <p>31k Followers</p>
                                </li>
                                <li>
                                    <a href="https://www.behance.com" target="_blank">
                                        <span><img src="assets/img/icons/behance.svg" alt="Image"></span>
                                        Behance
                                    </a>
                                    <p>28 Followers</p>
                                </li>
                                <li>
                                    <a href="https://www.vimeo.com" target="_blank">
                                        <span><img src="assets/img/icons/vimeo.svg" alt="Image"></span>
                                        Vimeo
                                    </a>
                                    <p>55k Followers</p>
                                </li>
                                <li>
                                    <a href="https://www.telegram.com" target="_blank">
                                        <span><img src="assets/img/icons/telegram.svg" alt="Image"></span>
                                        Telegram
                                    </a>
                                    <p>788k Followers</p>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-widget">
                            <div class="newsletter-widget">
                                <h2>Newsletter</h2>
                                <h6>Join 70,000 Subscribers</h6>
                                <form action="index.html#">
                                    <input type="email" placeholder="Email Address">
                                    <button type="submit">Subscribe<i class="flaticon-right-arrow-1"></i></button>
                                </form>
                                <p>By signing up, you agree to our <a href="privacy-policy.html">Privacy Policy</a></p>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Popular Tags</h3>
                            <ul class="tag-list list-style">
                                <li><a href="news-by-tags.html">BUSINESS</a></li>
                                <li><a href="news-by-tags.html">FOOD</a></li>
                                <li><a href="news-by-tags.html">SCIENCE</a></li>
                                <li><a href="news-by-tags.html">LIFESTYLE</a></li>
                                <li><a href="news-by-tags.html">SPORTS</a></li>
                                <li><a href="news-by-tags.html">PHOTO</a></li>
                                <li><a href="news-by-tags.html">TECHNOLOGY</a></li>
                                <li><a href="news-by-tags.html">CONTENT</a></li>
                                <li><a href="news-by-tags.html">FEATURED</a></li>
                                <li><a href="news-by-tags.html">AUDIO</a></li>
                                <li><a href="news-by-tags.html">FASHION</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Post Section End -->

        <!-- Popular Section Start -->
        <div class="bg_gray popular-news ptb-100">
            <div class="container-fluid">
                <div class="row align-items-end mb-40">
                    <div class="col-md-7">
                        <h2 class="section-title">Most Popular<img class="section-title-img" src="assets/img/section-img.webp" alt="Image"></h2>
                    </div>
                    <div class="col-md-5 text-md-end">
                        <a href="business.html" class="link-one">View All News<i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="row gx-55">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="news-card-eleven">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-26.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <div class="news-author">
                                            <div class="news-author-img">
                                                <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                            </div>
                                            <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                        </div>
                                        <h3><a href="business-details.html">Multiple Games & Updates For 2023 Holiday Season</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a></li>
                                            <li><i class="fi fi-rr-comment"></i>03</li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="news-card-ten">
                                    <a href="business.html" class="news-cat">Business</a>
                                    <h3><a href="business-details.html">First Prototype Flight Using Kinetic Launch System</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2024</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="news-card-ten">
                                    <a href="business.html" class="news-cat">Inspiration</a>
                                    <h3><a href="business-details.html">A Comprehensive Guide To The Best Summer Dresses</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2024</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="news-card-six">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-27.webp" alt="Image">
                                        <a href="business.html" class="news-cat">Health</a>
                                    </div>
                                    <div class="news-card-info">
                                        <div class="news-author">
                                            <div class="news-author-img">
                                                <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                            </div>
                                            <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                        </div>
                                        <h3><a href="business-details.html">I Thought I'd Found A Cheat Code For Parenting</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 22, 2024</a></li>
                                            <li><i class="fi fi-rr-comment"></i>03</li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="news-card-six">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-28.webp" alt="Image">
                                        <a href="business.html" class="news-cat">Education</a>
                                    </div>
                                    <div class="news-card-info">
                                        <div class="news-author">
                                            <div class="news-author-img">
                                                <img src="assets/img/author/author-thumb-2.webp" alt="Image">
                                            </div>
                                            <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                        </div>
                                        <h3><a href="business-details.html">How To Make Your Life Routine More Fun And Eco-friendly</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 14, 2024</a></li>
                                            <li><i class="fi fi-rr-comment"></i>03</li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="news-card-six">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-29.webp" alt="Image">
                                        <a href="business.html" class="news-cat">Technology</a>
                                    </div>
                                    <div class="news-card-info">
                                        <div class="news-author">
                                            <div class="news-author-img">
                                                <img src="assets/img/author/author-thumb-3.webp" alt="Image">
                                            </div>
                                            <h5>By <a href="author.html">CLAIRE AUDREY</a></h5>
                                        </div>
                                        <h3><a href="business-details.html">You Can Read Any Of These Short Novels In A Weekend</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 17, 2024</a></li>
                                            <li><i class="fi fi-rr-comment"></i>03</li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="news-card-six">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-30.webp" alt="Image">
                                        <a href="business.html" class="news-cat">Fashion</a>
                                    </div>
                                    <div class="news-card-info">
                                        <div class="news-author">
                                            <div class="news-author-img">
                                                <img src="assets/img/author/author-thumb-4.webp" alt="Image">
                                            </div>
                                            <h5>By <a href="author.html">ELENA NAOMI</a></h5>
                                        </div>
                                        <h3><a href="business-details.html">Read 5 Best Novel In A Your Weekend Time</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 19, 2024</a></li>
                                            <li><i class="fi fi-rr-comment"></i>03</li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Section End -->

        <!-- General News Section Start -->
        <div class="general-news ptb-100">
            <div class="container-fluid">
                <div class="content-wrapper">
                    <div class="left-content">
                        <div class="row align-items-end mb-40">
                            <div class="col-md-7">
                                <h2 class="section-title">General News<img class="section-title-img" src="assets/img/section-img.webp" alt="Image"></h2>
                            </div>
                            <div class="col-md-5 text-md-end">
                                <a href="business.html" class="link-one">View All News<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-20.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Fashion</a>
                                        <h3><a href="business-details.html">Is This The Beginning Of The End Of The Internet?</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 22, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-21.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Politics</a>
                                        <h3><a href="business-details.html">7 Steps To Get Professional Facial Results At Home</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 25, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-22.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Inspiration</a>
                                        <h3><a href="business-details.html">Creative Photography Ideas From Smart Devices</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 18, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-23.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Politics</a>
                                        <h3><a href="business-details.html">6 Romantic Places You Should Visit In 2023</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 20, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-24.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Sports</a>
                                        <h3><a href="business-details.html">The Best Place To Celebrate Birthday And Music</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-25.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Business</a>
                                        <h3><a href="business-details.html">Splurge Or Save Last Minute Pampering Gift Ideas</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 18, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-section">
                            <p>SPONSORED AD</p>
                        </div>
                        <div class="promo-wrap">
                            <div class="promo-card-two">
                                <img src="assets/img/promo-shape-1.webp" alt="Image" class="promo-shape">
                                <div class="promo-content">
                                    <a href="index.html" class="logo">
                                        <img class="logo-light" src="assets/img/logo.webp" alt="Image">
                                        <img class="logo-dark" src="assets/img/logo-white.webp" alt="Image">
                                    </a>
                                    <p>The European languages are members of the same family separ existence is a Baxo. For science, music, sport, etc.</p>
                                </div>
                                <img src="assets/img/promo-img-2.webp" alt="Image" class="promo-img">
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
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
                            <h3 class="sidebar-widget-title">Popular Posts</h3>
                            <div class="pp-post-wrap">
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
                                <div class="news-card-one">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-thumb-8.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Beauty Queens Need Material & Products</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-one">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-thumb-9.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">That Woman Comes From Heaven Look Like Angel</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 01, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- General News Section End -->

        <!-- Video Section Start -->
        <div class="video-news-wrap pt-100 pb-75">
            <div class="container-fluid">
                <div class="row mb-50 align-items-center">
                    <div class="col-md-7">
                        <h2 class="section-title text-white">Featured Video<img class="section-title-img" src="assets/img/section-img.webp" alt="Image"></h2>
                    </div>
                    <div class="col-md-5 text-md-end">
                        <a href="featured-video.html" class="link-one">View All Featured Video<i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="scrollscreen featured-video-box">
                    <div class="row gx-4">
                        <div class="col-xl-7">
                            <div class="news-card-four">
                                <img src="assets/img/news/video/news-1.webp" alt="Image">
                                <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                    <i class="flaticon-play-button"></i>
                                    <span class="ripple"></span>
                                </a>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Apex Legends Season 11 Start Date, Time, & What To Expect</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-four">
                                <img src="assets/img/news/video/news-8.webp" alt="Image">
                                <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                    <i class="flaticon-play-button"></i>
                                    <span class="ripple"></span>
                                </a>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Navigating The Political Sphere: Insights And Analysis</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="row">
                                <div class="col-xl-12 col-lg-6">
                                    <div class="news-card-eight">
                                        <img src="assets/img/news/video/news-2.webp" alt="Image">
                                        <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                            <i class="flaticon-play-button"></i>
                                            <span class="ripple"></span>
                                        </a>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">First Season Of ‘Battlefield’ Debuts June 9th With Map</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 16, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>13 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6">
                                    <div class="news-card-eight">
                                        <img src="assets/img/news/video/news-3.webp" alt="Image">
                                        <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                            <i class="flaticon-play-button"></i>
                                            <span class="ripple"></span>
                                        </a>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Man wearing black pullover hoodie to smoke light in</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 12, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6">
                                    <div class="news-card-eight">
                                        <img src="assets/img/news/video/news-9.webp" alt="Image">
                                        <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                            <i class="flaticon-play-button"></i>
                                            <span class="ripple"></span>
                                        </a>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">How To Find The Right Template For Your Product</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 12, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-slider-wrap">
                    <div class="video-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="news-card-nine">
                                    <img src="assets/img/news/video/news-4.webp" alt="Image">
                                    <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                        <i class="flaticon-play-button"></i>
                                        <span class="ripple"></span>
                                    </a>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">5 things we know about GTA Trilogy: Definitive Edition so far</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 25, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>25 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="news-card-nine">
                                    <img src="assets/img/news/video/news-5.webp" alt="Image">
                                    <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                        <i class="flaticon-play-button"></i>
                                        <span class="ripple"></span>
                                    </a>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Nintendo Switch Online’s Next Wave of N64 Games Confirmed</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 23, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="news-card-nine">
                                    <img src="assets/img/news/video/news-6.webp" alt="Image">
                                    <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                        <i class="flaticon-play-button"></i>
                                        <span class="ripple"></span>
                                    </a>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Back 4 Blood developers Turtle Rock have been bought by Tencent</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="news-card-nine">
                                    <img src="assets/img/news/video/news-7.webp" alt="Image">
                                    <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                        <i class="flaticon-play-button"></i>
                                        <span class="ripple"></span>
                                    </a>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Beauty queens need beauty material & products</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 11, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-prev"><i class="flaticon-left-arrow"></i></div>
                    <div class="video-next"><i class="flaticon-right-arrow"></i></div>
                </div>
            </div>
        </div>
        <!-- Video Section End -->

        <!-- Latest News Start -->
        <div class="latest-news pb-100">
            <div class="container-fluid">
                <div class="content-wrapper">
                    <div class="left-content">
                        <div class="row align-items-end mb-40">
                            <div class="col-md-7">
                                <h2 class="section-title">Latest News<img class="section-title-img" src="assets/img/section-img.webp" alt="Image"></h2>
                            </div>
                            <div class="col-md-5 text-md-end">
                                <a href="business.html" class="link-one">View All News<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="row gx-5">
                            <div class="col-xl-7">
                                <div class="scrollscreen">
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-9.webp" alt="Image">
                                            <a href="business.html" class="news-cat">Lifestyle</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Good Day To Take A Photo With Your Favorite Style</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 22, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-10.webp" alt="Image">
                                            <a href="business.html" class="news-cat">Fashion</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">I Turned My Home Into A Fortress of Surveillance</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-11.webp" alt="Image">
                                            <a href="business.html" class="news-cat">Science</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To Smoke Light In</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 17, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-12.webp" alt="Image">
                                            <a href="business.html" class="news-cat">Photography</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Recovery And Cleanup In Florida After Hurricane Ian</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 12, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>13 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-13.webp" alt="Image">
                                            <a href="business.html" class="news-cat">Business</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Apex Legends Season 11 Starting From August, 2024</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 07, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-14.webp" alt="Image">
                                            <a href="business.html" class="news-cat">Travel</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Creative Photography Ideas From Smart Devices</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 05, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>11 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-15.webp" alt="Image">
                                            <a href="business.html" class="news-cat">Travel</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">6 Romantic Places You Want To Visit With Your Partner</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="assets/img/news/news-16.webp" alt="Image">
                                            <a href="business.html" class="news-cat">Fashion</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">7 Steps To Get Professional Facial Results At Home</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 02, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="news-card-two">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-17.webp" alt="Image">
                                        <a href="business.html" class="news-cat">Technology</a>
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Elijah James: The Nashville Photographer Shares Her Unique Journey</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 25, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-18.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Travel</a>
                                        <h3><a href="business-details.html">A Complimentary Day At Mandarin The Oriental</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 23, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-19.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Business</a>
                                        <h3><a href="business-details.html">First prototype Flight Using Kinetic Launch System</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 22, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Explore Topics</h3>
                            <ul class="category-widget list-style">
                                <li><a href="business.html"><i class="flaticon-right-arrow"></i>Celebration <span>(6)</span></a></li>
                                <li><a href="business.html"><i class="flaticon-right-arrow"></i>Culture<span>(3)</span></a></li>
                                <li><a href="business.html"><i class="flaticon-right-arrow"></i>Fashion<span>(2)</span></a></li>
                                <li><a href="business.html"><i class="flaticon-right-arrow"></i>Inspiration<span>(8)</span></a></li>
                                <li><a href="business.html"><i class="flaticon-right-arrow"></i>Lifestyle<span>(6)</span></a></li>
                                <li><a href="business.html"><i class="flaticon-right-arrow"></i>Politics<span>(2)</span></a></li>
                                <li><a href="business.html"><i class="flaticon-right-arrow"></i>Trending<span>(4)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Celebration</h3>
                            <div class="featured-widget">
                                <div class="featured-slider swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="news-card-one">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-thumb-1.webp" alt="Image">
                                                </div>
                                                <div class="news-card-info">
                                                    <h3><a href="business-details.html">How Youth Viral Diseases May The Year 2023</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 24, 2024</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="news-card-one">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-thumb-2.webp" alt="Image">
                                                </div>
                                                <div class="news-card-info">
                                                    <h3><a href="business-details.html">Nintendo Switch Online’s Next Wave of N64 Games</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 22, 2024</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="news-card-one">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-thumb-3.webp" alt="Image">
                                                </div>
                                                <div class="news-card-info">
                                                    <h3><a href="business-details.html">5 things We Know About GTA Definitive Edition</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 14, 2024</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-prev"><i class="flaticon-left-arrow"></i></div>
                                    <div class="featured-next"><i class="flaticon-right-arrow"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest News End -->

        <!-- Instagram Start -->
        <div class="container-fluid pb-50">
            <div class="instagram-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-1.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-2.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-3.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-4.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-5.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-6.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow-1"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram End -->

         <?php 
            require_once('./footer.php')
         ?>

        <!-- Back to Top -->
        <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
            <i class="ri-arrow-up-line"></i>
        </button>
       

    <?php 
       require_once('./newletter.php');
      require_once('./script.php')
    ?>
    </body>
</html>