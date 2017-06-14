<?php
print("<h1>20 exs per day</h1> ");

print("<h1>12 Exs here</h1>");
print("<a href='functions.php'>Functions PHP</a>");
line();

function line()
{
	echo "<br><br>";
}

# patterns
function triange_pattern($n)
{
	$line = "";
	$anti = -$n/2;
	for ($i=0;$i<$n;$i++)
	{
		if ($anti<0)
		{
			$line .= " *"; 
		}
		else{
			// Get Chars up to last
			$line = substr($line, 0 , -2);
		}
		print($line."<br>");
		$anti ++;
	}
}

triange_pattern(12);

# factorial
function factorial($n)
{
	$total = 1;
	for ($i=1; $i<=$n;$i++)
	{
		$total *= $i;
	}
	return $total;
}
print(factorial(6));
line();
# print combinations
function comb(){
	for ($i=0;$i<10;$i++)
	{
		for ($j=0;$j<10;$j++)
		{
			echo $i.$j.", ";
		} 
	}
}
comb();
line();

# Ffloyd triangle
function floyd($n)
{
	$j = 0;
	$line = 1;
	for($i=1;$i<=$n;$i++)
	{
		echo $i." ";
		$j ++;
		if ($line == $j)
		{
			echo "<br>";
			$j = 0;
			$line ++;
		}
	}
}

floyd(15);