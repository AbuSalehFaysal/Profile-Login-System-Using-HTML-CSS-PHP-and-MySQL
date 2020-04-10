<?php  
	
	$conn = new mysqli('localhost','root','','profile_login');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Profile</title>
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/all.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
	<div class="card w-25 mx-auto mt-5">
		<div class="card-body">
			<img class="img-fluid" src="assets/img/AbuSalehFaysal.jpg" alt="">
			<h2>Abu Saleh Faysal</h2>
			<h4>asfaysal.bracu@gmail.com</h4>
		</div>
		<div class="card-footer">
			<a href="index.php">Log Out</a>
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