<?php 
	
	require 'userConn.php';
	include 'master.php';
	require 'login.php';
	
	session_start();
	ini_set('display_errors',1);
error_reporting(E_ALL);
	if(isset($_SESSION['username'])) {
		echo "Your session is running " . $_SESSION['username'];
	}
	
	
	if(isset($_POST['salesubmit'])) {
		if(empty($_POST['saletype']) || empty($_POST['address']) || empty($_POST['zipcode']) || empty($_POST['description'])) {
			echo "Please validate all fields";
		}
		else
		{
			
			$type = $_POST['saletype'];
			$address = mysqli_real_escape_string($conn, $_POST['address']);
			$zipcode = $_POST['zipcode'];
			$description = mysqli_real_escape_string($conn, $_POST['description']);

			
			if(isset($_FILES['photo'])) {
				$info = pathinfo($_FILES['photo']['name']);
				$ext = $info['extension']; // get the extension of the file
				$newname = rand(10,1000).".".$ext; 

				$target = 'image/'.$newname;
				move_uploaded_file( $_FILES['photo']['tmp_name'], $target);
				
			}
			
					$new_sale = "INSERT INTO sales (id, theuser, saletype, address, zipcode, description, photo)
								VALUES ('', '{$_SESSION['username']}', '$type', '$address', '$zipcode', '$description', '$target')";		
			
					if($conn->query($new_sale) == true) {
						echo $navbarLogged;
						echo "Hello, ".$_SESSION['username'];
						echo $containerStart;
						echo $newsaleHeader;
						echo $newsaleForm;
						echo "Sale Uploaded.";
						echo $containerEnd;
						echo $footer;
					}
					else 
					{
						echo mysqli_error($conn);
					}
			}
		
	$conn->close();
	}
?>