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

 mysqli_select_db($con, 'admindata');

$name=$_POST['user'];
$pass=$_POST['password'];
$adminid=$_POST['adminid'];


$q="select user, adminid from admin where user='$name' and adminid='$adminid' ";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1)
{
$_SESSION['user']=$name;
$_SESSION['mobile']=$mob;
header('location:http://localhost/phpmyadmin/');
}
else{
echo '<script> alert("invalid user name or password"); window.location.replace("admin.php") </script> ';
}

?>

