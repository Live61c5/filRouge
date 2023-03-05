<?php 

include("models/model.php");


$users = getUsers();
$user =getUserById($id);


include("templates/readUsers.php");
include("templates/updateUser.php");