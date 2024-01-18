<?php
session_start();
 
    if (!isset($_SESSION["username"])) {

        $username = $_POST["username"];

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
    <h1>Hello, Welcome. <?php echo $_POST["username"]; ?>!</h1>
    <p>Hard to do ain't to fire</p>

    </form>
</body>
</html>
