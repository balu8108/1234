<?php
require 'core.inc.php';
require 'connect.inc.php';
$email=$_POST['loginEmail'];
$password=$_POST['loginPassword'];

echo $email;
echo $password;
if($email=="admin" && $password=="pass")
{
$_SESSION['admin']=1;

header('Location:adminpage.php');
}
else
{
  header('Location:admin.php');
}
?>