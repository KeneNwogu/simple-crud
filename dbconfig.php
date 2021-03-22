<?php
//Create a new SQLite3 Database
define('DB_USER', 'awnf63UsrV');
define('DB_PASSWORD', '5u5LukxsFl');
define('DB_NAME', 'awnf63UsrV');
define('DB_HOST', 'remotemysql.com');

// $db = new PDO('sqlite:movies.sqlite');

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Create a new table to our database 
$query = mysqli_query($db, "CREATE TABLE IF NOT EXISTS movies (id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, title TEXT,  category TEXT, rating INTEGER)");
// $db->exec($query);

?>
