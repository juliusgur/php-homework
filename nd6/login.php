<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    User: <input type="text" name="username">
    Pass: <input type="password" name="password">
    <input type="submit" value="Submit" name="submit">
</form>
<?php if (isset($_SESSION['registered'])): ?>
    <p style="color:#61dc4c">Successfully registred</p>
    <?php unset ($_SESSION['registered']) ?>
<?php else :?>



<?php endif ?>
</body>
</html>