<?php
require_once('connectDB.php');
?>
<?php
 if(isset($_POST['logsubmit'])){
	$username       = $_POST['Username']; 
 	$password 		= $_POST['password']; 
     
	
 	$sql = "SELECT * FROM residents WHERE username = :username AND password = :password";
 	$statement = $db->prepare($sql);
 	$statement->execute(
 		array(
 			'username' => $_POST['Username'],
 			'password' => $_POST['password']
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

?>
