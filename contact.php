<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<style>
	.wrapper{
		position:relative;
        width: 100%;
	}
</style>
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
                    <li><a href="http://moodlecc.vit.ac.in">Moodle</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="contact.php">Contact</a></li>
                </ul>
            </div>

        </div>
</nav>
<div class="wrapper">
    <iframe src="contact2.php" width="100%" height="390" frameborder="0" scrolling="no"></iframe>
</div>
</html>