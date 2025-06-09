<?php

session_start();
require_once ('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);


    if(empty($email) || empty($password)){
        echo "Please fill in all fields!";
        exit;
    }


    $stmt = $conn->prepare("SELECT id, email, password, role FROM users WHERE email = ?");
    $stmt-> execute([$email]);
     $user = $stmt->fetch(PDO::FETCH_ASSOC);

    


     if($user && password_verify($password,$user['password'])){
        $_SESSION['user_id'] = $user['id'];
         $_SESSION['email'] = $user['email'];
          $_SESSION['role'] = $user['role'];


        if($user['role'] == 'admin'){
            header("Location: admin_dashboard.php");
            exit;
        }elseif($user['role'] == 'student'){
            header("Location: student_dashboard.php");
            exit;
        }else{
            "Unknown role.";
        }
        }else{
            echo "Invalid email or password.";
        }
    }
?>