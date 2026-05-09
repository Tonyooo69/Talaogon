<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if(empty($username) || empty($password)) {
        header('Location: signup.php?error=All fields required');
        exit;
    }
    
    $users_file = 'users.json';
    $users = file_exists($users_file) ? json_decode(file_get_contents($users_file), true) : [];
    
    if(isset($users[$username])) {
        header('Location: signup.php?error=Username already exists');
        exit;
    }
    
    $users[$username] = password_hash($password, PASSWORD_DEFAULT);
    file_put_contents($users_file, json_encode($users));
    
    header('Location: login.php?registered=1');
    exit;
}
?>
