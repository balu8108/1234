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
      
     
      <a href="viewProfile.php" class="headerLinks">Home</a>
      <a href="changepassword.php" class="headerLinks">Account Settings</a>
      <a href="studentslist.php" class="headerLinks">Students List</a>
      <a href="students.php" class="headerLinks">Students</a>
      <a href="update.php" class="headerLinks">Update</a>
      <a href="delete.php" class="headerLinks">Delete</a>
      <a href="logout.php" class="headerLinks">Logout</a>
    </div>
  </div>
   <img src="male.png"  height="400px" width="300px" id="male" style="float:left;margin-right:5%;margin-left:1%;margin-top:1%;display:none" >
  <img src="female.png"  height="400px" width="300px" id="female" style="float:left;margin-right:5%;margin-left:1%;margin-top:1%;display:none" >
 
  <form method="POST" action="changepassword.php">
  <span class="text">Current Password:</span>
  <input type="password" name="currentPassword" id="currentPassword" ><br>
  <span class="text">New Password:</span>
  <input type="password" name="changePassword" id="changePassword"><br>
  <span class="text">Confirm Password:</span>
  <input type="password" name="cnfmnPassword" id="cnfmnPassword"><br>
  <input type="submit" name="chpsubmit" id="chpsubmit">


  </form>
<?php
$session=$_SESSION['session'];
if($session==1)
{
$id=$_SESSION['userId'];
$query="SELECT * FROM users_info WHERE id='$id'";
$query_run=mysql_query($query);
$userDetails=mysql_fetch_assoc($query_run);
$username=$userDetails['username'];
$email=$userDetails['email'];
$gender=$userDetails['gender'];
$surname=$userDetails['surname'];
$password=$userDetails['password'];



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

header('Location:index.php');
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
