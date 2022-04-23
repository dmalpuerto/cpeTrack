<?php
require_once('connectDB.php');
?>
<?php
 if(isset($_POST['logsubmit'])){
 	$emailAddress   = $_POST['EmailAddress'];
 	$password 		= $_POST['password']; 
     
    
    $sql = "INSERT INTO residents (emailAddress, password) VALUES (?,?)";
     
    
    $stminsert = $db->prepare($sql); 
    $stminsert->execute([$emailAddress,$password]);
     
    $sql = "SELECT * FROM residents WHERE emailAddress = :EmailAddress AND password = :password";
   
 	
 	$count = $stminsert->rowCount();
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
