<?php
// 1. Write a PHP script to get the PHP version and configuration information.
// phpinfo();

// 2. Write a PHP script to display the following strings. 
//  Sample String:
// 'Tomorrow I 'll learn PHP global variables.'
// 'This is a bad command: del c:.'
// Expected Output:
// Tomorrow I'll learn PHP global variables.
// This is a bad command: del c:.

// echo "Tomorrow I 'll learn PHP global variables." . "<br>" . "This is a bad command: del c:."

//3 Create a simple HTML form and accept the user’s name and display the name through a PHP echo statement.

// echo $_POST;

// if(isset($_POST)){
    // print_r($_POST);
// // }

// 4. Write a PHP script to get the client's IP address.
// echo $_SERVER['REMOTE_ADDR']


// 5. Write a PHP script to get the current file name.
// echo FILE;


// 6. Write a PHP script, which will return the following components of the URL https://www.w3schools.com/php/default.asp.
// $str = "https://www.w3schools.com/php/default.asp.";
// print_r (explode("/",$str));



// 7. Write a PHP script, which changes the color of the first character of a word.
// Sample string: PHP Tutorial.

// $text = 'PHP Tutorial';
// $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
// echo $text;




// 8. Write a PHP script to redirect a user to a different page.
//  Expected output: Redirect the user to https://www/.w3schools.com/

// header('Location: https://www.w3schools.com/%27);



    // $arr = array ('red', 'green', 'yellow');
    // print_r($arr);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>
</html> -->