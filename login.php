<?php include_once("helper/header.php");?>  
    <div class="d-flex flex-column justify-content-center" id="login-box" style="background-color: rgb(77,112,128);margin-bottom: 10px;">
        <div class="login-box-header" style="background-color: rgb(77,112,128);">
            <h4 style="color: rgb(255,255,255);margin-bottom: 0px;font-weight: 400;font-size: 27px;">Login</h4>
        </div>
        <div class="d-flex flex-row align-items-center login-box-seperator-container"></div>
        <form method="post" action="loginValidation.php">
            <div class="email-login">
                <input class="form-control email-imput form-control" type="email" style="margin-top:10px;" required="" placeholder="Email" minlength="6" name="Email">
                <input class="form-control password-input form-control" type="password" style="margin-top:10px;" required="" placeholder="Password" minlength="6" name="password"></div>
            <div class="submit-row" style="margin-bottom:8px;padding-top:0px;">
                <button class="btn btn-primary btn-block box-shadow" id="submit-id-submit" type="submit" style="background-color: #254351;" name="logMeIn">Login</button></div>
        </form>
        <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
            <p style="margin-bottom: 0px;color: rgb(255,255,255);">Have an account?<a id="register-link" href="signup.php" style="color: #01e1ef;">sign up</a></p>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/login-full-page-bs4.js"></script>
    <script src="assets/js/login-full-page-bs4-1.js"></script>
    <script src="assets/js/Animated-Type-Heading.js"></script>
    <script src="assets/js/imagepreview.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/testimonialSlider.js"></script>
</body>

</html>