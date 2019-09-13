<?php 
	session_start();
	// if the user is already logged in this will run
	if ($_SESSION["loggedIn"] != "1" ){
		header("location: Pages/login/Login1.html");
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<main id="mainContainer">

<head>
	<title>Requirements</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<script type="text/javascript" src="script.js" ></script>


	<header id="Banner">
		<section class= "top-right">
			<img class="bannerImages" src="Images/macklemoreRequirementsImage.jpg" alt="macklemoreImage" height="150px" width="230px"> <!- https://pccbridge.com/index.php/macklemore/macklemore/ ->
		</section>
		<h1> Requirements </h1>
	</header>


	<nav class="navbar navbar-expand-md navbar-dark fixed-left">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNav">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="index.php">Home</a>
					<a class="nav-item nav-link active" href="#">Requirements</a>
					<a class="nav-item nav-link" href="Pages/about/About.php">About Macklemore</a>
					<a class="nav-item nav-link" href="Pages/contact/Contact.php">Contact</a>
					<a class="nav-item nav-link" href="Pages/myAccount/MyAccount.php">My Account</a>
					<a class="nav-item nav-link" href="Pages/logout/logOut.php">Logout</a>
				</div>
			</div>
		</div>
	</nav>

</head>



<body>

	<section class="row">
		<article class="col-sm-12" id="reqTable"> 
			<div class="table-responsive">
				<table id="tablePreview" class="table">
					<thead>
						<tr>
							<th class="requirementCol">Requirement</th>
							<th class="implementCol">How I implemented the requirement </th>
							<th class="fileCol">Files that show proof</th>
							<th class="lineCol">Lines that show proof</th>
						</tr>
					</thead>
	
					<tbody>
						<tr>
							<th scope="row" class="requirementCol shaded">A clear use of HTML5 </th>
							<td class="implementCol shaded">I have used HTML5 code such as the “DOCTYPE” declaration for HTML5. However, I have used HTML5 using the correct practice. For example, instead of leaving a tag open such as < p> I would close it. I have also included an “html lang” so that the website knows that I am writing in English. I have also used the correct “Semantic Elements” such as: main, nav, article, section and header. I have also got the names of the ID/ element inside of the CSS instead of the element name and the tag like HTML4.1 did. </td>
							<td class="fileCol shaded" >Proof of html5 being used can be found on all pages 3 examples:</td>
							<td class="lineCol shaded"></td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">Login1.html:</td>
							<td class="lineCol shaded">Line 16 – 22<br>
								Line 45 - 67<br>
								Line 46 - 66
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">index.php:</td>
							<td class="lineCol shaded">Line 10<br>
								Line 11<br>
								Line 25 – 30<br>
								Line 33 - 49
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">Contact.php:</td>
							<td class="lineCol shaded">Line 11<br>
								Line 12 – 103 <br>
								Line 33 - 49
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol">Use of the Bootstrap framework providing a responsive layout </th>
							<td class="implementCol">I used bootstrap grid layout on each page, allowing for any page to resize and the content on it to change location depending on the size of the view port. This will mean that the information on the pages will be easier to read.
								I also used bootstrap to create tables that allow them to change as well, depending on the information that is inside of them.
								If a user is on a mobile device, the site will change as well as the navigation bar. The content will reorganise itself to make it easier to read and the navigation will shrink into a drop down, hamburger button to navigate through.
							</td>
							<td class="fileCol">index.php</td>
							<td class="lineCol">Including Bootstrap: <br>
								Line 17<br>
								Line 20<br>
								<br>
								Bootstrap Nav bar: <br>
								Line 33 – 49<br>
								<br>
								Bootstrap grid layout: <br>
								Line 58 -70<br>
								Line 72 – 76 <br>
								Line 78 - 80
							</td>
						</tr>	
						<tr>
							<th scope="row" class="requirementCol shaded">Use of JavaScript to manipulate the DOM based on an event</th>
							<td class="implementCol shaded">I have created a button that will change the content displayed inside of a table, depending on what type of contact information the user desires. On the page load it will hide one of the types of contact information, and once the button is clicked the DOM will change as the information showed will be toggled (so one will be hidden, and the other will show).</td>
							<td class="fileCol shaded">Contact.php</td>
							<td class="lineCol shaded">Table being manipulated: <br>
								Line 65 -92<br>
								<br>
								Button to change info displayed: <br>
								Line 64<br>
								<br>
								Automatic hide part of table on load: <br>
								Line 55<br>
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">script.js</td>
							<td class="lineCol shaded">Javascript that auto hides part of the DOM:<br>
								Line 36 – 43<br>
								<br>
								Javascript function that will toggle the table: <br>
								Line 52 - 66
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol">JavaScript loading of dynamically changing information</th>
							<td class="implementCol">I used a live updating twitter feed of Macklemore’s tweets and put that on the front page. This way every time Macklemore posts a new tweet it will upload and be shown on my site.<br><br>I also used a countdown clock to show the next time that an album will be dropping. This was done by getting the current date/time and subtracting the target date in order to determine how long it will be. This is refreshed every second in order to keep it up to date.</td>
							<td class="fileCol">index.php</td>
							<td class="lineCol">Live twitter feed location: <br>
								Line 79<br>
								<br>
								Countdown clock display location: <br>
								Line 60<br>
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">script.js</td>
							<td class="lineCol">Countdown clock JavaScript: <br>
								Line 1 - 31
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded">Use of jQuery in conjunction with the DOM </th>
							<td class="implementCol shaded">I used this to automatically hide the song names when the page loads. I then created a button that allows the user to view the song names once pressed and then hide them again after it is pressed again. I did this so the information wasn’t shown on the screen at first and then the user can toggle the information as many times as they like, to hide and show the song name. </td>
							<td class="fileCol shaded">index.php </td>
							<td class="lineCol shaded">Button location: <br>
								Line 62<br>
								Song locations<br>
								Line 63 – 67<br>
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">script.js</td>
							<td class="lineCol shaded">Auto hide song names on page load: <br>
								Line 34 - 36 <br>
								<br>
								Javascript for button click to toggle display: <br>
								Line 46 - 50
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol">Use of a jQuery plugin to enhance your application </th>
							<td class="implementCol">I used a plugin called “JQuery password strength checker”  (https://www.formget.com/password-strength-checker-in-jquery/) I implemented this inside of my registration page, allowing the page to look at the password that the user has entered into the password field and inform them if the password is secure or not and how secure it is. This is done by looking at the password’s length and what characters are used which will then give it a score out of 4. The score is then converted into a string that describes the strength of the password.</td>
							<td class="fileCol">Register.html</td>
							<td class="lineCol">Display results of password strength: <br>
								Line 55 – 58
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">passwordscheck.js</td>
							<td class="lineCol">All of this is the plugin</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded">Use of AJAX (pure JavaScript i.e. without the use of a library) </th>
							<td class="implementCol shaded">I created a button in html that will call an AJAX function once clicked that will change a section of text depending on which button is clicked. The AJAX function will display the text from a .txt file. The information shown will depend on which button has been clicked.</td>
							<td class="fileCol shaded">About.php </td>
							<td class="lineCol shaded">Where the text gets displayed: <br>
								Line 66 – 68<br>
								<br>
								Buttons for displaying info: <br>
								Line 56 - 62 
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">script.js</td>
							<td class="lineCol shaded">JavaScript for showing the information: <br>
								Line 68 -121
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol">Use of the jQuery AJAX function </th>
							<td class="implementCol">On the ‘About’ page there is a section about Macklemore’s songs. When any of these buttons are clicked, a jQuery AJAX function will be ran depending on what button is clicked and the relating song lyrics will show. This is done by having a different button with different functions relating to each. When the button is clicked it will run the function that will change a paragraph to the text of a text file which will be related to the name of the button. <br>
								I have also got a “param” jQuery AJAX function to display the profile of Ryan Lewis and Macklemore on a button click. 
							</td>
							<td class="fileCol">About.php </td>
							<td class="lineCol">Where the text gets displayed for both: <br>
								Line 66 – 68<br>
								<br>
								Buttons for displaying song info: <br>
								Line 73 -76<br>
								<br>
								Buttons to display the profiles: <br>
								Line 79 - 80
							</td>
						</tr> 
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">script.js</td>
							<td class="lineCol">Jquery for showing the song info: <br>
								Line 123 – 152<br>
								<br>
								Jquery for showing the profile info: <br>
								Line 154 - 174
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded">Use of cookies </th>
							<td class="implementCol shaded">When a user logs in and goes onto the home page they will be asked for their favourite colour and their age - these fields are optional. When they enter these values, they will be stored as cookies on the user’s computer. These are then used to customise the site depending on which cookie it is. 
								The age cookie will allow us to recommend a song to check out on the ‘About’ page and the favourite colour will change the background colour of their account page to their favourite colour. The users can delete the cookies whenever they want to.
							</td>
							<td class="fileCol shaded">index.php</td>
							<td class="lineCol shaded">Check to see if they have cookies and if not ask: <br>
								Line 54 <br>
								<br>
								To delete the cookies: <br>
								Line 69
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">About.php</td>
							<td class="lineCol shaded">Recommending song location: <br>
								Line 72<br>
								<br>
								Fav colour background: <br>
								Line 37<br>
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">script.js</td>
							<td class="lineCol shaded">Get recommended song: <br>
								Line 52<br>
								<br>
								Getting, setting, checking and deleting cookies: <br> 
								Line 208 – 267<br>
								<br>
								Changing colour depending on input: <br>
								Line 269 - 301<br>
								<br>
								Getting recommended song and recommending one: <br>
								Line 303 -321
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol">User login functionality (PHP/MySQL) </th>
							<td class="implementCol">I have created a registration page that will ask the user for a username, password and some information about themselves. Their username will then be checked to see if it is available. If it is, it will store all the data in the database and it will hash and salt the password before doing so. They will then be taken to the login page where they can use their login credentials to login to their account. Their inputs will be checked to prevent against SQL injection, the username will then be found with the relevant password and the password will then be compared against the encrypted password. If it matches, they will be directed to the index.php page. However, if a user already has an account on the site, they will not be able to get onto any of the other pages as it will redirect them to the login page.</td>
							<td class="fileCol">Register.html</td>
							<td class="lineCol">Form asking for info: <br>
								Line 43 – 77
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">connect.php</td>
							<td class="lineCol">Connecting and sending information from form to database: <br>
								Line 1 – 20<br>
								Line 48 – 58<br>
								<br>
								Check to see if username is in use: <br>
								Line 24 – 47<br>
								<br>
								Hashing password: <br>
								Line 17<br>
								<br>
								Redirect to login page: <br>
								Line 58
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">About.php</td>
							<td class="lineCol">Not able to get onto other pages
								On all pages other than register and login <br>
								Line 1 – 8
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">About.php</td>
							<td class="lineCol">Form for entering in login information: <br>
								Line 47 – 65
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">login1.php</td>
							<td class="lineCol">Preventing sql injection: <br>
								Line 8 – 14<br>
								<br>
								Check to see if users credentials match ones on database: <br>
								Line 17 – 45<br>
								<br>
								Decrypting password from database and checking if there is a match: <br>
								Line 30 <br>
								<br>
								Storing variables in the session to maintain the login status for the users account: <br>
								Line 36 - 44
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded">Admin section of the website (PHP/MySQL) </th>
							<td class="implementCol shaded">If the user has got the Admin account credentials, they can login as Admin. The Admin can go to My Account > Update Account > Admin Access, where the admin can search to find a user’s account information and view it. They can then delete any user from the database, other than the Admin account. This is done by the Admin entering the username for the user they want to delete, and then clicking the delete button which will delete the whole row in the database that has the username equal to the one the Admin inputted.</td>
							<td class="fileCol shaded">AdminAccess.php</td>
							<td class="lineCol shaded">Form for finding user with submit button: <br>
								Line 57 – 62<br>
								<br>
								Php for finding inputted username: <br>
								Line 63 – 104 <br>
								<br>
								Form that display the results of the found user: <br>
								Line 108 – 161<br>
								<br>
								Php that gets user info: <br>
								Line 115 – 119 <br>
								Line 127 - 131<br>
								Line 139-143<br>
								Line 151 – 155<br>
								<br>
								Form for deleting user: <br>
								Line 166 – 170
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">deleteUser.php</td>
							<td class="lineCol shaded">Getting user inputting and selecting then deleting user: <br>
								Line 1 – 30<br>
								<br>
								Preventing admin from deleting admin account: <br>
								Line 1 - 5
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol">Ability to select, add, edit and delete information from a database 
								(PHP/MySQL) 
							</th>
							<td class="implementCol">The user can go onto the ‘MyAccount’ page where they can view/ select their account information. This is done by retrieving the session user name and finding it on the database. It then outputs each column on the database into the correct field on the form page. <br>
								They can also go onto the ‘Update Account’ page where they are able to see their information and edit/ add new information. <br>
								The admin user is able to delete information from the database (as previously spoken about in the admin section). <br>
								Info can be added to the database when a user register. This is done by getting the input of the user and then making a connection to the database to then create a new row in the database with the new user’s credentials.
							</td>
							<td class="fileCol">MyAccount.php</td>
							<td class="lineCol">selecting users account information: <br>
								Line 15 – 32<br>
								<br>
								Displaying selected information: <br>
								Line 90 – 125
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">UpdateAccount.php</td>
							<td class="lineCol">Php for selecting current account details: <br>
								Line 16 – 32<br>
								<br>
								Showing gathered info: <br>
								Line 89 – 149<br>
								<br>
								Input for new details: <br>
								Line 110<br>
								Line 123<br>
								Line 136
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">updateInfo.php</td>
							<td class="lineCol">Prevent against SQL injection: <br>
								Line 10 – 23<br>
								Check to see if info needs updating and then edit current details to make them the new details: <br>
								Line 26 – 65<br>
								<br>
								Redirect user depending on what they do: <br>
								Line 66 – 71
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">connect.php</td>
							<td class="lineCol">Connect and add information from form to database: <br>
								Line 1 – 20<br>
								Line 48 – 58
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">deleteUser.php</td>
							<td class="lineCol">Getting user inputting and selecting then deleting user: <br>
								Line 1 – 30
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded ">Appropriate consideration of relevant laws </th>
							<td class="implementCol shaded">When the user logins in and before any cookies are created, an alert popup will appear saying: “this website uses cookies to personalize content, you consent to our cookies if you continue to use this website, however to opt out go to the home page button and ‘Delete cookies’”. <br><br>
								-This complies with the GDPR cookies guidelines. This feature is called "prior consent" and will make sure that the site has consent to use cookies before storing them. <br><br>
									-The information about the cookies are "accurate and specific" as well as being "presented in a clear plain language" which are both requirements of the GDPR. <br><br>
								-There is only one category that this cookie will use – ‘personalize data’. This means an ‘okay’ button is enough, however, if there were more categories, there would have to be checkboxes for each category, so that the user can "choose how the cookies are being used".<br><br>
							-The user is always able to "change their mind" if they want to as there is a button on the home page that will delete any cookies stored.
							</td>
							<td class="fileCol shaded">script.php</td>
							<td class="lineCol shaded">Popup alert to meet GDPR guidelines: <br>
								Line 232 – 234
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">index.php</td>
							<td class="lineCol shaded">Running function to display message: <br>
								Line 54
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol">Security measures taken: 
								SQL queries should be written as prepared statements
							</th>
							<td class="implementCol">Writing the SQLI queries as a prepared statement will prevent against SQLI injection. Therefore, I made all my sqli_querys into statements. The pages I did this on were: 
								login1.php, MyAccount.php, updateInfo.php, UpdateAccount.php, AdminAccess.php, deleteUser.php, 
								connect.php
							</td>
							<td class="fileCol">login1.php</td>
							<td class="lineCol">Line 17 – 29</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">MyAccount.php</td>
							<td class="lineCol">Line 16 – 32</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">updateInfo.php</td>
							<td class="lineCol">Line 32 – 40<br>
								Line 44 – 52<br>
								Line 56 - 64
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">UpdateAccount.php</td>
							<td class="lineCol">Line 16 – 32</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">AdminAccess.php</td>
							<td class="lineCol">Line 70 – 84</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">deleteUser.php </td>
							<td class="lineCol">Line 12 – 29</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">connect.php</td>
							<td class="lineCol">Line 24 - 36</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded">Security measures taken: 
								Passwords should be salted and hashed
							</th>
							<td class="implementCol shaded">When a user enters a password in the registration page, that password is stored as a variable and then put through a function called “password_hash”. This encrypts the password by hashing and salting it. It will change a regular word/password into a string with over 60 different letters, numbers and symbols which can only be translated/ decrypted by a computer with the decrypting key.</td>
							<td class="fileCol shaded">connect.php</td>
							<td class="lineCol shaded">Salting and hashing password: <br>
								Line 16 – 17
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">login1.php</td>
							<td class="lineCol shaded">Decrypting password: <br>
								Line 30 - 35
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol">Security measures taken: 
								Validation of user input
							</th>
							<td class="implementCol">When a user is entering information into the register form, it will check each field if they have matched the requirements for the entry of that field (each input field has different requirements that must be met). <br><br>
								I have also made sure that when a user inputs data into the SQL database it is run through the functions stripcslashes and htmlspecialchars. This means that any attempt of SQL injection will be cancelled as any special characters such as < or ! are simply just characters of text and not potential injection code.
							</td>
							<td class="fileCol">Register.html</td>
							<td class="lineCol">Onsubmit it will return true or false: <br>
								Line 44
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">script.js</td>
							<td class="lineCol">Validate Function that will check all the fields: <br>
								Line 176 – 206
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol"></th>
							<td class="implementCol"></td>
							<td class="fileCol">login1.php</td>
							<td class="lineCol">Prevent sql injection: <br>
								Line 8 - 14
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded">Security measures taken: 
								Any other relevant security features
							</th>
							<td class="implementCol shaded">When a user is inputting a password, it’s strength will be measured and given a score out of 4 which is marked as: short, weak, good and strong. This will mean that the user will make sure that their password is strong or at least good allowing for better passwords to be used.</td>
							<td class="fileCol shaded">Register.html</td>
							<td class="lineCol shaded">Where the input for password is and where the strength rating is displayed: <br>
								Line 51 – 58<br>
								<br>
								Validate function being ran: <br>
								Line 44
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">script.js</td>
							<td class="lineCol shaded">Not allowing user to continue if password is ‘to short’: <br>
								Line 190 – 193
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">passwordcheck.js</td>
							<td class="lineCol shaded">Checks the input and gives it a score and a strength rating: <br>
								Line 10 – 43 
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol">Security measures taken: Any other relevant security features</th>
							<td class="implementCol">I have also made sure that when a user registers their username, it will check to ensure it has not already been taken, otherwise this could cause problems. For example, if two users had the same usernames and one of them changed their name from “Jack” to “Paul” it could change the wrong account.</td>
							<td class="fileCol">connect.php</td>
							<td class="lineCol">Check to see if username available: <br>
								Line 24 – 47
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded">Security measures taken: 
								Any other relevant security features
							</th>
							<td class="implementCol shaded">If a user tries to browse the website without logging in, they will be redirected to the login page which will require them to login. This means that if something happens to the website, such as an SQL injection, it will be easier to find the user/ account that did it. </td>
							<td class="fileCol shaded">index.php</td>
							<td class="lineCol shaded">If user isn’t logged in they can’t access the page: <br>
								Line 1 – 9
							</td>
						</tr>
						<tr>
							<th scope="row" class="requirementCol shaded"></th>
							<td class="implementCol shaded"></td>
							<td class="fileCol shaded">Contact.php</td>
							<td class="lineCol shaded">If user isn’t logged in they can’t access the page: <br>
								Line 1 - 9
							</td>
						</tr>
					</tbody>
	
				</table>
			</div>
   		</article>
	</section>

</body>

</main>

</html>
