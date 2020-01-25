<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>DUMBWAYS LIBRARY</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h1>Dumb Library</h1>
<div class="add">
	<button onclick="location.href='add_book.php'" type="button">Add Book</button>
	<button onclick="location.href='add_writer.php'" type="button">Add Writer</button>
	<button onclick="location.href='add_category.php'" type="button">Add Category</button>
</div>
</div>
<div class="tbl">
	<?php 
	$sql = "SELECT * FROM `book_tb`";			$query = mysqli_query($conn,$sql); ?>
	<?php if (mysqli_num_rows($query)>0): ?>
		
	<?php while ($row = mysqli_fetch_assoc($query)): ?>
		<div class="col">
		<img src="image/<?php echo $row['img']; ?>">
		<h2><?php echo $row['name']; ?></h2>
		<button onclick="location.href='view_detail.php?id=<?php echo $row['id'] ?>'">View Detail</button>
		</div>
	<?php endwhile ?>
	
	<?php else: ?>
		<p>tidak ada data di tabel</p>
	<?php endif ?>
</div>
</body>
</html>