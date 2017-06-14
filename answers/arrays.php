<?php
print("<h1>20 exs per day</h1> ");
print('<a href="for_loops.php">For loops</a>');
# Sorts array by keys and prints them
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

ksort($ceu);
foreach ($ceu as $country=>$capital)
{
	print("<li> $country: $capital </li>");
}

# delete an element from the array and proceed to normalize the values
$x = array(1,2,3,4,5,6);


# choosing a key and deleting corresponding value from array
$key = rand(0,sizeof($x)-1);
unset($x[$key]);

for($i=$key+1;$i<sizeof($x);$i++)
{
	$x[$i] --;

}
var_dump($x);
echo '<br>';
# Read JSON and parse it
$a = '{"Title": "The Cuckoos Calling",  
"Author": "Robert Galbraith",  
"Detail":  
{   
"Publisher": "Little Brown"  
 }  
  }';  

function print_dict($value,$key)
{
	echo "$key: $value <br>";
}

$json = json_decode($a, true);
array_walk_recursive($json, "print_dict");

echo '<br>';
array_splice($x, 4, 1, "hello");
var_dump($x);

# Sort by ascending value
$alist = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
array_multisort($alist, SORT_ASC);
echo "<br>";

# Return five lowest values
$alist = range(70,100,1);
array_multisort($alist,SORT_ASC);
for ($i=0; $i<5;$i++)
{
	echo $alist[$i]."<br>";
}

# Capitalize a string
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
foreach ($Color as $key=>$value)
{
	strtoupper($value);
}

# return longest and shortest string in array
$alist = array("abcd","abc","de","hjjj","g","wer");
$new_list = array_map('strlen', $alist);
echo min($new_list)."<br>";
echo max($new_list)."<br>";

# Sort an array according to another array as a priority list
function list_cmp($a, $b)   
{   
  global $order;   
  
  foreach($order as $key => $value)   
    {   
      if($a==$value)   
        {   
          return 0;   
          break;   
        }   
  
      if($b==$value)   
        {   
          return 1;   
          break;   
        }   
    }   
}   
$order[0] = 1;  
$order[1] = 3;   
$order[2] = 4;   
$order[3] = 2;   
  
$array[0] = 2;  
$array[1] = 1;   
$array[2] = 3;   
$array[3] = 4;   
$array[4] = 2;   
$array[5] = 1;   
$array[6] = 2;   
  
usort($array, "list_cmp");   
  
print_r($array);
echo "<br><br>";   

# Sorting subnets. Callback takes x and y as arg
# because usort compares two values of the array each loop
function sort_subnets($x,$y)
{
  $x_arr = explode(".", $x);
  $y_arr = explode(".", $y);

  for ($i=0;$i<3;$i++)
  {
    if ($x_arr[$i] < $y_arr[$i])
    {
      return -1;
    }
    elseif ($x_arr[$i] > $y_arr[$i])
    {
      return 1;
    }
  }
  return -1;
}
  
$subnet_list =   
array('192.169.12',  
'192.167.11',  
'192.169.14',  
'192.168.13',  
'192.167.12',  
'122.169.15',  
'192.167.16'  
);  
usort($subnet_list, 'sort_subnets');  
print_r($subnet_list);  
echo "<br><br>";

# Sort multi array according to timestamp
$arra[0]["timestamp"] = "2025731470";   
$arra[1]["timestamp"] = "2025731450";   
$arra[2]["timestamp"] = "1025731456";   
$arra[3]["timestamp"] = "1025731460";   
$arra[0]["user_name"] = "Sana";   
$arra[1]["user_name"] = "Illiya";   
$arra[2]["user_name"] = "Robin";   
$arra[3]["user_name"] = "Samantha"; 

function convert_timestamp($timestamp){   
    $limit=date("U");   
    $limiting=$timestamp-$limit;   
    return date ("Ymd", mktime (0,0,$limiting));   
}   

function cmp($a,$b)
{
  $l = convert_timestamp($a['timestamp']);
  $k = convert_timestamp($b['timestamp']);

  if ($l == $k)
  {
    # Compare usernames if dates are equal
    return strcmp($a['user_name'],$b['user_name']);
  }
  else
  {
    return strcmp($l,$k);
  }
}

//sort array   
usort($arra, "cmp");   
  
//print sorted info   
while (list ($key, $value) = each ($arra)) {   
    echo "\$arra[$key]: ";   
    echo $value["transaction_id"];   
    echo " user_name: ";   
    echo $value["user_name"];   
    echo "\n";   
}   
echo "<br><br>";

# Sort Array according to specific key
function column_Sort($unsorted, $column) {   
    $sorted = $unsorted;   
    for ($i=0; $i < sizeof($sorted)-1; $i++) {   
      for ($j=0; $j<sizeof($sorted)-1-$i; $j++)   
        if ($sorted[$j][$column] > $sorted[$j+1][$column]) {   
          $tmp = $sorted[$j];   
          $sorted[$j] = $sorted[$j+1];   
          $sorted[$j+1] = $tmp;   
      }   
    }   
    return $sorted;   
}   

$my_array = array();   
$my_array[0]['name'] = 'Sana';   
$my_array[0]['email'] = 'sana@example.com';   
$my_array[0]['phone'] = '111-111-1234';   
$my_array[0]['country'] = 'USA';   
  
$my_array[1]['name'] = 'Robin';   
$my_array[1]['email'] = 'robin@example.com';   
$my_array[1]['phone'] = '222-222-1235';   
$my_array[1]['country'] = 'UK';   
  
$my_array[2]['name'] = 'Sofia';   
$my_array[2]['email'] = 'sofia@example.com';   
$my_array[2]['phone'] = '333-333-1236';   
$my_array[2]['country'] = 'India';   
print_r(column_Sort($my_array, 'name'));

echo "<br><br>";

# Shuffle an array preserving key value pairs
function shuffle_assoc($alist)
{
  $keys = array_keys($alist);
  shuffle($keys);
  $sorted = [];

  foreach ($keys as $key)
  {
    $sorted[$key] = $alist[$key];
  }

  return $sorted;
}
$colors = array("color1"=>"Red", "color2"=>"Green", "color3"=>"Yellow");  
  
print_r(shuffle_assoc($colors));
echo "<br><br>";

# Generate alphanumeric password
function generate_password()
{
  $alpha = range("a","z");
  $nums = range(0,9);
  
  # Capitalizing some letters
  for($i=0;$i<rand(1,25);$i++)
  {
    strtoupper($alpha[$i]);
  }

  for ($i=0;$i<9;$i++)
  {
    if(rand(0,1)>=0.5)
    {
      $pass .= $alpha[rand(0,25)];
    }
    else
    {
      $pass .= $nums[rand(0,9)];
    }
  }

  return $pass;
}

echo generate_password();
echo "<br><br>";

# Return index of max value in array
function get_index_max($alist)
{
  arsort($alist);
  $idx = key($alist);

  return $idx;
}

echo get_index_max([5,6,8,2,3,9]);

# Get extension of a file
$path='example.txt';  
$ext = pathinfo($path, PATHINFO_EXTENSION);

# search match for a value within the values of an array
function arr_search($alist, $pattern)
{
  reset($alist);
  while (list($key, $val) = each($alist))
  {
    if(preg_match("#$pattern#i",$val))
    {
      return "Found at $key: $val";
    }
  }
  return "Didn't find";
}
$exercises = array("part1"=>"PHP array", "part2"=>"PHP String", "part3"=>"PHP Math");  
echo arr_search($exercises, "Math");  
echo "<br><br>";

# Trim values within an array
$colors = array( "Red", " Green", "Black ", " White ");   
print_r($colors);  
array_walk($colors, create_function('&$val', '$val = trim($val);'));   
print_r($colors);  

echo "<br><br>";

# Create a multidimensional array for a single index
function unique_array($my_array, $key) {   
    $result = array();   
    $i = 0;   
    $key_array = array();   
      
    foreach($my_array as $val) {   
        if (!in_array($val[$key], $key_array)) {   
            $key_array[$i] = $val[$key];   
            $result[$i] = $val;   
        }   
        $i++;   
    }   
    return $result;   
}    
  
$students = array(   
    0 => array("city_id"=>"1", "name"=>"Sara",  "mobile_num"=>"1111111111"),   
    1 => array("city_id"=>"2", "name"=>"Robin", "mobile_num"=>"2222222222"),   
    2 => array("city_id"=>"1", "name"=>"Sonia", "mobile_num"=>"3333333333"),   
);   
  
print_r(unique_array($students, "city_id")); 
echo "<br><br>";
# Remove duplicates
function remove_duplicates($arr)
{
    $arr = array_keys(array_flip($arr));
    return $arr;
}

$colors = array(   
  0 => 'Red',   
  1 => 'Green',   
  2 => 'White',   
  3 => 'Black',   
  4 => 'Red',   
);   
  
$numbers = array(   
  0 => 100,   
  1 => 200,   
  2 => 100,   
  3 => -10,   
  4 => -10,   
  5 => 0,   
);   
var_dump(remove_duplicates($numbers));
echo "<br><br>";
# Stopped at: arrays 40 

# Merge two comma separated lists with unique values
$list1 = "4, 5, 6, 7";  
$list2 = "4, 5, 7, 8";

$result = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));  
echo $result."\n";  
echo "<br><br>"; 

# Remove specified value if doublon from array
function array_uniq($my_array, $value)   
{   
    $count = 0;   
      
    foreach($my_array as $array_key => $array_value)   
    {   
        if ( ($count > 0) && ($array_value == $value) )   
        {   
            unset($my_array[$array_key]);   
        }   
          
        if ($array_value == $value) $count++;   
    }   
      
    return array_filter($my_array);   
}   
$numbers = array(4, 5, 6, 7, 4, 7, 8);  
  
print_r(array_uniq($numbers, 7));
echo "<br><br>";
# Difference between two arrays
function diff($a,$b)
{
  return strcmp( implode("", $a), implode("", $b) );
}

$color1 = array( array('Red', 80), array('Green', 70), array('white', 60) );   
          
$color2 = array( array('Green', 70), array('Black', 95) );  

$color  = array_udiff($color1,$color2,"diff");
print_r($color);
echo "<br><br>";
# Check if vals in arr are strings
$arr = array("b","5"," b", "b");
print_r(array_map("is_string",$arr));
echo "<br><br>";

# array union
function array_union($x, $y)  
   {   
      $aunion=  array_merge(  
            array_intersect($x, $y),  
            array_diff($x, $y),       
            array_diff($y, $x)        
        );  
        return $aunion;  
   }  
$a = array(1, 2, 3, 4);  
$b = array(2, 3, 4, 5, 6);  
print_r(array_union($a, $b));
echo "<br><br>";
