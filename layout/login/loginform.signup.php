<!-- Sign Up Section start -->
<div class="hidden" id="signUp">
    <div class="alert alert-danger hidden" role="alert" id="signupAlert"></div>
    <label for="inputEmail" class="sr-only">
        <input type="text" id="signupUsername" class="form-control" placeholder="Username" required autofocus>
    </label>
    <label for="inputEmail" class="sr-only">
        <input type="email" id="signupEmail" class="form-control" placeholder="Email address" required autofocus>
    </label>
    <label for="inputPassword" class="sr-only">
        <input type="password" id="signupPWD" class="form-control" placeholder="Password" required>
    </label>
    <!-- SignUp Buttons -->
    <div class="d-grid gap-2 col-10 mx-auto">
        <!-- Sign Up hCaptcha -->
        <div class="h-captcha" data-sitekey="<?php echo $siteKey_hCaptcha; ?> "></div>
        <!-- Sign Up hCaptcha -->
        <!-- <input type="hidden" class="hiddenRecaptcha required" name="SignUpHiddenRecaptcha" id="SignUphiddenRecaptcha"> -->
        <button class="btn btn-lg btn-primary btn-block" id="hbtnSignUp">Sign UP</button>
        <button class="btn btn-lg btn-secondary btn-sm btn-block" id="hbtnSignIn">Sign In</button>
    </div>
</div>
<!-- Sign Up Section end -->