<?php

    include_once 'controller/category.php';
    include_once 'controller/project.php';
    $obj = new category();
    $getcat = $obj->GetCat();

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $key = $_POST['keyword'];
        $web = $_POST['website'];
        $detail = $_POST['detail'];
        $category = $_POST['category'];
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name,"img/$image");
        move_uploaded_file($tmp_name,"img/$image");

        $obj1 = new project();
        $project = $obj1->AddProject($name,$key,$image,$web,$detail,$category);

        if ($project == true){
            echo "<script>window.location='index.php'</script>";
        }else{
            echo "data not inserted!";
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
                <h2 class="text-center">Insert Project</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Project Name" name="name" style="margin: 7px 0px;" class="form-control">
                    <input type="text" placeholder="Keyword" name="keyword" style="margin: 7px 0px;" class="form-control">
                    <input type="file" name="image" style="margin: 7px 0px;" class="form-control">
                    <input type="text" placeholder="Website" name="website" style="margin: 7px 0px;" class="form-control">
                    <input type="text" placeholder="Detail" name="detail" style="margin: 7px 0px;" class="form-control">
                    <select name="category" id="" style="margin: 7px 0px;"  class="form-control">
                        <option value="">Project_Type</option>
                        <?php
                        foreach ($getcat as $item){
                        ?>
                        <option value="<?php echo $item['Id']; ?>"><?php echo $item['Name']; ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="Add Project" class="btn btn-default pull-right">
                </form>
            </div>
        </div>
    </div>

</body>
</html>