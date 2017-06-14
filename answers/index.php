<?php

print("<h1>20 exs per day</h1> ");

$var = "PHP Tutorial";

print("<h3><a href=\"http://www.wikipedia.com\">".$var."</a></h3>");

# Display browser of client
echo "Your User Agent is :" . $_SERVER ['HTTP_USER_AGENT'];  
print("</br>");
# Display namefile
echo basename($_SERVER['PHP_SELF'])."</br>";

# Display IP address
if(!empty($_SERVER['HTTP_CLIENT_IP']))
{
	$ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
# ip is from proxy
else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
	$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
#localhost
else if(!empty($_SERVER['SERVER_ADDR']))
{
	$ip_address = $_SERVER['SERVER_ADDR'];
}
# ip is from remote adress
else
{
	$ip_address = $_SERVER['REMOTE_ADDR'];
}
echo "IP address: ".$ip_address."</br>";

# Display url
$url = 'http://www.w3resource.com/php-exercises/php-basic-exercises.php';  
$url=parse_url($url);  
echo 'Scheme : '.$url['scheme'].'<br />';  
echo 'Host : '.$url['host'].'<br />';  
echo 'Path : '.$url['path'].'<br />';  

# Regex for replacing first letter
$text = 'PHP Tutorial';  
$text = preg_replace('#(\b[a-z])#i','<span style="color:red;">$1</span>',$text);  
echo $text."</br>";  

# Check wether email is valid
function checkEmail($email)
{
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}
$email = "email@email.com";

print(checkEmail($email)."</br>");

# Display source code of a webpage:
$all_lines = file("http://wikipedia.com");
foreach ($al_lines as $line_num => $line)
{
	echo 'Line #'.$line_num.' :'.htmlspecialchars($line);
}

# Display file when last modified
$file_last_modified = filemtime("index.php");   
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."</br>"; 

# Display number of lines in file
$file_lines = file('index.php');
$counter = 0;
foreach ($file_lines as $line)
{
	$counter ++;
}
echo $counter."</br>";

# Set interval
echo date("h:i:s")."</br>";
sleep(2);
echo date("h:i:s")."</br>";

# Arithmetic operation on strings
$d = "A00";
for ($i=0;$i<6;$i++)
{
	echo preg_replace("#([0-9]$)#", $i, $d)."</br>";
}

echo "<a href='arrays.php'>Arrays PHP</a>";

#header('Location:revisions.html');

