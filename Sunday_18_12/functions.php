<?php

function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
          {
           return 0;
          }
    }
  return 1;
   }
$a = IsPrime(4);
if ($a==0)
echo 'This is not a Prime Number.....'."<br>";
else
echo 'This is a Prime Number..'."<br>";

////////////////////////////////////////////

function reverse_string($string) {
    return strrev($string);
  }
$original_string = "Hello, world!";
$reversed_string = reverse_string($original_string);

echo $reversed_string. "<br>";

/////////////////////////////////////////

function is_lowercase($string) {
    return $string === strtolower($string);
  }

  $lowercase_string = "hello, world";
$uppercase_string = "HELLO, WORLD";

if (is_lowercase($lowercase_string)) {
  echo "The string is all lowercase."."<br>";
}

if (is_lowercase($uppercase_string)) {
  echo "The string is all lowercase."."<br>";
} else {
  echo "The string is not all lowercase."."<br>";
}

///////////////////////////////////////////////

function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
  }

  $a = 1;
$b = 2;

swap($a, $b);

echo "a = $a, b = $b"."<br>"; 

////////////////////////////////////////////////

function isArmstrongNumber($num) {
    // Convert the number to a string so we can access each digit
    $numStr = (string) $num;
    // Get the number of digits in the number
    $numLength = strlen($numStr);
    // Initialize a variable to store the sum of the digits
    $sum = 0;
    // Loop through each digit of the number
    for ($i = 0; $i < $numLength; $i++) {
      // Get the current digit
      $digit = $numStr[$i];
      // Add the cube of the digit to the sum
      $sum += pow($digit, $numLength);
    }
    // Check if the sum is equal to the original number
    return $sum == $num;
  }

  $num = 153;
  if (isArmstrongNumber($num)) {
    echo "$num is an Armstrong number"."<br>";
  } else {
    echo "$num is not an Armstrong number"."<br>";
  }

  //////////////////////////////////////

  function isPalindrome($str) {
    // Remove any non-alphanumeric characters from the string
    $str = preg_replace('/[^a-zA-Z0-9]/', '', $str);
    // Convert the string to lowercase
    $str = strtolower($str);
    // Get the length of the string
    $length = strlen($str);
    // Initialize variables to keep track of the start and end indices
    $start = 0;
    $end = $length - 1;
    // Loop through the string, comparing the characters at the start and end indices
    while ($start < $end) {
      if ($str[$start] != $str[$end]) {
        // If the characters don't match, the string is not a palindrome
        return false;
      }
      // Move the start and end indices inward
      $start++;
      $end--;
    }
    // If we reach this point, the string is a palindrome
    return true;
  }

  $str = "racecar";
if (isPalindrome($str)) {
  echo "$str is a palindrome"."<br>";
} else {
  echo "$str is not a palindrome"."<br>";
}

////////////////////////////////////////////////////

function removeDuplicates($arr) {
    // Use the built-in array_unique function to remove duplicates
    return array_unique($arr);
  }

  $arr = [1, 2, 3, 3, 4, 4, 5];
$uniqueArr = removeDuplicates($arr);


// $uniqueArr will be [1, 2, 3, 4, 5]

///////////////////////////////////////////////////////


  
    

