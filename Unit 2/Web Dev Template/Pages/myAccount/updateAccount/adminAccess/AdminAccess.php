<?php 
	session_start();
	// if the user is already logged in this will run
	if ($_SESSION["loggedIn"] != "1" ){
		header("location: ../../../login/Login1.html");
		exit();
	}
	if($_SESSION["username"] != "AdminAccount"){
		header("location: ../UpdateAccount.php"); // this makes it so that only the admin account can access this page (username: AdminAccount, password: AdminPassword (login is here for assignment))
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<main id="mainContainer">
<head>
	<title>Admin Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../../../CSS.css">
	<script type="text/javascript" src="../../../../script.js" ></script>
	<section id="Banner">
		<section class= "top-right">
			<img class="bannerImages" src="../../../../Images/macklemoreAdminAccessImage.jpg" alt="macklemoreImage" height="150px" width="150px"><!-- http://www.quedelicianegente.com/2016/10/macklemore-drug-dealer.html -->
		</section>
		<h1> Admin </h1>
	</section>

	<nav class="navbar navbar-expand-md navbar-dark fixed-left">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNav">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="../../../../index.php">Home</a>
					<a class="nav-item nav-link" href="../../MyAccount.php">My Account</a>
					<a class="nav-item nav-link" href="../UpdateAccount.php">Update Account</a>
					<a class="nav-item nav-link active" href="#">Admin Access</a>
					<a class="nav-item nav-link" href="../../../logout/logOut.php">Logout</a>
				</div>
			</div>
		</div>
	</nav>
	
</head>

<body>	

	<section class="row">

		<section class="col-sm-2"> 
			<form method="post">
				<h2>users User-Name you want to find:</h2>
				<input type="text" name="adminFindInput" id="adminFindInput" placeholder="Enter User-Name here" autofocus>
				
   				<input type="submit" name="findUser" id="findUser" value="Find User!" /><br/>
			</form>
			<?php
				function findUser($findValue){
					include("../../../login/config.php");
					$findUsername = $_POST['adminFindInput'];	// gets input from admin
					if($findUsername == "AdminAccount"){ // if admin account trys to delete itself it will not work 
						$findUsername = "";
					}			
					$sql = "SELECT * FROM Macklemore WHERE Username = ?;"; // selcts all info from the selected user
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt, $sql)){
						echo "sql Statment failed!";
					}
					else{
						// bind parameter to placeholders
						mysqli_stmt_bind_param($stmt, "s", $findUsername);
						// run parameters inside of database
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);
						$row = mysqli_fetch_array($result);
						$findName = $row['Name'];
						$findEmail = $row['Email'];
						$findContactNumber = $row['ContactNumber'];
					}
					if($findUsername == "" || $findEmail == ""){
						echo "user Not found";
					}
					else{
						if ($findValue == "username"){
							echo $findUsername;
						}
						else if ($findValue == "name"){
							echo $findName;
						}
						else if ($findValue == "email"){
							echo $findEmail;
						}
						else if ($findValue == "contactNumber"){
							echo $findContactNumber;
						}
					}
				}
			?>
		</section>

		<section class="col-sm-8"> 
			<form name="findAdminResults" id="findAdminResults" method="post">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row">Username</th>
							<td>
								<p id="echoUsername">
									<?php 
										if(array_key_exists('findUser',$_POST)){
											findUser("username");
										}
									?>
								</p>
							</td>
						</tr>
						<tr>
							<th scope="row">Name</th>
							<td>
								<p id="echoName">
									<?php 
										if(array_key_exists('findUser',$_POST)){
											findUser("name");
										}
									?>
								</p>
							</td>
						</tr>
						<tr>
							<th scope="row">Email</th>
							<td>
								<p id="echoEmail">
									<?php 
										if(array_key_exists('findUser',$_POST)){
											findUser("email");
										}
									?>
								</p>
							</td>
						</tr>
						<tr>
							<th scope="row">Contact Number</th>
							<td>
								<p id="echoNumber">
									<?php 
										if(array_key_exists('findUser',$_POST)){
											findUser("contactNumber");
										}
									?>
								</p>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</section>

		<section class="col-sm-2">

			<form name="deleteUserForm" id="deleteUserForm" method="post" action="deleteUser.php">
				<h2>users User-Name you want to Delete:</h2>
				<input type="text" name="adminDeleteInput" id="adminDeleteInput" placeholder="Enter User-Name here">
   				<button class="buttons" > Delete User! </button>
			</form>	
		</section>

	</section>

</body>

</main>

</html>
