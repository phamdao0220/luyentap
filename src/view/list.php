<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=add" class="btn btn-success">Add</a>

<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Species</th>
        <th>Price</th>
        <th>Number</th>
        <th>Date</th>
        <th>Description</th>
        <th>Action</th>

    </tr>
    <?php foreach ($commoditys as $key => $commodity): ?>
        <tr>
            <td><?php echo $key++ ?></td>
            <td><?php echo $commodity['name'] ?></td>
            <td><?php echo $commodity['species'] ?></td>
            <td><?php echo $commodity['price'] ?></td>
            <td><?php echo $commodity['number'] ?></td>
            <td><?php echo $commodity['date'] ?></td>
            <td><?php echo $commodity['description'] ?></td>
        <td class="table-success">
            <a href="index.php?page=edit&id=<?php echo $commodity['id']?>" class="btn btn-info">Edit</a>
        </td>

        <td class="table-success">
            <a href="index.php?page=delete&id=<?php echo $commodity['id'] ?>"
               onclick="return confirm('You want to delete') " class="btn btn-danger">Delete</a>
        </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
