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
					<img class="bannerImages" src="Images/logo2.jpg" alt="logo" height="150" width="150"> 
				</section>
				<h1 id="PageTitle"> Home </h1>
			</header>

			<?php
			include_once("navBarForHome.php");
			?>
			
			
		</head>


		<body>

			<section class="row">

				<article class="col-md-4"> 
				<div class="sml-gap"></div>


					<div>
						<a onclick="HomeAudioFunction('StudentAdvisory')">
							<img src="Images/volumeIcon.png" width="70">
						</a>
					</div>

					<div class="service_photo">
						<a href="Pages/services/student_advisory_service.php">   
						<img src="Images/student_advisory_service.jpg" alt="logo" class="service_image" >
						<div class="overlay">
							<div class="text">
								The Student Advisory Service is your best bet for finding out what you need and 
								where you need to go next. We will provide you with information and resources to
								help you in your troubles and then set you off in the right direction for the 
								future.
							</div> 
						</div>
					</div>


					<div class="med-gap"></div>


					<div>
						<a onclick="HomeAudioFunction('FinancialAdvisory')">
							<img src="Images/volumeIcon.png" width="70">
						</a>
					</div>

					<div class="service_photo">
						<a href="Pages/services/financial_advisory_service.php">  
						<img src="Images/financial_advisory_service.jpg" alt="logo" class="service_image" >
						<div class="overlay">
							<div class="text">
							Here at the Financial Advisory Service we deal with all problems that include finance 
							whether that is paying for accommodation or if it is buying new equipment for your 
							course. We are here to help you where we can and give you information about what we 
							can do to help. 
							</div>
						</div>
					</div>
					</article>

					



					<article class="col-md-4"> 
					<div class="sml-gap"></div>


					<div>
						<a onclick="HomeAudioFunction('DisabilitySupport')">
							<img src="Images/volumeIcon.png" width="70">
						</a>
					</div>

					<div class="service_photo">
						<a href="Pages/services/disability_support.php">  
						<img src="Images/disability_support.jpg" alt="logo" class="service_image" >
						<div class="overlay">
							<div class="text">The team can advise you on a range of matters, including special 
								exam arrangements and the Disabled Student Allowance (this allowance can help 
								you cover any equipment or support costs you may have).
							</div> <!--https://www.abertay.ac.uk/life/student-support-and-services/disabled-student-support/-->
						</div>
					</div>


					<div class="med-gap"></div>

					<div>	
						<a onclick="HomeAudioFunction('LearningSupport')">
							<img src="Images/volumeIcon.png" width="70">
						</a>
					</div>

					<div class="service_photo">
						<a href="Pages/services/learning_support_service.php">  
						<img src="Images/learning_support_service.jpg" alt="logo" class="service_image" >
						<div class="overlay">
							<div class="text">
							The Learning Support Service is one of our many Services that can help you 
							develop your academic skills. Our role is to provide you with tools to become 
							a more effective learner, and to produce the best work you’re capable of.
							</div><!--https://www.abertay.ac.uk/life/student-support-and-services/learner-development/-->
						</div>
					</div>
					</article>





					<article class="col-md-4"> 
					<div class="sml-gap"></div>


					<div>
						<a onclick="HomeAudioFunction('MentalHealthAndWelfareSupport')">
							<img src="Images/volumeIcon.png" width="70">
						</a>
					</div>

					<div class="service_photo">
						<a href="Pages/services/mental_health_and_welfare_support.php">  
						<img src="Images/mental_health_and_welfare_support.jpg" alt="logo" class="service_image" >
						<div class="overlay">
							<div class="text">
							Times can be tough especially at university with all the deadlines to meet, if you 
							are in need of assistance with any mental health and welfare issues we are here to help. 
							We have experts to help you in the best way we can feel free to come along.
							</div>
						</div>
					</div>
				</article>
			</section>
		</body>
	</main>
</html>
