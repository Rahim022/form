<?php  
$host = 'localhost'; 
$user='user1';
$userName = 'root';   
$pass = ""; 
    try{   
        $conn =new PDO("mysql:host=$host",$userName,$pass);  
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="CREATE DATABASE testdb";

        $conn->exec($sql);
        $conn->exec("set names utf8");

             echo "database created succesfully<br>" ;       
    }
    catch (PDOException $e)   ///اگر وصل نشدی یه ارور بگیربرام
    {
        echo $sql . "not connected" . $e->getMessage();
    }

$conn=null;

?>
