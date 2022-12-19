<?php
$script_name = $_SERVER['SCRIPT_NAME'];
$project_root = $_SERVER['DOCUMENT_ROOT'];
echo $script_name."<br>";
echo $project_root."<br>";

// $script_name = basename(__FILE__);
// $project_root = dirname(__FILE__);

// echo $script_name."<br>";
// echo $project_root;

$request_time = $_SERVER['REQUEST_TIME'];
echo "Page requested at: " . date("Y-m-d H:i:s", $request_time);

