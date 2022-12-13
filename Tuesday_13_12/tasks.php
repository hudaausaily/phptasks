<?php
$color = array('white', 'green', 'red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
?>

<?php
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>

<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
// asort($ceu) ;
foreach($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}
echo "<br>";
?>

<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."<br>";
echo "<br>"
?>

<?php
$original = array( '1','2','3','4','5' );

foreach ($original as $x) 
{echo "$x ";}
echo "--->";
$inserted = '*';
array_splice( $original, 3, 0, $inserted ); 
foreach ($original as $x) 

{echo "$x ";}
echo "<br>";
echo "<br>";
?>

<?php

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {

    echo "<pre>";
    echo "" . $key . " = " . $val . "\n";
    echo "</pre>";

}

?>

<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
";
echo "<br>" ;
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>" ;
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
echo "<br>" ;
?>

<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
echo "<br>";
echo "<pre>";
print_r($result);
echo "<br>" ;
echo "</pre>";
?>



<?php
// function array_change_value_case($input, $ucase)
// {
// $case = $ucase;
// $narray = array();
// if (!is_array($input))
// {
// return $narray;
// }
// foreach ($input as $key => $value)
// {
// if (is_array($value))
// {
// $narray[$key] = array_change_value_case($value, $case);
//  continue;
// }
// $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
// }
// return $narray;
// }
// $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');


// $myColor = array_change_value_case($Color,CASE_UPPER);
// echo "<pre>";
// print_r($myColor);
// echo "</pre>";
?>

<?php
function array_change_value_case($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_change_value_case($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo "<pre>";
$myColor = array_change_value_case($Color,CASE_LOWER);
print_r($myColor);
echo "</pre>";
echo "<br>";
?>

<?php
 echo implode(",",range(200,250,4))."\n";
 echo "<br>";
 echo "<br>";
?>

<?php
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);

echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
echo "<br>";
echo "<br>";

?>

<?php
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "<br>";
echo "<br>";
?>



<?php
function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(2,0,10,12,6))."\n");
?>
    


