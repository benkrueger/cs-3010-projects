<?php
    include 'connection.php';
    $newuserid = $_SESSION["last_id"];
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$dbusername, $dbpassword);             // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("SELECT userName FROM registration WHERE id=:lastid");
        $sql->bindParam(':lastid',$newuserid);
        $sql->execute();
        //$sql->setFetchMode(PDO::FETCH_ASSOC);
        $res = $sql->fetchAll()[0];
    }catch(Exception $e){
        echo "Connection failed:".$e->getMessage();
    }finally{
        $conn =null;
        $_SESSION["last_id"] = ""; 
    }
    ?>
<html>
    <body>
        <h1>Registration Success!</h1>
        <div class="col-sm-8 text-left">
            <label>Username:<?echo $res;?></label>
        </div>
    </body>
</html>