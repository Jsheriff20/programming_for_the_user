<?php 
	
	include("../login/config.php");

	session_start();
	// if the user isnt logged in this will run
	if ($_SESSION["loggedIn"] != "1" ){
		header("location: ../login/Login1.html");
		exit();
	}
	
	//gets account info from session using session email
	$email = $_SESSION['email'];
	$sql = "SELECT * FROM DiscoveryDundeeUniAccounts WHERE Email = ?";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "sql Statment failed!";
	}
	else{
		// bind parameter to placeholders
		mysqli_stmt_bind_param($stmt, "s", $email);
		// run parameters inside of database
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$row = mysqli_fetch_array($result);
		//infomation for users account
		$username = $row['Username'];
		$name = $row['Name'];
		$contactNumber = $row['ContactNumber'];
		
		//infomation for first booking
		$bookingService1 = $row['Booking1Service'];
		$bookingDate1 = $row['Booking1Date'];
		$bookingTime1 = $row['Booking1Time'];
		$bookingTime1 = $row['Booking1Time'];
		$reasonForBooking1 = $row['ReasonForBooking1'];

		//infomation for second booking
		$bookingService2 = $row['Booking2Service'];
		$bookingDate2 = $row['Booking2Date'];
		$bookingTime2 = $row['Booking2Time'];
		$reasonForBooking2 = $row['ReasonForBooking2'];
	}
?>




<!DOCTYPE html>
<html lang="en">
<main id="mainContainer">
<section id="favColourBackground">
<head>

	<title>My Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../CSS.css">
	<script type="text/javascript" src="../../script.js" ></script>


	<header id="Banner">
		<section class= "top-right">
			<img class="bannerImages" src="../../Images/logo2.jpg" alt="logo" height="150" width="150">
		</section>
		
		<h1>Accounts and Bookings </h1>
	</header>


	<?php
	include_once("../../navBar.php");
	?>


</head>


<body>

	<section class="row">
		
		<!--show users account infomation-->
		<section class="col-sm-4"> 
			<h1>Account Infomation</h1>
			<table class="table table-hover table-dark">
			
				<tbody>
					<tr>
						<th scope="row">Username</th>
						<td>
							<?php echo $username; ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Name</th>
						<td>
							<?php echo $name ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Email</th>
						<td>
							<?php echo $email ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Contact Number</th>
						<td>
							<?php echo $contactNumber ?>

						</td>
					</tr>
				</tbody>
			</table>
		</section>


		<section class="col-sm-3"> </section>
			
	<!--show infomation for 1stbooking on account-->
		<section class="col-sm-5"> 
		<h1>Bookings</h1>
		<p>You must delete a current booking to make another</p>
			<table class="table table-sm table-dark">
				<tbody>			
					<tr>
						<th scope="row"><h5>1st Booking </h5></th>
						<td></td> <!--empty for design purpose-->
					</tr>	
					<tr>
						<th scope="row">Service Name</th>
						<td>
							<?php echo $bookingService1 ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Date</th>
						<td>
							<?php echo $bookingDate1 ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Time</th>
						<td>
							<?php echo $bookingTime1 ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Reason For Booking</th>
						<td>
							<?php echo $reasonForBooking1 ?>
						</td>
					</tr>
				</tbody>
				<form name="deleteBookingForm" id="deleteBookingForm" method="post" action="deleteBooking.php">
					<button id="Booking1" name="Booking1" class="buttons" > Delete Booking! </button>
				</form>	
			</table>

			<div class="med-gap"> </div>

			<!--show infomation for 2nd booking on account-->
			<table class="table table-sm table-dark">
				<tbody>			
					<tr>
						<th scope="row"><h5>2nd Booking </h5></th>
						<td></td> <!--empty for design purpose-->
					</tr>				
					<tr>
						<th scope="row">Service Name</th>
						<td>
							<?php echo $bookingService2 ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Date</th>
						<td>
							<?php echo $bookingDate2 ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Time</th>
						<td>
							<?php echo $bookingTime2 ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Reason For Booking</th>
						<td>
							<?php echo $reasonForBooking2 ?>
						</td>
					</tr>
				</tbody>
				<form name="deleteBookingForm" id="deleteBookingForm" method="post" action="deleteBooking.php">
					<button name="Booking2" id="Booking2" class="buttons" > Delete Booking! </button>
				</form>	
				
			</table>


		</section>

	</section>

</body>

</section>

</main>

</html>
