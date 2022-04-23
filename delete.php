 <?php
include_once 'connectDB.php';
$sql = "DELETE FROM residents WHERE id='" . $_GET['id'] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo '<script> alert("Data Deleted"); </script>';
        header("Location: resident.php");
    
} else {
    echo "'<script> alert('Data Not Deleted')</script> " . mysqli_error($mysqli);
}
mysqli_close($mysqli);



















/*
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'barangay');


if(isset($_POST['deletedata'])){
   $id = $_POST['delete_id'];

 
        
    $query = "DELETE FROM `residents` WHERE id='$id'";
    $query_run= mysqli_query($connection, $query);
    
    
    if($query_run){
        
        echo '<script> alert("Data Deleted"); </script>';
        header("Location: resident.php");
    }
    else{
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}
   */ 












/*
$lastName = $_POST['LastName'];
$firstName = $_POST['FirstName'];
$middleInitial = $_POST['MiddleInitial'];
$gender = $_POST['Gender'];
$civilStatus = $_POST['CivilStatus'];
$birthDate = $_POST['BirthDate'];
$birthPlace = $_POST['BirthPlace'];
$occupation = $_POST['Occupation'];
$sector = $_POST['Sector'];
$nationality = $_POST['Nationality'];
$religion = $_POST['Religion'];
$spouseName = $_POST['SpouseName'];
$spouseOccupation = $_POST['SpouseOccupation'];
$cityAddress = $_POST['CityAddress'];
$provincialAddress = $_POST['ProvincialAddress'];
$homeNumber1 = $_POST['HomeNumber1'];
$homeNumber2 = $_POST['HomeNumber2'];
$mobileNumber1 = $_POST['MobileNumber1'];
$mobileNumber2 = $_POST['MobileNumber2'];
$emailAddress = $_POST['EmailAddress'];

    

insertRecord($lastName, $firstName, $middleInitial, $gender, $civilStatus, $birthDate, $birthPlace, $occupation, $sector, $nationality, $religion, $spouseName, $spouseOccupation, $cityAddress, $provincialAddress, $homeNumber1, $homeNumber2, $mobileNumber1, $mobileNumber2, $emailAddresss);
    
    
    
function insertRecord() {
 try {
 require 'connectDB.php';
     
  $sql = "INSERT INTO newresident (lastName, firstName, middleInitial, gender, civilStatus, birthDate, birthPlace, occupation, sector, nationality, religion, spouseName, spouseOccupation, cityAddress, provincialAddress, homeNumber1, homeNumber2, mobileNumber1, mobileNumber2, emailAddresss) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
     
     
  // use exec() because no results are returned 
     $conn->prepare($sql)->execute([$lastName, $firstName, $middleInitial, $gender, $civilStatus, $birthDate, $birthPlace, $occupation, $sector, $nationality, $religion, $spouseName, $spouseOccupation, $cityAddress, $provincialAddress, $homeNumber1, $homeNumber2, $mobileNumber1, $mobileNumber2, $emailAddresss]);


  echo '<script>
  				alert("Congratulations, you are now registered!");
					</script>';
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
}

*/
?>
