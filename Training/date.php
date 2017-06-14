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
line();

# date countdown
line();

# Convert yyyy-mm-dd to dd-mm-yyyy
line();

# get yesterday's date
line();

# get melbourne timezone
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
line();

# get number of days in current month


