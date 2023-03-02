<?php

function dbConnect() 
{
    try {
        $db = new PDO(
            "mysql:host=localhost;dbname=boutiqueDuCoiffeur;charset=utf8",
            "root",
            ""
        );
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    };
}

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

function getCommentsByProduct($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM comments WHERE product_id = ?');
    $req->execute(array($id));
    return $req;
}

function getCommentsByRating($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM comments WHERE rating_id = ?');
    $req->execute(array($id));
    return $req;
}


