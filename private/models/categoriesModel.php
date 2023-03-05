<?php
// requetes SQL pour categories select procedural
function getCategories() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM categories');
    return $query->fetchAll();
}

function getCategoriesById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM categories WHERE id = ?');
    $query->execute([
        $id
    ]);
    return $query->fetch();
}
// requetes SQL pour categories insert into procedural
function addCategory($name) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO categories (name) VALUES (?)');
    $result = $query->execute([
        $name
    ]);
    return $result;
}
// requetes SQL pour categories update procedural
function updateCategory($id, $name) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE categories SET name = ? WHERE id = ?');
    $result = $query->execute([
        $name,
        $id
    ]);
    return $result;
}
// requetes SQL pour categories delete procedural
function deleteCategory($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM categories WHERE id = ?');
    $result = $query->execute([
        $id
    ]);
    return $result;
}
  