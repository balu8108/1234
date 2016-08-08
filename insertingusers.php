<?php
require 'core.inc.php';
require 'connect.inc.php';
?>
<script type="text/javascipt" src="javascript.js" ></script>
<?php
$username=$_POST['registerUsername'];
$surname=$_POST['registerSurname'];
$email=$_POST['registerEmail'];
$password=$_POST['registerPassword'];
$gender=$_POST['gender'];
$query="SELECT `id` FROM users_info WHERE email='$email'";
$query_run=mysql_query($query);
if($query_run)
{
  $rows=mysql_num_rows($query_run);
  if($rows==1)
  {
    echo "alert('Email already exists')";
  }
  else
  {
    $inserting="INSERT INTO users_info VALUES ('','$username','$surname','$email','$gender','$password')";
    $inserted=mysql_query($inserting);
    if($inserted)
    {
      $_SESSION['session']=1;
      $query="SELECT id FROM users_info WHERE email='$email' AND password='$password'";
      $query_run=mysql_query($query);
      $id_query=mysql_fetch_assoc($query_run);
      $id=$id_query['id'];
      $_SESSION['userId']=$id;
      header('Location:newloggedin.php');
    }
    else {
      echo "<script>alert('Some problem regarding registration')</script>";
    }
  }


}
?>
