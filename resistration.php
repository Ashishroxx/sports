<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
  session_start();



$con= mysqli_connect('localhost', 'root', 'deathking@6452');
/*if($con){
echo"successful";
}
else
{
echo "no connection";
} */

 mysqli_select_db($con, 'project');


$name=$_POST['user'];
$pass=$_POST['password'];
$mail=$_POST['email'];
$mob=$_POST['mobile'];


$q="select user, password, mobile_no from signup where user='$name' and password='$pass' and mobile_no=$mob";

$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
echo $num;
if($num==1)
{
?>
<script> alert("this account already exist!! please  enter diffrent input"); window.location.replace("signup.php");</script>
<?php
}
else
{
//$q1="insert into signup values(47,'$name', '$pass', $mob)";
$q1="INSERT INTO signup (user, password, mobile_no) VALUES ('$name', '$pass', $mob)";
 
mysqli_query($con, $q1);

?>
<script> alert("successfully resistered"); window.location.replace("login.php");</script>
<?php

}
?>
</body>
</html>

