<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
</head>
<body>

<form action="login.php" method="POST">
<input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">LOGIN</button>
</form>

<?php
    if (isset($_SESSION['id'])) {
        echo $_SESSION['id'];
    } else {
        echo "You are not logged in!";
    }
?>

<br><br><br>
    
<form action="signup.php" method="POST">
    <input type="text" name="first" placeholder="Firstname"><br>
    <input type="text" name="last" placeholder="Lastname"><br>
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">SIGN UP</button>
</form>

<br><br><br>

<form action="logout.php">
    <button>LOG OUT</button>
</form>

</body>
</html>