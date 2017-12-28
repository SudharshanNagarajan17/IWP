<?php

session_start();
include 'https.php';
unset($_SESSION['progpass']);
unset($_SESSION['proguser']);

echo "<script> window.open('index.php','_self');</script>";

?>

<html>
<head>
  <title>VITCC-LMS</title>
  <link rel="shortcut icon" href="logo.png" />
</head>
</html>