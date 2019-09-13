<?php
    $deletingUsername = $_POST['adminDeleteInput'];
    if($deletingUsername == "AdminAccount" ){ // if admin account trys to delete itself it will not work 
        $deletingUsername = "";
    }	
    $servername = 'lochnagar.abertay.ac.uk';
    $dbusername = 'sql1800367';
    $password = 'xqCNtH46949v';
    $dbname = 'sql1800367';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to delete a record
        $result = "DELETE FROM Macklemore WHERE Username = '$deletingUsername' ";

        // use exec() because no results are returned
        $conn->exec($result);
        header("location: AdminAccess.php");
        echo "Record deleted successfully";
        }
    catch(PDOException $e)
        {
        header("location: AdminAccess.php");
        echo $result . "<br>" . $e->getMessage();
        }
$conn = null;
?>