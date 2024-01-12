<?php

if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} else {
    header('Location: cookie.php');
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

    <h1>สวีดัดสวัสดี, <?php echo $username; ?>!</h1>
    <button type="submit" ><a href="Cookie login.php">LOGOUT</a>

</body>
</html>

