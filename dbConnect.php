<?php
define('HOST','server123.web-hosting.com');
define('USER','sasopofl_handy');
define('PASS','HANDYprojectDATABASE789');
define('DB','sasopofl_handy');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');