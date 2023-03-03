<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <?php
        include("includes/navbarAdmin.php");
        include("includes/navbar.php");
        // on récupère l'id de l'user à update
        $id = $_GET['id'];
        // on récupère les infos de l'user à update
        $user = getUserById($id);
    ?>
    <?php
        include('includes/navbarAdmin.php');
        include('includes/navbar.php');
    ?>
    <h1>Update User</h1>
    <form action="updateUser.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $user['email'] ?>">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= $user['username'] ?>">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="user" <?= $user['role'] == 'user' ? 'selected' : '' ?>>User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <?php
        include("includes/footer.php");
    ?>
</body>
</html>