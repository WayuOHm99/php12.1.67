<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];

    setcookie('username', $username, time() + (2 * 30), "/");

    header('Location: cookie-f.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>

    <form method="post" action="">
        <label for="username">USERNAME :</label>
        <input type="text" name="username" id="username" required>
        <button type="submit">LOGIN</button>
    </form>

</body>
</html>
