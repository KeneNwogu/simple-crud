<?php
	//include our connection
	include 'dbconfig.php';

	//delete the row of selected id
	$sql = "DELETE FROM movies WHERE id = '".$_GET['id']."'";
	mysqli_query($db, $sql);

	header('location: index.php');
?>