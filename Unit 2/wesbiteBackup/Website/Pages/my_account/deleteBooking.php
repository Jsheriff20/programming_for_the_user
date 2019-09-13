<?php
    include("../login/config.php");

	session_start();
	// if the user isnt logged in this will run
	if ($_SESSION["loggedIn"] != "1" ){
		header("location: ../login/Login1.html");
		exit();
	}
	
	//gets account info from session using session email
    $email = $_SESSION['email'];


    // get current users account details
    $sql = "SELECT * FROM DiscoveryDundeeUniAccounts WHERE Email = ?";

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "sql Statment failed!";
	}
	else{
		// bind parameter to placeholders
		mysqli_stmt_bind_param($stmt, "s", $email);
		// run parameters inside of database
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_array($result);


        // check which delete booking was clicked
        if (isset($_POST['Booking1'])) {

            $serviceName = 'Booking1Service';
            $date = 'Booking1Date';
            $time = 'Booking1Time';
            $reason = 'ReasonForBooking1';
        } else {

            $serviceName = 'Booking2Service';
            $date = 'Booking2Date';
            $time = 'Booking2Time';
            $reason = 'ReasonForBooking2';
        }
        
        //get users booking infomation
        $bookingService = $row[$serviceName];
        $bookingDate = $row[$date];
        $bookingTime = $row[$time];
        $bookingReason = $row[$reason];
    }



    
        // see which table to into info
        if($bookingService == "DisabilitySupport"){
            $ServiceTable = "BookingForDisabilitySupport";
        }
        else if($bookingService == "FinancialAdvisory"){
            $ServiceTable = "BookingForFinancialAdvisory";
        }
        else if($bookingService == "LearningSupport"){
            $ServiceTable = "BookingForLearningSupport";
        }
        else if($bookingService == "MentalHealthSupport"){
            $ServiceTable = "BookingForMentalHealthAndWelfareSupport";
        }
        else if($bookingService == "StudentAdvisory"){
            $ServiceTable = "BookingForStudentAdvisory";
        }

    // info for database
    $servername = 'lochnagar.abertay.ac.uk';
    $dbusername = 'sql1800367';
    $password = 'xqCNtH46949v';
    $dbname = 'sql1800367';

    try {
        for($i = 0; $i < 2; $i++){
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // sql to delete a record
            if($i == 0){
                // delete from service's Table
                $result = "DELETE FROM $ServiceTable WHERE BookingEmail = '$email' AND BookingDate = '$bookingDate' AND BookingTime = '$bookingTime' AND ReasonForBooking ='$bookingReason'  ";
            }
            else{
                //delete from users account
                $result = "UPDATE DiscoveryDundeeUniAccounts SET $serviceName = '', $date = '', $time = '', $reason = '' WHERE Email = '$email' ";
            }
            // use exec() because no results are returned
            $conn->exec($result);
            echo "Record deleted successfully";
        }
    }
    catch(PDOException $e)
        {
        echo $result . "<br>" . $e->getMessage();
        }
        
    $conn = null;
    header("location: my_account.php");
?>