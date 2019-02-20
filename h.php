<html>
<head></head>
<?php

$con=mysqli_connect('localhost','root','deathking@6452','project1');
if(!$con)
{
 echo "connection failed ";
}
else
{
  echo "connected";
}
$sql="select * from quiz_c";
$result=mysqli_query($con,$sql);
//if($result)
//{ echo "ajay";}
$num=mysqli_num_rows($result);
?>
<body>
<form action="h.php" method="post">
<?php
$i=1;
while($i<=$num)
{
  $row=mysqli_fetch_array($result);
  echo "<br><br>".$row['question']."<br>";
?>

  <input type="radio" name="answ" value="1">
<?php
   echo $row['ch1']."<br>";
?>
  <input type="radio" name="answ" value="2">
<?php
   echo $row['ch2']."<br>";
?>
  <input type="radio" name="answ" value="3">
<?php
   echo $row['ch3']."<br>";
?>
  <input type="radio" name="answ" value="4">
<?php
   echo $row['ch4']."<br>";
?>

<?php 
/* $select=$_POST['answ'];
 if($row['ans']==$select)
 {echo "true";}
 else
 {echo "false";}
*/
?>
<input type="submit" value="choose">
<?php $select=$_POST['answ'];
  if($select>0)
   { $i++; }
  else
  { break;}
 echo $select."ajay".$row['ans'];
$select=0;
 /*if($row['ans']==$select)
 {echo "true";}
 else
 {echo "false";}*/
?>

<?php
 }
?>
</form>
<!--<input type="submit" value="choose">-->
 

</body>
<html>
