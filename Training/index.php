<?php

print("<h1>20 exs per day</h1> ");

$var = "PHP Tutorial";

print("<h3><a href=\"http://www.wikipedia.com\">".$var."</a></h3>");

# Display browser of client 
print("</br>");
# Display namefile
echo $_SERVER["PHP_SELF"];
# Display IP address
echo $_SERVER["HTTP_CLIENT_IP"];
# ip is from proxy
echo $_SERVER["HTTP_X_FORWARDED_FOR"];
#localhost

# ip is from remote adress


# Display url
$arr = parse_url($url);

# Check wether email is valid
filter_var($email, FILTER_VALIDATE_EMAIL);
# Display file when last modified
echo filemtime($filename);
# Display number of lines in file
$file_line = file($filename);
foreach($file_line as $line)
{
	echo $line;
}
# Set delay
sleep(5);
# Arithmetic operation on strings
$d = "A00";
for ($i=0;$i<6;$i++)
{
	echo preg_replace("#([0-9]$)#", $i, $d)."</br>";
}

echo "<a href='arrays.php'>Arrays PHP</a>";

#header('Location:revisions.html');

