<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
	 <meta http-equiv="X-UA-compatible" content="IE-edge">
	 <meta name="viewpoint" content="width-device-width">
	 <title>project</title>
	 <link rel="stylesheet" href="css/bootstrap.css"/>
	 <link rel="stylesheet" href="css/mystyle.css"/>
	 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
<style>
.x4{
background:#e62e00;
}
</style>
</head>


<body>
<?php

session_start();


$con=mysqli_connect('localhost','root','deathking@6452');
mysqli_select_db($con, 'c#');
 
if(isset($_POST['submit'])){
  if(!empty($_POST['qcheck'])){
   $count=count($_POST['qcheck']);
?>
	
	<div class="container-fluid x4">
	<h2 align="center" style="font-size:42px;">RESULT</h2>
	</div><br>
	<div class="text-right">	<a href="logout.php" class="btn btn-danger">logout</a></div>	
 <h1 align="center" style="color:blue;"><?php echo "total no of attempt ques=   " .$count. "<br>";?></h1>

    <?php
	$selected=$_POST['qcheck'];
	
	$result=0;
	$wrong=0;
	$i=1;
	$y=$_SESSION['user'];
	$z=$_SESSION['mobile'];
	
	$x=0;
	$q2 ="select * from ques" ;
	
	$query=mysqli_query($con, $q2);
	while($rows=mysqli_fetch_array($query))
		{
		$x++;
		
		$checked=$rows['ansid']==$selected[$i];
		if($checked){
	$result++;
		}
		
	$i++;
		}
	$wrong=$count-$result;
	?>
	
	<h2 align="center" style="color:green;"> <?php echo "<br>your score is $result";?></h2>
	<h2 align="center" style="color:red;"> <?php echo "<br>wrong attempt= $wrong";?></h2><br>
	<?php	

	$q3="insert into user(uname, mobile, totalques, correctans) values('$y', $z, $x, $result)";
	echo $q3;
	
 	$query1=mysqli_query($con,$q3);
	?> 
<?php
      }
	}
	
?>

</body>
</html><!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
	 <meta http-equiv="X-UA-compatible" content="IE-edge">
	 <meta name="viewpoint" content="width-device-width">
	 <title>project</title>
	 <link rel="stylesheet" href="css/bootstrap.css"/>
	 <link rel="stylesheet" href="css/mystyle.css"/>
	 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
<style>
.x4{
background:#e62e00;
}
</style>
</head>


<body>
<?php

session_start();


$con=mysqli_connect('localhost','root','deathking@6452');
mysqli_select_db($con, 'c#');
 
if(isset($_POST['submit'])){
  if(!empty($_POST['qcheck'])){
   $count=count($_POST['qcheck']);
?>
	
	<div class="container-fluid x4">
	<h2 align="center" style="font-size:42px;">RESULT</h2>
	</div><br>
	<div class="text-right">	<a href="logout.php" class="btn btn-danger">logout</a></div>	
 <h1 align="center" style="color:blue;"><?php echo "total no of attempt ques=   " .$count. "<br>";?></h1>

    <?php
	$selected=$_POST['qcheck'];
	
	$result=0;
	$wrong=0;
	$i=1;
	$y=$_SESSION['user'];
	$z=$_SESSION['mobile'];
	
	$x=0;
	$q2 ="select * from ques" ;
	
	$query=mysqli_query($con, $q2);
	while($rows=mysqli_fetch_array($query))
		{
		$x++;
		
		$checked=$rows['ansid']==$selected[$i];
		if($checked){
	$result++;
		}
		
	$i++;
		}
	$wrong=$count-$result;
	?>
	
	<h2 align="center" style="color:green;"> <?php echo "<br>your score is $result";?></h2>
	<h2 align="center" style="color:red;"> <?php echo "<br>wrong attempt= $wrong";?></h2><br>
	<?php	

	$q3="insert into user(uname, mobile, totalques, correctans) values('$y', $z, $x, $result)";
	
	
 	$query1=mysqli_query($con,$q3);
	?> 
<?php
      }
	}
	
?>

</body>
</html>
