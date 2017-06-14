<?php

print("<h1>20 exs per day</h1> ");

print("<h1>28 Exs here</h1>");
print("<a href='strings.php'>strings PHP</a>");
line();

function line()
{
	echo "<br><br>";
}

# Display copyright
function disp_copyright()
{
	$date = date('Y');

	return $date." Php exercises";
}

echo disp_copyright();
line();
# date countdown
function countdown_to()
{
	$date = strtotime("December 3, 2009 2:00 PM");
	$remaining = $date - time();
	return $remaining / 3600 / 24;
}

echo countdown_to()." days left";
line();

echo date('Y/m/d');
line();

var_dump(strtotime("12-12-2013"));
line();
# Convert yyyy-mm-dd to dd-mm-yyyy
function convert_format_date($str)
{
	$date = strtotime($str);
	return date("d-m-Y",$date);
}
echo convert_format_date("2012-09-12");
line();

$dt = "2008-02-23";  
echo 'First day : '. date("Y-m-01", strtotime($dt)).' - Last day : '. date("Y-m-t", strtotime($dt));
line();
echo date('l',$dt).", the ".date('d', $dt);
line();
# DateTime class
$date1 = new DateTime('2012-06-01 14:16:51');  
$date2 = $date1->diff(new DateTime('2014-05-12 11:10:00')); 
echo $date2->days;

line();

# get yesterday's date
$today = time();
$yesterday = date("d-m-Y",$today - (24*3600));
echo $yesterday;
line();
# get melbourne
date_default_timezone_set('America/Los_Angeles');  
$date = date('m/d/Y h:i:s a', time());  
echo $date;

line();

$date = date("l", time());
echo ($date === "Saturday" || $date === "Sunday");

line();

# get start and end of a week
function Start_End_Date_of_a_week($week, $year)  
{  
    $time = strtotime("1 January $year", time());  
    $day = date('w', $time);  
    $time += ((7*$week)+1-$day)*24*3600;  
    $dates[0] = date('Y-n-j', $time);  
    $time += 6*24*3600;  
    $dates[1] = date('Y-n-j', $time);  
    return $dates;  
}  
  
$result = Start_End_Date_of_a_week(12,2014);  
echo 'Starting date of the week: '. $result[0].'<br>';  
echo 'End date the week: '. $result[1]; 

line();
# get previous month
echo date('d', strtotime('-1 day')).'<br>';  
echo date('m', strtotime('-1 month'));

line();
echo date('m', strtotime('+1 month'));
line();
# get number of days in current month
echo date('t');

