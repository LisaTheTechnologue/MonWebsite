﻿﻿<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="personal website">
    <meta name="author" content="@LisaTheTechnologue">
    <title>Jolisa's Website F2017</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
   	<!--Font Awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--Custom StyleSheet-->
    <link href="css/About.css" rel="stylesheet" />
	<link href="css/banner.css" rel="stylesheet" />
    <link href="css/Contact.css" rel="stylesheet" />
	<link href="css/content.css" rel="stylesheet" />
    <link href="css/Site.css" rel="stylesheet" />
    <link href="css/Timeline.css" rel="stylesheet" />
	<link href="css/skills.css" rel="stylesheet" />
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Oxygen+Mono|Handlee|Space+Mono" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<!--Bootstrap 4-->  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" class="myPage">
<?php include "php/nav.php" ?>

<!--Banner-->
<?php include "hero_banner.php" ?>

<!--Table of Content-->
<?php include "content.php" ?>

<!--About Me-->
<?php include "about.php" ?>

<!--Resume-->
<section id="resume">
	<!--Timeline-->
	<?php include "timeline.php" ?>
	<!--Skills-->
	<?php include "skills.php" ?>
	<!--Project-->
	<?php include "project.php" ?>
</section>
	
<!--Contact Page-->
<?php include "contact.php" ?>


<?php include "php/footer.php" ?>
<!--Personal js-->
<script>
function myMap() {
		var location = {lat: 43.765659, lng: -79.223871};
        var mapOptions = {
			zoom: 10,
			center: location
        };
        var map = new google.maps.Map(document.getElementById("googlemaps"), mapOptions);
		var marker = new google.maps.Marker({
			postion: location,
			map: map,
			title:"Toronto, ON"
		});
}
google.maps.event.addDomListener(window, 'load', myMap);
</script>


<!--Google Maps-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3NrllOvNsguqPW6CW88XIW8zx2BTqUi4&callback=myMap"></script>
</body>
</html>
