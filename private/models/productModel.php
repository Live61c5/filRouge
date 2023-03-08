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


// Action pour afficher tous les produits
function showProducts()
{
    $products = getProducts();
    include 'readProducts.php';
}

// Action pour afficher un produit spécifique en fonction de son ID
function showProduct($id)
{
    $product = getProduct($id);
    include 'readProduct.php';
}
// Action pour afficher les produits par catégorie
function showProductsByCategory($id)
{
    $products = getProductsByCategory($id);
    include 'readProducts.php';
}
// Action pour afficher les produits par recherche
function showProductsBySearch($search)
{
    $products = getProductsBySearch($search);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix
function showProductsByPrice($min, $max)
{
    $products = getProductsByPrice($min, $max);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix et catégorie
function showProductsByPriceAndCategory($min, $max, $id)
{
    $products = getProductsByPriceAndCategory($min, $max, $id);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix et recherche
function showProductsByPriceAndSearch($min, $max, $search)
{
    $products = getProductsByPriceAndSearch($min, $max, $search);
    include 'readProducts.php';
}
// Action pour afficher les produits par catégorie et recherche
function showProductsByCategoryAndSearch($id, $search)
{
    $products = getProductsByCategoryAndSearch($id, $search);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix, catégorie et recherche
function showProductsByPriceAndCategoryAndSearch($min, $max, $id, $search)
{
    $products = getProductsByPriceAndCategoryAndSearch($min, $max, $id, $search);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix, catégorie, recherche et ordre
function showProductsByPriceAndCategoryAndSearchAndOrder($min, $max, $id, $search, $order)
{
    $products = getProductsByPriceAndCategoryAndSearchAndOrder($min, $max, $id, $search, $order);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix, catégorie et ordre
function showProductsByPriceAndCategoryAndOrder($min, $max, $id, $order)
{
    $products = getProductsByPriceAndCategoryAndOrder($min, $max, $id, $order);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix, recherche et ordre
function showProductsByPriceAndSearchAndOrder($min, $max, $search, $order)
{
    $products = getProductsByPriceAndSearchAndOrder($min, $max, $search, $order);
    include 'readProducts.php';
}
// Action pour supprimer un produit en fonction de son ID
function deleteProduct($id)
{
    // Vérifiez si le formulaire de suppression a été soumis
    if (isset($_POST['delete'])) {
        // Supprimez le produit du modèle
        deleteProductById($id);

        // Redirigez vers l'action d'affichage des produits après la suppression
        header("Location: index.php?action=showProducts");
    } else {
        // Affichez la vue de confirmation de suppression
        include 'deleteProduct.php';
    }
}