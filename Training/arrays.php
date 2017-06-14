<?php
print("<h1>20 exs per day</h1> ");
print('<a href="for_loops.php">For loops</a>');
# Sorts array by keys and prints them

# delete an element from the array and proceed to normalize the values
$x = array(1,2,3,4,5,6);

# Read JSON and parse it with array_walk_recursive()
$a = '{"Title": "The Cuckoos Calling",  
"Author": "Robert Galbraith",  
"Detail":  
{   
"Publisher": "Little Brown"  
 }  
  }';  

# Sort by ascending value with array_multi_sort()
$alist = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

# Return five lowest values
$alist = range(70,100,1);

# Capitalize each string in the array
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

# return lengths of longest and shortest string in array with array_map()
$alist = array("abcd","abc","de","hjjj","g","wer");

# Sort an array according to another array as a priority list using usort()
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
  
# Sorting subnets using usort
$subnet_list =   
array('192.169.12',  
'192.167.11',  
'192.169.14',  
'192.168.13',  
'192.167.12',  
'122.169.15',  
'192.167.16'  
);  


# Sort multi array according to timestamp using usort 
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

# Sort Array according to specific key using bubble sort
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

# Shuffle an array preserving key value pairs without using asort()
$colors = array("color1"=>"Red", "color2"=>"Green", "color3"=>"Yellow");  

# Generate alphanumeric password

# Return index of max value in array
$arra = [5,6,8,2,3,9];

# Get extension of a file
$file='example.txt';  

# search match for a value within the values of an array and return $key
$exercises = array("part1"=>"PHP array", "part2"=>"PHP String", "part3"=>"PHP Math"); 

echo arr_search($exercises, "Math");  
echo "<br><br>";

# Trim values within an array using array_walk()
$colors = array( "Red", " Green", "Black ", " White ");   

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

# Merge two comma separated string lists, remove doublons
$list1 = "4, 5, 6, 7";  
$list2 = "4, 5, 7, 8";

echo $result."\n";  
echo "<br><br>"; 

# Remove specified value if doublon from array without using array_flip()
function array_uniq($my_array, $value)   
{   
 
}   
$numbers = array(4, 5, 6, 7, 4, 7, 8);  

print_r(array_uniq($numbers, 7));
echo "<br><br>";

# Difference between two multi dimensionnal arrays using udiff
$color1 = array( array('Red', 80), array('Green', 70), array('white', 60) );   
$color2 = array( array('Green', 70), array('Black', 95) );  

echo "<br><br>";

# Check if vals in arr are strings using array_map()
$arr = array("b","5"," b", "b");

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
