# Form 2.0 ==>  PHP and PGP experiment
The aim is to be able to store private keys on the clients device and store the public key on the server to ensure the server doesn't have the private key stored anywhere

## Instructions
You will need to create a DB config file in and as <br>
`db/meekrodb/meekrodb-2.3.1/db.conf.php` <br>
With the following<br>
```phpt
<?php
DB::$dbName = '';
DB::$user = '';
DB::$password = '';
DB::$host = '';
DB::$port = 3306; //hhvm complains if this is null
DB::$socket = null;
DB::$encoding = 'latin1';
?>
```
And run the SQL file in `sql/form.sql`

## Start 13/02/2020
I don't know what to add here but we'll see how this goes
It's been about a year or two since I last coded so I'm expecting this to be really bad for a while
