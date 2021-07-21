<?php     
if($success){
    try{
      $conn = new PDO("mysql:host=$servername;dbname=$dbname",$dbusername, $dbpassword);             // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = $conn->prepare("INSERT INTO registration (userName, firstName, lastName, password, address1, address2, city,
                                 state, zipCode, phone, email, gender,maritalStatus, dateOfBirth)
                                  VALUES (:userName, :firstName, :lastName, :password, :address1,
                                  :address2, :city, :state, :zipCode, :phone, :email, :gender, :maritalStatus, :dateOfBirth)");
          $sql->bindParam(':userName', $uname);
          $sql->bindParam(':firstName', $fname);
          $sql->bindParam(':lastName', $lname);             
          $sql->bindParam(':password', $pass);             
          $sql->bindParam(':address1', $addr);             
          $sql->bindParam(':address2', $addr2);             
          $sql->bindParam(':city', $city);             
          $sql->bindParam(':state', $state);             
          $sql->bindParam(':zipCode', $zip);             
          $sql->bindParam(':phone', $phone);             
          $sql->bindParam(':email', $email);             
          $sql->bindParam(':gender', $gender);             
          $sql->bindParam(':maritalStatus', $mstat);             
          $sql->bindParam(':dateOfBirth', $dob);             
          $sql->execute();
          $_SESSION["last_id"] = $conn->lastInsertId();
          header("Location: success.php");
    }catch(Exception $e){
      echo "Connection failed: " . $e->getMessage();
    }finally{
      $conn = null;
    }
}
?>