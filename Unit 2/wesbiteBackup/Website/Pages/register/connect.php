<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
//assigning variables to connect
$servername = 'lochnagar.abertay.ac.uk';
$dbusername = 'sql1800367';
$password = 'xqCNtH46949v';
$dbname = 'sql1800367';

//connects to the database
$conn = new mysqli($servername, $dbusername, $password, $dbname);



$userName = $_POST['username'];
$emailExtention = "@dud.ac.uk";
$usernameEmail = $userName.$emailExtention;

$userPassword = $_POST['password'];
$passwordHashed = password_hash($userPassword, PASSWORD_DEFAULT); // password is hashed and salted.
$name = $_POST['name'];
$email = $usernameEmail;
$contactNumber = $_POST['contactNumber'];

// this will check to see if the username is already in use

$sql = "SELECT * FROM DiscoveryDundeeUniAccounts WHERE Username = ?;";
$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "sql Statment failed!";
	}
	else{
		// bind parameter to placeholders
		mysqli_stmt_bind_param($stmt, "s", $userName);
		// run parameters inside of database
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$row = mysqli_fetch_array($result);
		$usernameAvailability = $row["ID"];
	}

	if(mysqli_connect_error()) {
		echo "Connection has failed: " . mysqli_connect_error();
		exit();
	}
	else if ($usernameAvailability >= 1){
		header("location: Register.html");
		// user has already got that username
	}
	else { //inputs registration infomation into database

    $sql = "INSERT INTO DiscoveryDundeeUniAccounts (Username, Password, Name, Email, ContactNumber)
        VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "sql error";
    }
    else{
        mysqli_stmt_bind_param($stmt, "ssssi", $userName, $passwordHashed, $name, $email, $contactNumber);
        mysqli_stmt_execute($stmt);
        header("Location: ../login/Login1.html");
    }
}
?>
