<?php

session_start();
include 'https.php';
unset($_SESSION['facpass']);
unset($_SESSION['facuser']);

echo "<script> window.open('index.php','_self');</script>";

?>

<html>
<head>
  <title>VITCC-LMS</title>
  <link rel="shortcut icon" href="logo.png" />
</head>
</html>