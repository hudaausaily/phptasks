<?php 
session_start();
?>
<?php

echo $_SESSION['table'];
echo "Number of lines= " . $_SESSION['numline'] ;
echo "<br>";
echo "Last modified " . date("l, dS F, Y, h:ia", $_SESSION['lastmodified'])."\n";
echo "<br>";
echo $_SESSION['sampleFile'];
echo "<br>";
echo "<br>";
?>