<?php include_once("helper/header.php");?>  

    <div class="d-flex flex-column justify-content-center" id="login-box" style="background-color: rgb(77,112,128);margin-bottom: 15px;">
        <div class="login-box-header" style="background-color: rgb(77,112,128);">
            <h4 style="color: rgb(255,255,255);margin-bottom: 0px;font-weight: 400;font-size: 27px;">Signup</h4>
        </div>
        <div class="d-flex flex-row align-items-center login-box-seperator-container"></div>
        <div class="text-center email-login">
            <form method="post" action="RegistrationValidation.php" enctype="multipart/form-data"><img class="rounded-circle" height="150" width="150" onclick="chooseImage()" id="userProf" src="assets/img/avatar-dhg.png" height="150px" />
                    <input type="file" id="imageData" name="image" onchange="displayImage(this)" class="d-none" />
                    <input class="form-control email-imput form-control" type="Name" style="margin-top:10px;" required="" placeholder="Name" minlength="6" name="name">
                    <input class="form-control email-imput form-control" type="text" style="margin-top:10px;" required="" placeholder="organisation" minlength="6" name="organisation">
                    <input class="form-control email-imput form-control" type="email" style="margin-top:10px;" required="" placeholder="Email" minlength="6" name="email">
                    <textarea class="form-control" style="width: 100%;height: 127px;margin-top: 10px;" name="description" placeholder="Description" required="" spellcheck="true" wrap="soft" autocomplete="on">
                    </textarea>
                    <input class="form-control password-input form-control" type="password" style="margin-top:10px;" required="" placeholder="Password" minlength="6" name="password">
                    <input class="form-control password-input form-control" type="password" style="margin-top:10px;" required="" placeholder="Repeat Password" minlength="6" name="repeated_password">
                    <button class="btn btn-primary btn-block box-shadow" id="submit-id-submit" type="submit" name="sub" style="background-color: #254351;margin-top: 10px;">Create Account</button>
                </form>
        </div>
        <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
            <p style="margin-bottom: 0px;color: rgb(255,255,255);">Have an account?<a id="register-link" href="login.php" style="color: rgb(1,225,239);">Login</a></p>
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