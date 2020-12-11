<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" name="name" value="<?php echo $commodity?>" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">species</span>
        <input type="text" name="species" value="<?php echo $commodity->getSpecies?>" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="mb-3">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">price</span>
            <input type="text" name="price"  value="<?php echo $commodity->getPrice?>" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">number</span>
            <input type="email" name="number"  value="<?php echo $commodity->getNumber?>" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">date</span>
            <input type="date" name="date"  value="<?php echo $commodity->getDate?>" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="form-label">description</span>
            <input type="text" name="description" value="<?php echo $commodity->getDescription ?>" class="from-control" id="formGroupExampleInput" >

        </div>
        <button type="submit">Update</button>
    </div>

</form>

</body>
</html>
