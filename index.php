<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation on SQLite3 Database using PHP</title>
</head>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<body>
<a href="create.php">Add</a>
<table border="1">
	<thead>
		<th>ID</th>
		<th>Title</th>
		<th>Category</th>
		<th>Rating</th>

		<th>Action</th>
	</thead>
	<tbody>
		<?php
			//include our connection
			include 'dbconfig.php';

			//query from the table that we create
			$sql = "SELECT id, * FROM movies";
			$query = $db->query($sql);

			while($row = $query->fetchArray()){
				echo "
					<tr>
						<td>".$row['id']."</td>
						<td>".$row['title']."</td>
						<td>".$row['category']."</td>
						<td>".$row['rating']."</td>

						<td>
							<a href='edit.php?id=".$row['id']."'>Edit</a>
							<a href='delete.php?id=".$row['id']."'>Delete</a>
						</td>
					</tr>
				";
			}
		?>
	</tbody>
</table>
</body>
</html>