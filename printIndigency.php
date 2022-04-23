<html>
<head>
	<title>BARANGAY CLEARANCE SYSTEM</title>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initialscale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
  
<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initialscale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">



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

	<style>
		.print{
			text-align: justify;
		}
		.flex-parent{
			display: flex;
		}
		.flex1{
			flex: 1;
		}
		img{
			width: 130px;
			height: 130px;
		}
		.margin-top-50{
			margin-top: 50px;
		}
		.uppercase{
			text-transform: uppercase;
		}
	</style>
</head>
<body>
	<div class="container-fluid print">
		<div class="flex-parent">
			
					
						<div class="flex1 text-left">
							
						</div>
						<div class="flex1 text-center">
							<h5>Republic of the Philippines</h5>
							<h5>Province of Leyte</h5>
							<h5>Municipality of  </h5>
							<h5>Barangay </h5>
						</div>

						<div class="flex1">
				<div class="text-right">
					
                                <td><img class="image" src="images/icon/dangcol.png"></td>
                              
                              
                              
				</div>
			</div>
					
			<div class="flex1">
				<div class="text-right">
					
				</div>
			</div>
		</div>
		<div class="text-center">
			<h3 style="text-decoration: underline;">OFFICE OF THE PUNONG BARANGAY</h3>
		</div>
		<div class="content margin-top-50">
			<h4>SUBJECT: <b style="text-decoration: underline;">CERTIFICATE OF INDIGENCY</b></h4>
		</div>
		<div class="content margin-top-50">
			<h4>To whom it may concern;</h4>
		</div>
		
				<div class="content margin-top-50" style='text-indent: 50px;'>
					<h4><div class="row">
						

						<div class="col-md-3">
					<h4>THIS IS TO CERTIFY that</h4>
						</div>



						<div class="col-md-5">
						<div  contenteditable="true" style="padding: 3px" >
  						<b style="text-decoration: underline; font-color:black;"><h4>Enter you name here.</h4></b>
						</div></div>



						<div class = "col-md-5">
						legal age, a resident of Barangay.</div>





				</div></h4></div>
				<div class="content margin-top-50" style='text-indent: 50px;'>
					<h4>This is to certify further that <b class="uppercase"></b> is one of the Indigent members in this Barangay.
					.</h4>
				</div>
				<div class="content margin-top-50" style='text-indent: 50px;'>
					<h4>This Certification is issued upon the request of the interested party for whatever legal purpose it may serve her  most.</h4>
				</div>
				<div class="content margin-top-50" style='text-indent: 50px;'>
					<h4>
						GIVEN this <b><span id='date'></span> day of <span id='month'></span> <span id='year'></span></b> at  Philippines.
					</h4>
				</div>
		

		
		<div class=" margin-top-50">
			<div class="margin-top-50">
					<div class="flex-parent">
						<div class="flex1"></div>
						
						<div class="flex1">
							<h4 class="text-center">Certified Correct</h4>
							<h4 class="uppercase text-center">
								
							</h4>
							<h4 class="text-center">Punong Barangay</h4>
						</div>
					</div>
				
			</div>
		</div>
		<div class=" margin-top-50">
			<h4 style="width: 100xp;">Paid OR No <span style="margin-left: 20px;">:</span></h4>
			<h4>Issued on <span style="margin-left: 38px;"></span>:<span id="month2"></span> <span id="date2"></span> <span id="year2"></span><h4>
			<div class="row">
			
					<div class= "col-md-3">
			<h4>Issued at <span  style="margin-left: 43px;"></span>:Barangay</h4></div>

			<div class="col-md-3"><div contenteditable ="true" style="padding: 2px"><h4>Enter Barangay name</h4></div></div>

				</div>

		</div>
		
	</div>
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
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<button id = "printpagebutton" type="button" class="btn btn-primary" onclick="myFunction()" style="width: 100px; margin: 50px">Print</button>

<script>
	function myFunction() {
		 var printButton = document.getElementById("printpagebutton");
	     printButton.style.visibility = 'hidden';
	    window.print();
	    printButton.style.visibility = 'visible';
	   

	}
</script>
</body>
</html>