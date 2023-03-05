<?php

// fonction pour sécuriser les inputs
function secureInput($input) 
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
// fonction pour vérifier les inputs
function checkInput($input) 
{
    if (empty($input)) {
        return false;
    } else {
        return true;
    }
}
// fonction pour vérifier les emails
function checkEmail($email) 
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les mots de passe
function checkPassword($password) 
{
    if (preg_match("#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$#", $password)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les noms
function checkName($name) 
{
    if (preg_match("#^[a-zA-ZÀ-ÿ- ]+$#", $name)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les adresses
function checkAddress($address) 
{
    if (preg_match("#^[a-zA-Z0-9À-ÿ- ]+$#", $address)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les codes postaux
function checkZipCode($zipCode) 
{
    if (preg_match("#^[0-9]{5}$#", $zipCode)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les villes
function checkCity($city) 
{
    if (preg_match("#^[a-zA-ZÀ-ÿ- ]+$#", $city)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les numéros de téléphone
function checkPhone($phone) 
{
    if (preg_match("#^[0-9]{10}$#", $phone)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les numéros de carte bancaire
function checkCardNumber($cardNumber) 
{
    if (preg_match("#^[0-9]{16}$#", $cardNumber)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les dates d'expiration
function checkExpirationDate($expirationDate) 
{
    if (preg_match("#^[0-9]{2}/[0-9]{2}$#", $expirationDate)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les cryptogrammes
function checkCryptogram($cryptogram) 
{
    if (preg_match("#^[0-9]{3}$#", $cryptogram)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les quantités
function checkQuantity($quantity) 
{
    if (preg_match("#^[0-9]+$#", $quantity)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les prix
function checkPrice($price) 
{
    if (preg_match("#^[0-9]+(\.[0-9]{1,2})?$#", $price)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les images
function checkImage($image) 
{
    $maxSize = 1000000;
    $validExtensions = array('jpg', 'jpeg', 'gif', 'png');
    if ($image['size'] <= $maxSize) {
        $uploadExtension = strtolower(substr(strrchr($image['name'], '.'), 1));
        if (in_array($uploadExtension, $validExtensions)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
// fonction pour vérifier la size
function checkSize($size) 
{
    if (preg_match("#^[0-9]+$#", $size)) {
        return true;
    } else {
        return false;
    }
}
// fonction pour vérifier les couleurs
function checkColor($color) 
{
    if (preg_match("#^[a-zA-ZÀ-ÿ- ]+$#", $color)) {
        return true;
    } else {
        return false;
    }
}
