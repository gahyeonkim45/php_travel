<?php
session_start();

$is_logged = $_SESSION['is_logged'];

if ($is_logged == 'YES') {
	$user_id = $_SESSION['user_id'];
}

if($_SESSION['type'] == "reader"){
	echo "<meta http-equiv='refresh' content='0; url=reader.php'>";
	echo "<script>alert('login success!!');</script>";	
}
else if($_SESSION['type'] == "author"){
	echo "<meta http-equiv='refresh' content='0; url=writer.php'>";
	echo "<script>alert('login success!!');</script>";
}

?>

