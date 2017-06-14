<?php

print("<h1>20 exs per day</h1> ");
print("<h2>12 Exs here</h2>");
print("<a href='classes.php'>Classes in PHP</a>");

line();

function line()
{
	echo "<br><br>";
}

# Return max value of three arrays

$marks1 = array(360,310,310,330,313,375,456,111,256);   
$marks2 = array(350,340,356,330,321);   
$marks3 = array(630,340,570,635,434,255,298);

var_dump(max(array_merge($marks1,$marks2,$marks3)));
line();
# round with n precision

function round_n_decimal($val, $n)
{
	$val += $val - substr($val, 0, $n+1);
	return substr($val, 0, $n+1);
}

echo round_n_decimal(1.65555,3);
line();

# get memory usage info
$memory_size = memory_get_usage(); 

$memory_unit = array('Bytes','KB','MB','GB','TB','PB');  
// Display memory size into kb, mb etc.  
echo 'Used Memory : '.round($memory_size/pow(1024,($x=floor(log($memory_size,1024))))).' '.$memory_unit[$x]; 
line();


# Get distance between two points on the earth
function lat_long_dist_of_two_points($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo){   
	$pi = pi();   
	$x = sin($latitudeFrom * $pi/180) *   
	sin($latitudeTo * $pi/180) +   
	cos($latitudeFrom * $pi/180) *   
	cos($latitudeTo * $pi/180) *   
	cos(($longitudeTo * $pi/180) - ($longitudeFrom * $pi/180));   
	$x = atan((sqrt(1 - pow($x, 2))) / $x);   
	return abs((1.852 * 60.0 * (($x/$pi) * 180)) / 1.609344);   
}   
// Distance from New York to London  
echo lat_long_dist_of_two_points(40.7127, 74.0059, 51.5072, 0.1275).' mi';