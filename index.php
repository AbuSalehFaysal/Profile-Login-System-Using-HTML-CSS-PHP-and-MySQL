<?php  
	
	$conn = new mysqli('localhost','root','','profile_login');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/all.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php 

		if ( isset($_POST['submit']) ) {
			# code...
			$email_or_uname = $_POST['ue'];
			$pass = $_POST['pass'];

			if (empty($email_or_uname) || empty($pass) ) {
				# code...
				echo "<p class='alert alert-danger w-50 mx-auto'>Please, fill the form properly!</p>";
	
			} else {
				# code...
				$sql = "SELECT * FROM user_details WHERE uname='$email_or_uname' AND pass='$pass' ";
				$data = $conn -> query($sql);

				$user_num = $data -> num_rows;
				
				if ($user_num == 1) {
				 	# code...
				 	header("location:profile.php");
				 } else {
				 	# code...
				 	echo "<p class='alert alert-danger w-50 mx-auto'>Wrong Username or Password!</p>";

				 }
				  

			}
			
		}

	 ?>
	
	<div class="log  w-50 mx-auto mt-2 shadow">
		<div class="card">
			<div class="card-header">
				<h2 class="card-title">Sign In</h2>
			</div>
			<div class="card-body">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					

					
					<div class="form-group">
						<label for="">User Name </label>
						<input name="ue" class="form-control" type="text">
					</div>

					

					<div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="form-control" type="password">
					</div>

					
					<div class="form-group">
						
						<input name="submit" class="btn btn-success" type="submit" value="Sign In">
					</div>

				</form>
			</div>
			<div class="card-footer">
				<a href="reg.php">Create an Account</a>
			</div>
		</div>
	</div>



	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>
		
		(function($){
			$(document).ready(function(){




			});
		})(jQuery)	
	
	</script>
</body>
</html>