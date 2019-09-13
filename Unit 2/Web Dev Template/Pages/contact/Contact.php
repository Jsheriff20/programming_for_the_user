<?php 
	session_start();
	// if the user is already logged in this will run
	if ($_SESSION["loggedIn"] != "1" ){
		header("location: ../login/Login1.html");
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<main id="mainContainer">

<head>

	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../CSS.css">
	<script type="text/javascript" src="../../script.js" ></script>

	<header id="Banner">
		<section class= "top-right ">
			<img class="bannerImages" src="../../Images/macklemoreContactImage.jpg" alt="macklemoreImage" height="150px" width="250px"> <!-http://populove.net/macklemore-releases-new-album-gemini/ ->
		</section>
		<h1> Contact </h1>
	</header>


	<nav class="navbar navbar-expand-md navbar-dark fixed-left">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNav">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="../../index.php">Home</a>
					<a class="nav-item nav-link" href="../../req.php">Requirements</a>
					<a class="nav-item nav-link" href="../about/About.php">About Macklemore</a>
					<a class="nav-item nav-link active" href="#">Contact</a>
					<a class="nav-item nav-link" href="../myAccount/MyAccount.php">My Account</a>
					<a class="nav-item nav-link" href="../logout/logOut.php">Logout</a>
				</div>
			</div>
		</div>
	</nav>
	
</head>



<body onload="Hide()">

	<section class="row">

		<section class="col-sm-2"> 
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		</section>

		<section class="col-sm-8"> 
			<button class="buttons" onclick="BuinessFanFunction()">Click For Fan/ Business Info</button>
			<table class="table">
				<tbody>
					<tr class="fanInfo" id="FanInfo1">
						<th scope="row">Fan Mail email</th>
						<td>FanMail@Macklemore.com</td>
					</tr>
					<tr class="businessInfo" id="BusinessInfo1">
						<th scope="row">Business Contact Email</th>
						<td>Business@ben-Mack.com</td>
					</tr>
					<tr class="fanInfo" id="FanInfo2">
						<th scope="row">Fan Mail Help Number</th>
						<td>07393991234</td>
					</tr>
					<tr class="businessInfo" id="BusinessInfo2">
						<th scope="row">Business Contact Number</th>
						<td>07823691335</td>
					</tr>
					<tr class="fanInfo" id="FanInfo3">
						<th scope="row">Fan mail Address</th>
						<td>18 fake street, fake place, Fake thing, D12 8HZ</td>
					</tr>
					<tr class="businessInfo" id="BusinessInfo3">
						<th scope="row">Business Address</th>
						<td>19 fake street, fake place, Fake city, D12 8HZ</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section class="col-sm-2">
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		</section>

	</section>

</body>

</main>

</html>
