<!DOCTYPE html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<?php

	include_once ('config.php');
	$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
	if (mysqli_connect_error()) {
		exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}



	extract($_POST);


	$q = "SELECT * FROM member WHERE id='$user_id'";
	$result=$mysqli->query( $q);
	if($result->num_rows==1){
		$row=$result->fetch_array(MYSQLI_ASSOC);
		if($row['id']==$user_id){
			echo "<script>alert('<$user_id>는 이미 존재하는 아이디입니다.'); history.back();</script>";
			exit;
		}

	}


	$q = "INSERT INTO member ( id, pw, email, sex ) VALUES ( '$user_id', '$user_pass' ,'$user_email' , '$user_sex' )";




	$mysqli->query( $q);

	$mysqli->close();

	echo "<meta http-equiv='refresh' content='0; url=login.php'>"; 
	echo "<script>alert('join success!! please login');</script>";

	?>
</body>
</html>
