<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello <?php echo 'php'; ?></title>
</head>
<body>
	<h1><?php echo "Hello Wolrd"; ?></h1>
	<p>
		<?php echo 'Version PHP courante : ' . phpversion();?>
	</p>
	<p><a href="/mysql-pdo.php">Go To Mysql</a></p>
	<hr />
	<?php echo getenv("MYSQL_HOST"); ?>
	<hr />
	<?php phpinfo(); ?>
</body>
</html>
