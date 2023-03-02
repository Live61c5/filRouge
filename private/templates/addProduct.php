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
        include("includes/navbarAdmin.php");
        include("includes/navbar.php");
    ?>

    
    <h1>Ajout Produit</h1>
    <form action="#" enctype="multipart/form-data">
        <label for="nom">Nom du produit</label>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="prix">Prix du produit</label>
        <input type="text" name="prix" id="prix">
        <br>
        <label for="description">Description du produit</label>
        <input type="text" name="description" id="description">
        <br>
        <label for="taille">Taille du produit</label>
        <input type="radio" name="size" id="size">
        <br>
        <label for="couleur">Couleur du produit</label>
        <input type="checkbox" name="color" id="color">
        <br>    
        <label for="imageName">Nom de l'image</label>
        <input type="text" name="imageName" id="imageName">
        <br>
        <label for="image">Image du produit</label>
        <input type="file" name="image" id="image">
        <br>
        <input type="submit" value="Envoyer">
    </form>



    <?php
        include("includes/footer.php");
    ?>
</body>
</html>