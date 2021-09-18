<?php
require_once ('../../db/hCaptcha/conf.php');
?>
<!-- Sign In Section start -->
<div class="" id="signIn">
    <div class="alert alert-danger hidden" role="alert" id="loginAlert"></div>
    <label for="inputEmail" class="sr-only">
        <input type="text" id="signinUsername" class="form-control" placeholder="Username" required autofocus>
    </label>
    <label for="inputPassword" class="sr-only">
        <input type="password" id="signinPWD" class="form-control" placeholder="Password" required>
    </label>
</div>
<!-- Sign In Section end -->