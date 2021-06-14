<?php
  //start session
  session_start();

  // validate session
  if (isset($_SESSION['status']) && $_SESSION['UDID']) {
    unset($_SESSION['status']);
    unset($_SESSION['UDID']);
    unset($_SESSION['email']);
    unset($_SESSION['uname']);
    session_destroy();
    header("Location: ../../index.php?logout=success");
  } else {
    session_destroy();
    // there was no session but kill
    header("Location: ../../index.php?logout=noSession");
  }