<?php
session_start();
if(false === isset($_POST['name'], $_POST['age'], $_POST['salary'], $_POST['mood'])) 
{
    header('Location: /Task2c.php');
    exit();
}


$user = [
    'name' => $_POST['name'],
    'age' => $_POST['age'],
    'salary' => $_POST['salary'],
    'mood' => $_POST['mood']
];

$_SESSION['user'] = $user;

echo '<ul>';
foreach ($user as $key => $value) 
{
    echo "<li> $key - $value </li>";
}
echo '</ul>';

?>

<!DOCTYPE html>
<p>
  <a href="task3.php">Task 2c</a>.
</p>