<?php
require 'connect.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css" >
  <script type="text/javascript" src="javascript.js"></script>
</head>
<body>
 <div id="header" >
        <div id="header_logo" >Login Page</div>
    </div>
          <div id="registerForm">
           
            <form action="insertingusers.php" method="POST" onsubmit="return validations()">

          <span class="text" >First Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
            <input type="text" name="registerUsername" id="registerUsername">
            <img src="cross_mark1.png" style="display:none" id="fnameError"><br>

          <span class="text">SurName:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
            <input type="text" name="registerSurname" id="registerSurname">
            <img src="cross_mark1.png" style="display:none" id="surnameError"><br>

          <span class="text">Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
            <input type="text" name="registerEmail" id="registerEmail">
            <img src="cross_mark1.png" style="display:none" id="emailError">
            <span style="color:red;margin-top: 0px;display:none;font-size:25px;font-family:Gabriola" id="emailErrReport">Please enter a valid email address</span>
            <br id="emailErrBr" >


          <span class="text">Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
            <input type="password" name="registerPassword" id="registerPassword">
            <img src="cross_mark1.png" style="display:none" id="passwordError">

          <span style="color:red;margin-top: 0px;display:none;font-size:25px" id="passError">Password's did not match</span><br>

          <span class="text">Confirm Password:</span>
            <input type="password" name="registerCPassword"  id="registerCPassword">
            <img src="cross_mark1.png" style="display:none" id="cpasswordError"><br>

          <span class="text">Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>

          <span class="text">Male</span>
            <input type="radio" name="gender"  id="registerMale" value="m">
          <span class="text">Female</span>
            <input type="radio" name="gender"  id="registerFemale" value="f">
            <img src="cross_mark1.png" style="display:none" id="gendErrReport"><br><br>

          <input type="submit" name="registerSubmit" id="registerSubmit" value="Create account !" class="registerForm">
            </form>
            </div>
        </div>
    </div>
  <?php
  if(isset($_POST['registerSubmit']))
  {
     $username=$_POST['registerUsername'];
     $surname=$_POST['registerSurname'];
     $email=$_POST['registerEmail'];
     $password=$_POST['registerPassword'];
  }
     ?>