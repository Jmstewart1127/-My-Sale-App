<?php 
	require 'userConn.php';
	include 'master.php';
	
	if(isset($_POST['signupsubmit'])) {
		if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['zip'])) {
			echo "Please validate all fields";
		}
		else
		{
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$zip = $_POST['zip'];
			
		
			$query_verify_email = "SELECT * FROM login WHERE email ='$email'";
			$result_verify_email = mysqli_query($conn, $query_verify_email);
			if(!$result_verify_email) { //if the Query Failed ,similar to if($result_verify_email==false)
				echo $navbar;
				echo $containerStart;
				echo $signupHeader;
				echo $signupForm;
				echo ' Database Error Occured ';
				echo $containerEnd;
				echo $footer;
			}


			// Make sure the usernaame is available:
			$query_verify_user = "SELECT * FROM login WHERE username ='$username'";
			$result_verify_user = mysqli_query($conn, $query_verify_user);
			if(!$result_verify_user) {
				echo $navbar;
				echo $containerStart;
				echo $signupHeader;
				echo $signupForm;
				echo ' Database Error Occured ';
				echo $containerEnd;
				echo $footer;
            }

				if(mysqli_num_rows($result_verify_user) == 0 && mysqli_num_rows($result_verify_email) == 0) { //if the Query Failed ,similar to if($result_verify_user==false)
			
					$new_user = "INSERT INTO login (id, username, password, email, zip)
							VALUES ('', '$username', '$password', '$email', '$zip')";
			
					if($conn->query($new_user) == true) {
						echo $navbar;
						echo $containerStart;
						echo $signupHeader;
						echo $signupForm;
						echo "Account Created";
						echo $containerEnd;
						echo $footer;
					}
					else 
					{
						echo $navbar;
						echo $containerStart;
						echo $signupHeader;
						echo $signupForm;
						echo "A problem occured. Please try again.";
						echo $containerEnd;
						echo $footer;
					}
				}
				else
				{
					echo $navbar;
					echo $containerStart;
					echo $signupHeader;
					echo $signupForm;
					echo "Username or email address already in use. Try again.";
					echo $containerEnd;
					echo $footer;
				}
			}
		
	$conn->close();
	}
?>