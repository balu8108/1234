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
  table
  {
    text-align:center;
    border:1px solid blue;
    width:100%;
    font-family:Gabriola;
    font-size:30px;
    border-collapse:collapse;
  }
.button
    {
      background-color: black;
      padding:10px;
      padding-right: 20px;
      padding-left: 20px;
      color: white;
      border:1px solid #f5f5f5;
      border-radius: 10px;
      cursor:pointer;
      margin-top: 10px;
      text-align: center;
      box-shadow: 0 0 3px gray;
      font-family: Comic Sans MS;
      font-size:10px;
  }
    .button:hover
    {
      background-color: #262626;
    }
    a
    {
      text-decoration: none;
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
</body>
</html>
<?php





$admin=$_SESSION['admin'];
if($admin==1)
{


   $prof_query="SELECT * FROM users_info";
   $prof_query_run=mysql_query($prof_query);
    echo "<table>";
    echo "<tr>";
     echo "<td style='border:1px solid blue'>Index</td>";
     echo "<td style='border:1px solid blue'>Username</td>";
    echo "<td style='border:1px solid blue'>Surname</td>";
     echo "<td style='border:1px solid blue'>Email</td>";

    echo "</tr>";
    $i=1;
   while($prof_fetching=mysql_fetch_assoc($prof_query_run))
  {
    $_SESSION['student_id']=$prof_fetching['id'];
    $student_id=$_SESSION['student_id'];
    echo "<tr>";
    echo "<td style='border:1px solid blue'>".$i."</td>";
    echo  "<td style='border:1px solid blue'>".$prof_fetching['username'].'   '.'</td>';
    echo  "<td style='border:1px solid blue'>".$prof_fetching['surname'].'   '.'</td>';
    echo  "<td style='border:1px solid blue'>".$prof_fetching['email'].'   '.'</td>';
   
    echo "</tr>";
    $i++; 
  }
 
  echo "</table>";
}
else
{
  header('Location:admin.php');
}
?>

<body style="background-color:#E9EAED"></body>