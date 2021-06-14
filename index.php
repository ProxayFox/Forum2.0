<!-- Import HTML Header and ensure session is running -->
<?php
session_start();
include_once("./layout/header.php");
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

    .hidden {
        display: none !important;
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
<!-- body starts in Header -->
<script>
    $(document).ready(function () {
        // swapping between signin and signup
        $('#btnSignUp').click(function () {
            $('#signIn').addClass('hidden');
            $('#signUp').removeClass('hidden');
        });
        $('#hbtnSignIn').click(function () {
            $('#signUp').addClass('hidden');
            $('#signIn').removeClass('hidden');
        });

        // Post from log in form
        $('#btnSignIn').click(function () {
            let uname = $('#signinUsername').val();
            let pwd   = $('#signinPWD').val();
            $.post("db/work/login.php", {
                uname: uname,
                pwd: pwd
            }, function(data, status) {
                console.log(data, status);
            })
        });

        // Post from signup form
        $('#hbtnSignUp').click(function () {
            let uname = $('#signupUsername').val();
            let pwd   = $('#signupPWD').val();
            let email = $('#signupEmail').val();
            $.post("db/work/signup.php", {
                uname: uname,
                pwd: pwd,
                email: email
            }, function (data, status) {
                console.log(data, status);
            });
        });
    });
</script>

<main class="text-center">

    <section class="form-signin">
        <img class="mb-4" src="img/logo/ProxyDerp.png" alt="logo" style="width: 72px;">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <!-- Section for setting hidden and unhidden on click -->
        <!-- Sign In Section start -->
        <div class="" id="signIn">
            <label for="inputEmail" class="sr-only">
                <input type="text" id="signinUsername" class="form-control" placeholder="Username" required autofocus>
            </label>
            <label for="inputPassword" class="sr-only">
                <input type="password" id="signinPWD" class="form-control" placeholder="Password" required>
            </label>
            <!-- Signin Buttons -->
            <div class="d-grid gap-2 col-10 mx-auto">
                <button class="btn btn-lg btn-primary btn-block" id="btnSignIn">Sign In</button>
                <button class="btn btn-lg btn-secondary btn-sm btn-block" id="btnSignUp">Sign Up</button>
            </div>
        </div>
        <!-- Sign In Section end -->
        <!-- Sign Up Section start -->
        <div class="hidden" id="signUp">
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
                <button class="btn btn-lg btn-primary btn-block" id="hbtnSignUp">Sign UP</button>
                <button class="btn btn-lg btn-secondary btn-sm btn-block" id="hbtnSignIn">Sign In</button>
            </div>
        </div>
        <!-- Sign Up Section end -->
    </section>



</main>


<!--Body Ends in footer.php-->
<?php
require_once("./layout/footer.php");
?>
