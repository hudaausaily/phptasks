<?php
class MyClass {
  public function __construct() {
    echo "MyClass class has initialized!"."<br>";
  }
}
$myClass = new MyClass();

//////////////////////////////////

class Introduction {
    public function sayHello($name) {
      echo "Hello All, I am $name"."<br>";
    }
  }

  $introduction = new Introduction();
$introduction->sayHello("Scott");


////////////////////////////////////////////

class Factorial {
    public function calculate($n) {
      $result = 1;
      for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
      }
      return $result;
    }
  }

  $factorial = new Factorial();
$result = $factorial->calculate(5);
echo $result."<br>"; 

///////////////////////////////////////////////

$date1 = new DateTime('2022-12-18');
$date2 = new DateTime('2021-12-18');

$diff = $date1->diff($date2);

echo $diff->format('%y years, %m months, %d days')."<br>";
/////////////////////////////////////////////

date_default_timezone_set('America/New_York');

// Convert a string to a Date object
$date_string = '2022-12-18';
$date = new DateTime($date_string);

// Convert a string to a DateTime object
$datetime_string = '2022-12-18 12:34:56';
$datetime = new DateTime($datetime_string);

// Print the resulting Date and DateTime objects
echo "Date: " . $date->format('Y-m-d') . "\n";
echo "DateTime: " . $datetime->format('Y-m-d H:i:s') . "\n";




