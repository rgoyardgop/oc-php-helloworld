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


$db = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8mb4", $username, $password);
//connection to the database
$stmt = $db->query('SELECT * FROM quote');
echo $stmt;

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	print_r($row);
        echo '<br />';
}
?>
</body>
</html>
