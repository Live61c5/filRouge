<?php
// requetes SQL pour Ratings select procedural
function getRatings() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Ratings');
    return $query->fetchAll();
}

function getRatingsById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Ratings WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour Ratings insert into procedural
function addRating($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Ratings (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour Ratings update procedural
function updateRating($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Ratings SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour Ratings delete procedural
function deleteRating($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Ratings WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  