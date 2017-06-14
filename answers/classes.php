<?php

print("<h1>20 exs per day</h1> ");
print("<h2>7 Exs here</h2>");
print("<a href='json.php'>Json Php</a>");

line();

function line()
{
	echo "<br><br>";
}

class displayString
{
	public function __construct(){
		echo "Class Constructed!";
	}

	public function Say_hello($name)
	{
		echo "Hello, ".$name;
	}
	public function Sort_array($arr)
	{
		sort($arr);
		return $arr;
	}

}

$userclass = new displayString();
line();

$userclass->Say_hello("Patrickk");
line();

print_r($userclass->Sort_array(array(11, -2, 4, 35, 0, 8, -9)));
line();

$sdate = new DateTime("1981-11-03");  
$edate = new DateTime("2013-09-04");  
  
$interval = $sdate->diff($edate);  
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
line();
# convert from am date to eu date
$eudate = DateTime::createFromFormat("m-d-Y", "12-08-2004")->format('d-m-Y');
echo $eudate;