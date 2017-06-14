<?php
print("<h1>20 exs per day</h1> ");

print("<h1>6 Exs here</h1>");
print("<a href='regex.php'>Regular Expressions PHP</a>");
line();

function line()
{
	echo "<br><br>";
}


# Check whether number is prime
function is_prime($n)
{
	$counter = 0;
	for ($i=2;$i<$n;$i++)
	{
		if ($n % $i == 0)
		{
			$counter ++;
		}
		if ($counter > 1 || $n == 1)
		{
			return "false";
		}
	}
}
echo is_prime(7);
line();

# reverse string
function reverse_str($str)
{
	$arr = str_split($str,1);
	$arr = array_reverse($arr);
	$str = implode("", $arr);
	return $str;
	// return strrev($str);
}

$str = "string";
print_r(reverse_str($str));
line();

# palindrome
function is_palindrome($str)
{
	$str = preg_replace(" ", "", $str);
	$new_str = reverse_str($str);
	if ($new_str === trim($str))
	{
		return 1;
	}
	return 0;
}

echo is_palindrome("nurses run");