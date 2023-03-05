<?php
// requetes SQL pour Sizes select procedural
function getSizes() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Sizes');
    return $query->fetchAll();
}

function getSizesById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Sizes WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour Sizes insert into procedural
function addSize($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Sizes (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour Sizes update procedural
function updateSize($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Sizes SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour Sizes delete procedural
function deleteSize($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Sizes WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  