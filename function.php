<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";
$errors = "";
$results = "";

//Register
$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_error)
    die('Connect Error');

if (isset($_POST['reg_user'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
    mysqli_query($mysqli, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "";
    header('Location: todo.php');
}

// //Log in
// if (isset($_POST['login_user'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     if (empty($username)) {
//         array_push($errors, "Username is required");
//     }
//     if (empty($password)) {
//         array_push($errors, "Password is required");
//     }

//     if (count($errors) == 0) {
//         $password = ($password);
//         $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
//         $results = mysqli_query($dbname, $query);
//         echo $result;
//         if (mysqli_num_rows($results) == 2) {
//             $_SESSION['email'] = $email;
//             $_SESSION['success'] = "You are now logged in";
//             header('location: todo.php');
//         }
//     }
// }

//Add tasks

$task = "";
$importance = "";
$id = 0;

if (isset($_POST['save'])) {
    $task = $_POST['task'];
    $importance = $_POST['important'];

    mysqli_query($mysqli, "INSERT INTO tasks (task, important) VALUES ('$task', '$importance')");
}
//delete todo
$ID = "";

if (isset($_POST['del'])) {
    $ID = $_POST['rowid'];
    mysqli_query($mysqli, "DELETE FROM `tasks` WHERE `tasks`.`ID` = $ID");
    header('location:todos.php');
}

//edit todo

$ID = "";
$newTask = "";
$newImp = "";
if (isset($_POST['saveNew'])) {
    $ID = $_POST['rowid'];
    $newTask = $_POST['edTask'];
    $newImp = $_POST['edImp'];
    var_dump($newImp);
    mysqli_query($mysqli, "UPDATE `tasks` SET `task` = '$newTask', `important` = '$newImp' WHERE `tasks`.`ID` = $ID");
    header('location:todos.php');
}
