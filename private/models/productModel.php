<?php

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
function getProductsByPriceAndCategoryAndSearch($min, $max, $id, $search) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND category_id = ? AND name LIKE ?');
    $req->execute(array($min, $max, $id, '%' . $search . '%'));
    return $req;
}

function getProductsByPriceAndCategoryAndSearchAndOrder($min, $max, $id, $search, $order) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND category_id = ? AND name LIKE ? ORDER BY price ' . $order);
    $req->execute(array($min, $max, $id, '%' . $search . '%'));
    return $req;
}

function getProductsByPriceAndCategoryAndOrder($min, $max, $id, $order) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND category_id = ? ORDER BY price ' . $order);
    $req->execute(array($min, $max, $id));
    return $req;
}

function getProductsByPriceAndSearchAndOrder($min, $max, $search, $order) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND name LIKE ? ORDER BY price ' . $order);
    $req->execute(array($min, $max, '%' . $search . '%'));
    return $req;
}