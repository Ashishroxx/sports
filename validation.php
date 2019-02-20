<?php
  session_start();

/*if(!isset($_SESSION['user'])){
header('location:login.php');
} */

$con= mysqli_connect('localhost', 'root', 'deathking@6452');

/*if($con){
echo"successful";
}
else
{
echo "no connection";
}*/

 mysqli_select_db($con, 'project');

$name=$_POST['user'];
$pass=$_POST['password'];
$mob=$_POST['mobile'];

$q="select user, password, mobile_no from signup where user='$name' and password='$pass' and mobile_no='$mob' ";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1)
{
$_SESSION['user']=$name;
$_SESSION['mobile']=$mob;
header('location:home.php');
}
else{
echo '<script> alert("invalid user name or password"); window.location.replace("login.php") </script> ';
}

?>

