<?php
//Create a new SQLite3 Database
$db = new SQLite3('movies.db');

//Create a new table to our database 
$query = "CREATE TABLE IF NOT EXISTS movies (id INTEGER PRIMARY KEY, title TEXT,  category TEXT, rating INTEGER)";
$db->exec($query);

?>
