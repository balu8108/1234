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
      <a href="changePassword.php" class="headerLinks">Change Password</a>
       <a href="studentslist.php" class="headerLinks">Students List</a>
        <a href="students.php" class="headerLinks">Students</a>
        <a href="update.php" class="headerLinks">Update</a>
        <a href="delete.php" class="headerLinks">Delete</a>
      <a href="logout.php" class="headerLinks">Logout</a>
    </div>
  </div>
   <img src="male.png"  height="400px" width="300px" id="male" style="float:left;margin-right:5%;margin-left:1%;margin-top:1%;display:none" >
  <img src="female.png"  height="400px" width="300px" id="female" style="float:left;margin-right:5%;margin-left:1%;margin-top:1%;display:none" >
  <form method="POST" action="students.php">
  <span class="text">Name of the student:</span>
  <input type="text" name="studentName" id="studentName" ><br>
  <span class="text">Roll number:</span>
  <input type="text" name="rollNo" id="rollNo"><br> 
  <input type="submit" name="chpsubmit" id="chpsubmit">
  </form>
  <?php 
$session=$_SESSION['session'];
if($session==1)
{

  $id=$_SESSION['userId'];
  $query="SELECT username FROM users_info WHERE id='$id' ";
  $query_run=mysql_query($query);
  $query_fetching=mysql_fetch_assoc($query_run);
  $username=$query_fetching['username'];
 
if(isset($_POST['chpsubmit']))
{
  $student_name=$_POST['studentName'];

$rollNo=$_POST['rollNo'];
  $inserting_students="INSERT INTO students VALUES ('','$id','$username','$student_name','$rollNo')";
  
  $inserted=mysql_query($inserting_students);
  if($inserted)
  {
    echo "Entered";
  }
}

}


else
{
  header('Location:index.php');
}




  ?>