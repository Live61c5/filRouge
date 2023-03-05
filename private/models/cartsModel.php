<?php
// requetes SQL pour Carts select procedural
function getCarts() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Carts');
    return $query->fetchAll();
}

function getCartsById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Carts WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour Carts insert into procedural
function addCart($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Carts (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour Carts update procedural
function updateCart($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Carts SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour Carts delete procedural
function deleteCart($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Carts WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  