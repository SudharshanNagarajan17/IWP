<?php

$username="admin";
$password="admin";

$u=$_POST['t1'];
$p=$_POST['t2'];

if(strcmp($username,$u)!=0 || strcmp($password,$p)!=0)
	echo "<script>alert('Invalid Credentials');window.open(window.history.back(),'_self');</script>";

include 'navbar.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">
                <a href="http://chennai.vit.ac.in/" class="navbar-brand">VITCC</a>
            </div>

            <div>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="table.php">Search by slot</a></li>
                    <li><a href="dropdown.php">Search by lab number</a></li>
                    <li class="drdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FFCS <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="sel"><a href="https://academicscc.vit.ac.in/student/stud_login.asp">Student Login</a></li>
                            <li class="sel"><a href="#">Faculty Login</a></li>
                        </ul>
                    </li>
                    <li class="drdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Workshops <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="sel"><a href="#">View</a></li>
                            <li class="sel"><a href="facwk.php">Faculty Login</a></li>
                            <li  class="active" class="sel"><a href="admwk.php">Admin Login</a></li>
                        </ul>
                    </li>
                    <li><a href="http://moodlecc.vit.ac.in">Moodle</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

        </div>
</nav>
</body>
</html>

<?php
include 'link.php';

$conn=openCon();

$a = "SELECT * FROM workshop ORDER BY dat";

$result=mysqli_query($conn,$a);

echo "<table>
		<tr><th>Date</th><th>From</th><th>To</th><th>Lab Number</th><th>Details</th><th>Faculty Name</th>";
while($m=mysqli_fetch_array($result))
{
	echo "<tr><td>".$m['dat']."</td><td>".$m['tfr']."</td><td>".$m['tto']."</td><td>".$m['no']."</td><td>".$m['det']."</td><td>".$m['name']."</td></tr>";
}

echo "</table>";
?>