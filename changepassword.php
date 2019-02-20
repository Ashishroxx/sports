<?php


$con=mysqli_connect('localhost', 'root', 'deathking@6452', 'project');
$mob=$_POST['mobile1'];
$pass=$_POST['password'];
$q=" select * from signup where mobile_no=$mob" ;
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1)
{
$row=mysqli_fetch_array($result);
$x=$row['user'];
$y=$row['password'];
$p= "update signup set password='$pass' where mobile_no='$mob'";
mysqli_query($con, $p);
echo '<script> alert("successfully update"); window.location.replace("login.php");</script>';

} 
else
{
echo '<script> alert("wrong number"); window.location.replace("forget1.php");</script>';
}

?>
