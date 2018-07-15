<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-stripped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Keyword</th>
                        <th>Image</th>
                        <th>Website</th>
                        <th>Detail</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include_once 'controller/project.php';
                    include_once 'controller/category.php';

                    $catid = $_GET['catid'];
                    $category = new category();
                    $getcatid = $category->CatId($catid);
                    $obj = new project();
                    $getprojects = $obj->GetProject($catid);
                    foreach ($getprojects as $item){
                    ?>
                    <tr>
                        <td><?php echo $item['Name']; ?></td>
                        <td><?php echo $item['Keyword']; ?></td>
                        <td><img src="img/<?php echo $item['Image']; ?>" style="width: 50px; height: 50px;" alt=""></td>
                        <td><?php echo $item['Website']; ?></td>
                        <td><?php echo $item['Detail']; ?></td>
                        <td><?php echo $getcatid['Name']; ?></td>
                        <td><a href="edit_project.php?proid=<?php echo $item['Id']; ?>">Edit</a></td>
                        <td><a href="delete_project.php?proid=<?php echo $item['Id'] ?>">Delete</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>