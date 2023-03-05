<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
    <p>Test</p>
    <?php
    if ($_GET['page'] == 'shop') {
        require_once('private/templates/shop.php');
    } 
    elseif ($_GET['page'] == 'connexion') {
        require_once('private/templates/connexion.php');
    }
    elseif ($_GET['page'] == 'deconnexion') {
        require_once('private/templates/deconnexion.php');
    }
    elseif ($_GET['page'] == 'panier') {
        require_once('private/templates/panier.php');
    }
    elseif ($_GET['page'] == 'monCompte') {
        require_once('private/templates/monCompte.php');
    }
    elseif ($_GET['page'] == 'contact') {
        require_once('private/templates/contact.php');
    }
    elseif ($_GET['page'] == 'bills') {
        require_once('private/templates/bills.php');
    }
    else {
        require_once('private/templates/accueil.php');
    }
    ?>


    
</body>
</html>