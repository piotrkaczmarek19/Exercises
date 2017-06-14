<?php

print("<h1>20 exs per day</h1> ");
print("<h2>4 Exs here</h2>");
print("<a href='json.php'></a>");

function line()
{
	echo "<br><br>";
}

line();

$json =   
'{  
"uglify-js": "1.3.4"  
, "jshint": "0.9.1"  
, "recess": "1.1.8"  
, "connect": "2.1.3"  
, "hogan.js": "2.0.0"  
}';  

function print_dict($key,$val)
{
	echo $key.": ".$val. "<br>";
}

$arr_json = json_decode($json);


array_walk_recursive($arr_json, 'print_dict');

$json1 = json_encode($arr_json);
var_dump($json1);

line();
# display errors

function json_error_message($json_str)  
{  
$json[] = $json_str;  
echo $json;  
foreach ($json as $string)  
{  
echo 'Decoding: ' . $string;  
json_decode($string);  
  
switch (json_last_error())  
{  
case JSON_ERROR_NONE:  
echo ' - No errors';  
break;  
case JSON_ERROR_DEPTH:  
echo ' - Maximum stack depth exceeded';  
break;  
case JSON_ERROR_STATE_MISMATCH:  
echo ' - Underflow or the modes mismatch';  
break;  
case JSON_ERROR_CTRL_CHAR:  
echo ' - Unexpected control character found';  
break;  
case JSON_ERROR_SYNTAX:  
echo ' - Syntax error, malformed JSON';  
break;  
case JSON_ERROR_UTF8:  
echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';  
break;  
default:  
echo ' - Unknown error';  
break;  
}  
}  
}  
json_error_message('{"color1": "Red Color"}');