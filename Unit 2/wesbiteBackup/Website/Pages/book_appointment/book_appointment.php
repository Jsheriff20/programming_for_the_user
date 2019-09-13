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

	<title>Book Appointment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../CSS.css">
	<script type="text/javascript" src="../../script.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>


	<script>
        $(document).ready(function(){
            $('#select_service').change(function(){
                //Selected value
                var inputValue = $(this).val();
                alert("value in js "+inputValue);

                //Ajax for calling php function
                $.post('submit.php', { serviceValue: inputValue }, function(data){
                    alert('ajax completed. Response:  '+data);
                    //do after submission operation in DOM
                });
			});


			$('#select_date').change(function(){
                //Selected value
                var inputValue = $(this).val();
                alert("value in js "+inputValue);

                //Ajax for calling php function
                $.post('submit.php', { dateValue: inputValue }, function(data){
                    alert('ajax completed. Response:  '+data);
                    //do after submission operation in DOM
                });
			});
			
		});
	</script>

	
	<header id="Banner">
		<section class= "top-right ">
			<img class="bannerImages" src="../../Images/logo2.jpg" alt="logo" height="150" width="150">
		</section>
		<h1> Book Appointment </h1>
	</header>


	<?php
	include_once("../../navBar.php");
	?>
	
</head>



<body>
	<section class="row">
		<section class="col-sm-3"> 
			<h4 color="">Audio Walk Through For Booking Appointment</h4>
			<div class="sml-gap"></div>
			<h4>Press on drop down then select step to play audio</h4>
			<div class="dropdown">
                <a class="btn btn-lg btn-primary dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Audio Steps 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                	<a class="dropdown-item" onclick="BookingAudioFunction('BookingStep1');" href="#">Listen To First</a>
                    <a class="dropdown-item" onclick="BookingAudioFunction('BookingStep2');" href="#">Step 1</a>
                    <a class="dropdown-item" onclick="BookingAudioFunction('BookingStep3');" href="#">Step 2</a>
                    <a class="dropdown-item" onclick="BookingAudioFunction('BookingStep4');" href="#">Step 3</a>
					<a class="dropdown-item" onclick="BookingAudioFunction('BookingStep5');" href="#">Step 4</a>
					<a class="dropdown-item" onclick="BookingAudioFunction('BookingStep6');" href="#">Step 5</a>
            	</div>
			</div>
			<div>
				<a onclick="stopSound();">
					<img src="../../Images/MuteVolumeIcon.png" width="70">
				</a>
			</div>
		</section>


		<section class="col-sm-8"> 
			<h3 color="black" margin="auto">Only two bookings per account, check 'My Account and Bookings' for this infomation"</h3>
			<form name="book_appointment" method="post" action="make_booking.php" onsubmit="return validateForm()">
			
				<select id="select_service" class="form-control form-control-lg select_service" name="select_service">
					<option value="Fail" disabled selected>	Select Service	</option>
					<option value="StudentAdvisory">	Student Advisory Service	</option>
					<option value="FinancialAdvisory">	Financial Advisory Service	</option>
					<option value="DisabilitySupport">	Disability Support	</option>
					<option value="LearningSupport">	Learning Support Service	</option>
					<option value="MentalHealthSupport">	Mental Health and Welfare Support	</option>
				</select>

				<div class="med-gap"></div>
				


				<select id="select_date" class="form-control select_date" name="select_date" >
					<option value="Fail" disabled selected>Select Available Day</option>
					<option value="<?php  echo date("d-m-Y"); ?>">									<?php  echo date("d-m-Y") . "<br>"; ?>	</option>
					<option value="<?php $d=strtotime("+1 Day"); echo date("d-m-Y", $d); ?>">		<?php $d=strtotime("+1 Day"); echo date("d-m-Y", $d) . "<br>"; ?>	</option>
					<option value="<?php $d=strtotime("+2 Day"); echo date("d-m-Y", $d); ?>">		<?php $d=strtotime("+2 Day"); echo date("d-m-Y", $d) . "<br>"; ?>	</option>
					<option value="<?php $d=strtotime("+3 Day"); echo date("d-m-Y", $d); ?>">		<?php $d=strtotime("+3 Day"); echo date("d-m-Y", $d) . "<br>"; ?>	</option>
					<option value="<?php $d=strtotime("+4 Day"); echo date("d-m-Y", $d); ?>">		<?php $d=strtotime("+4 Day"); echo date("d-m-Y", $d) . "<br>"; ?>	</option>
					<option value="<?php $d=strtotime("+5 Day"); echo date("d-m-Y", $d); ?>">		<?php $d=strtotime("+5 Day"); echo date("d-m-Y", $d) . "<br>"; ?>	</option>
					<option value="<?php $d=strtotime("+6 Day"); echo date("d-m-Y", $d); ?>">		<?php $d=strtotime("+6 Day"); echo date("d-m-Y", $d) . "<br>"; ?>	</option>
				</select>


				<button id="show_available_times">Show Available Time</button>
				<div class="med-gap"></div>
				<select class="form-control select_time hide_select_time_targets" name="select_time">
					<option value="Fail" disabled selected>	Select Avalable Time	</option>
					<option value="12:15am - 1pm">	12:15am - 1pm	</option>
					<option value="1:15pm - 2pm">	1:15pm - 2pm	</option>
					<option value="2:15pm - 3pm">	2:15pm - 3pm	</option>
					<option value="3:15pm - 4pm">	3:15pm - 4pm	</option>
					<option value="4:15pm - 5pm">	4:15pm - 5pm	</option>
				</select>
				<div class="med-gap"></div>
				
				<input class="hide_select_time_targets" disabled  maxlength="3" size="3" value="255" id="counter">
				<label class="hide_select_time_targets" for="reason">Reason For Booking (Max 255 Charcters)</label>

				<article>
					<textarea  class="form-control hide_select_time_targets" rows="3" onkeyup="textCounter(this,'counter',255);" id="reason", name="reason"> </textarea>
				</article>

				<input type="submit" class="btn btn-primary btn-lg hide_select_time_targets" name="submit" width="100px" height="30px">
			</form>
		</section>
		



		<section class="col-sm-1"> 
		</section>

	</section>

</body>

</main>

</html>
