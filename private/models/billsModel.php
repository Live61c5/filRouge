<?php
// requetes SQL pour Bills select procedural
function getBills() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Bills');
    return $query->fetchAll();
}

function getBillsById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Bills WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour Bills insert into procedural
function addBill($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Bills (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour Bills update procedural
function updateBill($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Bills SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour Bills delete procedural
function deleteBill($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Bills WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  