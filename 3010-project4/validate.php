<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $success = True;
    //begin input validation
    //Check uname
    if(empty($_POST["username"])){
      $unameErr = "Username is a required field";
      $success = False;
    }else{
      $uname = test_input($_POST["username"]);
    }
    //Check Password
    if(empty($_POST["password"])){
      $passErr = "Password is a required field";
      $success = False;
    }else{
      $pass = password_hash(test_input($_POST["password"]), PASSWORD_DEFAULT);
    }
    //Check Second password
    if(empty($_POST["rpassword"])){
        $passErr = "Repeat password please.";
        $success = False;
    }
    if($_POST["password"] != $_POST["rpassword"]){
        $passErr = "Repeat password must match";
        $success = False;
    }

    //Check firstname
    if(empty($_POST["firstname"])){
      $fnameErr = "Firstname is a required field";
      $success = False;
    }else{
      $fname = test_input($_POST["firstname"]);
    }
    //check lastname
    if(empty($_POST["lastname"])){
      $lnameErr = "Password is a required field";
      $success = False;
    }else{
      $lname = test_input($_POST["lastname"]);
    }
    //Check address line 1
    if(empty($_POST["addr1"])){
      $addrErr = "Address is a required field";
      $success = False;
    }else{
      $addr = test_input($_POST["addr1"]);
    }
    if(empty($_POST["addr2"])){
      $addrErr ="Address is a required field";
      $success = False;
    }else{
      $addr2 = test_input($_POST["addr2"]);
    }
    //Check city
    if(empty($_POST["city"])){
      $cityErr = "City is a required field";
      $success = False;
    }else{
      $city = test_input($_POST["city"]);
    }
    if(empty($_POST["state"])){
      $stateErr = "State is a required field";
      $success = False;
    }else{
      $state = test_input($_POST["state"]);
    }
    if(empty($_POST["zip"])){
      $zipErr = "Zip is a required field";
      //$success = False;
    }else {
      $zip = test_input($_POST["zip"]);
    }
    if(empty($_POST["phone"])){
      $phoneErr = "Phone is a required field";
      $success = False;
    }else{
      $phone = test_input($_POST["phone"]);
    }
    if(empty($_POST["email"])){
      $emailErr = "Email is a required field";
      $success = False;
    }else{
      $email = test_input($_POST["email"]);
    }
    if(empty($_POST["gender"])){
      $genderErr = "Gender is a required field";
      $success = False;
    }else {
      $gender = test_input($_POST["gender"]);
    }
    if(empty($_POST["mstatus"])){
      $mstatErr = "Marriage status is a required field";
      $success = False;
    }else {
      $mstat = test_input($_POST["mstatus"]);
    }
    if(empty($_POST["dob"])){
      $dobErr = "Date of birth is a required field";
      $success = False;
    }else{
      $dob = test_input($_POST["dob"]);
    }
  }
  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>