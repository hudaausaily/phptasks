<?php

session_start();

echo $_SESSION['sampleFile'];
echo '<br>';
echo $_SESSION['lastModified'] ;
echo '<br>';
echo $_SESSION['numLines'] ;
echo '<br>';
echo $_SESSION['table'];
echo '<br>';