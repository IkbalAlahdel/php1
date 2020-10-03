<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcom php</h1>
    <?php


//p1
// PHP program to calculate the sum of digits 
function sum($num) { 
    $sum = 0; 
    for ($i = 0; $i < strlen($num); $i++){ 
        $sum += $num[$i]; 
    } 
    return $sum; 
} 
  
// Driver Code 
$num = "711"; 
echo sum($num); 


//p2
// Returns maximum in array 
function getMax($array)  
{ 
   $n = count($array);  
   $max = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($max < $array[$i]) 
           $max = $array[$i]; 
    return $max;        
} 
  
// Returns maximum in array 
function getMin($array)  
{ 
   $n = count($array);  
   $min = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($min > $array[$i]) 
           $min = $array[$i]; 
    return $min;        
} 
  
// Driver code 
$array = array(1, 2, 3, 4, 5); 
echo(getMax($array)); 
echo("\n"); 
echo(getMin($array));


//p3
// define array 
$a = array(1, 5, 2, 5, 1, 3, 2, 4, 5); 
      
// print original array 
echo "Original Array : \n"; 
print_r($a); 
 
// remove duplicate values by using  
// flipping keys and values 
$a = array_flip($a); 

// restore the array elements by again  
// flipping keys and values. 
$a = array_flip($a); 

// re-order the array keys 
$a= array_values($a); 

// print updated array 
echo "\nUpdated Array : \n "; 
print_r($a); 

//p4 example of print ,print_r and echo 
$arr = array( "John", "Jacob", "Tom", "Tim");
echo "Array...\n";
foreach( $arr as $value ) {
   echo "Value = $value \n";
}
echo "\nDisplaying Array Values using print...\n";
foreach( $arr as $value ) {
   print( "Value = $value \n");
}
echo "\nDisplaying Array Values using print_r...\n";
print_r($arr);


//p5
//p5-a:JavaScript code within PHP code
echo '<script type="text/JavaScript">  
     prompt("CodingAcademy:Web Camp"); 
     </script>' 
;
?>
<script type="text/javascript"> 
    alert('CodingAcademy:Web Camp"'); 
</script> 
</body>
</html>