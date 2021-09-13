<!-- Import HTML Header and ensure session is running -->
<?php
include_once("./layout/sections/header.php");
//include_once("./db/hCaptcha/conf.php");
?>
<!-- body starts in Header -->
<script>
  $(document).ready( function () {
    //call on login form if session does not exist
    if (sessionStatus === 0) {
      $('#sectionLoader').load("layout/login/loginform.php");
    } else {
      $('#sectionLoader').load("layout/main/mainPage.php");
    }
  });
</script>

<section id="sectionLoader" style="padding-top: 75px;">
</section>

<!--Body Ends in footer.php-->
<?php
require_once("./layout/sections/footer.php");
?>
