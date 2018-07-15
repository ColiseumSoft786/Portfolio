<?php
/**
 * Created by PhpStorm.
 * User: Muhammad Usman
 * Date: 7/14/2018
 * Time: 11:41 PM
 */

include_once 'connection.php';

class category extends connection
{

    public function AddCat($name){
        $connection = $this->GetConnection();
        try{
            $q = "INSERT INTO category(Name)values ('$name')";
            $stmt = $connection->prepare($q);
            $result = $stmt->execute();
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }


    public function GetCat(){
        $connection = $this->GetConnection();
        try{
            $q = "SELECT * FROM category";
            $stmt = $connection->prepare($q);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }


    public function UpdateCategory($id,$name){
        $connection = $this->GetConnection();
        try{
            $q = "UPDATE category SET Name='$name' WHERE Id=$id";
            $stmt = $connection->prepare($q);
            $result = $stmt->execute();
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }



    public function GetCatId($id){
        $connection = $this->GetConnection();
        try{
            $q = "SELECT * FROM category WHERE Id=$id";
            $stmt = $connection->prepare($q);
            $stmt->execute();
            $result = $stmt->fetch(1);
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }


    public function CatId($id){
        $connection = $this->GetConnection();
        try{
            $q = "SELECT * FROM category WHERE Id=$id";
            $stmt = $connection->prepare($q);
            $stmt->execute();
            $result = $stmt->fetch(1);
            return $result;
        }catch (Exception $e){
            echo "Data Not Inserted".$e;
        }
    }

}