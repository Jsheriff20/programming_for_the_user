// this is the date that the count down clock will count down to 
const countDownDate = new Date("Jan 30, 2019 0:00:00").getTime();

//this function is the countdown clock mechanism 
let x = setInterval(function() {
	
	//this will get the current time
	let now = new Date().getTime();
	
	//this works out how long till the countdown time
	let distance = countDownDate - now;
	
	//this workds out the days, hours, mins and seconds of distance
	const days = Math.floor(distance / (1000 * 60 * 60 * 24));
	const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	const seconds = Math.floor((distance % (1000 * 60)) / 1000);

	//this displays the countdown clock
	document.getElementById("Countdown").innerHTML = days + "d " + hours + "h "
	+ minutes + "m " + seconds + "s ";
  
	//this will say that the album is out if the count down has finished
	if (distance = 0) {
		clearInterval(x);
		document.getElementById("Countdown").innerHTML = "It's Out!";
	}
	//this is the color of the count down clock. 
	document.getElementById("Countdown").style.color = "#6E6658";
}, 	
1000);

// hides song names after page has been loaded on index page
$(document).ready(function() {
    $('.SongNames').hide();
});

 //hides contact BusinessInfo on load
function Hide() {
	for(i = 0; i < 3; i++){
		document.getElementsByClassName("businessInfo")[i].style.display = "none";
	}
}

// shows song names after button has been pressed
$(document).ready(function(){
    $("#btnSongNames").click(function(){
        $(".SongNames").toggle();
    });
});

function BuinessFanFunction() {
    if (document.getElementsByClassName("businessInfo")[0].style.display === "none") {
		for(i = 0; i < 3; i++){
			document.getElementsByClassName("businessInfo")[i].style.display = "block";
			document.getElementsByClassName("fanInfo")[i].style.display = "none";
		}
        
    } 
	else {
        for(i = 0; i < 3; i++){
			document.getElementsByClassName("businessInfo")[i].style.display = "none";
			document.getElementsByClassName("fanInfo")[i].style.display = "block";
		}
    }
}

function Macklemore() {
	const xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) // this will see if the request is ready and then see if it is "OK" to be ran
		{
			document.getElementById("ShowInfo").innerHTML =
			this.responseText;
		}
   };
   xhttp.open("GET", "Macklemore.txt", true);
   xhttp.send();
}


function EarlyLife() {
	const xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) // this will see if the request is ready and then see if it is "OK" to be ran
		{
			document.getElementById("ShowInfo").innerHTML =
			this.responseText;
		}
	};
	xhttp.open("GET", "EarlyLife.txt", true);
	xhttp.send();
}


function Career() {
	const xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) // this will see if the request is ready and then see if it is "OK" to be ran
		{
			document.getElementById("ShowInfo").innerHTML =
			this.responseText;
		}
	};
	xhttp.open("GET", "Career.txt", true);
	xhttp.send();
}


function Personal() {
	const xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) // this will see if the request is ready and then see if it is "OK" to be ran
		{
			document.getElementById("ShowInfo").innerHTML =
			this.responseText;
		}
	};
	xhttp.open("GET", "Personal.txt", true);
	xhttp.send();
}
// show wings song lyrics on about page
$(document).ready(function(){
    $("#showWingsSong").click(function(){
        $.ajax({url: "Wings.txt", success: function(result){
            $("#ShowInfo").html(result);
        }});
    });
});
// show cant Hold Us song lyrics on about page
$(document).ready(function(){
    $("#showCantHoldUsSong").click(function(){
        $.ajax({url: "CantHoldUs.txt", success: function(result){
            $("#ShowInfo").html(result);
        }});
    });
});
// show Glorious song lyrics on about page
$(document).ready(function(){
    $("#showGloriousSong").click(function(){
        $.ajax({url: "Glorious.txt", success: function(result){
            $("#ShowInfo").html(result);
        }});
    });
});
// show Thrift Shop song lyrics on about page

$("#showThriftShopSong").click(function(){
	$.ajax({url: "ThriftShop.txt", success: function(result){
    	$("#ShowInfo").html(result);
    }});
});

$(document).ready(function(){
	mackObj = new Object();
	mackObj.firstname = "Benjamin";
	mackObj.lastname = "Haggerty";
	mackObj.age = 35 ;
	mackObj.eyecolor = "Blue"; 
	$("#macklemoreInfo").click(function(){
		$("#ShowInfo").text($.param(mackObj));
	});
});

$(document).ready(function(){
	ryanObj = new Object();
	ryanObj.firstname = "Ryan";
	ryanObj.lastname = "Lewis";
	ryanObj.age = 30 ;
	ryanObj.eyecolor = "Brown"; 
	$("#ryanInfo").click(function(){
		$("#ShowInfo").text($.param(ryanObj));
	});
});

function ValidateRegister() {
	const username = document.forms["register"]["username"].value;
	const password = document.forms["register"]["password"].value;
 	const name = document.forms["register"]["name"].value;
 	const email = document.forms["register"]["email"].value;
 	const contactNumber = document.forms["register"]["contactNumber"].value;
    if (username.length < 5) {
        alert("User-Name is to short!");
        return false;
    }
	else if (username.length > 20) {
        alert("User-Name is to long!");
        return false;
    }
 	else if (password.length < 7){
 		alert("Check password!");
        return false;
 	}
 	else if (name.length == ""){
 		alert("Name is to short!");
        return false;
 	}
 	else if (email.length < 3){
 		alert("Please enter an email.");
        return false;
 	}
 	else if (contactNumber < 5){
 		alert("Please enter a valid contact number.");
        return false;
 	}
}

function setCookie(cName,cValue,exdays) { // pulls in the cookies values
    const d = new Date(); // gets current date
    d.setTime(d.getTime() + (exdays*24*60*60*1000)); // sets expirey date to current date + how ever many days exdays is equal to
    const expires = "expires=" + d.toGMTString();
    document.cookie = cName + "=" + cValue + ";" + expires + ";path=/";
}

function getCookie(cName) {
    let name = cName + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function colourCookie() {
	alert("this website uses cookies to personalize content, "
	 + "you consent to our cookies if you continue to use this website, "
	 + "however to opt out go to the home page button and click 'Delete cookies'");
	let colour=getCookie("colourCookie");
    if (colour == "") {
		colour = prompt("Please enter your favorite colour:","");
		if (colour != "" && colour != null) {
           setCookie("colourCookie", colour, 30);
		}
    }
}

function ageCookie() {
    let age=getCookie("ageCookie");
    if (age == "") {
		age = prompt("Please enter your Age:","");
		if (age != "" && age != null) {
           setCookie("ageCookie", age, 30);
		}
    }
}

function deleteCookie() { // pulls in the cookies values
	if (getCookie("colourCookie") != ""){
		cName = "colourCookie";
		cValue = "";
		const expires = "expires=Thu, 01 Jan 1970 00:00:01 GMT"
		document.cookie = cName + "=" + cValue + ";" + expires + ";path=/";
	}
	if(getCookie("ageCookie") != ""){
		cName = "ageCookie";
		cValue = "";
		const expires = "expires=Thu, 01 Jan 1970 00:00:01 GMT"
		document.cookie = cName + "=" + cValue + ";" + expires + ";path=/";
	}
}

let favColour //variable to save fav cookie colour
let colour = getCookie("colourCookie"); // gets users fav colour from cookie
colour = colour.toLowerCase(); // sets input to lower case
switch(colour){
	case "yellow":
		favColour = "Yellow";	
		break;
	case "red":
		favColour = "Red";	
		break;
	case "blue":
		favColour = "Blue";	
		break;
	case "green":
		favColour = "Green";
		break;
	case "purple":
		favColour = "Purple";
		break;
	case "orange":
		favColour = "Orange";
		break;
	case "black":
		favColour = "Black";
		break;
	case "grey":
		favColour = "Grey";
		break;
	default:
		favColour = "#88BDBC";
		break;
}
document.getElementById("favColourBackground").style.backgroundColor = favColour;

function getRecommendedSong(){
	let song;
	let age = getCookie("ageCookie");
	if(age <= 10 && age > 0 ){
		document.getElementById("recommendedSong").textContent="Check Out 'Wings' we think you might like it!";
	}
	else if(age >= 11 && age <= 21){
		document.getElementById("recommendedSong").textContent="Check Out 'Glorious' we think you might like it!";
	}
	else if(age >= 22 && age <= 40){
		document.getElementById("recommendedSong").textContent="Check Out 'Can't hold us!' we think you might like it!";
	}
	else if (age >= 41){
		document.getElementById("recommendedSong").textContent="Check Out 'Thrift Shop' we think you might like it!";
	}
	else{
		document.getElementById("recommendedSong").textContent="Allow for us to use cookies and we can recommend you a song!";
	}
}
