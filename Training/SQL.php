<?php

$user = "root";
$pwd = "root";

try {
	$db = new PDO("dbname=test;host=localhost", $user, $pwd);
	echo "PDO connection created";
}
catch(PDOException $e)
{
	echo $e->getMessage();
}