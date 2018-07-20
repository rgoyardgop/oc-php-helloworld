<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello <?php echo 'php'; ?> </title>
</head>
<body>
	<h1><?php echo "MySQL PDO"; ?></h1>
	
<?php
$username = getenv("MYSQL_USER");
$password = getenv("MYSQL_PWD");
$hostname = getenv("MYSQL_HOST"); 
$dbname = getenv("MYSQL_DB");

echo "<ul>";
echo "<li>MYSQL_USER:$username</li>";
echo "<li>MYSQL_PWD:$password</li>";
echo "<li>MYSQL_HOST:$hostname</li>";
echo "<li>MYSQL_DB:$dbname</li>";
echo "</ul>";
try {
    $db = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8mb4", $username, $password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));

    echo var_dump($db);
	//connection to the database
	$stmt = $db->query('SELECT id,msg FROM quote');
	var_dump($stmt);

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		print_r($row);
	        echo '<br />';
	}

} catch (PDOException $e) {
    throw $e;
}

?>
</body>
</html>
