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
        include('includes/navbarAdmin.php');
        include('includes/navbar.php');
    ?>
    <h1>Saisie Image</h1>

    <form action="#" enctype="multipart/form-data"></form>
        <label for="nomPhoto">Nom :</label>
        <input type="text" name="nom">
        
        
        <label for="photos">Photo :</label>
        <input type="file" name="photos">
    </form> 
    <?php
        include('includes/footer.php');
    ?>
</body>
</html>
        

<?php


              