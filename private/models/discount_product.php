<?php
// pour ajouter le discount d'id 1 au produit d'id 1, on peut utiliser la requête suivante
// INSERT INTO discount_product (discount_id, product_id) VALUES (1, 1);
// fonction qui ajoute un discount à un produit
function addDiscountToProduct($discountId, $productId) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO discount_product (discount_id, product_id) VALUES (?, ?)');
    $result = $query->execute([
        $discountId,
        $productId
    ]);
    return $result;
}
// pour supprimer le discount d'id 1 du produit d'id 1, on peut utiliser la requête suivante
// DELETE FROM discount_product WHERE discount_id = 1 AND product_id = 1;
// fonction qui supprime un discount d'un produit
function deleteDiscountFromProduct($discountId, $productId) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM discount_product WHERE discount_id = ? AND product_id = ?');
    $result = $query->execute([
        $discountId,
        $productId
    ]);
    return $result;
}
// pour supprimer tous les discounts d'un produit, on peut utiliser la requête suivante
// DELETE FROM discount_product WHERE product_id = 1;
// fonction qui supprime tous les discounts d'un produit
function deleteAllDiscountsFromProduct($productId) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM discount_product WHERE product_id = ?');
    $result = $query->execute([
        $productId
    ]);
    return $result;
}
// pour supprimer tous les produits d'un discount, on peut utiliser la requête suivante
// DELETE FROM discount_product WHERE discount_id = 1;
// fonction qui supprime tous les produits d'un discount
function deleteAllProductsFromDiscount($discountId) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM discount_product WHERE discount_id = ?');
    $result = $query->execute([
        $discountId
    ]);
    return $result;
}

// pour récupérer tous les discounts d'un produit, on peut utiliser la requête suivante
// SELECT * FROM discount_product WHERE product_id = 1;
// fonction qui récupère tous les discounts d'un produit
function getDiscountsFromProduct($productId) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM discount_product WHERE product_id = ?');
    $query->execute([
        $productId
    ]);
    return $query->fetchAll();
}
// pour récupérer tous les produits d'un discount, on peut utiliser la requête suivante
// SELECT * FROM discount_product WHERE discount_id = 1;
// fonction qui récupère tous les produits d'un discount
function getProductsFromDiscount($discountId) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM discount_product WHERE discount_id = ?');
    $query->execute([
        $discountId
    ]);
    return $query->fetchAll();
}

