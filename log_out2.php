<?php

session_start();
include 'https.php';
unset($_SESSION['admpass']);
unset($_SESSION['admuser']);

echo "<script> window.open('index.php','_self');</script>";

?>

<html>
<head>
  <title>VITCC-LMS</title>
  <link rel="shortcut icon" href="logo.png" />
</head>
</html>