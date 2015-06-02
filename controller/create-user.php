<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Pragati+Narrow' rel='stylesheet' type='text/css'>
	<title></title>
</head>
<body>
	<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__."/../connect.php");

	//checks for incorrect characters that the user might input
	$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_EMAIL);
	$phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
	$other = filter_input(INPUT_POST, "other", FILTER_SANITIZE_STRING);

	//encrypts password
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

	$hashedPassword = crypt($password, $salt);

	$query = $_SESSION["connection"]->query("INSERT INTO contact SET "
		. "email = '$email',"
		. "name = '$name',"
		. "phone = '$phone',"
		. "other = '$other'");

	if($query){
		echo "Successfully created user: $username";
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
	?>
</body>
</html>
