<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('test.php') ?>
    <?php 
       $username = $_POST["username"];
    ?>
    <h1><?php echo $username ?></h1>
    <form action="" method="post">
    <input type="text" name="username" value="<?php echo $username; ?>">
    <input type="submit" value="Send">
</form>
</body>
</html>