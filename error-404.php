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

         <!-- Error  Section start -->
         <div class="error-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="error-content">
                            <img src="assets/img/404.webp" alt="Iamge">
                            <h2>Oops! Page Not Found</h2>
                            <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                            <a href="./" class="btn-one">Back To Home<i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Error  Section end -->

       

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