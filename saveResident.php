<?php
require_once('connectDB.php');
?>

<?php
if(isset($_POST['register'])){
    $images = addslashes(file_get_contents($_FILES['images']['tmp_name']));
$lastName = $_POST['LastName'];
$firstName = $_POST['FirstName'];
$middleInitial = $_POST['MiddleInitial'];
$alias = $_POST['alias'];
$gender = $_POST['Gender'];
$civilStatus = $_POST['CivilStatus'];
$birthDate = $_POST['BirthDate'];
$birthPlace = $_POST['BirthPlace'];
$voterStatus = $_POST['voterStatus'];
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

 
        
    $sql = "INSERT INTO residents (images, lastName, firstName, middleInitial, alias, gender, civilStatus, birthDate, birthPlace, voterStatus, occupation, sector, nationality, religion, spouseName, spouseOccupation, cityAddress, provincialAddress, homeNumber1, homeNumber2, mobileNumber1, mobileNumber2, emailAddress) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stminsert = $db->prepare($sql);
    $result = $stminsert->execute([$images, $lastName, $firstName, $middleInitial, $alias, $gender, $civilStatus, $birthDate, $birthPlace, $voterStatus, $occupation, $sector, $nationality, $religion, $spouseName, $spouseOccupation, $cityAddress, $provincialAddress, $homeNumber1, $homeNumber2, $mobileNumber1, $mobileNumber2, $emailAddress]);  
    
   if($result){
        echo'Connected Successfully';
        echo '<script>
        window.history.go(-1);
          </script>';
          echo '<script>
        window.loacation.reload();
          </script>';
        
    }else{
        echo 'There were errors while saving this';
    }
}else{
    echo 'No data';
}











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
