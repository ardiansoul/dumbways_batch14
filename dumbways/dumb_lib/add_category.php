<?php include 'koneksi.php';
$name =""; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Category</title>
</head>
<body>
	<h1>Add Category</h1>
<form action="" method="POST" >
	<table>
		<tr>
			<td><label>Category Name</label></td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tambah"></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php 
include 'koneksi.php';

if (isset($_POST['tambah'])) {
	$name = $_POST['name'];


		$query = mysqli_query($conn,"INSERT INTO `category_tb`(`category`) VALUES ('$name')");
		if (!$query) {
			die(mysqli_error($conn));
		}

		header("Location: index.php");
} else {
		die(mysqli_error($conn));
	}


 ?> ?>