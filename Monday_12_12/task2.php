<?php

session_start();

echo "Sample filename : " . basename($_SERVER['PHP_SELF']);
$_SESSION['sampleFile'] = "Sample filename : " . basename($_SERVER['PHP_SELF']);
echo '<br>';


echo "Last modified : " . date("F d Y H:i:s.", filemtime(basename($_SERVER['PHP_SELF'])));
$_SESSION['lastModified'] = "Last modified : " . date("F d Y H:i:s.", filemtime(basename($_SERVER['PHP_SELF'])));
echo '<br>';



echo '<br>';




$lines = count(file(__FILE__)) - 1;
$_SESSION['numLines'] ="Number of lines= ". $lines;
echo "Number of lines= ". $lines;
echo '<br>';


echo '<br>';


?>






<?php
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST['ASalary'];
    $b = $_POST['BSalary'];
    $c = $_POST['CSalary'];
}


$_SESSION['table'] =  ("<table style='border:2px solid black ;  border-collapse: collapse;
'>
<tr style='border:2px solid black' >
    <td style='color : blue; border:2px solid black ; border-collapse: collapse'> Salary of Mr A is <td>
    <td>$a$</td>
</tr>
<tr style='border:2px solid black' >
    <td style='color : blue; border:2px solid black ;'> Salary of Mr B is <td>
    <td>$b$</td>
</tr>
<tr style='border:2px solid black' >
    <td style='color : blue; border:2px solid black ;'> Salary of Mr C is <td>
    <td>$c$</td>
</tr>"
);

echo $_SESSION['table'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <br>
        <label>Input Salary for Mr. A</label>
        <br>
        <input type="number" name="ASalary">
        <br>
        <label>Input Salary for Mr. B</label>
        <br>
        <input type="number" name="BSalary">
        <br>
        <label>Input Salary for Mr. C</label>
        <br>
        <input type="number" name="CSalary">
        <input type="submit">
    </form>
</body>
</html>