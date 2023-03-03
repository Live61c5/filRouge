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
        include('includes/navbarAdmin.php');
        include('includes/navbar.php');
    ?>
    <h1>Update photo</h1>
    <?php
        $id = $_GET['id'];
        $photo = $photoManager->getPhotoById($id);
    ?>
    <form action="updatePhoto.php" method="POST">
        <input type="hidden" name="id" value="<?= $photo['id'] ?>">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="<?= $photo['name'] ?>">
        <label for="path">Path :</label>
        <input type="text" name="path" value="<?= $photo['path'] ?>">
        <label for="is_enabled">Is_enabled :</label>
        <select name="is_enabled">
            <option value="1" <?= $photo['is_enabled'] == 1 ? 'selected' : '' ?>>True</option>
            <option value="0" <?= $photo['is_enabled'] == 0 ? 'selected' : '' ?>>False</option>
        </select>
        <input type="submit" value="Update">
    </form>
    <?php
        include('includes/footer.php');
    ?>
</body>
</html>