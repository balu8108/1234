<?php
require 'core.inc.php';
require 'connect.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="javascript.js"></script>
</head>
<body>
 <div id="header" >
        <div id="header_logo" >Login Page</div>
    </div>
   <div id="loginForm">
   	<form method="POST" action="adminfun.php">
   		<span class="text">Username: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
      <input type="text" name="loginEmail" id="loginEmail" >
      <img src="cross_mark1.png" style="display:none" id="loginemailError"><br>
        


      <span class="text">Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><input type="password" name="loginPassword" id="loginPassword" >
      <img src="cross_mark1.png" style="display:none" id="loginpassError"><br>
      <input type="submit" name="submit" id="loginSubmit" value="Login">
      <img src="cross_mark1.png" style="display:none" id="loginpassError"><br><br>

   	</form>
    

   



   </div>

</body>
</html>
<?php
if(isset($_POST['loginSubmit']))
{
  $email=$_POST['loginEmail'];
  $password=$_POST['loginPassword'];

}


?>
