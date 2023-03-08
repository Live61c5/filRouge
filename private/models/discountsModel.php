<?php
// requetes SQL pour Discounts select procedural
function getDiscounts() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Discounts');
    return $query->fetchAll();
}

function getDiscountsById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Discounts WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour Discounts insert into procedural
function addDiscount($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Discounts (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour Discounts update procedural
function updateDiscount($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Discounts SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour Discounts delete procedural
function deleteDiscount($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Discounts WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}

