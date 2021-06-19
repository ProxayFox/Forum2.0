<!-- Import HTML Header and ensure session is running -->
<?php
session_start();
include_once("./layout/sections/header.php");
//include_once("./db/hCaptcha/conf.php");
?>
<!-- body starts in Header -->
<script>
    $(document).ready( function () {

        //call on login form if session does not exist
        let sessionStatus = <?php if (!empty($_SESSION['status'])) {
            echo 1;
        } else {
            echo 0;
        } ?>;
        if (sessionStatus === 0) {
            $('#sectionLoader').load("layout/login/loginform.php");
        } else {
            $('#sectionLoader').load();
        }

    });
</script>

<section id="sectionLoader">
</section>


<!--Body Ends in footer.php-->
<?php
require_once("./layout/sections/footer.php");
?>
