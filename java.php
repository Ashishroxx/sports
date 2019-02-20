<?php
session_start();

$con=mysqli_connect('localhost', 'root', 'deathking@6452');

mysqli_select_db($con,'java');
?>
<!DOCTYPE html>

<html>
<head>
	 <meta charset="utf-8"/>
	 <meta http-equiv="X-UA-compatible" content="IE-edge">
	 <meta name="viewpoint" content="width-device-width">
	 <title>project</title>
	 <link rel="stylesheet" href="css/bootstrap.css"/>
	 <link rel="stylesheet" href="css/mystyle.css"/>
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script>href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"</script>
	 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
<style>
.x1{
background:blue;
}
.z{
background:#000000;
color:white;
}
.m{
color:red;

}

</style>

</style>
</head>
<body>
 <div class="card">
<div class="col-lg-8 m-auto d-block">
<div class="container">
	<div class="container-fluid top_bar">
	<h2 align="center" style="font-size:42px;">QUIZOTICA</h2>
	</div><br>
	<h3 align="center" style="color:green;">WELCOME to QUIZ </h3> <br>
	<h4 align="center" style="color:#00000;"> <em><strong>only one option is correct for each question</strong></em>.</h4><br><br>
	
	
	
     			<form action="check_java.php" method="post">
<?php
for($i=1;$i<6;$i++){
$q2="select * from ques where quesid=$i";
$query=mysqli_query($con, $q2);

while($rows=mysqli_fetch_array($query) ){
?>
		<div class="card z">
	<h2 class="card-header m"> <?php echo $rows['quesid']  ; ?><?php echo "." ?>  <?php echo $rows['question']; ?> </h2>


		<?php
		$q2="select * from answer where ansid=$i";
		$query=mysqli_query($con, $q2);

		while($rows=mysqli_fetch_array($query) ){
		?>
		<div class="card-header">
		<div style="font-size:15px;">
	    <input type="radio" name="qcheck[<?php echo $rows['ansid'];?>]" value="<?php echo $rows['aid'];?>">
		
		<?php echo $rows['ans'];?><br><br>
		</div>
		</div>	





<?php	
}
}
}
?><br><br>

	<div class="text-center">
  <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
	</div>
   			</form>
		</div>
	</div><br><br>
<div class="text-left">	<a href="logout.php" class="btn btn-danger">logout</a></div>
</div>
	
 <script type="text/javascript"src="js/jquery.js"></script>
	  
	  <script type="text/javascript"src="js/bootstrap.js"></script>
	  <script type="text/javascript">
	  &(document).ready( function(){ 
	   &('[data-toogle="tooltip"]').tooltip();  
		 });
	  </script>


</div>
</body>
</html>

