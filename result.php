<html>
<head>
<style>

body{
background:#1f1f14;
}
div{
margin-top:50px;
margin-left:400px;
font-size:20px;


}
</style>

 </head>
<body>

<?php
session_start();
$con=mysqli_connect('localhost', 'root', 'deathking@6452');

mysqli_select_db($con, 'onlinequiz');
$y=$_SESSION['user'];
$z=$_SESSION['mobile'];
$q="select * from user where uname='$y' and mobile=$z ";
 $result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);

if($num==0)
{ echo "you have not take part in any quiz"; 
}
else
{
  for($i=1;$i<=$num;$i++)
   {  $row=mysqli_fetch_array($result);
?>
     <div>
	<em><strong style="color:#fff;"> <?php echo "< $i.> In $i st  attempt total quetion was ". $row['totalques']." and your score is ".$row['correctans'] .".<br><br>";?></strong></em>
	</div>
	
<?php
    }
}

?>
<form action="home.php" method="post">
	<button type="submit" value="submit" name="submit" class="btn btn-success"> <a href="home.php">home</a></button>
	</form>
</body>
</html>
