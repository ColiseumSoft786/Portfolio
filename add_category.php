<?php

    include_once 'controller/category.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];

        $cat_obj = new category();
        $cat = $cat_obj->AddCat($name);
        if ($cat == true){
            echo "<script>window.location='index.php'</script>";
        }else{
            echo "Category Not Inserted";
        }

    }

?>
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
                <h2 class="text-center">Insert Category</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <form action="" method="post">
                    <input type="text" name="name" style="margin: 7px 0px;" class="form-control">
                    <input type="submit" value="Add Category" class="btn btn-default pull-right">
                </form>
            </div>
        </div>
    </div>

</body>
</html>