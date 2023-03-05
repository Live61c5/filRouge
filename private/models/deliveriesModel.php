<?php
// requetes SQL pour Deliveriess select procedural
function getDeliveriess() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Deliveriess');
    return $query->fetchAll();
}

function getDeliveriessById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Deliveriess WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour Deliveriess insert into procedural
function addDeliveries($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Deliveriess (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour Deliveriess update procedural
function updateDeliveries($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Deliveriess SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour Deliveriess delete procedural
function deleteDeliveries($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Deliveriess WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  