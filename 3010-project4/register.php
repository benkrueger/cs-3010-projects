
<?php
  include 'connection.php';
  $uname = $pass = $fname = $lname = $addr = $addr2 = $city = $state = $zip = $phone = $email = $gender = $mstat = $dob ="";
  $unameErr = $passErr = $fnameErr = $lnameErr = $addrErr = $cityErr = $stateErr = $zipErr = $phoneErr = $emailErr = $genderErr = $mstatErr = $dobErr = "";
  $success = False;
  include 'validate.php';
  include 'insert.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Benjamin Krueger's Project 1 Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 

    }
    .error {
      color: red;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="animations.html">Animations</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-8 text-left"> 
      <h1>Registration Form!</h1>
      <div class="col-sm-8 text-left">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Username:</label>
        <input type="text" id="uname" name="username" maxlength="50" minlength="6" value="<?php echo $uname?>">
        <span class="error"><?php echo $unameErr;?></span>
        <br>
        <label>Password:</label>
        <input type="password" id="password" value="<?php echo $pass ?>"autocomplete="off" name="password" maxlength="50" minlength="8" required>
        <span class="error"><?php echo $passErr;?></span>
        <br>
        <br>
        <label>Password strength:</label>
        <progress max="100" value="0" id="meter"></progress><br>
        <label>Repeat Password:</label>
        <input type="password" id="rpassword" autocomplete="off" name="rpassword" onkeyup="checkrp(this)"  required><br>
        <label>First Name:</label>
        <input type="text" id="fname" name="firstname" value="<?php echo $fname?>" maxlength="50" required>
        <span class="error"><?php echo $fnameErr;?></span>
        <br>
        <label>Last Name:</label>
        <input type="text" id="lname" name="lastname" value="<?php echo $lname?>" maxlength="50" required>
        <span class="error"><?php echo $lnameErr;?></span>
        <br>
        <label>Address Line 1:</label>
        <input type="text" id="a1" name="addr1" value="<?php echo $addr?>" maxlength="100" required>
        <span class="error"><?php echo $addrErr;?></span>
        <br>
        <label>Address Line 2:</label>
        <input type="text" id="a2" name="addr2" maxlength="100">
        <br>
        <label>City:</label>
        <input type="text" id="city" name="city" value="<?php echo $city?>" maxlength="50" required>
        <span class="error"><?php echo $cityErr;?></span>
        <br>
        <label>State:</label>
        <select name="state" required>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
        <span class="error"><?php echo $stateErr;?></span>
        <br>	
        <label>ZIP:</label>
        <input type="text" id="zip" value="<?php echo $zip?>" name="zipcode" required maxlength="11" onkeyup="zipFormat(this)" minlength="5">
        <span class="error"><?php echo $zipErr;?></span>
        <br>
        <label>Phone:</label>
        <input type="text" id="phone" value="<?php echo $phone?>" name="phone" maxlength="12" onkeyup="phoneFormat(this)" required>
        <span class="error"><?php echo $phoneErr;?></span>
        <br>
        <label>Email:</label>
        <input type="text" id="email" value="<?php echo $email?>" name="email" oninput="emailFormat(this)" required>
        <span class="error"><?php echo $emailErr;?></span>
        <br>
      <div class="col-sm-8 text-left">
        <label>Gender:</label>
        <div class="text-left">
          <input type="radio" id="male" name="gender" value="male" required>
          <label for="male">Male</label><br>
          <input type="radio" id="female" name="gender" value="female" required>
          <label for="female">Female</label><br>
          <input type="radio" id="other" name="gender" value="other" required>
          <label for="other">Other</label>
        </div>
        <span class="error"><?php echo $genderErr;?></span>
        <br>
        <label>Marital Status:</label>
          <div class="text-left">
          <input type="radio" id="married" name="mstatus" value="married" required>
          <label for="Married">Married</label><br>
          <input type="radio" id="single" name="mstatus" value="single" required>
          <label for="Single">Single</label><br>
        </div>
        <span class="error"><?php echo $mstatErr;?></span>
        <br>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" value="<?php echo $dob?>" name="dob" required>
        <span class="error"><?php echo $dobErr;?></span>
        <br>
        <input type="submit" value="Submit">
        <input type="reset">
      </div>
      </form>
      </div>
    <hr>
    </div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>
<script>
  var pwe = document.getElementById("password");
  var strBar = document.getElementById("meter");
  //add password check listener
  pwe.addEventListener("keyup",function() {checkpassword(pwe.value);});
  //add phone num format event listner
  function checkpassword(password){
    var strength = 0;
    if (password.match(/[a-z]+/)) {
      strength += 1;
    }
    if (password.match(/[A-Z]+/)) {
      strength += 1;
    }
    if (password.match(/[0-9]+/)) {
      strength += 1;
    }
    if (password.match(/[$@#&!]+/)) {
      strength += 1;
    }
    switch (strength) {
      case 0:
        strBar.value = 0;
        break;
      case 1:
        strBar.value = 25;
        break;
      case 2:
        strBar.value = 50;
        break;
      case 3:
        strBar.value = 75;
        break;
      case 4:
        strBar.value = 100;
        break;
    }
  }
  function checkrp(input) {
    if(input.value != pwe.value ){
      input.setCustomValidity('Passwords must match');
    }else{
      input.setCustomValidity('');
    }
  }
  function zipFormat(input){
    var zipstr = input.value;
    zipstr = zipstr.replace(/\D\\-/g,'');
    zipstr = zipstr.substring(0,11);
    var size = zipstr.length;
    if(size == 6 ){
      zipstr = zipstr + '-';
    }
    console.log(size);
    input.value = zipstr;
  }
  // A function to format text to look like a phone number
  function phoneFormat(input){
        // Strip all characters from the input except digits
        var phnstr = input.value;
        phnstr = phnstr.replace(/\D/g,'');

        // Trim the remaining input to ten characters, to preserve phone number format
        phnstr = phnstr.substring(0,10);

        // Based upon the length of the string, we add formatting as necessary
        var size = phnstr.length;
        if(size < 4){
          phnstr = phnstr;
        }else if(size < 7){
          phnstr = phnstr.substring(0,3)+'-'+phnstr.substring(3,6);
        }else{
          phnstr = phnstr.substring(0,3)+'-'+phnstr.substring(3,6)+'-'+phnstr.substring(6,10);
        }
        input.value = phnstr;

        console.log(size);
  }
  function emailFormat(input) {
    if(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(input.value)){
      input.setCustomValidity('');
    }else{
      input.setCustomValidity('Invalid email address format');
    }

  }
  
</script>
<footer class="container-fluid text-center">
</footer>
</body>
</html>
