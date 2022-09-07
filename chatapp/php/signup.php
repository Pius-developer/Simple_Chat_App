<?php

session_start();

include_once "config.php";

$fname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {


	// User Email Validation

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
		// Check if Email Exits Already

		$sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}' ");

		if (mysqli_num_rows($sql) > 0 ) {
			echo "$email- This email already exists in database";

		}else{

			// Checking for uploaded files

			if (isset($_FILES['image'])) {
				
				// Getting image details
				$img_name = $_FILES['image']['name'];

				$img_type = $_FILES['image']['type']; 
                 
                 // Saves the image name temporary in a folder
				$tmp_name = $_FILES['image']['tmp_name'];


				// trying to get the image extension by exploding

				$img_explode = explode('.', $img_name);
				$img_ext = end($img_explode );

				// creating arrays of get_loaded_extensions()

				$extension = ['jpeg', 'png', 'jpg'];

				if (in_array($img_ext, $extension) === true) {
					
					// Returns the current time
					$time = time(); 

                     $new_image_name = $time.$img_name;
					// Moving the image to our folder
					if (move_uploaded_file($tmp_name, "images/".$new_image_name)) {
						
                        $random_id = rand(time(),1000000);
                       // Once the user sign up, status will be active now
					   $status = "Active now";


					   // inserting into database

					  $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id,firstname,lastname,email,password,image,status) VALUES ('$random_id', '$fname', '$lname', '$email', '$password','$new_image_name' ,'$status')");

					  if ($sql2) {

					  	$sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");

					  	if (mysqli_num_rows($sql3) > 0) {
					  		$row = mysqli_fetch_assoc($sql3);

					  		// Setting up my session for all my pages

					  		$_SESSION['unique_id'] = $row['unique_id'];

					  		echo "success";
					  	}
					  	
					  }else{
					  	echo "something went wrong";
					  }
					}

				}else{
					echo "Please select an image- jpeg, png and jpg";
				}

			}else{
				echo "Please Select image file";
			}
		}

	}else{
		echo "$email- this is not a valid email";
	}

}else{
	echo "All inputs must be filled";
}

?>