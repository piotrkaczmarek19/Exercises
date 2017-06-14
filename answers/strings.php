<?php

print("<h1>20 exs per day</h1> ");

print("<a href='math.php'>Math with PHP</a>");

line();

function line()
{
	echo "<br><br>";
}

# capitalize first letter in string
print(ucfirst("The quick fox jumped over the dog"));

line();

# capitalize first letter in each word
print(ucwords("The quick fox jumped over the dog"));
line();
# insert colons every two numbers
function insert_colons($str)
{
	return substr(chunk_split($str, 2 , ":"),0,-1);
}

echo insert_colons('115556');
line();
# check if a string contains another string
function check_str($str1,$str2)
{
	return strpos($str,$str2);
}
var_dump(check_str("The quick fox jumped over the dog", "dog"));
var_dump(strpos("The quick fox jumped over the dog", "dog"));

line();

# convert val of a variable to string
var_dump(strval(15));
line();
# Extract filename
$pattern = "#/(\w+)\.\w{1,3}\?#";
preg_match($pattern, 'www.example.com/public_html/index.php?q=ee', $match);
var_dump($match[1]);

line();
$pattern = "#\w+(@{1})#";
var_dump(preg_replace($pattern,'1$1', 'rayy@example.com'));

# get last three characters string
line();
echo substr('rayy@example.com', -3);
line();
# string diff
$str1 = "football";
$str2 = "footboll";
var_dump(strspn($str1,$str2));

line();
$var = strspn("42 est5 la réponse, mais quelle est la question.", "1234567890");
echo $var;
line();
# Put a string in an array
function string_explode($str, $separator)
{
	return explode($separator, $str);
}
var_dump(string_explode("Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.", "\n"));
line();
# get filename
function get_filename($str)
{
	$pattern = "#/(\w+)\.\w{1,3}\?#";
	$name = preg_match($pattern, $str, $match);
	return $match[1];
}

print_r(get_filename("http://www.w3resource.com/index.php?q=eee"));
line();
echo basename("http://www.w3resource.com/index.php?q=eee");
line();

# print next character in the alphabet
$letter = "a";
echo ++$letter;
line();
# bin to hex
$str = 0;  
echo bin2hex($str);
line();

$pattern = "#[\"\\\*:\-/\+]#";
echo preg_replace($pattern, " ", '\"\1+2/3*2:2-3/4*3');

line();

preg_match("#(\w+\s){5}#", "The quick brown fox jumps over the lazy dog", $match);
echo $match[0];

line();

# print the alphabet
$alpha = "a";
$str = $alpha;
while($alpha < "z")
{
	$str .= ++$alpha;
}
echo $str;
