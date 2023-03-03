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
    <h1>Update product</h1>
    <form action="updateProduct.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $product['name'] ?>">
        <label for="description">Description</label>
        <input type="text" name="description" value="<?= $product['description'] ?>">
        <label for="price">Price</label>
        <input type="text" name="price" value="<?= $product['price'] ?>">
        <label for="is_enabled">Is enabled</label>
        <input type="text" name="is_enabled" value="<?= $product['is_enabled'] ?>">
        <input type="submit" value="Update">
    </form>
    <?php
        include("includes/footer.php");
    ?>
</body>
</html>