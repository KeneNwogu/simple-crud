
<?php
    
	if(!empty($_POST)){
		//include our connection
		require_once('dbconfig.php');

        $title = $_POST['title'];
		$rating = $_POST['rating'];
		$category = $_POST['category'];

		//insert query
        $query = "INSERT INTO movies (title, category, rating) VALUES 
        ('$title', '$category', '$rating')";

        mysqli_query($db, $query);
        // $statement = mysqli_prepare($db, $query);

        // mysqli_stmt_bind_param($statement, "iss", $title, $category, $rating);

        // mysqli_stmt_execute($statement);

        // mysqli_close($statement);
        mysqli_close($db);

		header('Location: index.php');
        exit();

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h3>Create</h3>
                <p>Fill in your favorite movies today!</p>
                
                <form action="create.php" method="POST">
                    <div class="form-group">
                        <label for="title">Title of movie</label> 
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating</label> 
                        <input type="number" name="rating" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="rating">Category</label> 
                        <input type="text" name="category" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="submit" class="btn-primary form-control">
                    </div>
                    
                </form>
            </div>
            <div class="col-12 col-lg-6">
    
            </div>
        </div>
    </div> 
     
</body>
</html>