<?php
session_start();
if (isset($_GET['confirm'])) {
	$stoiid=$_GET['confirm'];
	header("Location:http://127.0.0.1/www/fproj/startbootstrap/Instructor.php?stoi=$stoiid");
}

?>