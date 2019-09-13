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

	<title>Financial Advisory Service</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../CSS.css">
	<script type="text/javascript" src="../../script.js" ></script>

	<section id="Banner">
		<article class= "top-right">
			<img class="bannerImages" src="../../Images/financial_advisory_service.jpg" alt="logo" height="150" width="150">
		</article>
		<h1> Financial Advisory Service </h1>
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
					<a onclick="FinancialPageAudioFunction('FinancialAdvisoryPage1');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Here at the Financial Advisory Service we deal with all problems that include finance 
					whether that is paying for accommodation or if it is buying new equipment for your 
					course. We are here to help you where we can and give you information about what we 
					can do to help. </p>


				<div class="sml-gap"></div>


				<h5>Things we deal with every day: 
					<a onclick="FinancialPageAudioFunction('FinancialAdvisoryPage2');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h5>
				<ul>
					<li>Help with payment towards university items</li>
					<li>Help finding a job right for you</li>
					<li>Dealing with late rent payments</li>
					<li>Look at the possible finance help the university can offer</li>
					<li>Inform you about future payments due</li>
					<li>Discuss and arrange course payment </li>
					<li>Advise on how to budget</li>

				</ul>


				<div class="sml-gap"></div>


					<a onclick="FinancialPageAudioFunction('FinancialAdvisoryPage3');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				<p>Any student with Financial Problems is welcome to come along and book a session to discuss
					any problems that they may have however, all we ask for is a description of what it is
					you want to talk about in the booking form. So that we can prepare, and therefore give
					you the best advice we can. </p>
			</article>

			
			<div class="med-gap"></div>


			<article>
				<h2>Contact Details
					<a onclick="FinancialPageAudioFunction('FinancialAdvisoryPage4');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Email - Financial_Advisory_Service@dud.ac.uk </p>
				<p>Number - 07712741392</p>
				<p>Postal Address - Discovery University Dundee, Nethergate, Dundee, DD1 4HN, Scotland, UK</p>
			</article>


			<div class="sml-gap"></div>


			<article>
				<h2>Opening Times 
					<a onclick="FinancialPageAudioFunction('FinancialAdvisoryPage5');">
						<img src="../../Images/volumeIcon.png" width="70">
					</a>
				</h2>
				<p>Mon - Fri 10:00 - 16:00 </p>


				<div class="med-gap"></div>


				<a href="../book_appointment/book_appointment.php">  
					<img src="../../Images/book_appointment_button.png" alt="book appointment"  height="100px" width="300"  href="../book_appointment/book_appointment.php">
				</a>
			</article>
		</section>

		<section class="col-sm-3">

			<h2>Staff</h2>
			<div class="sml-gap"></div>

			<h4>Owen Fredette</h4>
			<img class="StaffPic" src="..\..\Images\FinancialServiceStaff1.jpg" alt="StaffPic">
			<div class="sml-gap"></div>

			<h4>Lashonda Good</h4>
			<img class="StaffPic" src="..\..\Images\FinancialServiceStaff2.jpg" alt="StaffPic">
			<div class="sml-gap"></div>

			<h4>Iesha Island</h4>
			<img class="StaffPic" src="..\..\Images\FinancialServiceStaff3.jpg" alt="StaffPic">

			</section>
		</section>

</body>

</main>

</html>
