<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello <?php echo 'php'; ?></title>
</head>
<body>
	<h1><?php echo "MySQL PDO"; ?></h1>
	
<?php
$username = getenv("MYSQL_USER");
$password = getenv("MYSQL_PWD");
$hostname = getenv("MYSQL_HOST"); 
$dbname = getenv("MYSQL_DB");

//connection to the database
foreach($db->query('SELECT * FROM quote') as $row) {
    print_r($row);
    echo '<br />';
}
?>
</body>
</html>
