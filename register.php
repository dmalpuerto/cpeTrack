<?php
	require "dbConnect.php";
	$conn = config::connect();
	if (isset($_POST['regsubmit'])){
		
		$username 		= $_POST['Username'];
        $emailAddress 	= $_POST['EmailAddress'];
		$password 		= $_POST['password'];
		
		$sql = "SELECT * FROM residents WHERE username = :username AND emailAddress = :emailAddress
		AND password = :password";

 	$statement = $db->prepare($sql);
 	$statement->execute(
 		array(
 			'username' =>     $_POST['Username'],
			'emailAddress' => $_POST['EmailAddress'],
 			'password' =>     $_POST['password']
			 )
		);

		$count = $statement->rowCount();
		if($count > 0){
			header('location:index.php');
		}else
		{
			echo '<script>
					alert("Wrong credentials. Please try again.");
					window.history.go(-1);
				</script>';
 		}
 }
