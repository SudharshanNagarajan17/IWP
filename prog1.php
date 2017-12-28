<?php

session_start();

include 'https.php';

error_reporting(0);

include 'passwords.php';

$flag=0;

$u=$_POST['t1'];
$p=$_POST['t2'];

if(isset($_SESSION["progpass"]) && isset($_SESSION["proguser"]))
	$flag=1;
else if(strcmp($prog_username,$u)!=0 || strcmp($prog_password,$p)!=0)
	echo "<script>alert('Invalid Credentials');window.open('index.php','_self');</script>";
else
{
	$flag=1;
	$_SESSION["progpass"]=$p;
	$_SESSION["proguser"]=$u;
}

include 'navbar.php';

?>


<!DOCTYPE html>
<html>
<head>
  <title>VITCC-LMS</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
	.tab td{
		text-align: center;
	}
	.tab th{
		background-color: blue;
		color: white;
		text-align: center;
		min-width: 100px;
	}
	.tab tr:nth-child(even){
		background-color: #e6e6e6;
	}
	.tab{
		cursor: default;
		white-space: nowrap;
		width: 100%;
	}
	a{
		cursor: pointer;
		color: red;
	}
	a:hover{
		color: red;
	}
	h3{
		margin-left: 50px;
	}
	.down{
		color: black;
	}
	.down:hover{
		color: black;
		text-decoration: none;
	}
	.down:visited {
    	color: black;
		text-decoration: none;
	}
	button:hover{
		background-color:#595959; 
	}
	button,input[type=submit]{
    	background-color: #bfbfbf;
    	border: none;
    	color: white;
    	padding: 4px 8px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 16px;
    	margin: 4px 2px;
    	cursor: pointer;
    	border-radius: 4px;
    	color: black;
	}
	input[type="submit"]:hover{
		background-color:#595959;
		color: black;
	}
	input[type=date]{
		width: 15%;
		min-width: 200px;
    	padding: 0px 0px;
    	margin: 8px 0;
    	margin-left: 20px;
    	display: inline-block;
    	border: 1px solid #ccc;
    	border-radius: 4px;
    	box-sizing: border-box;
	}
	form{
		margin-left: 75px;
	}
	.navbar-nav .active a{
      background: #999999 !important;
 	}
 	.logoutLblPos{
   		position:fixed;
   		right:20px;
   		top:55px;
	}
	.hovlog:hover{
		background-color: #ff8000;
		border-radius: 4px;
	}
</style>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">

            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://chennai.vit.ac.in/" class="navbar-brand">VITCC</a>
        </div>

            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Search by slot</a></li>
                    <li><a href="dropdown.php">Search by lab number</a></li>
                    <li class="drdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FFCS <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="sel"><a href="https://academicscc.vit.ac.in/student/stud_login.asp">Student Login</a></li>
                            <li class="sel"><a href="https://academicscc.vit.ac.in/faculty/fac_login.asp">Faculty Login</a></li>
                        </ul>
                    </li>
                    <li class="drdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Workshops <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="sel"><a href="stwk.php">View</a></li>
                            <li class="sel"><a href="facwk.php">Faculty Login</a></li>
                            <li class="sel"><a href="admwk.php">Admin Login</a></li>
                        </ul>
                    </li>
                    <li><a href="http://moodlecc.vit.ac.in">Moodle</a></li>
                    <li class="drdn">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lab Details <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                            <li class="sel"><a href="infra1.php">Infra</a></li>
                            <li  class="active" class="sel"><a href="progwk.php">Programmer Login</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

        </div>
</nav>

<form align="right" name="form1" method="post" action="log_out3.php">
  <label class="logoutLblPos hovlog">
  <input style="background-color: #ffb366; font-weight:normal;" name="submit2" type="submit" id="submit2" value="Sign out">
  </label>
</form>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        $("#drp1").click(function(){
            $("#iFr2").slideDown("fast");
        });
    });

</script>
<style>
    #iFr2{
        display: none;
    }
    .dropdown{
        left: 20px;
    }
</style>
<style>
    /* Style The Dropdown Button */
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
    }
    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }
    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 10px;
        text-decoration: none;
        display: block;
    }
    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #d9d9d9;
    }
    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }
    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
    .dropdown-content{
        cursor: pointer;
    }
</style>


<?php

if($flag==1)    {
include 'link.php';

$conn=openCon();

$a = "SELECT * FROM infrahw GROUP BY block,cno ORDER BY block,cno";

$result=mysqli_query($conn,$a);
$i=0;
while($row=mysqli_fetch_array($result))
{
    $bl[$i]=$row['block'];
    $cn[$i]=$row['cno'];
    $i++;
}


$result=mysqli_query($conn,$a);
$i=0;
echo "<div class='dropdown' id='drp1'>
        <button class='dropbtn'>Select lab number<span class='caret'></span></button>
        <div class='dropdown-content'>";
$i=0;
while($row=mysqli_fetch_array($result))
{
    echo "<a onclick=disp('$i')>".$bl[$i]." ".$cn[$i]."</a>";
    $i++;
}
echo "</div>
        </div>";

}
?>

<html>
    <div class="wr">
        <iframe name="if4" width="100%" style="overflow: hidden; height: 100%; width: 100%; position: absolute;"  scrolling="no" height="100%" id="iFr2" frameborder="0"></iframe>
    </div>
</html>

<script>
    function disp(i)
    {
        window.open("prog2.php?i="+i,'if4');
    }
</script>