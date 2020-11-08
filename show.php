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

	//Data show
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$single_student = $student ->singleStudent($id);
	}




 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Student</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
	
	<div class="wrap">
		<a class="btn btn-primary btn-sm" href="data.php">All Student</a>
		<div class="card ">
			<div class="card-header"><h3>Single data of: <?php echo $single_student['name']; ?></h3>
			</div>
			<div class="card-body">
				<img class="shadow" style="width:200px; height: 200px; display: block; border-radius: 50%; margin:auto; border: 10px solid #fff;" src="media/img/Students/<?php echo $single_student['photo']; ?>" alt="<?php echo $single_student['name']; ?>">

				<h1 style="font-family: 'Sigmar One'; text-align: center;"><?php echo $single_student['name']; ?></h1>
				<table class="table">
					<tr>
						<td>Name</td>
						<td><?php echo $single_student['name']; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $single_student['email']; ?></td>
					</tr>
					<tr>
						<td>Cell</td>
						<td><?php echo $single_student['cell']; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
</body>
</html>