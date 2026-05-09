<?php
include 'db.php';

$id = $_GET['id'];

if(isset($_POST['submit'])){
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $province = $_POST['province'];
    $municipality = $_POST['municipality'];
    $barangay = $_POST['barangay'];

    $sql = "UPDATE users3_tb SET firstname='$firstname', middlename='$middlename', lastname='$lastname', province='$province', municipality='$municipality', barangay='$barangay' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        header('Location: view.php');
        exit();
    }
}

$result = mysqli_query($conn, "SELECT * FROM users3_tb WHERE id='$id'");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<button id="menu-btn" class="hamburger">☰</button>

<div class="container">
    <div class="sidebar" id="sidebar">
        <h3>Welcome</h3>
        <div class="nav-links">
            <a href="index.php">Register</a>
            <a href="view.php" class="active">View User</a>
            <a href="#">Logout</a>
        </div>
    </div>

    <div class="main">
        <div class="form-container">
            <h2>Edit User</h2>
            <form method="post">
                <div class="grid-form">
                    <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" name="fname" value="<?= $user['firstname']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Middlename</label>
                        <input type="text" name="mname" value="<?= $user['middlename']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" name="lname" value="<?= $user['lastname']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <input type="text" name="province" value="<?= $user['province']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Municipality</label>
                        <input type="text" name="municipality" value="<?= $user['municipality']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Barangay</label>
                        <input type="text" name="barangay" value="<?= $user['barangay']; ?>" required>
                    </div>
                    <button type="submit" name="submit">Update User Info</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const sidebar = document.getElementById('sidebar');

    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && !menuBtn.contains(e.target)) {
            sidebar.classList.remove('active');
        }
    });
</script>

</body>
</html>