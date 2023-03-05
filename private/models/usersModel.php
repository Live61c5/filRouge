<?php
// requetes SQL pour users select procedural
function getUsers() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM users');
    return $query->fetchAll();
}

function getUsersById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM users WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour users insert into procedural
function addUser($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO users (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour users update procedural
function updateUser($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE users SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour users delete procedural
function deleteUser($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM users WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  