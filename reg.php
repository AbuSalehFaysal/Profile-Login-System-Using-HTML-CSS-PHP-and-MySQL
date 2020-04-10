<?php 
	$conn = new mysqli('localhost','root','','profile_login');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reg</title>
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/all.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php 
		if( isset($_POST['submit']) ){
			//get data 
			$name = $_POST['name'];
			$uname = $_POST['uname'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			//files
			$pname = $_FILES['photo']['name'];
			$ptname = $_FILES['photo']['tmp_name'];
			$upname = time().rand().$name;

			$ex = explode('.', $name);
			

			if (empty($name) || empty($uname) || empty($email) || empty($pass) || empty($upname) ) {
				# code...
				echo "<p class='alert alert-danger w-50 mx-auto'>Please, fill the form properly!</p>";
			} else {
				# code...
				$sql = "INSERT INTO user_details (name, uname, email, pass, photo) VALUES ('$name','$uname','$email','$pass','$upname')";
				$conn -> query($sql);

				move_uploaded_file( $ptname, 'photos/'.$upname.'.jpg');
				echo "<p class='alert alert-success w-50 mx-auto'>Good Job!</p>";
			}
			
		}

	 ?>
	
	<div class="log  w-50 mx-auto mt-2 shadow">
		<div class="card">
			<div class="card-header">
				<h2 class="card-title">Sign Up</h2>
			</div>
			<div class="card-body">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
					

					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>

					<div class="form-group">
						<label for="">User Name </label>
						<input name="uname" class="form-control" type="text">
					</div>

					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>

					<div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="form-control" type="password">
					</div>

					<div class="form-group">
						<label for="">Picture</label>
						<input name="photo"  type="file">
					</div>

					<div class="form-group">
						
						<input name="submit" class="btn btn-success" type="submit" value="Sign Up">
					</div>

				</form>
			</div>
			<div class="card-footer">
				<a href="index.php">Sign In Now</a>
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