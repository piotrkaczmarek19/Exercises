<?php
print("<h1>20 exs per day</h1> ");

print("<h1>7 Exs here</h1>");
print("<a href='date.php'>dates PHP</a>");
line();

function line()
{
	echo "<br><br>";
}

# check whether a string contains a given string/word
function check_string($astring, $aword)
{

}
echo check_string("A quick fox jumped the lazy dog", "fox");
line();
# Remove last word from a string
function remove_last_word($astring)
{

}

echo remove_last_word("The quick brown fo4x");
line();
# remove whitespaces from a string
function remove_whitespace($astring)
{

}

echo remove_whitespace("The quick     brown fo4x");
line();
# remove non alpha numeric except comma and dot
function remove_non_alpha($astring)
{

}
echo remove_non_alpha("The \ qu.ic,k brow/n fo4x");
line();
# remove \n from a script
function remove_line($astring)
{

}
echo remove_line("Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.");
line();
# extract text in parenthesis
function extract_parenthesis($astring)
{

}

print_r(extract_parenthesis("The quick brown (fox)"));
line();

# remove all non word except whitespaces
function remove_all_non_alpha($astring)
{

}

echo remove_all_non_alpha("abcde$ddfd @abcd )der]");