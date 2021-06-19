<?php
session_start();
require_once ('../meekrodb/meekrodb-2.3.1/db.class.php');
require_once ('../meekrodb/meekrodb-2.3.1/db.conf.php');

if (!empty($_POST['uname']) && !empty($_POST['pwd'])) {
  $uname = $_POST['uname'];
  $pwd = $_POST['pwd'];

  // Check if the username exists
 @$unameCheck = DB::queryFirstRow("SELECT UName FROM forum.userData WHERE UName =%s", $uname);
   if (DB::affectedRows() == 1) {
    // Get the salt
    $getDetails = DB::queryFirstRow("SELECT salt FROM forum.userData WHERE UName =%s", $uname);
    $salt = $getDetails['salt']; // get the salt from array
    $hashedPWD = hash('sha256', $pwd);// Initial Hash of password
    $hashedSaltedPWD = hash('sha256', $hashedPWD.$salt); // hash of initially hashed password with additional salt
    // check the username and password to the database
    $credCheck = DB::queryFirstRow("SELECT UDID, email, UName, PWD FROM userData WHERE UName=%s_uname AND PWD=%s_pwd", [
      'uname' => $uname,
      'pwd' => $hashedSaltedPWD
    ]);
     if (DB::affectedRows() == 1) {
       // user and password is correct
       $UDID = $credCheck['UDID'];
       $emil = $credCheck['email'];
       echo "success";
       $_SESSION['status']  = 1;
       $_SESSION['UDID']    = $UDID;
       $_SESSION['email']   = $emil;
       $_SESSION['uname']   = $uname;
     } else {
       echo "Fail: Username/Password is incorrect";
     }
  } else {
    // Username does not exist
    echo "Fail: Username/Password is incorrect";
  }
} else {
  // missing items in the post request
  echo "Fail: Missing items";
}