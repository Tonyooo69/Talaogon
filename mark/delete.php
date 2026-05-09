<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM users2_tb WHERE id = $id";
    if(mysqli_query($conn, $sql)){
        header("Location: view.php");
    }
} 
?>