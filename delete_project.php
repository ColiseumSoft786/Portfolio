<?php
include_once 'controller/project.php';

$proid = $_GET['proid'];
$obj = new project();
$getproject = $obj->GetProjectId($proid);

if ($getproject['Image'] != ""){
    unlink('img/'.$getproject['Image']);
}

$getproject = $obj->DelProject($proid);
if ($getproject == true){
    echo "<script>window.location='index.php'</script>";
}else{
    echo "Not Deleted!";
}


?>

