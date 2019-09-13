<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $conn = new mysqli("lochnagar.abertay.ac.uk", "sql1800367", "xqCNtH46949v", "sql1800367");

    //will check if connection is not there and if its not it will carry out code inside
    if(mysqli_connect_error()) {
        echo "Connection has failed: " . mysqli_connect_error();
        exit();
    }

	session_start();

    $email = $_SESSION['email'];
	$sql = "SELECT * FROM DiscoveryDundeeUniAccounts WHERE Email = ? ;";
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
        $name = $row['Name'];
        $email = $row['Email'];
       

	

        
        // check to see if student has avaliable slot for account and if not tell them to delete some
        if(empty($row['Booking1Service'])){
            $bookingServiceSlot = "Booking1Service";
            $bookingDateSlot = "Booking1Date";
            $bookingTimeSlot = "Booking1Time";
            $reasonForBooking = "ReasonForBooking1";
        }
        else if(empty($row['Booking2Service'])){
            $bookingServiceSlot = "Booking2Service";
            $bookingDateSlot = "Booking2Date";
            $bookingTimeSlot = "Booking2Time";
            $reasonForBooking = "ReasonForBooking2";
        }
        else {
            header("location: book_appointment.php");
            break; // need to tell user they have no space in their database
        }
    }





    if (isset($_POST['submit'])){

        // get info entered into booking form
        $Service=$_POST['select_service'];
        
        $Date=$_POST['select_date'];
        
        $Time=$_POST['select_time'];

        $Reason=$_POST['reason'];

        // see which table to into info
        if($Service == "DisabilitySupport"){
            $ServiceTable = "BookingForDisabilitySupport";
        }
        else if($Service == "FinancialAdvisory"){
            $ServiceTable = "BookingForFinancialAdvisory";
        }
        else if($Service == "LearningSupport"){
            $ServiceTable = "BookingForLearningSupport";
        }
        else if($Service == "MentalHealthSupport"){
            $ServiceTable = "BookingForMentalHealthAndWelfareSupport";
        }
        else if($Service == "StudentAdvisory"){
            $ServiceTable = "BookingForStudentAdvisory";
        }

    
        // check if any required fields not filled in 
        if($Service == 'Fail' || $Date == 'Fail' || $Time == 'Fail'){
            header("location: book_appointment.php");
        }
        // add booking details to service table on first loop then the users account on second loop.
        else {
            for($i = 0; $i < 2; $i++){
                if($i == 0){
                    $sql = "INSERT INTO $ServiceTable (BookingName, BookingDate, BookingTime, ReasonForBooking, BookingEmail)
                    VALUES (?, ?, ?, ?, ?);";
                }
                else{
                    $sql = "UPDATE DiscoveryDundeeUniAccounts SET $bookingServiceSlot = ?, $bookingDateSlot = ?, $bookingTimeSlot = ?, $reasonForBooking = ? WHERE Email = ?";
                }
                
                    
                $stmt = mysqli_stmt_init($conn);
                
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "sql error";
                }
                
                else if($i == 0){
                    mysqli_stmt_bind_param($stmt, "sssss", $name, $Date, $Time, $Reason, $email);
                }
                else{
                    mysqli_stmt_bind_param($stmt, "sssss", $Service, $Date, $Time, $Reason, $email);
                }
                mysqli_stmt_execute($stmt);
            }
        }
    }
    $conn->close();
    header("location: ../my_account/my_account.php");
?>
