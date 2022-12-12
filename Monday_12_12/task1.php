<?php 
session_start();



?>

<?php 

$A=1000;
$B=1200;
$C=1400;
 echo <<< table
<table border=2>
<tr><td><font color = blue> salary of Mr.A is </font></td><td> $A$ </td></tr>
<tr><td><font color = blue> salary of Mr.B is </font></td><td> $B$ </td></tr>
<tr><td><font color = blue> salary of Mr.C is </font></td><td> $C$ </td></tr>
</table>
table;

$_SESSION["table"] = <<< table
<table border=2>
<tr><td><font color = blue> salary of Mr.A is </font></td><td> $A$ </td></tr>
<tr><td><font color = blue> salary of Mr.B is </font></td><td> $B$ </td></tr>
<tr><td><font color = blue> salary of Mr.C is </font></td><td> $C$ </td></tr>
</table>
table;

?>
<?php

echo "<br>";
echo "<br>";
echo "<br>";

$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name); 
$_SESSION["lastmodified"]=$file_last_modified ;
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>

<?php
echo "<br>";

echo "Sample filename : " . basename($_SERVER['PHP_SELF']);
$_SESSION['sampleFile'] = "Sample filename : " . basename($_SERVER['PHP_SELF']);
echo '<br>';
?>