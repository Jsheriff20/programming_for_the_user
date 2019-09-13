<?php
	session_start();
    $email = $_SESSION['email'];
    

    
    function check_if_user_in_table($UsersEmail){
        $conn = new mysqli("lochnagar.abertay.ac.uk", "sql1800367", "xqCNtH46949v", "sql1800367");

        $query = mysqli_query($conn, "SELECT * FROM CurrentlyMakingBooking WHERE Email='$UsersEmail'");
       
        if (!$query)
        {
            die('Error: ' . mysqli_error($conn));
        }
    
        if(mysqli_num_rows($query) > 0){
        
            return true;
        
        }else{
        
            return false;
        
        }
        
    }



    function processService($selectedVal, $EmailAdd) {
        $servername = "lochnagar.abertay.ac.uk";
        $username = "sql1800367";
        $password = "xqCNtH46949v";
        $dbname = "sql1800367";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(check_if_user_in_table($EmailAdd)){
                
                // if user already in databse update current values
                $sql = "UPDATE CurrentlyMakingBooking SET Service='$selectedVal' WHERE Email='$EmailAdd'";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
            }
            else{

                //if user new to database create a section for them
                $sql = "INSERT INTO CurrentlyMakingBooking (Email, Service)
                VALUES ('$EmailAdd', '$selectedVal')";
                $conn->exec($sql);
            }
        }

        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }    
   


    function processDate($selectedVal, $EmailAdd) {
        $servername = "lochnagar.abertay.ac.uk";
        $username = "sql1800367";
        $password = "xqCNtH46949v";
        $dbname = "sql1800367";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if(check_if_user_in_table($EmailAdd)){

                // if user already in databse update current values
                $sql = "UPDATE CurrentlyMakingBooking SET Date='$selectedVal' WHERE Email='$EmailAdd'";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
            }
            else{

                //if user new to database create a section for them
                $sql = "INSERT INTO CurrentlyMakingBooking (Email, Date)
                VALUES ('$EmailAdd', '$selectedVal')";
                $conn->exec($sql);
            }
        }

        catch(PDOException $e)
            {

            echo $sql . "<br>" . $e->getMessage();
            }
    }    

    if ($_POST['serviceValue']){

        processService($_POST['serviceValue'], $email);
    }
    else if($_POST['dateValue']){

        processDate($_POST['dateValue'], $email);
    }



    $conn = null;