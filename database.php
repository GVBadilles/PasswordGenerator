<?php
	$email = $_POST['email-sub'];
	
	$bind = new mysqli('localhost', 'root', '', 'order');
	if ($bind -> connection_error) {
		echo9 "$conn -> connection_error";
		die ("Connection Faield : " $bind -> connection_error);
	} else {
		$stmt = $conn -> prepare("insert into registration(email-sub) values (?, )");
		$stmt = -> bind_param("s", $email);
		$execval = $stmt -> execute();
		echo $execval;
		echo "Thank you!";
?>