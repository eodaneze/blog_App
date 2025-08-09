<?php 
   require_once('./header.php')
?>
    <body>

        <?php
           require_once('./preloader.php');
           require_once('./theme-switch.php');
        ?>

        

        <!-- Login section start -->
        <div class="login-wrap">
            <div class="login-bg">
                <a href="index.html" class="navbar-brand">
                    <img class="logo-light" src="assets/img/logo-white.webp" alt="Image">
                    <img class="logo-dark" src="assets/img/logo-white.webp" alt="Image">
                </a>
            </div>
            <div class="login-content">
                <a href="index.html" class="link-one"><i class="ri-arrow-left-s-line"></i>Back</a>
                <div class="login-form">
                    <h3>Welcome Back</h3>
                    <div class="alt-login">
                        <a href="https://www.gmail.com"><img src="assets/img/icons/google.svg" alt="Image">Login With Google</a>
                        <a href="https://www.gmail.com"><img src="assets/img/icons/facebook-2.svg" alt="Image">Login With Facebook</a>
                    </div>
                    <div class="text-center">
                        <span class="or-text">OR</span>
                    </div>
                    <form action="login.html#">
                        <div class="form-group">
                            <input type="text" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" type="checkbox" id="test_2"
                                    >
                                    <label class="form-check-label" for="test_2">
                                        Stay Logged In?
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="login.html">Forgot Password</a>
                            </div>
                        </div>
                        <button type="submit" class="btn-two w-100 d-block">Login</button>
                        <p class="login-text">Don't have an account?<a href="signup.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
        <!-- Login section End -->

        <!-- Back to Top -->
        <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
            <i class="ri-arrow-up-line"></i>
        </button>

        <?php 
           require_once('./script.php')
        ?>
    </body>
</html>