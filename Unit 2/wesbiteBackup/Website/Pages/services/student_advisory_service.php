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

	<title>Student Advisory Service</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../CSS.css">
	<script type="text/javascript" src="../../script.js" ></script>

	<section id="Banner">
		<article class= "top-right">
			<img class="bannerImages" src="../../Images/student_advisory_service.jpg" alt="logo" height="150" width="150">
		</article>
		<h1> Student Advisory Service </h1>
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
					<a onclick="StudentPageAudioFunction('StudentAdvisoryPage1');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>The Student Advisory Service is your best bet for finding out what you need and 
						where you need to go next. We will provide you with information and resources to
						 help you in your troubles and then set you off in the right direction for the 
						 future.</p>


				<div class="sml-gap"></div>


				<h5>Things we deal with every day: 
					<a onclick="StudentPageAudioFunction('StudentAdvisoryPage2');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h5>
				<ul>
					<li>Providing contact details and booking services for related issues</li>
					<li>Helping with general issues</li>
					<li>Talk about gap years and suspended study </li>
					<li>Talk about course change and course grades</li>
					<li>Help write out a schedule for balancing things such as work, university, leisure etc. </li>
					<li>Deal with attendance issues </li>
					<li>Help provide support for struggling students that don’t know what to do next </li>

						
				</ul>


				<div class="sml-gap"></div>


				<a onclick="StudentPageAudioFunction('StudentAdvisoryPage3');">
					<img src="../../Images/volumeIcon.png" width="70">
				</a>
				<p>Any student with any issue is welcome to come along and book a session to discuss
					any problems that they may have however, all we ask for is a description of what
					it is you want to talk about in the booking form. So that we can prepare, and
					therefore give you the best advice we can, we may also change which service you
					will be seeing if we think another service would be better to deal with your issue.</p>

				
			</article>


			<div class="med-gap"></div>

			
			<article>
				<h2>Contact Details
					<a onclick="StudentPageAudioFunction('StudentAdvisoryPage4');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Email - Student_Advisory_Service@dud.ac.uk </p>
				<p>Number - 07614253928</p>
				<p>Postal Address - Discovery University Dundee, Nethergate, Dundee, DD1 4HN, Scotland, UK</p>
			</article>


			<div class="sml-gap"></div>


			<article>
				<h2>Opening Times 
					<a onclick="StudentPageAudioFunction('StudentAdvisoryPage5');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Mon - Fri 11:00 - 20:00 </p>


				<div class="med-gap"></div>


				<a href="../book_appointment/book_appointment.php">  
					<img src="../../Images/book_appointment_button.png" alt="book appointment" , height="100px", width="300" >
				</a>
			</article>
		</section>

		<section class="col-sm-3">

			<h2>Staff</h2>
			<div class="sml-gap"></div>

			<h4>Rodrick Rahim</h4>
			<img class="StaffPic" src="..\..\Images\StudentAdvisoryServiceStaff1.jpg" alt="StaffPic">
			<div class="sml-gap"></div>

			<h4>Jaqueline Schendel</h4>
			<img class="StaffPic" src="..\..\Images\StudentAdvisoryServiceStaff2.jpg" alt="StaffPic">
			<div class="sml-gap"></div>

			<h4>Taylor Delph</h4>
			<img class="StaffPic" src="..\..\Images\StudentAdvisoryServiceStaff3.jpg" alt="StaffPic">

			</section>
		</section>
	</section>

</body>

</main>

</html>
