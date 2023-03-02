<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <?php
        include("includes/navbarAdmin.php");
        include("includes/navbar.php");
    ?>
    <h1>Ajout d'un utilisateur</h1>

    <form action="#" enctype="multipart/form-data">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <br>
        <fieldset>
            <legend>Selectionner un rôle</legend>
            <input type="radio" id="Admin" name="role" value="Admin" checked>
            <label for="Admin">Admin</label>
            <input type="radio" id="Utilisateur" name="role" value="Utilisateur">
            <label for="Utilisateur">Utilisateur</label>
        </fieldset>
        <br>
        <fieldset>
            <legend>Sélectionner un profil</legend>
            <input type="radio" id="particulier" name="profile" value="particulier" checked>
            <label for="particulier">Particulier</label>
            <input type="radio" id="etudiant" name="profile" value="etudiant">
            <label for="etudiant">Étudiant</label>
            <input type="radio" id="etudiantCoiffure" name="profile" value="etudiantCoiffure">
            <label for="etudiantCoiffure">Étudiant Coiffure</label>
            <input type="radio" id="diplomeCoiffure" name="profile" value="diplomeCoiffure">
            <label for="diplomeCoiffure">Diplomé de Coiffure</label>
            <input type="radio" id="orgaAsso" name="profile" value="orgaAsso">
            <label for="orgaAsso">Organisme public ou association</label>
            <input type="radio" id="pro" name="profile" value="pro">
            <label for="pro">Professionnel</label>
        </fieldset>
        <br>
        <!-- A REPRENDRE ICI -->
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre">
        <br>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">
        <br>
        <label for="dateNaissance">Date de naissance</label>
        <input type="text" name="dateNaissance" id="dateNaissance">
        <br>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse">
        <br>
        <label for="codePostal">Code postal</label>
        <input type="text" name="codePostal" id="codePostal">
        <br>
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville">
        <br>
        <label for="pays">Pays</label>
        <input type="text" name="pays" id="pays">
        <br>
        <label for="telephone">Telephone</label>
        <input type="text" name="telephone" id="telephone">
        <br>
        <label for="newsletter">Newsletter</label>
        <input type="checkbox" name="newsletter" id="newsletter">
        <br>
        <label for="avatar">Avatar</label>
        <input type="file" name="avatar" id="avatar">
        <br>
        <input type="submit" value="Envoyer">
    </form>
    
</body>
</html>