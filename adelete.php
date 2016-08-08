<?php
require 'core.inc.php';
require 'connect.inc.php';
?>
<!DOCTYPE html>
<head>
<title>Find Friends</title>
<link type="text/css" rel="stylesheet" href="style1.css" />
<script type="text/javascript" src="javascript.js"></script>
<style>
span
{
font-family:Gabriola;
}

</style>
</head>
<body style="background-color:#E9EAED">
  <div id="header" >
    <div id="headerLinks">
      
     <a href="aviewProfile.php" class="headerLinks">Home</a>
    
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
 
  <form method="POST" action="adelete.php">
  <span class="text">Roll No:</span>
  <input type="text" name="rollNo" id="rollNo" ><br>
  
  <input type="submit" name="chpsubmit" id="chpsubmit" value="Delete">


  </form>
<?php

$admin=$_SESSION['admin'];
if($admin==1)
{

if(isset($_POST['chpsubmit']))
{
   $rollNo=$_POST['rollNo'];
   
$query="SELECT * FROM students WHERE rollNo='$rollNo' ";
$query_run=mysql_query($query);
$rows=mysql_num_rows($query_run);
if($rows>0)
{

      $chpquery="DELETE FROM students WHERE rollNo='$rollNo' ";
  
  if(mysql_query($chpquery))
  {
    echo "Deleted";
  }
  else
  {
    echo "not deleted";
  }

}
else
{

    echo "<span style='font-family;Gabriola'>"."There exists no such roll number"."</span>";

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

