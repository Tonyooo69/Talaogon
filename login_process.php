<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    $users_file = 'users.json';
    if(!file_exists($users_file)) {
        header('Location: login.php?error=1');
        exit;
    }
    
    $users = json_decode(file_get_contents($users_file), true);
    
    if(isset($users[$username]) && password_verify($password, $users[$username])) {
        $_SESSION['user'] = $username;
        header('Location: dashboard.php');
        exit;
    }
    
    header('Location: login.php?error=1');
    exit;
}
?>
