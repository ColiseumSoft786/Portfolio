<?php
/**
 * Created by PhpStorm.
 * User: Muhammad Usman
 * Date: 7/14/2018
 * Time: 11:42 PM
 */

class connection
{

    function GetConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $db = "portfolio";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            echo "connection failed" . $e->getMessage();
        }
        return $conn;
    }

}