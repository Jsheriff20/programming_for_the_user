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

	<title>Mental Health And Welfare Support</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../CSS.css">
	<script type="text/javascript" src="../../script.js" ></script>

	<section id="Banner">
		<article class= "top-right">
			<img class="bannerImages" src="../../Images/mental_health_and_welfare_support.jpg" alt="logo" height="150" width="150">
		</article>
		<h1> Mental Health And Welfare Support </h1>
	</section>

	<?php
	include_once("../../navBar.php");
	?>
	
</head>


<body>
	<section class="row">


		<section class="col-sm-9"> 
		<article >
				<h2>What We Offer
					<a onclick="MentalHealthPageAudioFunction('MentalHealthAndWelFareSupportPage1');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Times can be tough especially at university with all the deadlines to meet, if you 
					are in need of assistance with any mental health and welfare we are here to help. 
					We have experts to help you in the best way we can feel free to come along. </p>


				<div class="sml-gap"></div>


				<h5>Things we deal with every day: 
					<a onclick="MentalHealthPageAudioFunction('MentalHealthAndWelFareSupportPage2');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h5>
				<ul>
					<li>Depression, suicide prevention </li>
					<li>Recovery from addiction</li>
					<li>Anger issues and management </li>
					<li>Helping people with focus issues for when it comes to exams</li>
					<li>Provide helpline information and point in right direction </li>
					<li>Give contact details to people who have dealt with same problem for advice </li>
					<li>Talk about Welfare Rights </li>
						

				</ul>


				<div class="sml-gap"></div>


					<a onclick="MentalHealthPageAudioFunction('MentalHealthAndWelFareSupportPage3');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				<p>Any student having mental health and welfare problems is welcome to come along and
					book a session to discuss any problems that they may have however, all we ask
					for is a description of what it is you want to talk about in the booking form.
					So that we can prepare, and therefore give you the best advice we can.</p>

				
			</article>


			<div class="med-gap"></div>


			<article>
				<h2>Contact Details
					<a onclick="MentalHealthPageAudioFunction('MentalHealthAndWelFareSupportPage4');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Email - Mental_Health_And_Welfare_Support@dud.ac.uk </p>
				<p>Number - 07234830392</p>
				<p>Postal Address - Discovery University Dundee, Nethergate, Dundee, DD1 4HN, Scotland, UK</p>
			</article>


			<div class="sml-gap"></div>


			<article>
				<h2>Opening Times 
					<a onclick="MentalHealthPageAudioFunction('MentalHealthAndWelFareSupportPage5');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Mon - Fri 9:00 - 5:30 </p>


				<div class="med-gap"></div>


				<a href="../book_appointment/book_appointment.php">  
					<img src="../../Images/book_appointment_button.png" alt="book appointment" , height="100px", width="300" >
				</a>
			</article>
		</section>

		<section class="col-sm-3">

			<h2>Staff</h2>
			<div class="sml-gap"></div>
			
			<h4>Penney Galipeau</h4>
			<img class="StaffPic" src="..\..\Images\MentalHealthServiceStaff1.png" alt="StaffPic">
			<div class="sml-gap"></div>

			<h4>Moon Aman</h4>
			<img class="StaffPic" src="..\..\Images\MentalHealthServiceStaff2.jpg" alt="StaffPic">
			<div class="sml-gap"></div>

			<h4>Doyle Fuller</h4>
			<img class="StaffPic" src="..\..\Images\MentalHealthServiceStaff3.jpg" alt="StaffPic">

			</section>
		</section>
	</section>

</body>

</main>

</html>
