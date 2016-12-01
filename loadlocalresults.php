<?php

session_start();
include 'userConn.php';
include 'master.php';
include 'login.php';


	$getzip = "SELECT zip FROM login WHERE username = '{$_SESSION['username']}'";
	$result = mysqli_query($conn2, $getzip);
	
	if (mysqli_num_rows($result) > 0) {
		while ($userzip = mysqli_fetch_assoc($result)) {
		
			$getpostzip = 0;


			if ($userzip['zip'] >= 00500 && $userzip['zip'] <= 12999 ) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 00500 AND 12999";
			}
			if ($userzip['zip'] >= 13000 && $userzip['zip'] <= 14999) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 13000 AND 14999";;
			}
			if ($userzip['zip'] >= 15000 && $userzip['zip'] <= 19299) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 15000 AND 19299";
			}
			if ($userzip['zip'] >= 19300 && $userzip['zip'] <= 24199) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 19300 AND 24199";;
			}
			if ($userzip['zip'] >= 24200 && $userzip['zip'] <= 25499) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 24200 AND 25499";
			}	
			if ($userzip['zip'] >= 25500 && $userzip['zip'] <= 26599) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 25500 AND 26599";
			}
			if ($userzip['zip'] >= 26600 && $userzip['zip'] <= 31799) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 26600 AND 31799";
			}		
			if ($userzip['zip'] >= 31800 && $userzip['zip'] <= 34799) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 31800 AND 34799";
			}
			if ($userzip['zip'] >= 34900 && $userzip['zip'] <= 37599) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 34900 AND 37599";
			}		
			if ($userzip['zip'] >= 37600 && $userzip['zip'] <= 39899) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 37600 AND 39899";
			}
			if ($userzip['zip'] >= 39900 && $userzip['zip'] <= 43699) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 39900 AND 43699";
			}	
			if ($userzip['zip'] >= 43700 && $userzip['zip'] <= 48799) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 43700 AND 48799";
			}		
			if ($userzip['zip'] >= 48800 && $userzip['zip'] <= 50399) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 48800 AND 50399";
			}	
			if ($userzip['zip'] >= 50400 && $userzip['zip'] <= 51699) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 50400 AND 51699";
			}
			if ($userzip['zip'] >= 52000 && $userzip['zip'] <= 53999) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 52000 AND 53999";
			}	
			if ($userzip['zip'] >= 54000 && $userzip['zip'] <= 54999) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 54000 AND 54999";
			}		
			if ($userzip['zip'] >= 55000 && $userzip['zip'] <= 57799) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 55000 AND 57799";
			}		
			if ($userzip['zip'] >= 58000 && $userzip['zip'] <= 59799) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 58000 AND 59799";
			}	
			if ($userzip['zip'] >= 59800 && $userzip['zip'] <= 63499) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 59800 AND 63499";
			}		
			if ($userzip['zip'] >= 63500 && $userzip['zip'] <= 65899) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 63500 AND 65899";
			}	
			if ($userzip['zip'] >= 66000 && $userzip['zip'] <= 67899) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 66000 AND 67899";
			}		
			if ($userzip['zip'] >= 67900 && $userzip['zip'] <= 69399) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 67900 AND 69399";
			}	
			if ($userzip['zip'] >= 70000 && $userzip['zip'] <= 70899) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 70000 AND 70899";
			}	
			if ($userzip['zip'] >= 71000 && $userzip['zip'] <= 74199) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 71000 AND 74199";
			}		
			if ($userzip['zip'] >= 74300 && $userzip['zip'] <= 75499) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 74300 AND 75499";
			}		
			if ($userzip['zip'] >= 75500 && $userzip['zip'] <= 78599) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 75500 AND 78599";
			}		
			if ($userzip['zip'] >= 78600 && $userzip['zip'] <= 81699) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 78600 AND 81699";
			}		
			if ($userzip['zip'] >= 82000 && $userzip['zip'] <= 85399) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 82000 AND 85399";
			}	
			if ($userzip['zip'] >= 85500 && $userzip['zip'] <= 87199) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 85500 AND 87199";
			}
			if ($userzip['zip'] >= 87300 && $userzip['zip'] <= 89199) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 87300 AND 89199";
			}
			if ($userzip['zip'] >= 89300 && $userzip['zip'] <= 92899) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 89300 AND 92899";
			}
			if ($userzip['zip'] >= 93000 && $userzip['zip'] <= 99999) {
				$getpostzip = "SELECT saletype, address, zipcode, description, photo FROM sales WHERE zipcode BETWEEN 93000 AND 99999";
			}
		}	
	}		
	$zip_result = mysqli_query($conn1, $getpostzip);
	if (mysqli_num_rows($zip_result) > 0) {
		
		while ($row = mysqli_fetch_assoc($zip_result)) {
			echo $containerStart;
			echo '<div class="row">';
			echo	'<div class="col-lg-12">';
			echo		'<h1 class="page-header">'.$row['saletype'].'';
			echo			'<small> City Goes Here</small>';
			echo				'</h1>';
			echo			'</div>';
			echo		'</div>';
			echo	'<div class="row">';
			echo        '<div class="col-md-7">';
			echo                '<img class="img-responsive" src="'.$row['photo'].'" alt="">';
			echo        '</div>';
			echo        '<div class="col-md-5">';
			echo            '<h3>'.$row['saletype'].'</h3>';
			echo			'<h4>'.$row['address'].'</h4>';
			echo        '<p>'.$row['description'].'</p>';
			echo		'</div>';
			echo		'</div>';
			echo $containerEnd;
			
		}
	}
?>