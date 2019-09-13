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

	<title>Learning Support Service</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../CSS.css">
	<script type="text/javascript" src="../../script.js" ></script>

	<section id="Banner">
		<article class= "top-right">
			<img class="bannerImages" src="../../Images/learning_support_service.jpg" alt="logo" height="150" width="150">
		</article>
		<h1> Learning Support Service </h1>
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
					<a onclick="LearningPageAudioFunction('LearningSupportPage1');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>The Learning Support Service is one of our many Services that can help you 
					develop your academic skills. Our role is to provide you with tools to become 
					a more effective learner, and to produce the best work you’re capable of.</p><!--https://www.abertay.ac.uk/life/student-support-and-services/learner-development/-->


				<div class="sml-gap"></div>


				<h5>Things we deal with every day:
					<a onclick="LearningPageAudioFunction('LearningSupportPage2');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h5>
				<ul>
					<li>Arrange study sessions and rooms</li>
					<li>Arrange extra studying with tutors</li>
					<li>View over work and check for grammar and spelling mistakes</li>
					<li>Find content that will help you with your course</li>
					<li>Plan assignments and study schedules</li>
					<li>Give advice on how to study well and use the time effectively </li>
					<li>Provide learning support for international students/students who are studying in a second language </li>
				</ul>


				<div class="sml-gap"></div>


				<a onclick="LearningPageAudioFunction('LearningSupportPage3');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>

				<p>Any student having learning difficulties is welcome to come along and book a session to discuss 
					any problems that they may have however, all we ask for is a description of what it is you want
					to talk about in the booking form. So that we can prepare, and therefore give you the best 
					advice we can. </p>

				
			</article>


			<div class="med-gap"></div>


			<article>
				<h2>Contact Details
				<a onclick="LearningPageAudioFunction('LearningSupportPage4');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Email - Learning_Support_Service@dud.ac.uk </p>
				<p>Number - 07812073392</p>
				<p>Postal Address - Discovery University Dundee, Nethergate, Dundee, DD1 4HN, Scotland, UK</p>
			</article>


			<div class="sml-gap"></div>


			<article>
				<h2>Opening Times 
					<a onclick="LearningPageAudioFunction('LearningSupportPage5');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Mon - Fri 9:00 - 19:00 </p>


				<div class="med-gap"></div>


				<a href="../book_appointment/book_appointment.php">  
					<img src="../../Images/book_appointment_button.png" alt="book appointment" , height="100px", width="300" >
				</a>	
			</article>
		</section>

		<section class="col-sm-3">

			<h2>Staff</h2>
			<div class="sml-gap"></div>

			<h4>Danyelle Boxer</h4>
			<img class="StaffPic" src="..\..\Images\LearningSupportServiceStaff1.jpg" alt="StaffPic">
			<div class="sml-gap"></div>

			<h4>Dylan Kin</h4>
			<img class="StaffPic" src="..\..\Images\LearningSupportServiceStaff2.jpg" alt="StaffPic">
			<div class="sml-gap"></div>

			<h4>Leisa Kicklighter</h4>
			<img class="StaffPic" src="..\..\Images\LearningSupportServiceStaff3.jpg" alt="StaffPic">

			</section>
		</section>
	</section>

</body>

</main>

</html>
