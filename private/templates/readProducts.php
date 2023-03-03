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
    <h1>Read Products</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
                <th>Ident_product</th>
                <th>is_enabled</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><?= $product['ident_product'] ?></td>
                    <td><?= $product['is_enabled'] ?></td>
                    <td>
                        <a href="updateUser.php?id=<?= $product['id'] ?>">Update</a>
                        <a href="deleteUser.php?id=<?= $product['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
        include("includes/footer.php");
    ?>
</body>
</html>