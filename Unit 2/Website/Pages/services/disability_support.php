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

	<title>Disability Support</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../CSS.css">
	<script type="text/javascript" src="../../script.js" ></script>

	<section id="Banner">
		<article class= "top-right">
			<img class="bannerImages" src="../../Images/disability_support.jpg" alt="logo" height="150" width="150">
		</article>
		<h1> Disability Support </h1>
	</section>

	<?php
	include_once("../../navBar.php");
	?>
	
</head>


<body>

	<section class="row">


		<section class="col-sm-8"> 
			<article >
			<h2>What We Offer
				<a onclick="DisabilityPageAudioFunction('DisabilitySupportPage1');">
					<img src="../../Images/volumeIcon.png" width="70">
				</a>
			</h2>
			
				
				<p>The team can advise you on a range of matters, including special 
					exam arrangements and the Disabled Student Allowance (this allowance can help 
					you cover any equipment or support costs you may have).</p><!--https://www.abertay.ac.uk/life/student-support-and-services/disabled-student-support/-->


				<div class="sml-gap"></div>


				<h5>Things we deal with every day:
					<a onclick="DisabilityPageAudioFunction('DisabilitySupportPage2');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h5>
				<ul>
					<li>Helping with exam arrangements </li>
					<li>Providing any additional equipment needed</li>
					<li>Helping and arranging transport</li>
					<li>Discussing and applying for the Disabled Student Allowance</li>
					<li>Pointing people in the right direction</li>
					<li>Contacting people that can help with issues further</li>
					<li>Being a friendly face to talk to</li>
				</ul>


				<div class="sml-gap"></div>


				<a onclick="DisabilityPageAudioFunction('DisabilitySupportPage3');">
					<img src="../../Images/volumeIcon.png" width="70">
				</a>
				<p>Any Disability is welcome to come along and book a session to discuss any
					problems that may occur however all we ask for is a description of what
					it is you want to talk about in the booking form. So that we can prepare,
					and therefore give you the best advice we can. </p>
			</article>


			<div class="med-gap"></div>


			<article>
				<h2>Contact Details
					<a onclick="DisabilityPageAudioFunction('DisabilitySupportPage4');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Email - Disability_Support_Service@dud.ac.uk </p>
				<p>Number - 07323546345</p>
				<p>Postal Address - Discovery University Dundee, Nethergate, Dundee, DD1 4HN, Scotland, UK</p>
			</article>


			<div class="sml-gap"></div>


			<article>
				<h2>Opening Times 
					<a onclick="DisabilityPageAudioFunction('DisabilitySupportPage5');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Mon - Fri 09:00 - 17:00 </p>


				<div class="med-gap"></div>


				<a href="../book_appointment/book_appointment.php">  
					<img src="../../Images/book_appointment_button.png" alt="book appointment" height="100px" width="300" >
				</a>
			</article>

		</section>

		<section class="col-sm-4">

			<h2>Staff</h2>
			<div class="sml-gap"></div>

			<h4>Florence Guider</h4>
			<img class="StaffPic" src="..\..\Images\DisabillityServiceStaff1.jpg" alt="StaffPic">
			<div class="sml-gap"></div>

			<h4>Dolly Onorato</h4>
			<img class="StaffPic" src="..\..\Images\DisabillityServiceStaff2.jpg" alt="StaffPic">
			<div class="sml-gap"></div>

			<h4>Kenny Dandy</h4>
			<img class="StaffPic" src="..\..\Images\DisabillityServiceStaff3.jpg" alt="StaffPic">
		
		</section>
	</section>

</body>

</main>

</html>
