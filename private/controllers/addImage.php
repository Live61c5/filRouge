<?php

if isset($_POST['submit']) {
    // 1. vérifier que le formulaire a été soumis
    if (isset($_POST['nom']) && isset($_FILES['photos'])) {
        // 2. vérifier que le fichier a été uploadé
        if ($_FILES['photos']['error'] == 0) {
            // 3. vérifier que le fichier est une image
            $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (in_array($_FILES['photos']['type'], $allowedMimeTypes)) {
                // 4. vérifier que le fichier n'existe pas déjà
                if (!file_exists('images/' . $_FILES['photos']['name'])) {
                    // 5. vérifier que le fichier n'est pas trop gros
                    if ($_FILES['photos']['size'] < 1000000) {
                        // 6. si tout est ok, on peut ajouter l'image dans la base de données
                        // 7. si tout est ok, on peut déplacer le fichier dans le dossier images
                        move_uploaded_file($_FILES['photos']['tmp_name'], 'images/' . $_FILES['photos']['name']);
                        $msg = "Votre fichier a bien été enregistré.";
                    } else {
                        $msg = "Le fichier dépasse la taille autorisée";
                    }
                } else {
                    $msg = "Le fichier existe déjà changez le nom";
                }
            } else {
                $msg = "Le format du fichier n'est pas autorisé";
            }
        } else {
            $msg="Votre mot a bien été enregistré.";
        }
        
    };
};
      