<?php
// Requête préparée pour récupérer les informations des produits avec leurs couleurs et tailles associées
$sql = "SELECT p.id AS product_id, p.name AS product_name, p.description AS product_description, p.price AS product_price,
               c.id AS color_id, c.color AS color_name, c.description AS color_description,
               s.id AS size_id, s.size AS size_name, s.description AS size_description
        FROM products p
        INNER JOIN product_color_size pcs ON pcs.product_id = p.id
        INNER JOIN colors c ON c.id = pcs.color_id
        INNER JOIN sizes s ON s.id = pcs.size_id
        WHERE p.is_enabled = 1 AND c.is_enabled = 1 AND s.is_enabled = 1";

$stmt = $pdo->prepare($sql);
$stmt->execute();

// Récupération des résultats
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Parcours des résultats pour affichage ou traitement ultérieur
foreach ($results as $result) {
    echo 'ID produit: ' . $result['product_id'] . '<br>';
    echo 'Nom produit: ' . $result['product_name'] . '<br>';
    echo 'Description produit: ' . $result['product_description'] . '<br>';
    echo 'Prix produit: ' . $result['product_price'] . '<br>';
    echo 'ID couleur: ' . $result['color_id'] . '<br>';
    echo 'Nom couleur: ' . $result['color_name'] . '<br>';
    echo 'Description couleur: ' . $result['color_description'] . '<br>';
    echo 'ID taille: ' . $result['size_id'] . '<br>';
    echo 'Nom taille: ' . $result['size_name'] . '<br>';
    echo 'Description taille: ' . $result['size_description'] . '<br>';
    echo '<hr>';
}
