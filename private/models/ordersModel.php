<?php
// requetes SQL pour Orders select procedural
function getOrders() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Orders');
    return $query->fetchAll();
}

function getOrdersById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Orders WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour Orders insert into procedural
function addOrder($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Orders (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour Orders update procedural
function updateOrder($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Orders SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour Orders delete procedural
function deleteOrder($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Orders WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  