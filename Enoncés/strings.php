<?php

print("<h1>20 exs per day</h1> ");

print("<a href='math.php'>Math with PHP</a>");

line();

function line()
{
	echo "<br><br>";
}

# capitalize first letter in string

line();

# capitalize first letter in each word

line();
# insert colons every two numbers
function insert_colons($str)
{

}

echo insert_colons('115556');
line();
# check if a string contains another string
function check_str($str1,$str2)
{

}
var_dump(check_str("The quick fox jumped over the dog", "dog"));
var_dump(strpos("The quick fox jumped over the dog", "dog"));

line();

# convert val of a variable to string

line();
# Extract filename


# get last three characters string
line();

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

}
var_dump(string_explode("Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.", "\n"));
line();

# print next character in the alphabet
line();

# print the alphabet

