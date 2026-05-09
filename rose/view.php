<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registered Users</title>
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

    <div class="main" style="display: block; padding-top: 80px;">
        <div style="background: white; padding: 20px; border-radius: 10px;">
            <h2 style="margin-bottom: 20px;">Registered Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th><th>Firstname</th><th>Middlename</th><th>Lastname</th>
                        <th>Province</th><th>Municipality</th><th>Barangay</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'db.php';
                    $result = mysqli_query($conn, "SELECT * FROM users3_tb");
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['firstname']; ?></td>
                        <td><?= $row['middlename']; ?></td>
                        <td><?= $row['lastname']; ?></td>
                        <td><?= $row['province']; ?></td>
                        <td><?= $row['municipality']; ?></td>
                        <td><?= $row['barangay']; ?></td>
                        <td class="action-btns">
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
                            <a href="delete.php?id=<?= $row['id']; ?>" class="btn-delete">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    table { 
        width: 100%; 
        border-collapse: collapse; 
        background: white; 
    }
    th, td { 
        padding: 12px; 
        border: 1px solid #ddd; 
        text-align: left; 
    }
    th { 
        background: #0066ff; 
        color: white; 
    }
    .action-btns { 
        display: flex; 
        gap: 5px; 
    }
    .btn-edit { 
        background: orange; 
        color: white; 
        padding: 5px 10px; 
        text-decoration: none; 
        border-radius: 3px; 
    }
    .btn-delete { 
        background: red; 
        color: white; 
        padding: 5px 10px; 
        text-decoration: none; 
        border-radius: 3px; 
        }
</style>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const sidebar = document.getElementById('sidebar');
    menuBtn.addEventListener('click', () => { sidebar.classList.toggle('active'); });
</script>
</body>
</html>