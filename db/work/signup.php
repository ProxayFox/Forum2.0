<?php
require_once ('../meekrodb/meekrodb-2.3.1/db.class.php');
require_once ('../meekrodb/meekrodb-2.3.1/db.conf.php');

if (!empty($_POST['uname']) && $_POST['email'] && $_POST['pwd']) {
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];

  // validate email
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // email is valid
    // if $emailCheck is empty than insert into the database
    @$emailCheck = DB::queryFirstRow("SELECT email FROM forum.userData WHERE email =%s", $email);
    if (DB::affectedRows() == 0) {
      // if $unameCheck is empty than insert into the database
      @$unameCheck = DB::queryFirstRow("SELECT UName FROM forum.userData WHERE UName =%s", $uname);
      if (DB::affectedRows() == 0) {
        // Create the Salt
        $saltLength = 6; // Sets the length of the salt
        $createSalt = random_bytes($saltLength); // creates random string
        $salt = bin2hex($createSalt); // translates the random string to readable text
        $hashedPWD = hash('sha256', $pwd); // Initial Hash of password
        $hashedSaltedPWD = hash('sha256', $hashedPWD.$salt); // hash of initially hashed password with additional salt

        // adding processed data to the database
        DB::insert('userData', array(
          'UDID'    =>    NULL,
          'UName'   =>    $uname,
          'PWD'     =>    $hashedSaltedPWD,
          'email'   =>    $email,
          'salt'    =>    $salt
        ));
        echo "Success";
      } else {
        // User Duplicate check failed
        echo "Fail: Username Already exists";
      }

    } else {
      // Email Duplicate check failed
      echo "Fail: Email already exists";
    }
  } else {
    // email is not valid
    echo "Fail: Email is not valid";
  }
} else {
  // missing items in the post request
  echo "Fail: Missing items";
}