<?php
// requetes SQL pour Colorss select procedural
function getColorss() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Colorss');
    return $query->fetchAll();
}

function getColorssById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Colorss WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour Colorss insert into procedural
function addColors($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Colorss (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour Colorss update procedural
function updateColors($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Colorss SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour Colorss delete procedural
function deleteColors($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Colorss WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  