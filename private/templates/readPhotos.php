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
    <h1>Read Photos</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>path</th>
                <th>Is_enabled</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($photos as $photo): ?>
                <tr>
                    <td><?= $photo['id'] ?></td>
                    <td><?= $photo['name'] ?></td>
                    <td><?= $photo['path'] ?></td>
                    <td><?= $photo['is_enabled'] ?></td>
                    <td>
                        <a href="updateUser.php?id=<?= $photo['id'] ?>">Update</a>
                        <a href="deleteUser.php?id=<?= $photo['id'] ?>">Delete</a>
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
</body>
</html>