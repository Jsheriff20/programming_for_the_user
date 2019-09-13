<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	include("config.php");

	$email = $_POST['InputEmail'];
	$password = $_POST['InputPassword']; 
	
	$email = stripcslashes($email);
	$email = htmlspecialchars($email);
	$password = stripcslashes($password);
	$password = htmlspecialchars($password);
	
	// created a template
	$sql = "SELECT * FROM DiscoveryDundeeUniAccounts WHERE Email = ?;"; 
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
		$storedPassword = $row["Password"];
		if (password_verify($password, $storedPassword)){
			$PasswordVerify = true;
		}
		else{
			$PasswordVerify = false;
		}
		if ($row["Email"] == $email && $PasswordVerify == true){
			header("location: ../../index.php");
			session_start();
			$_SESSION['loggedIn'] = "1";
			$_SESSION['email'] = $email;
			
		}
		else {
				header("location: Login1.html");
		}
	}
?>