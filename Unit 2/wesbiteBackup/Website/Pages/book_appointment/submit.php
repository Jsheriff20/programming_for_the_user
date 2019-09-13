<?php
echo "Not wortking";
	session_start();
    $email = $_SESSION['email'];
    

    function processService($selectedVal, $EmailAdd) {
        $servername = "lochnagar.abertay.ac.uk";
        $username = "sql1800367";
        $password = "xqCNtH46949v";
        $dbname = "sql1800367";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO CurrentlyMakingBooking (Email, Service)
            VALUES ('$EmailAdd', '$selectedVal')";
            // use exec() because no results are returned
            $conn->exec($sql);
                echo "New record created successfully";
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    }    
   


    function processDate($selectedVal, $EmailAdd) {
        $servername = "lochnagar.abertay.ac.uk";
        $username = "sql1800367";
        $password = "xqCNtH46949v";
        $dbname = "sql1800367";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO CurrentlyMakingBooking (Email, Date)
            VALUES ('$EmailAdd', '$selectedVal')";
            // use exec() because no results are returned
            $conn->exec($sql);
                echo "New record created successfully";
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    }    

    if ($_POST['serviceValue']){
        //call the function or execute the code
        processService($_POST['serviceValue'], $email);
    }

    if ($_POST['dateValue']){
        //call the function or execute the code
        processDate($_POST['dateValue'], $email);
    }