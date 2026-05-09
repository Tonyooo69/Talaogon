<?php
include 'db.php';
if(isset($_POST['submit'])){
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $province = $_POST['province'];
    $municipality = $_POST['municipality'];
    $barangay = $_POST['barangay'];

    $sql = "INSERT INTO users2_tb (firstname,middlename,lastname,province,municipality,barangay) VALUES ('$firstname', '$middlename', '$lastname', '$province', '$municipality', '$barangay')";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<button id="menu-btn" class="hamburger">☰</button>

<div class="container">
    <div class="sidebar" id="sidebar">
        <h3>Welcome</h3>
        <div class="nav-links">
            <a href="index.php" class="active">Register</a>
            <a href="view.php">View User</a>
            <a href="#">Logout</a>
        </div>
    </div>

    <div class="main">
        <div class="form-container">
            <h2>Registration Form</h2>
            <form method="POST">
                <div class="grid-form">
                    <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" name="fname" required>
                    </div>
                    <div class="form-group">
                        <label>Middlename</label>
                        <input type="text" name="mname" required>
                    </div>
                    <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" name="lname" required>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <input type="text" name="province" required>
                    </div>
                    <div class="form-group">
                        <label>Municipality</label>
                        <input type="text" name="municipality" required>
                    </div>
                    <div class="form-group">
                        <label>Barangay</label>
                        <input type="text" name="barangay" required>
                    </div>
                    <button type="submit" name="submit">Submit</button>
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