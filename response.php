<?php

	include('db.php');

  	$name = $_POST['name'];
  	$email = $_POST['email'];
		$password = $_POST['password'];
  	$date_of_birth = $_POST['date_of_birth'];
  	$username = $_POST['username'];

  	if($name == NULL){
  		echo "This field cannot be empty!!";

  	}else{



  	$sql = "INSERT INTO `ajax_form` (
			`name`, 
			`email`,
			`password`,
			`date_of_birth`,
			`username`
		) VALUES (
			'" . $_POST['name'] . "',
			'" . $_POST['email'] . "',
			'" . $_POST['password'] . "',
			'" . $_POST['date_of_birth'] . "',
			'" . $_POST['username'] . "'
		)";
		// echo $sql; exit;
		$result= $conn->query($sql);
		if($result === true) {
					echo "Uploaded successfully";
		}else {
					echo "Failed!!";
		}

	}
?>
