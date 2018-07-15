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
                    <th>Sr#</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include_once 'controller/category.php';
                $obj = new category();
                $category = $obj->GetCat();
                foreach ($category as $item){
                    ?>
                <tr>
                    <td><?php echo $item['Id'] ?></td>
                    <td><?php echo $item['Name'] ?></td>
                    <td><a href="update_category.php?catid=<?php echo $item['Id'] ?>">Edit</a></td>
                    <td><a href="viewmore.php?catid=<?php echo $item['Id'] ?>">View Projects</a></td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
