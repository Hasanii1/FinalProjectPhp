<?php
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role']!== 'admin'){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body>
    <h1>Welcome Student,<?=htmlspecialchars($_SESSION['email'])?></h1>
    <p>This is the student dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>