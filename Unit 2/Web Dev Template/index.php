<?php 
	session_start();
	// if the user is already logged in this will run
	if ($_SESSION["loggedIn"] != "1" ){
		header("location: Pages/login/Login1.html");
		exit();
	}
	
?>
<!DOCTYPE html>
<html id="colour" lang="en">
<main id="mainContainer" >

<head>
	<title color="white">Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<script type="text/javascript" src="script.js" ></script>


	<header id="Banner">
		<section media="(min-width: 400px)" class="top-right ">
			<img class="bannerImages" src="Images/macklemoreHomeImage.jpg" alt="macklemoreHomeImage" height="150px" width="230px"> <!–http://www.thefair.com/fun/details/macklemore ->
		</section>
		<h1 id="PageTitle"> Home </h1>
	</header>


	<nav class="navbar navbar-expand-md navbar-dark fixed-left">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNav">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="#">Home</a>
					<a class="nav-item nav-link" href="req.php">Requirements</a>
					<a class="nav-item nav-link" href="Pages/about/About.php">About Macklemore</a>
					<a class="nav-item nav-link" href="Pages/contact/Contact.php">Contact</a>
					<a class="nav-item nav-link" href="Pages/myAccount/MyAccount.php">My Account</a>
					<a class="nav-item nav-link" href="Pages/logout/logOut.php">Logout</a>
				</div>
			</div>
		</div>
	</nav>
	
</head>


<body onload="colourCookie(); ageCookie();">

	<section class="row">

		<article class="col-md-2"> 
			<h2>Next Album Drop:</h2>
			<h3 id="Countdown"> <h3>
			<br>
			<button class="buttons" id="btnSongNames"> Click For Song Names </button>
			<h5 class="SongNames"> Song 1 </h5>
			<h5 class="SongNames"> Song 2 </h5>
			<h5 class="SongNames"> Song 3 </h5>
			<h5 class="SongNames"> Song 4 </h5>
			<h5 class="SongNames"> Song 5 </h5>
			<br>
			<button class="buttons" onclick= "deleteCookie();"> Delete Cookies! </button> 
		</article>

		<article class="col-md-7">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sem integer vitae justo eget magna fermentum. Elit scelerisque mauris pellentesque pulvinar. Euismod lacinia at quis risus. Sed enim ut sem viverra aliquet eget sit amet. Vel quam elementum pulvinar etiam non quam lacus suspendisse faucibus. Tempor orci dapibus ultrices in. Fermentum odio eu feugiat pretium nibh ipsum consequat nisl vel. Praesent elementum facilisis leo vel fringilla est ullamcorper eget nulla. Et leo duis ut diam quam nulla porttitor massa. Quis varius quam quisque id diam vel quam elementum. Sodales neque sodales ut etiam. Imperdiet proin fermentum leo vel orci porta non. Feugiat in ante metus dictum at tempor. Tortor at auctor urna nunc id. Fermentum dui faucibus in ornare. Pharetra diam sit amet nisl suscipit. Felis eget velit aliquet sagittis id. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat.
		<br>
		Imperdiet proin fermentum leo vel. Adipiscing commodo elit at imperdiet dui accumsan sit amet. Congue mauris rhoncus aenean vel elit scelerisque. In nisl nisi scelerisque eu ultrices vitae. Malesuada bibendum arcu vitae elementum curabitur vitae. A diam sollicitudin tempor id eu nisl nunc. Proin fermentum leo vel orci porta non pulvinar neque. Proin sed libero enim sed faucibus turpis in eu. Aliquet risus feugiat in ante metus dictum. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Etiam erat velit scelerisque in. Donec adipiscing tristique risus nec feugiat in fermentum. Nunc faucibus a pellentesque sit amet. Nulla pharetra diam sit amet nisl suscipit. Nisi est sit amet facilisis magna etiam tempor orci eu. Vel pharetra vel turpis nunc eget lorem dolor. Nibh ipsum consequat nisl vel pretium lectus quam id. Sit amet justo donec enim diam vulputate ut pharetra. Auctor elit sed vulputate mi sit amet mauris commodo.
		</article>

		<article class="col-md-3">
			<a class="twitter-timeline" data-lang="en" data-chrome="transparent" data-width="100%"  data-height="100%" data-theme="dark" data-link-color="#6E6658" href="https://twitter.com/macklemore?ref_src=twsrc%5Etfw">Tweets by macklemore</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</article>

	</section>

</body>

</main>

</html>
