<?php
require_once('connectDB.php');
$result=mysqli_query($mysqli, "SELECT * FROM residents");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <!------START: SCRIPT FOR CIVIL STATUS DROP DOWN LIST--------->
   <script type = "text/javascript">
        function disabletextbox(){
            if (document.getElementById("CivilStatus").value === "Single"){
               
                document.getElementById("SpouseName").readOnly="true";
                document.getElementById("SpouseOccupation").readOnly="true";
            }
            else if (document.getElementById("CivilStatus").value === "Separated"){
                
                document.getElementById("SpouseName").readOnly="true";
                document.getElementById("SpouseOccupation").readOnly="true";
            }
            else if (document.getElementById("CivilStatus").value === "Widowed"){
                
                document.getElementById("SpouseName").readOnly="true";
                document.getElementById("SpouseOccupation").readOnly="true";
            } 
            else {
            document.getElementById("SpouseName").readOnly="";
            document.getElementById("SpouseOccupation").readOnly="";
            }
        }
    </script>
    <!------END: SCRIPT FOR CIVIL STATUS DROP DOWN LIST--------->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <script src="webcam/webcam.js"></script>
          <script src="webcam/webcam2.js"></script>
    
    <script src="residentValidate.js"></script>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">




    <!-- Title Page-->
    <title>Project Fox</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="css/validate.css">
    

</head>
<body class="animsition">
    <div class="page-wrapper">
        

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/dangcol.png" height ="60" width="60" alt="BMIS" /></a> PROJECT FOX 
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      
                        <li>
                            <a href="index.php">
                                <i class="fas fa-home"></i>Dashboard</a>

                        </li>
                        <li>
                            <a href="resident.php">
                                <i class="fas fa-user-circle"></i>Resident Information</a>
                        </li>
                       <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-file-text"></i>Certificate Issuance</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="printClearance.php">Barangay Clearance</a>
                                </li>
                                <li>
                                    <a href="printIndigency.php">Barangay Indigency</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-users"></i>Account</a>
                        </li>
                        
                       

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                           <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search here">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            <div class="header-button">
                               <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <div class="mess-dropdown js-dropdown"> 
                                            <div class="mess__title">
                                                <p><b>Messages</b></p>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p><b>E-mail</b></p>
                                            </div>
                                            
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p><b>Notifications</b></p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/User.png" alt="User" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">User Account</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/User.png" alt="User" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">User Account</a>
                                                    </h5>
                                                    <span class="welcome">Project Fox</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="login.html">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Resident Information</h2>
                                    <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target=".bd-example-modal-lg">
                                        Add resident
                                    </button>


                                   <!-- <button class="au-btn au-btn-icon au-btn--blue" type="button" data-toggle="modal" data-target="#myModal">
                                        <i class="zmdi zmdi-plus"></i>Add resident</button>  ---->
                                </div>
                                <hr class="line-separate">

                                
                            </div>
                        </div>
                     </div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table--no-card m-b-30 table-striped" id = "table">
                           
                                <tr> 
                                    <th>Edit</th>
                                    <th>Delete</th>

                                      <th>Resident ID</th> 
                                    <th>Image</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th >Middle Initial</th>
                                    <th>Alias</th>
                                    <th>Gender</th>
                                    <th>Civil Status</th>
                                    <th>Voter Status</th>
                                    <th>Birth Date</th>
                                    <th>Birth Place</th>
                                    <th>Occupation</th>
                                    <th>Sector</th>
                                    <th>Nationality</th>
                                    <th>Religion</th>
                                    <th>Spouse's Name</th>
                                    <th>Spouse's Occupation</th>
                                    <th>City Address</th>
                                    <th>Provincial</th>
                                    <th>HomeNumber 1</th>
                                    <th>Mobile Number 1</th>
                                    <th>Home Number 2</th>
                                    <th>Mobile Number 2</th>
                                    <th>Email</th>
                                    

                                    
                                </tr>
                           <div class = "td" >
                                <?php
                            
                                  while($res=mysqli_fetch_array($result)){
                                
                                                           
                                echo '<tr>';

                                  echo '<td><button type="button" class="btn btn-primary editbtn">&nbsp &nbspEdit &nbsp &nbsp</td>'; 
                                echo '<td><a onclick="confirmationDelete(this)" class="btn btn-danger" href="delete.php?id='. $res['id'] . '" role="button "> Delete</a></td>';
                                  echo '<td>'. $res['id'] .'</td>' ;
                                  echo '<td>'.'<img src="data:images/jpeg;base64,'.base64_encode(stripslashes($res['images'])).'"/>' .'</td>';
                                  echo '<td>'. $res['lastName'] .'</td>' ;
                                  echo '<td>'. $res['firstName'] .'</td>';
                                  echo '<td>'. $res['middleInitial'] .'</td>';
                                  echo '<td>'. $res['alias'] .'</td>';
                                  echo '<td>'. $res['gender'] .'</td>';
                                  echo '<td>'. $res['civilStatus'] .'</td>';   
                                  echo '<td>'. $res['voterStatus'] .'</td>';
                                  echo '<td>'. $res['birthDate'] .'</td>';
                                  echo '<td>'. $res['birthPlace'] .'</td>';
                                  echo '<td>'. $res['occupation'] .'</td>';
                                  echo '<td>'. $res['sector'] .'</td>';
                                  echo '<td>'. $res['nationality'] .'</td>';
                                  echo '<td>'. $res['religion'] .'</td>';
                                  echo '<td>'. $res['spouseName'] .'</td>';
                                  echo '<td>'. $res['spouseOccupation'] .'</td>';
                                  echo '<td>'. $res['cityAddress'] .'</td>';
                                  echo '<td>'. $res['provincialAddress'] .'</td>';
                                  echo '<td>'. $res['homeNumber1'] .'</td>';
                                  echo '<td>'. $res['mobileNumber1'] .'</td>';
                                  echo '<td>'. $res['homeNumber2'] .'</td>';
                                  echo '<td>'. $res['mobileNumber2'] .'</td>';
                                  echo '<td>'. $res['emailAddress'] .'</td>';
                                      
                                 
                                 echo '</tr>';              
                              }
                              ?>
                                </div>
                        </table>
                    </div>
                   
                    
                    </div>
                
                        
                          
               </div>
            </div>
        </div>
     
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
      
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Resident Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
       <div class="info">
                <form method='POST' action='saveResident.php' class="form" id="form" name = "form" enctype="multipart/form-data" >
                  <div class="col-lg-12">

                      
                       <div class="picture" id="picture"></div>
                        <div id="profileImage">
                          <input type="hidden" name="profileImage">
                        </div>
                      <div class="row">

                       
                          <div class="col-md-3" style='padding:0px;' style='margin-bottom: 20px;' >
                              <a href="#" class="form-control btn btn-primary" onClick="preview_snapshot()">Open Camera</a>
                          </div>

                          <div class="col-md-3" style='padding:0px;'>
                              <a href="#" class="form-control btn btn-success" onClick="save_photo()">Capture</a>
                          </div>
                            
                         
                      </div>
                       <div class = "col-md-6" style='margin-bottom: 20px;'>
                        <input class="form-control" type='file' name="images" id="images">
                          </div>
                      
                      
                       <div class = "col-md-6" style= 'margin-bottom: 10px;'>
                           
                              <label><b>Basic Information</b></label>
                          </div>
                      
                      <div class = "row">
                         
                          <div class= "col-md-3" style='margin-bottom: 20px;'>
                      <label>Lastname</label>
                      <input class="form-control" type='text' name='LastName' id='LastName' placeholder='Enter Lastname' required=''>
                      </div>
                          
                          <div class= "col-md-3" style='margin-bottom: 20px;'>
                      <label>Firstname</label>
                      <input class="form-control" type='text' name='FirstName'id='FirstName' placeholder='Enter Firstname' required=''>
                      </div>

                      <div class = "col-md-3" style="margin-bottom: 20px">
                      <label>Alias</label>
                      <input type="text" name="alias" id="alias" class="form-control" placeholder="Enter Alias" requiared>
                      </div>
                                                          
                            <div class= "col-md-2" style='margin-bottom: 20px;'>  
                      <label>M.I.</label>
                      <input class="form-control" type='text' name='MiddleInitial'  id='MiddleInitial' placeholder='Enter Middle Name' required=''>
                          </div>
                          
                          </div>
                  </div>

                  <div class="col-lg-12" style='margin-bottom: 30px;'>
                      
                      <div class = "row">
                          <div class = "col-md-3" style='margin-bottom: 20px;'>
                      <label>Gender</label>
                      <select class="form-control" type='text' name='Gender' id='Gender'>
                    <option> </option>
                       <option>Male</option>
                        <option>Female</option>
                      </select> 
                            </div>
                          <div class = "col-md-4" style='margin-bottom: 20px;'>
                      <label>Civil Status</label>
                       <select class="form-control" type='text' name='CivilStatus'id='CivilStatus' onChange = "disabletextbox();">
                       <option> </option>
                       <option>Single</option>
                        <option>Married</option>
                        <option>Separated</option>
                        <option>Widowed</option>
                      </select>     
                          </div>
                          <div class = "col-md-3" style='margin-bottom: 20px;'>
                             <label>Voter Status</label>
                       <select class="form-control" type='text' name='voterStatus'id='voterStatus'>
                       <option> </option>
                       <option>Yes</option>
                        <option>No</option>
                      </select>     
                          </div>

                    </div>
                      
                      <div class ="row">
                          
                          <div class ="col-md-5" style='margin-bottom: 20px;'>
                      <label>Birth Date</label>
                      <input class="form-control" id='BirthDate' type='date' name='BirthDate' placeholder='Enter Birthday' required=''>
                          </div>
                              
                       <div class ="col-md-5" style='margin-bottom: 20px;'>
                      <label>Birth Place</label>
                         <input class = "form-control" id="BirthPlace" name="BirthPlace" type = "text" placeholder="Enter Birth Place" required=''>
                      </div>
                     </div>
                          
                     <div class = "row">
                         
                    <div class ="col-md-5" style='margin-bottom: 20px;'>

                         <label>Occupation</label>
                         <input class = "form-control" id="Occupation" name="Occupation" type = "text" placeholder= "Enter Occupation" required=''>
                         </div>    
                    
                    <div class ="col-md-5" style='margin-bottom: 20px;'>

                          <label>Sector</label>
                        <select class= "form-control" type="text" name="Sector"  id="Sector" required="">
                        <option> </option>
                        <option>Private</option>
                        <option>Public</option>
                        <option>Government</option>
                        <option>Unemployed</option>
                        <option>Out of School Youth (OSY)</option>
                        <option>Out of School Children (OSC)</option>
                        <option>Senior Citizen (SC)</option>
                        <option>Overseas Filipino Worker (OFW)</option>
                        <option>Solo Parent</option>
                        <option>Indigenous People (IP)</option>
                        <option>Others</option>
                        </select>
                    </div>    
                    
                      </div>
                      
                      
                      <div class= "row">
                      
                       <div class ="col-md-5" style='margin-bottom: 20px;'>
                      <label>Nationality</label>
                        <input class="form-control" type='text' name='Nationality' id='Nationality' placeholder='Enter Nationality' required=''>
                       </div>  
                           
                        <div class ="col-md-5" style='margin-bottom: 20px;'>
                      <label>Religion/Belief</label>
                      <input class="form-control" type="text" name="Religion" id="Religion" placeholder="Enter Religion/Belief" required=''>
                       </div>   
                    
                    </div>
                      
                        <div class= "row">
                      
                     <div class ="col-md-5" style='margin-bottom: 20px;'>

                      <label>Spouse's Name</label>
                      <input class = "form-control" type="text" name="SpouseName"  id="SpouseName" 
                             placeholder="Enter Spouse's Name" required=''>
                      </div>
                            
                    <div class ="col-md-5" style='margin-bottom: 20px;'>
                        
                    <label>Spouse's Occupation</label>
                     <input class = "form-control" type="text" name="SpouseOccupation" id="SpouseOccupation" placeholder="Enter Spouse's Occupation" required=''>
                        
                    </div>     
                      </div>
                      
                       <div class = "col-md-6" style= 'margin-bottom: 10px;'>
                           
                              <label><b>Contact Information</b></label>
                          </div>
                     
                      <div class = "row">
                      
                      <div class = "col-md-10" style="margin-bottom: 20px;">
                          <label>City Address</label>
                          <input class="form-control" type="text" name="CityAddress" id="CityAddress" placeholder="Enter City Address" required=''>
                          
                          </div>
            
                      
                      </div>
                      
                      <div class="row">
                          
                       <div class="col-md-10" style="margin-bottom: 20px">
                              <label>Provincial Address</label>
                         <input class= "form-control" type= "text" name="ProvincialAddress" id="ProvincialAddress" placeholder="Enter Provincial Address">
                          
                                
                                 
                          </div>
                      
                      </div>
                      
                      <div class ="row">
                      <div class="col-md-5" style="margin-bottom: 20px">
                          <label>Home Number 1</label>
                          <input class = "form-control" type= "tel" name= "HomeNumber1" id= "HomeNumber1" placeholder="+63 9xxxxxxxxx">
                          
                          </div> 
                          
                          
                        <div class = "col-md-5" style="margin-bottom: 20px">
                          <label>Mobile Number 1</label>
                            <input class = "form-control" type= "tel" name= "MobileNumber1" id= "MobileNumber1" placeholder="+63 9xxxxxxxxx">
                          </div>
                      </div>
                      
                       <div class ="row">
                      <div class="col-md-5" style="margin-bottom: 20px">
                          <label>Home Number 2</label>
                          <input class = "form-control" type= "tel" name= "HomeNumber2" id= "HomeNumber2" placeholder="+63 9xxxxxxxxx">
                          
                          </div> 
                          
                          
                        <div class = "col-md-5" style="margin-bottom: 20px">
                          <label>Mobile Number 2</label>
                            <input class = "form-control" type= "tel" name= "MobileNumber2" id= "MobileNumber2" placeholder="+63 9xxxxxxxxx">
                          </div>
                      </div>
                      
                      <div class="row">
                      <div class = "col-md-8" style="margin-bottom: 20px">
                          <label>Email Address</label>
                          <input class="form-control" type= "email" name="EmailAddress" id="EmailAddress" placeholder="name@domain.com">
                           
                          </div>
                          
                      
                      </div>
                      
                      
                      <div class="row">
                          <div class="col-md-6" style="margin-bottom: 10px">
                              <label><b>Other Information</b></label>
                         </div>
                      </div> 
                    <div class="row">
                          <div class="col-md-4" style="margin-bottom: 10px">
                              <label>Resident ID</label>
                              <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control"></div>

                             



                      </div> 
                      


                       <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button  type="submit"class="btn btn-success"  id="register" name="register" onClick="return myFunction()">Save changes</button>
                          </div>
                    </div>
                </form>
              </div>   
      </div>
    </div>
  </div>
</div>
    <!--##################################################################################################################################################-->
    
    
    <!-- EDIT MODAL FORM -->
<div class="modal fade bd-example-modal-lg" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Resident Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
       <div class="info">
                <form method='POST' action='updatecode.php' class="form" id="form" name = "form" enctype="multipart/form-data" >
                  <div class="col-lg-12">

                      
                       <div class="picture" id="picture"></div>
                        <div id="profileImage">
                          <input type="hidden" name="profileImage">
                        </div>
                      <div class="row">

                       
                          <div class="col-md-3" style='padding:0px;' style='margin-bottom: 20px;' >
                              <a href="#" class="form-control btn btn-primary" onClick="preview_snapshot()">Open Camera</a>
                          </div>

                          <div class="col-md-3" style='padding:0px;'>
                              <a href="#" class="form-control btn btn-success" onClick="save_photo()">Capture</a>
                          </div>
                            
                         
                      </div>
                       <div class = "col-md-6" style='margin-bottom: 20px;'>
                        <input class="form-control" type='file' name="images" id="images">
                          </div>
                      
                      
                       <div class = "col-md-6" style= 'margin-bottom: 10px;'>
                           
                              <label><b>Basic Information</b></label>
                          </div>
                      
                      <div class = "row">
                          <input type="hidden" name="update_id" id="update_id"> 
                         
                          <div class= "col-md-3" style='margin-bottom: 20px;'>
                      <label>Lastname</label>
                      <input class="form-control" type='text' name='LastName' id="lastName" placeholder='Enter Last Name' required=''>
                      </div>
                          
                          <div class= "col-md-3" style='margin-bottom: 20px;'>
                      <label>Firstname</label>
                      <input class="form-control" type='text' name='FirstName' id="firstName" placeholder='Enter First Name' required=''>
                      </div>

                      <div class = "col-md-3" style="margin-bottom: 20px">
                      <label>Alias</label>
                      <input type="text" name="alias" id="alias" class="form-control" placeholder="Enter Alias" requiared>
                      </div>
                                                          
                            <div class= "col-md-2" style='margin-bottom: 20px;'>  
                      <label>M.I.</label>
                      <input class="form-control" type='text' name='MiddleInitial' id="middleInitial" placeholder='Enter Middle Name' required=''>
                          </div>
                          
                          </div>
                  </div>

                  <div class="col-lg-12" style='margin-bottom: 30px;'>
                      
                      <div class = "row">
                          <div class = "col-md-3" style='margin-bottom: 20px;'>
                      <label>Gender</label>
                      <select class="form-control" type='text' name='Gender' id="gender">
                    <option> </option>
                       <option value="Male" >Male</option>
                        <option value="Female">Female</option>
                      </select> 
                            </div>
                          
                          
                          <div class = "col-md-4" style='margin-bottom: 20px;'>
                      <label>Civil Status</label>
                      <select class="form-control" type='text' name='CivilStatus' id="civilStatus" >
                       <option> </option>
                       <option>Single</option>
                        <option>Married</option>
                        <option>Separated</option>
                        <option>Widowed</option>
                      </select>     
                          </div>
                          <div class = "col-md-3" style='margin-bottom: 20px;'>
                             <label>Voter Status</label>
                      <select class="form-control" type='text' name='voterStatus' id="voterStatus">
                       <option> </option>
                       <option>Yes</option>
                        <option>No</option>
                      </select>     
                          </div>

                    </div>
                      
                      <div class ="row">
                          
                          <div class ="col-md-5" style='margin-bottom: 20px;'>
                      <label>Birth Date</label>
                        <input class="form-control" id='birthDate' type='date' name='BirthDate' placeholder='Enter Birthday' required=''>
                          </div>
                              
                       <div class ="col-md-5" style='margin-bottom: 20px;'>
                      <label>Birth Place</label>
                        <input class = "form-control" id="birthPlace" name="BirthPlace" type = "text" placeholder="Enter Birth Place" required=''>
                      </div>
                     </div>
                          
                     <div class = "row">
                         
                    <div class ="col-md-5" style='margin-bottom: 20px;'>

                         <label>Occupation</label>
                         <input class = "form-control" id="occupation" name="Occupation" type = "text" placeholder= "Enter Occupation" required=''>
                         </div>    
                    
                    <div class ="col-md-5" style='margin-bottom: 20px;'>

                          <label>Sector</label>
                        <select class= "form-control" type="text" name="Sector" id="sector" required="">
                        <option> </option>
                        <option>Private</option>
                        <option>Public</option>
                        <option>Government</option>
                        <option>Unemployed</option>
                        <option>Out of School Youth (OSY)</option>
                        <option>Out of School Children (OSC)</option>
                        <option>Senior Citizen (SC)</option>
                        <option>Overseas Filipino Worker (OFW)</option>
                        <option>Solo Parent</option>
                        <option>Indigenous People (IP)</option>
                        <option>Others</option>
                        </select>
                    </div>    
                    
                      </div>
                      
                      
                      <div class= "row">
                      
                       <div class ="col-md-5" style='margin-bottom: 20px;'>
                      <label>Nationality</label>
                        <input class="form-control" type='text' name='Nationality' id="nationality" placeholder='Enter Nationality' required=''>
                       </div>  
                           
                        <div class ="col-md-5" style='margin-bottom: 20px;'>
                      <label>Religion/Belief</label>
                      <input class="form-control" type="text" name="Religion" id="religion" placeholder="Enter Religion/Belief" required=''>
                       </div>   
                    
                    </div>
                      
                        <div class= "row">
                      
                     <div class ="col-md-5" style='margin-bottom: 20px;'>

                      <label>Spouse's Name</label>
                      <input class = "form-control" type="text" name="SpouseName" id="spouseName"
                             placeholder="Enter Spouse's Name" required=''>
                      </div>
                            
                    <div class ="col-md-5" style='margin-bottom: 20px;'>
                        
                    <label>Spouse's Occupation</label>
                     <input class = "form-control" type="text" name="SpouseOccupation" id="spouseOccupation" placeholder="Enter Spouse's Occupation" required=''>
                        
                    </div>     
                      </div>
                      
                       <div class = "col-md-6" style= 'margin-bottom: 10px;'>
                           
                              <label><b>Contact Information</b></label>
                          </div>
                     
                      <div class = "row">
                      
                      <div class = "col-md-10" style="margin-bottom: 20px;">
                          <label>City Address</label>
                          <input class="form-control" type="text" name="CityAddress" id="cityAddress" placeholder="Enter City Address" required=''>
                          
                          </div>
            
                      
                      </div>
                      
                      <div class="row">
                          
                       <div class="col-md-10" style="margin-bottom: 20px">
                              <label>Provincial Address</label>
                          <input class= "form-control" type= "text" name="ProvincialAddress" id="provincialAddress" placeholder="Enter Provincial Address">
                          
                                
                                 
                          </div>
                      
                      </div>
                      
                      <div class ="row">
                      <div class="col-md-5" style="margin-bottom: 20px">
                          <label>Home Number 1</label>
                          <input class = "form-control" type= "tel" name= "HomeNumber1" id="homeNumber1" placeholder="+63 9xxxxxxxxx">
                          
                          </div> 
                          
                          
                        <div class = "col-md-5" style="margin-bottom: 20px">
                          <label>Mobile Number 1</label>
                            <input class = "form-control" type= "tel" name= "MobileNumber1" id="mobileNumber1" placeholder="+63 9xxxxxxxxx">
                          </div>
                      </div>
                      
                       <div class ="row">
                      <div class="col-md-5" style="margin-bottom: 20px">
                          <label>Home Number 2</label>
                          <input class = "form-control" type= "tel" name= "HomeNumber2" id="homeNumber2" placeholder="+63 9xxxxxxxxx">
                          
                          </div> 
                          
                          
                        <div class = "col-md-5" style="margin-bottom: 20px">
                          <label>Mobile Number 2</label>
                            <input class = "form-control" type= "tel" name= "MobileNumber2" id="mobileNumber2" placeholder="+63 9xxxxxxxxx">
                          </div>
                      </div>
                      
                      <div class="row">
                      <div class = "col-md-8" style="margin-bottom: 20px">
                          <label>Email Address</label>
                          <input class="form-control" type= "email" name="EmailAddress" id="emailAddress" placeholder="name@domain.com">
                           
                          </div>
                          
                      
                      </div>
                      
                      
                      <div class="row">
                          <div class="col-md-6" style="margin-bottom: 10px">
                              <label><b>Other Information</b></label>
                         </div>
                      </div> 
                    <div class="row">
                          <div class="col-md-4" style="margin-bottom: 10px">
                              <label>Resident ID</label>
                              <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                         </div>
                      </div> 
                      


                       <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success"  id="updatedata" name="updatedata">Save changes</button>
                          </div>
                    </div>
                </form>
              </div>   
      </div>
    </div>
  </div>
</div>
<!--#########################################################################################################################################-->
        <!--##################################################################################################################################################-->
    
    
    <!-- DELEYE MODAL FORM -->
<div class="modal fade bd-example-modal-lg" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Resident Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
       <div class="info">
                <form method='POST' action='delete.php' class="form" id="form" name = "form" enctype="multipart/form-data" >
                  <div class="col-lg-12">


                    
                      
                      
        
                      
                      <div class = "row">
                          <input type="hidden" name="delete_id" id="delete_id"> 
                      
                        <h4>Do you want to delete this data?</h4>

                       <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary"  id="deletedata" name="deletedata">Yes. Delete it</button>
                          </div>
            
                </form>
              </div>   
      </div>
    </div>
  </div>
</div>
<!--#########################################################################################################################################-->
    
    
    
    
    
    


<script>
    var y = new Date();
    var m = new Date();
    var d = new Date();
    
    var month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    var day = d.getDate("1-31");

    if (day == 1 && day != 11) {
        document.getElementById("date").innerHTML = d.getDate("1-31") + "st";
    }else if(day == 2 && day != 12){
        document.getElementById("date").innerHTML = d.getDate("1-31") + "nd";
    }else if(day == 3 && day != 13){
        document.getElementById("date").innerHTML = d.getDate("1-31") + "rd";
    }else{
        document.getElementById("date").innerHTML = d.getDate("1-31") + "th";
    }
    document.getElementById("year").innerHTML = y.getFullYear("yyyyy");
    document.getElementById("month").innerHTML = month[m.getMonth("0-11")];

        document.getElementById("date2").innerHTML = d.getDate("1-31") + ",";
    document.getElementById("year2").innerHTML = y.getFullYear("yyyyy");
    document.getElementById("month2").innerHTML = month[m.getMonth("0-11")];
</script>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    
    <!---DELETE-->
           <!--Edit Moda-->
    <script>  
    $(document).ready(function(){
       $('.deletebtn').on('click', function(){
           $('#deletemodal').modal('show');
           
            $tr = $(this).closest('tr');
           
              var data= $tr.children("td").map(function(){
              return $(this).text();
              }).get();
           
           console.log(data);
           $('#delete_id').val(data[1]);
          
           
       });
    });
        
        
        
        
    </script>
    
    
    
    
    
    
    <script type="text/javascript">
    $('body').on('hidden.bs.modal', function () {
    if($('.modal.in').length > 0)
    {
        $('body').addClass('modal-open');
    }
});
    
    </script>
    
    
    
    
    
    
        <!--Edit Moda-->
    <script>  
    $(document).ready(function(){
       $('.editbtn').on('click', function(){
           $('#editmodal').modal('show');
           
            $tr = $(this).closest('tr');
           
              var data= $tr.children("td").map(function(){
                  return $(this).text();
              }).get();
           
           console.log(data);
           $('#update_id').val(data[1]);
           $('#lastName').val(data[2]);
           $('#firstName').val(data[3]);
           $('#alias').val(data[5]);
           $('#middleInitial').val(data[4]);
           $('#gender').val(data[6]);
           $('#civilStatus').val(data[7]);
           $('#voterStatus').val(data[8]);
           $('#birthDate').val(data[9]);
           $('#birthPlace').val(data[10]);
           $('#occupation').val(data[11]);
           $('#sector').val(data[12]);
           $('#nationality').val(data[13]);
           $('#religion').val(data[14]);
           $('#spouseName').val(data[15]);
           $('#spouseOccupation').val(data[16]);
           $('#cityAddress').val(data[17]);
           $('#provincialAddress').val(data[18]);
           $('#homeNumber1').val(data[19]);
           $('#mobileNumber1').val(data[20]);
           $('#homeNumber2').val(data[21]);
           $('#mobileNumber2').val(data[22]);
           $('#emailAddress').val(data[23]);
           
       });
    });
        
        
        
        
    </script>
      <!----CONFIRMATION TO DELETE--->
      <script>
          function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
      </script>

</body>

</html>
<!-- end document-->
