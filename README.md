# 1234
<?php
require 'core.inc.php';
require 'connect.inc.php';
?>
<!DOCTYPE html>
<head>
<title>Find Friends</title>
<link type="text/css" rel="stylesheet" href="style1.css" />
<script type="text/javascript" src="javascript.js"></script>
</head>
<body style="background-color:#E9EAED">
  <div id="header" >
    <div id="headerLinks">
      
           <a href="aviewProfile.php" class="headerLinks">Home</a>
      <a href="achangepassword.php" class="headerLinks">Account Settings</a>
      <a href="teacherslist.php" class="headerLinks">Teachers List</a>      
      <a href="astudentslist.php" class="headerLinks">Students List</a>
      <a href="astudents.php" class="headerLinks">Students</a>
      <a href="aupdate.php" class="headerLinks">Update</a>
      <a href="adelete.php" class="headerLinks">Delete</a>
      <a href="alogout.php" class="headerLinks">Logout</a>
    </div>
  </div>
   <img src="male.png"  height="400px" width="300px" id="male" style="float:left;margin-right:5%;margin-left:1%;margin-top:1%;display:none" >
  <img src="female.png"  height="400px" width="300px" id="female" style="float:left;margin-right:5%;margin-left:1%;margin-top:1%;display:none" >
 
  <form method="POST" action="achangepassword.php">
  <span class="text">Current Password:</span>
  <input type="password" name="currentPassword" id="currentPassword" ><br>
  <span class="text">New Password:</span>
  <input type="password" name="changePassword" id="changePassword"><br>
  <span class="text">Confirm Password:</span>
  <input type="password" name="cnfmnPassword" id="cnfmnPassword"><br>
  <input type="submit" name="chpsubmit" id="chpsubmit">


  </form>
<?php

$admin=$_SESSION['admin'];
if($admin==1)
{



if(isset($_POST['chpsubmit']))
{
   $newPassword=$_POST['changePassword'];
   $currentPassword=$_POST['currentPassword'];


if($currentPassword==$password)
{
if($newPassword!="")
{
  $chpquery="UPDATE users_info SET password='$newPassword' WHERE id='$id' ";
  
  if(mysql_query($chpquery))
  {
    echo "Updated";
  }
  else
  {
    echo "not updated";
  }
}
else
{
  echo 'Please enter new password';
}
}
else
{
  echo "Please check the password";
}
}
}
else
{
 header('Location:admin.php');

}
 ?>

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
