<!-- Sign In Section start -->
<div class="" id="signIn">
    <div class="alert alert-danger hidden" role="alert" id="loginAlert"></div>
    <label for="inputEmail" class="sr-only">
        <input type="text" id="signinUsername" class="form-control" placeholder="Username" required autofocus>
    </label>
    <label for="inputPassword" class="sr-only">
        <input type="password" id="signinPWD" class="form-control" placeholder="Password" required>
    </label>
    <!-- Signin Buttons -->
    <div class="d-grid gap-2 col-10 mx-auto">
        <!-- will eventually set this up after more testing outside of local -->
        <div class="h-captcha" data-sitekey="<?php echo $siteKey_hCaptcha; ?>"></div>
        <button class="btn btn-lg btn-primary btn-block" id="btnSignIn">Sign In</button>
        <button class="btn btn-lg btn-secondary btn-sm btn-block" id="btnSignUp">Sign Up</button>
    </div>
</div>
<!-- Sign In Section end -->