<?php
$username = getenv("MYSQL_USER")
$password = getenv("MYSQL_PWD");
$hostname = getenv("MYSQL_HOST"); 
$dbname = getenv("MYSQL_DB");

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

$selected = mysql_select_db($dbname,$dbhandle)
  or die("Could not select examples");

$result = mysql_query("SELECT * FROM quote");
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   print_r($row)
   echo "<br />";
}
mysql_close($dbhandle);
?>