
<?php 

    session_start();
    if (isset($_SESSION['unique_id'])) {
    	header("Location: users.php");
    }

 ?>



<?php 

    include_once "header.php";
 ?>
 
<body>

	<div class="wrapper">

		<section class="form signup">

			<header>
				Ptech Chat App
			</header>

			<form action="#" enctype="multipart/form-data">

				<div class="error-txt"></div>

				<div class="name-details">

					<div class="field input">

						<label>First Name</label>
						<input type="text" name="firstname" placeholder="Frist name" required="">
						
					</div>


					<div class="field input">

						<label>Last Name</label>
						<input type="text" name="lastname" placeholder="Last name" required="">
						
					</div>


				</div>


					<div class="field input">

						<label>Email Address</label>
						<input type="text" name="email" placeholder="Enter Your email" required="">
						
					</div>


					<div class="field input">

						<label>Password</label>
						<input type="password" name="password" placeholder="Enter new password" required="">
						<i class="fas fa-eye"></i>
						
					</div>



					<div class="field image">

						<label>Select Image</label>
						<input type="file" name="image" required="">
						
					</div>


					<div class="field button">

						
						<input type="submit" value="Continue to Chat">
						
					</div>
				
				
			</form>

			<div class="link">Already Signed up? <a href="login.php">Login now</a></div>
			
		</section>


		<script src="javascript/pass_show_hide.js"></script>


		<script src="javascript/signup.js"></script>
		
	</div>

</body>
</html>