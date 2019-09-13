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

	<title>About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../CSS.css">
	<script type="text/javascript" src="../../script.js" ></script>

	<section id="Banner">
		<article class= "top-right">
			<img class="bannerImages" src="../../Images/macklemoreAboutImage.jpg" alt="macklemoreImage" height="150px" width="200px"> <!-https://www.pinterest.com/pin/527413806356688221/->
		</article>
		<h1>About </h1>
	</section>

	<nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNav">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="../../index.php">Home</a>
					<a class="nav-item nav-link" href="../../req.php">Requirements</a>
					<a class="nav-item nav-link active" href="#">About Macklemore</a>
					<a class="nav-item nav-link" href="../contact/Contact.php">Contact</a>
					<a class="nav-item nav-link" href="../myAccount/MyAccount.php">My Account</a>
					<a class="nav-item nav-link" href="../logout/logOut.php">Logout</a>
				</div>
			</div>
		</div>
	</nav>
	
</head>


<body onload="getRecommendedSong();">

	<section class="row">

		<section class="col-sm-2"> 
			<h2 id="AboutInfo"> Info About Ben</h2>
			<button class="buttons" type="button" onclick="Macklemore()">About Macklemore (The Basics)</button>
			<button class="buttons" type="button" onclick="EarlyLife()">Early life and influences</button>
			<button class="buttons" type="button" onclick="Career()">About Career</button>
			<button class="buttons" type="button" onclick="Personal()"> About Personal life</button>
		</section>

		<section class="col-sm-8"> 

			<article id="ShowInfo">
				<p>"BLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</article>
		</section>

		<section class="col-sm-2">
			<h2 id="recommendedSong"></h2>
			<button class="buttons" type="button" id="showWingsSong">Show lyrics for "WING$"</button>
			<button class="buttons" type="button" id="showCantHoldUsSong">Show lyrics for "CAN'T HOLD US!"</button>
			<button class="buttons" type="button" id="showGloriousSong">Show lyrics for "GLORIOUS"</button>
			<button class="buttons" type="button" id="showThriftShopSong">Show lyrics for "THRIFT SHOP"</button>
				<br><br>
			<h2 id="peopleInfo"> View Their Profiles!</h2>
			<button class="buttons" type="button" id='macklemoreInfo'>Macklemores Profile</button>
			<button class="buttons" type="button" id="ryanInfo">Ryan Lewis Profile</button>

		</section>

</section>

</body>

</main>

</html>
