<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <?php
        include("includes/navbar.php");
    ?>
    <form action="accueil.php" method="post">
        <input type="text" name="email" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Connexion">
    </form>
    <?php
        include("includes/footer.php");
    ?>
</body>
</html>
