<?php
print("<h1>20 exs per day</h1> ");

print("<h1>12 Exs here</h1>");
print("<a href='functions.php'>Functions PHP</a>");
line();

function line()
{
	echo "<br><br>";
}

# print a triangle pattern of '*' on screen
$pattern = "";
for ($i = 0; $i < 20; $i++)
{
	$pattern .= str_repeat("*", $i);
	$pattern .= "\n";
}
for ($i = 0; $i < 20; $i++)
{
	$pattern .= str_repeat("*", 20 - $i);
	$pattern .= "\n";
}

print_r($pattern);

# Compute factorial of int
function compute_factorial($n)
{
	if ($n < 2)
	{
		return 1;
	}
	return compute_factorial($n - 1) * $n;
}

# Ffloyd triangle
