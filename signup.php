    <?php 
       require_once('./header.php');
    ?>
    <body>
        <?php
            require_once('./preloader.php');
            require_once('./theme-switch.php');
        ?>

        <!-- Login section start -->
        <div class="login-wrap">
            <div class="login-bg">
                <a href="./" class="navbar-brand">
                    <img class="logo-light" src="assets/img/logo-white.webp" alt="Image">
                    <img class="logo-dark" src="assets/img/logo-white.webp" alt="Image">
                </a>
            </div>
            <div class="login-content">
                <a href="./" class="link-one"><i class="ri-arrow-left-s-line"></i>Back</a>
                <div class="login-form">
                    <h3>Account SignUp</h3>
                    <div class="alt-login" >
                        <a href="https://www.gmail.com" style="width: 100%;"><img src="assets/img/icons/google.svg" alt="Image">Login With Google</a>
                        <!-- <a href="https://www.gmail.com"><img src="assets/img/icons/facebook-2.svg" alt="Image">Login With Facebook</a> -->
                    </div>
                    <div class="text-center">
                        <span class="or-text">OR</span>
                    </div>
                    <form action="signup.html#">
                        <div class="form-group">
                            <input type="text" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn-two w-100 d-block">Create Account</button>
                        <p class="login-text">Already have an account?<a href="login.html">Login</a></p>
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
           require_once('./script.php');
        ?>
    </body>
</html>