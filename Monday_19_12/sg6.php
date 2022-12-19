<?php
// Start the session
session_start();

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Add the task to the to-do list
  $_SESSION['tasks'][] = $_POST['task'];
}

// Check if the clear button has been clicked
if (isset($_POST['clear'])) {
  // Clear the to-do list
  unset($_SESSION['tasks']);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
</head>
<body>
  <h1>To-Do List</h1>
  <form method="post" action="">
    <input type="text" name="task" placeholder="Add a task">
    <input type="submit" name="submit" value="Add">
    <input type="submit" name="clear" value="Clear">
  </form>
  <h2>Tasks:</h2>
  <ul>
    <?php
    // Display the tasks in the to-do list
    if (isset($_SESSION['tasks'])) {
      foreach ($_SESSION['tasks'] as $task) {
        echo "<li>$task</li>";
      }
    } else {
      echo "<li>No tasks to do</li>";
    }
    ?>
  </ul>
</body>
</html>