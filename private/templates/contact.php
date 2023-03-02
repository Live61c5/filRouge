<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filRouge</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <?php
        include("includes/navbarAdmin.php");
        include("includes/navbar.php");
    ?>
    <h1>Nous contacter</h1>
    <form action="contact.php" method="post">
        <div class="form-group">        
            <input type="text" name="nom" placeholder="Nom">
        </div>
        <div class="form-group">        
            <input type="text" name="prenom" placeholder="Prénom">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" name="message" placeholder="Message">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="form-group">
            <input type="submit" value="Envoyer">
        </div>
    </form>
<?php
        include("includes/footer.php");
?>
</body>


</html>

