<?php
/**
 * Created by PhpStorm.
 * User: Muhammad Usman
 * Date: 7/14/2018
 * Time: 11:41 PM
 */

include_once 'connection.php';

class project extends connection
{

    public function ProjectId($id){
        $connection = $this->GetConnection();
        try{
            $q = "SELECT * FROM project WHERE Id=$id";
            $stmt = $connection->prepare($q);
            $stmt->execute();
            $result = $stmt->fetch(1);
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }


    public function GetProject($id){
        $connection = $this->GetConnection();
        try{
            $q = "SELECT * FROM project WHERE Category=$id";
            $stmt = $connection->prepare($q);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }


    public function AddProject($name,$keyword,$image,$website,$detail,$category){
        $connection = $this->GetConnection();
        try{
            $q = "INSERT INTO project(Name,Keyword,Image,Website,Detail,Category) VALUES('$name','$keyword','$image','$website','$detail','$category')";
            $stmt = $connection->prepare($q);
            $result = $stmt->execute();
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }


    public function GetProjectId($id){
        $connection = $this->GetConnection();
        try{
            $q = "SELECT * FROM project WHERE Id=$id";
            $stmt = $connection->prepare($q);
            $stmt->execute();
            $result = $stmt->fetch(1);
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }


    public function UpdateProject($id,$name,$keyword,$image,$website,$detail,$category){
        $connection = $this->GetConnection();
        try{
            $q = "UPDATE project SET Name='$name',Keyword='$keyword',Image='$image',Website='$website',Detail='$detail',Category='$category' WHERE Id=$id";
            $stmt = $connection->prepare($q);
            $result = $stmt->execute();
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }


    public function DelProject($id){
        $connection = $this->GetConnection();
        try{
            $q = "DELETE FROM project WHERE Id=$id";
            $stmt = $connection->prepare($q);
            $result = $stmt->execute();
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }

}