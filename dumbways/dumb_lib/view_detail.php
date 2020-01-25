<?php include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT book_tb.img,book_tb.name,category_tb.category,writer_tb.writer,book_tb.publication_year FROM book_tb LEFT JOIN category_tb ON book_tb.category_id = category_tb.category_id LEFT JOIN writer_tb ON book_tb.writer_id = writer_tb.writer_id where id = $id";
$query = mysqli_query($conn,$sql);
if ($query) {
$row = mysqli_fetch_assoc($query);
} else {
	die(mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html> 
<head>
	<title><?php echo $row['name']; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Dumb Library</h1>
	<div class="view">
	<img src="image/<?php echo $row['img']; ?>">
	<div class="detail">
	<h2><?php echo $row['name']; ?></h2>
	<p>Category : <?php echo $row['category']?></p>
	<p>Writer : <?php echo $row['writer']?></p>
	<p>Publication : <?php echo $row['publication_year']?><p>
	</div></div>
</body>
</html>