<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $_SESSION["username"] = $username;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION</title>
</head>
<body>
    <form action="session1.php"method="POST" <?php echo $_SERVER["PHP_SELF"]; ?> >
        <label for="username">USERNAME: </label>
        <input type="text" name="username" id="username" required>
        <button type="submit">LOGIN</button>
    </form>
</body>
</html>
