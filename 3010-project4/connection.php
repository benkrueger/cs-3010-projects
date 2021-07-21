<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = '';
$dbname = "project";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$dbusername, $dbpassword);             // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo "Connection failed:".$e->getMessage();
}finally{
    $conn =null; 
}
?>