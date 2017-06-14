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

line();
# round with n precision

function round_n_decimal($val, $n)
{
}

echo round_n_decimal(1.65555,3);
line();

# get memory usage info

line();


# Get distance between two points on the earth
function lat_long_dist_of_two_points($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo){   
 
}   
// Distance from New York to London  
echo lat_long_dist_of_two_points(40.7127, 74.0059, 51.5072, 0.1275).' mi';