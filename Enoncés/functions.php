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
line();
function is_prime($n)
{
	for ($i = 2; $i < $n; $i++)
	{
		if ($n % $i === 0)
		{
			return false;
		}
	}
}
# reverse string
line();

# palindrome
function is_palyndrome($astring)
{
	if (strrev(str_replace(" ", "", $astring)) == str_replace(" ", "", $astring))
	{
		return "this is a palydnrome";
	}
	return "not a palyndrome";
}
echo is_palyndrome("nurses run");