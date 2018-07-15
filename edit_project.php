<?php

    include_once 'controller/category.php';
    include_once 'controller/project.php';

    $obj1 = new category();
    $getcat = $obj1->GetCat();

if ($_SERVER['REQUEST_METHOD'] == "GET"){
    $proid = $_GET['proid'];
    $obj = new project();
    $getproject = $obj->GetProjectId($proid);
}
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $key = $_POST['keyword'];
        $web = $_POST['website'];
        $detail = $_POST['detail'];
        $category = $_POST['category'];

        $ob = new project();
        $getrow = $ob->GetProjectId($id);
        if ($_FILES['image']['name'] != null) {
            $image = $_FILES['image']['name'];
            if ($getrow['Image'] != "") {
                unlink('img/' . $getrow['Image']);
            }
            $tmp_name = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmp_name, "img/$image");
        }

        $obj2 = new project();
        $project = $obj2->UpdateProject($id,$name,$key,$image,$web,$detail,$category);

        if ($project == true){
            echo "<script>window.location='index.php'</script>";
        }else{
            echo "data not Updated!";
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
                <h2 class="text-center">Update Project</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $getproject['Id'];?>" name="id">
                    <input type="text" value="<?php echo $getproject['Name'] ?>" name="name" style="margin: 7px 0px;" class="form-control">
                    <input type="text" value="<?php echo $getproject['Keyword'] ?>" name="keyword" style="margin: 7px 0px;" class="form-control">
                    <input type="file" name="image" style="margin: 7px 0px 0px 0px;" class="form-control">
                    <img src="img/<?php echo $getproject['Image']; ?>" width="60" height="60" />
                    <input type="text" value="<?php echo $getproject['Website'] ?>" name="website" style="margin: 7px 0px;" class="form-control">
                    <input type="text" value="<?php echo $getproject['Detail'] ?>" name="detail" style="margin: 7px 0px;" class="form-control">
                    <select name="category" id="" style="margin: 7px 0px;"  class="form-control">
                        <option value="">Project_Type</option>
                        <?php
                        foreach ($getcat as $item){
                        ?>
                        <option value="<?php echo $item['Id']; ?>"><?php echo $item['Name']; ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="Update Project" class="btn btn-default pull-right">
                </form>
            </div>
        </div>
    </div>

</body>
</html>