<?php 
require 'functions.php';
require 'config/db.php';          // load the Database class

$config = require 'config/config.php';  // load the config array

$db = new Database($config['database']);  // pass only the 'database' part

// Example query
$post = $db->query("SELECT * FROM students LIMIT 1")->fetch();

dd($post);
