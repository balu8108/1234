<?php
require 'core.inc.php';
require 'connect.inc.php';
?>
<?php
$email=$_POST['loginEmail'];
$password=$_POST['loginPassword'];
$query="SELECT id FROM users_info WHERE email='$email' AND password='$password' ";
$query_run=mysql_query($query);
if(mysql_query($query))
{
  $rows=mysql_num_rows($query_run);
  if($rows==1)
  {
    $id_query=mysql_fetch_assoc($query_run);
    $id=$id_query['id'];
    $_SESSION['userId']=$id;
    header('Location:loggedin.php');
  }
  else
    {
    header('Location:index.php');
    }

}

 ?>
