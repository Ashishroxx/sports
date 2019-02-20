<!DOCTYPE html>
<html>
 	<head>
		 <meta charset="utf-8"/>
	 <meta http-equiv="X-UA-compatible" content="IE-edge">
	 <meta name="viewpoint" content="width-device-width">
	 <title>php project</title>
	 <link rel="stylesheet" href="css/bootstrap.css"/>
	 <link rel="stylesheet" href="css/mystyle.css"/>
	 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
	<style>
  .bg-1 { 
      background-color:#002633;
      color: #ffffff;

  }
  .bg-2 { 
      background-color:#141f1f;
      color: #ffffff;

  }


.bg-1 {
    padding-top: 70px;
    padding-bottom: 70px;
    padding-left: 470px;
    padding-right: 370px;
}


  </style>
 	</head>
  <body>

<div class="bg-1">
        <div class="container text-center ">
	    <div class="row">
		<div class="col-lg-4">
			<h2 align="center">login</h2>
			<form action="validation.php" method="post">
	  <div>
  <div class="container-fluid text-center">
    <img src="images/logo.jpeg" class="img-circle" alt="Bird" width="150" height="150">
  </div>
</div>
 
	  
		
				
			     <div class="form-group">
				
				<label>username</label>
				<input type="text" name="user" placeholder="user"class="form-control"required>
			     </div>
			    <div class="form-group">
				<label>password</label>
				<input type="password" name="password"placeholder="password"id="myInput" class="form-control"required><br>

				<div class="form-group">
				<label>mobile</label>
				<input type="number" name="mobile" placeholder="mobile"class="form-control"required>
			    </div>

					<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

			     </div>		

			<button type="submit" class="btn btn-primary">login</button>
			
		</div>		
		
		
			
		


			</form>
			<form action="signup.php" method="post">
			<div>
		<button type="submit" class="btn btn-success"><a href="signup.php">sign up</a></button>
			</form>
			</div><br>
			<form action="forget.php" method="post">
			<div><button type="submit" class="btn btn-danger"><a href="forget.php">forget password</a></button></div><br>
			</form>	
			<form action="forget1.php" method="post">
			<div><button type="submit" class=""><a href="change.php">change password</a></button></div>
			</form>			
			
			
			


		 	</div>
 		</div>
</div>
	</div>
	<div class="container-fluid text-right bg-2">

     <h1 > ONLINE QUIZ........</h1>
     
	</div>

</body>
<html>
		
					



