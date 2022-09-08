
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

		<section class="form Login">

			<header>
				PTECH Chat App
			</header>

			<form action="#">

				<div class="error-txt"></div>


					<div class="field input">

						<label>Email Address</label>
						<input type="text" name="email" placeholder="Enter Your email">
						
					</div>


					<div class="field input">

						<label>Password</label>
						<input type="password" name="password" placeholder="Enter  Your password">

						<i class="fas fa-eye"></i>
						
					</div>




					<div class="field button">

						
						<input type="submit" value="Continue to Chat">
						
					</div>
				
				
			</form>

			<div class="link">Not yet Signed up? <a href="index.php">Signup now</a></div>
			
		</section>
		
	</div>


		<script src="javascript/pass_show_hide.js"></script>

		<script src="javascript/login.js"></script>


</body>
</html>