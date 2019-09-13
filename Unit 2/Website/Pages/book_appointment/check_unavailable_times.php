<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

	include("../login/config.php");

	
	//gets account info from session using session email
    $email = $_SESSION['email'];
    
        $sql = "SELECT * FROM CurrentlyMakingBooking WHERE Email = ?";
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
            //infomation for users account
            $service = $row['Service'];
            $date = $row['Date'];
        }

        
        switch ($service) {

            case "StudentAdvisory":
                $service_database = "BookingForStudentAdvisory";
                break;
            case "FinancialAdvisory":
                $service_database = "BookingForFinancialAdvisory";
                break;
            case "DisabilitySupport":
                $service_database = "BookingForDisabilitySupport";
                break;
            case "LearningSupport":
                $service_database = "BookingForLearningSupport";
                break;
            case "MentalHealthSupport":
                $service_database = "BookingForMentalHealthAndWelfareSupport";
                break;      
        }



        $times_array = array("12:15am - 1pm", "1:15pm - 2pm", "2:15pm - 3pm", "3:15pm - 4pm",  "4:15pm - 5pm");

    

        for($i = 0; $i < 5; $i++){
            $sql = "SELECT * FROM $service_database WHERE BookingDate = ? AND BookingTime = ?";

            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "sql Statment failed!";
            }
            else{
                // bind parameter to placeholders
                mysqli_stmt_bind_param($stmt, "ss", $date, $times_array[$i]);
                // run parameters inside of database
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_array($result);
                //infomation for users account
                $taken_times_array[$i] = $row['BookingTime'];
            }
        }  


        $hide_first_time = "";
        $hide_second_time = "";
        $hide_third_time = "";
        $hide_fourth_time = "";
        $hide_fifth_time = "";

        if($taken_times_array[0] != ""){
            $hide_first_time = "true";
        }
        if($taken_times_array[1] != ""){
            $hide_second_time = "true";
        }
        if($taken_times_array[2] != ""){
            $hide_third_time = "true";

        }
        if($taken_times_array[3] != ""){
            $hide_fourth_time = "true";
        }
        if($taken_times_array[4] != ""){
            $hide_fifth_time = "true";
        }


?>