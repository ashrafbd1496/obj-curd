<?php require_once "vendor/autoload.php" ; ?>

<?php 


/**
 * Class use 
 */
	use App\Controller\Student;


	/**
	 * Class instance
	 */

	$student = new Student;




 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Standard Crud Apps by Oject Oriented Programming</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php 

		if (isset($_POST['signup'])) {
			
				//get value
			echo $name = $_POST['name'];
			echo $email = $_POST['email'];
			echo $cell = $_POST['cell'];


			//File manage
			$img = $FILES['photo'];

			if (empty($name) || empty($email) || empty($cell)) {

				$mess = '<p class = "alert alert-success mt-5 w-50 mx-auto ">Student Added Successfully ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';

			}elseif (filter_var($email, FILTER_VALIDATE_EMAIL )) {

				$mess = '<p class = "alert alert-success mt-5 w-50 mx-auto ">Invalid Email ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';
			}

		}

	 ?>

	<div class="wrap ">
		<a class="btn btn-primary btn-sm" href="data.php">All Student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype = "multipart/form-data" >

					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="form-control" type="file">
					</div>
					
					<div class="form-group">
						<input name="signup" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>