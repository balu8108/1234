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
   	<form method="POST" action="functions.php">
   		<span class="text">Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
      <input type="text" name="loginEmail" id="loginEmail" >
      <span style="font-family:Gabriola;color:red">Invalid Username or Password</span>
      <img src="cross_mark1.png" id="loginemailError"><br>

        


      <span class="text">Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><input type="text" name="loginPassword" id="loginPassword" >
      <img src="cross_mark1.png"  id="loginpassError"><br>
      <input type="submit" name="submit" id="loginSubmit" value="Login">
      

   	</form>
    <span class="text">Doesn't have an account?</span><a href="registerform.php" class="text">Create account!!</a>



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

