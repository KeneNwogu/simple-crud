<?php
	//include our connection
	include 'dbconfig.php';

	//get the row of selected id
	$sql = "SELECT id, * FROM movies WHERE id = '".$_GET['id']."'";
	$query = $db->query($sql);
	$row = $query->fetchArray();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation on SQLite3 Database using PHP</title>
</head>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<body>
<div class="container">
<div class="row">
<div class="col-12 col-lg-6">
<a href="index.php">Back</a>
<form method="post">
    <div class="form-group">
        <label for="title">Title of movie</label> 
        <input type="text" name="title"value="<?php echo $row['title']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="rating">Rating</label> 
        <input type="number" name="rating" value="<?php echo $row['rating']; ?>" class="form-control">
		
    </div>
    <div class="form-group">
        <label for="category">Category</label> 
        <input type="text" name="category" value="<?php echo $row['category']; ?>" class="form-control">	
		
    </div>
    <div class="form-group">
        <input type="submit" value="submit" class="btn-primary form-control">
    </div>                   
</form>
</div>
</div>
</div>


<?php
	if(!empty($_POST)){
		$title = $_POST['title'];
		$rating = $_POST['rating'];
		$category = $_POST['category'];
		
		//update our table
		$sql = "UPDATE movies SET title = '$title', rating = '$rating', category = '$category' WHERE id = '".$_GET['id']."'";
		$db->exec($sql);

		header('location: index.php');
		exit();
	}
?>
</body>
</html>