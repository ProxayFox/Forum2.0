# Form 2.0 ==>  PHP and PGP experiment
The aim is to be able to store private keys on the clients device and store the public key on the server to ensure the server doesn't have the private key stored anywhere

## Instructions
### DB setup
You will need to create a DB config file in and as <br>
`db/meekrodb/meekrodb-2.3.1/db.conf.php` <br>
With the following<br>
```phpt
<?php
DB::$dbName = ''; // DB name
DB::$user = ''; // DB username
DB::$password = ''; // DB password
DB::$host = ''; // Addedss for db, this may be 127.0.0.1 for localhost or example 192.168.1.5
DB::$port = 3306; // Port for the DB, Tip mariadb port is 3306
DB::$socket = null; // if you have sockets setup, haven't setup this up ignore
DB::$encoding = 'latin1'; // can change this but may need to change items
?>
```
and run the SQL file in `sql/form.sql`

### hCaptcha setup
Create a file titled conf.php in `db/hCaptcha/conf.php` <br>
Will need to setup and account with hCaptcha to get the keys: [Click here and Signup](hcaptcha.com) <br>
Fill the file with the following once signed up
```phpt
<?php
$siteKey_hCaptcha = ""; // enter the provided sitekey
$secret_hCaptcha = ""; // enter the provided secret
?>
```

