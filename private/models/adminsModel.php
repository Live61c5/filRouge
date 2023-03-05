<?php
// requetes SQL pour Admins select procedural
function getAdmins() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Admins');
    return $query->fetchAll();
}

function getAdminsById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Admins WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour Admins insert into procedural
function addAdmin($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Admins (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour Admins update procedural
function updateAdmin($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Admins SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour Admins delete procedural
function deleteAdmin($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Admins WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  