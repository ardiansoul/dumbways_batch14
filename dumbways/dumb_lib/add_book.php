<?php include 'koneksi.php';
$sql = "SELECT * FROM category_tb";
$sqli = "SELECT * FROM writer_tb";
$query = mysqli_query($conn,$sql);
$queryi = mysqli_query($conn,$sqli);
if (!$query && $queryi) {
	die(mysqli_error($conn));

$name = $category_id = $writer_id = $publication_year = $img = "";

}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
</head>
<body>
	<h1>Add Book</h1>
	<form action="" method="POST" enctype="multipart/form-data">
	<table>

		<tr>
		<td><label>Book Name</label>
		<td><input type="text" name="name">
		<tr>
		<td><label>Book Image</label></td>
		<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td>Category</td>
		<td><select name="category_id">
			<?php while ($row = mysqli_fetch_assoc($query)):?>
			
			<option value = "<?php echo $row['category_id']; ?>"><?php echo $row['category']; ?></option>

			<?php endwhile ?>
		</select></td>
		</tr>
		<tr>
		<td>Writer</td>
		<td><select name="writer_id">
			<?php while ($row = mysqli_fetch_assoc($queryi)):?>
			
			<option value = "<?php echo $row['writer_id'] ?> "><?php  echo $row['writer'] ?></option>
			<?php endwhile ?>
		</select></td>
		</tr>
		<tr>
			<td>Publication Year</td>
			<td><select name="publication_year">
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
			</select>
			</td>
		</tr>
		<tr>
		<td>
		<td><input type="submit" name="tambah">
		</tr>
		</table>
	</form>
</body>
</html>

<?php 

if (isset($_POST['tambah'])) {

	$name = $_POST['name'];
	$image = $_FILES['image']['tmp_name'];
	$image_name = $_FILES['image']['name'];

	move_uploaded_file($image, 'image/'.$image_name);
	
	$category_id = $_POST['category_id'];
	$writer_id = $_POST['writer_id'];
	$publication_year = $_POST['publication_year'];

	echo $name;
	echo "<br>";
	echo $category_id;
	echo "<br>";
	echo $writer_id;
	echo "<br>";
	echo $publication_year;
	
		$query = mysqli_query($conn,"INSERT INTO `book_tb`(`name`, `category_id`, `writer_id`, `publication_year`, `img`) VALUES ('$name' , '$category_id' , '$writer_id', '$publication_year' , '$image_name')");
		if (!$query) {
			die(mysqli_error($conn));
		} else {

		header("Location: index.php");
		}
} else {
		die(mysqli_error($conn));
	}


 ?>