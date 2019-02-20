<?php
session_start();

$con=mysqli_connect('localhost', 'root', 'deathking@6452', 'project');
$mob=$_POST['mobile'];
$q=" select user, password from signup where mobile_no=$mob" ;
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1)
{
$row=mysqli_fetch_array($result);
$x=$row['user'];
$y=$row['password'];
echo '<script> alert("your user name='; echo $x; echo ' and your password='; echo $y; echo '"); window.location.replace("login.php"); </script>'; 

} 
else
{
echo '<script> alert("wrong number"); window.location.replace("forget.php");</script>';
}

?>
