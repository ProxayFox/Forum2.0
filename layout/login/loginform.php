<?php
require_once ('../../db/hCaptcha/conf.php');
?>

<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>

<script>
    $(document).ready(function () {
        // swapping between signin and signup
        $('#btnSignUp').click(function () {
            $('#signIn').addClass('hidden');
            $('#signUp').removeClass('hidden');
            $('#loginAlert').addClass('hidden');
        });
        $('#hbtnSignIn').click(function () {
            $('#signUp').addClass('hidden');
            $('#signIn').removeClass('hidden');
            $('#signupAlert').addClass('hidden');
        });

        // Post from log in form
        $('#btnSignIn').on("keypress click", function (e) {
            let uname = $('#signinUsername').val();
            let pwd   = $('#signinPWD').val();
            let hCap   = $('#SignInhiddenRecaptcha').val();
            $.post("db/work/login.php", {
                uname: uname,
                pwd: pwd,
                hCap: hCap
            }, function(data, status) {
                console.log(data, status);
                if (data === "Fail: Missing items") {
                    $('#loginAlert').removeClass('hidden');
                    $('#loginAlert').text(data);
                    $('#signinUsername').val("");
                    $('#signinPWD').val("");
                } else if (data === "Fail: Username/Password is incorrect") {
                    $('#loginAlert').removeClass('hidden');
                    $('#loginAlert').text(data);
                    $('#signinUsername').val("");
                    $('#signinPWD').val("");
                } else if (data === "success") {
                    $('#header_logout').removeClass('hidden');
                    $('#sectionLoader').load("layout/main/mainPage.php");
                }
            })
        });

        // Post from signup form
        $('#hbtnSignUp').on("keypress click", function (e) {
            let uname = $('#signupUsername').val();
            let pwd   = $('#signupPWD').val();
            let email = $('#signupEmail').val();
            $.post("db/work/signup.php", {
                uname: uname,
                pwd: pwd,
                email: email
            }, function (data, status) {
                console.log(data, status);
                if (data === "Fail: Missing items") {
                    $('#signupAlert').removeClass('hidden');
                    $('#signupAlert').text(data);
                    $('#signupUsername').val("");
                    $('#signupEmail').val("");
                    $('#signupPWD').val("");
                } else if (data === "Fail: Email is not valid") {
                    $('#signupAlert').removeClass('hidden');
                    $('#signupAlert').text(data);
                    $('#signupEmail').val("");
                    $('#signupPWD').val("");
                } else if (data === "Fail: Email already exists") {
                    $('#signupAlert').removeClass('hidden');
                    $('#signupAlert').text(data);
                    $('#signupEmail').val("");
                    $('#signupPWD').val("");
                } else if (data === "Fail: Username Already exists") {
                    $('#signupAlert').removeClass('hidden');
                    $('#signupAlert').text(data);
                    $('#signupUsername').val("");
                    $('#signupPWD').val("");
                }
            });
        });
    });
</script>

<main class="text-center">
    <section class="form-signin">
        <img class="mb-4" src="img/logo/ProxyDerp.png" alt="logo" style="width: 72px;">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <!-- Load in Signup or Signin -->
        <div id="load"></div>
    </section>
</main>