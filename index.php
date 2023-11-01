<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>login</h1>
        <?php if (!isset($_SESSION['username'])) {?>
        <form method="POST" action="register.php">
            <label for="login">Логин</label>
            <input type="text" name="login">
            <label for="password">Пароль</label>
            <input type="password" name="password">
            <input type="submit" value="войти">

        </form>
        <?php } else {?>
            <div><?php echo $_SESSION['username'] ?></div>
            <?php }?>
    </div>
</body>
</html>