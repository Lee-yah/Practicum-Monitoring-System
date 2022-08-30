<?php session_start();

header('location:http://127.0.0.1/www/fproj/enter.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_unset();
	session_destroy();
	

	?>
</body>
</html>