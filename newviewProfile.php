<?php
require 'core.inc.php';
require 'connect.inc.php';
$session=$_SESSION['session'];
if($session==1)
{
$id=$_SESSION['newuser_id'];
$query="SELECT * FROM users_info WHERE id='$id'";
$query_run=mysql_query($query);
$userDetails=mysql_fetch_assoc($query_run);
$username=$userDetails['username'];
$email=$userDetails['email'];
$gender=$userDetails['gender'];
$surname=$userDetails['surname'];
}
else
{
  header('Location:index.php');
}
 ?>
 <head>
 	<link rel="stylesheet" href="style1.css" type="text/css">
 </head>
 <body style="background-color:#E9EAED" >
  
  <div id="header" >
    <div id="headerLinks">

      <a href="viewProfile.php" class="headerLinks">Home</a>
      <a href="changepassword.php" class="headerLinks">Account Settings</a>
      <a href="studentslist.php" class="headerLinks">Students List</a>
      <a href="students.php" class="headerLinks">Students</a>
      <a href="update.php" class="headerLinks">Update</a>
      <a href="delete.php" class="headerLinks">Delete</a>
      <a href="logout.php" class="headerLinks">Logout</a>
      
       <img src="male.png"  height="400px" width="300px" id="male" style="float:left;margin-right:5%;margin-left:1%;margin-top:5%;display:none" >
  <img src="female.png"  height="400px" width="300px" id="female" style="float:left;margin-right:5%;margin-left:1%;margin-top:5%;display:none" >
      <script type="text/javascript">
  var gender= "<?php echo $gender ?>";
  if(gender=="m")
  {
    document.getElementById("male").style.display="";
    
  }
  if(gender=="f")
  {
    document.getElementById("female").style.display="";

  }

</script>
   <?php

   echo "<div style='font-family:Gabriola;font-size:40px'>Name :$username <br>";
   echo "Email:  $email <br>";
   echo "Surname:$surname $gender<br></div>";
?>

 </body>
