<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <div class="loginSection">
        <h1>Login Sucessful</h1>
        <p class="note">welcome <?php echo $_SESSION['name']; ?></p>
        <br>

        <form action="../api/api.php" method="post">
            <input type="submit" name="logOut" class="btn" value="Logout"><br>
        </form>
    </div>
</body>
</html>