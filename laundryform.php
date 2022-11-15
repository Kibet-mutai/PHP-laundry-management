<?php
session_start();

if (!isset($_SESSION['firstname'])) {
    $_SESSION['msg'] = "You must be logged in first";
    header('location: Login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['firstname']);
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry form</title>
</head>
<body>
    <div class="input"></div>
</body>
</html>
