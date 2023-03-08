<?php
// Connexion BDD
function dbConnect() 
{
    try {
        $db = new PDO(
            "mysql:host=localhost;dbname=filRouge;charset=utf8",
            "root",
            ""
        );
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    };
}
// Fonction pour récupérer les produits
function getProducts() 
{
    $db = dbConnect();
    $req = $db->query('SELECT * FROM products');
    return $req;
}

function getProduct($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE id = ?');
    $req->execute(array($id));
    $product = $req->fetch();
    return $product;
}

// fonction pour récupérer les catégories
function getCategories() 
{
    $db = dbConnect();
    $req = $db->query('SELECT * FROM categories');
    return $req;
}

function getCategory($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM categories WHERE id = ?');
    $req->execute(array($id));
    $category = $req->fetch();
    return $category;
}


// fonction pour récupérer les produits par catégorie, recherche, prix, catégorie et recherche, prix et recherche, prix et catégorie,catégorie et recherche
function getProductsByCategory($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE category_id = ?');
    $req->execute(array($id));
    return $req;
}

function getProductsBySearch($search) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE name LIKE ?');
    $req->execute(array('%' . $search . '%'));
    return $req;
}

function getProductsByPrice($min, $max) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ?');
    $req->execute(array($min, $max));
    return $req;
}

function getProductsByPriceAndCategory($min, $max, $id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND category_id = ?');
    $req->execute(array($min, $max, $id));
    return $req;
}

function getProductsByPriceAndSearch($min, $max, $search) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND name LIKE ?');
    $req->execute(array($min, $max, '%' . $search . '%'));
    return $req;
}

function getProductsByCategoryAndSearch($id, $search) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE category_id = ? AND name LIKE ?');
    $req->execute(array($id, '%' . $search . '%'));
    return $req;
}

// fonction qui select la photo par son id
function getPhotoById($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM photos WHERE id = ?');
    $req->execute(array($id));
    $photo = $req->fetch();
    return $photo;
}

// fonction pour récupérer les utilisateurs par id
function getUserById($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM users WHERE id = ?');
    $req->execute(array($id));
    $user = $req->fetch();
    return $user;
}

function getUsers() 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM users');
    $req->execute(array());
    $users = $req->fetch();
    return $users;
}

// function getProductsByPriceAndCategoryAndSearch($min, $max, $id, $search) 
// {
//     $db = dbConnect();
//     $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND category_id = ? AND name LIKE ?');
//     $req->execute(array($min, $max, $id, '%' . $search . '%'));
//     return $req;
// }

// function getProductsByPriceAndCategoryAndSearchAndOrder($min, $max, $id, $search, $order) 
// {
//     $db = dbConnect();
//     $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND category_id = ? AND name LIKE ? ORDER BY price ' . $order);
//     $req->execute(array($min, $max, $id, '%' . $search . '%'));
//     return $req;
// }

// function getProductsByPriceAndCategoryAndOrder($min, $max, $id, $order) 
// {
//     $db = dbConnect();
//     $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND category_id = ? ORDER BY price ' . $order);
//     $req->execute(array($min, $max, $id));
//     return $req;
// }

// function getProductsByPriceAndSearchAndOrder($min, $max, $search, $order) 
// {
//     $db = dbConnect();
//     $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND name LIKE ? ORDER BY price ' . $order);
//     $req->execute(array($min, $max, '%' . $search . '%'));
//     return $req;
// }


// fonction pour récupérer les évaluations
function getRatings() 
{
    $db = dbConnect();
    $req = $db->query('SELECT * FROM ratings');
    return $req;
}

function getRating($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM ratings WHERE id = ?');
    $req->execute(array($id));
    $rating = $req->fetch();
    return $rating;
}


// fonction pour récupérer les commentaires
function getComments() 
{
    $db = dbConnect();
    $req = $db->query('SELECT * FROM comments');
    return $req;
}

function getComment($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM comments WHERE id = ?');
    $req->execute(array($id));
    $comment = $req->fetch();
    return $comment;
}

// fonction pour récupérer les commentaires par produit
function getCommentsByProduct($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM comments WHERE product_id = ?');
    $req->execute(array($id));
    return $req;
}

// fonction pour récupérer les commentaires par évaluation
function getCommentsByRating($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM comments WHERE rating_id = ?');
    $req->execute(array($id));
    return $req;
}


