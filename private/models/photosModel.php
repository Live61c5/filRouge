<?php
// requetes SQL pour Photos select procedural
function getPhotos() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Photos');
    return $query->fetchAll();
}

function getPhotosById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Photos WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour Photos insert into procedural
function addPhoto($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Photos (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour Photos update procedural
function updatePhoto($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Photos SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour Photos delete procedural
function deletePhoto($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Photos WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  