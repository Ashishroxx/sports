<!DOCTYPE html>
<html>
 	<head>
		 <meta charset="utf-8"/>
	 <meta http-equiv="X-UA-compatible" content="IE-edge">
	 <meta name="viewpoint" content="width-device-width">
	 <title></title>
	 <link rel="stylesheet" href="css/bootstrap.css"/>
	 
	 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
	<style>
  .bg-1 { 
      background-color:#330033;
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
        <div class="container">
	    <div class="row">
		
			<div class="col-lg-4">

		<div class="container-fluid text-center">
    <img src="images/logo.jpeg" class="img-circle" alt="Bird" width="150" height="150">
  </div>
			<h2 align="center">signup</h2>
			<form action="resistration.php" method="post">





			
			     <div class="form-group text-center">
				
				<label>user</label>
				<input type="text" name="user" placeholder="user" pattern="[A-Za-z0-9]{5,10}" title=" only laters or numbers"class="form-control"required>
			    </div>
			    <div class="form-group text-center">
				<label>password</label>
				<input type="text" name="password" placeholder="password"class="form-control"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
			

			    </div>
			    <div class="form-group text-center">
				<label>email</label>
				<input type="text" name="email" placeholder="email" pattern="[A-Za-z0-9.%+-]+@[A-Za-z]+\.[a-zA-Z]{2,3}$"class="form-control"required>
			    </div>
				<div class="form-group text-center">
				<label>mobile no</label>
				<input type="number" name="mobile" placeholder="mobile no" class="form-control"required>
			    </div>
				<div class="form-group text-center">
				<label>comment</label>
				<textarea name="comment" placeholder="comment"class="form-control"></textarea>
			    </div>
				
				 <div class="text-center">
				gender: <input type="radio" name="gender:" value="male"required>male
					<input type="radio" name="gender:" value="female"required>female
				</div><br>
			
		
				<button type="submit" class="btn btn-primary">signup</button>
			     </div>


		

 		</div>
	</div>

<div class="container-fluid footer text-right"> 
	  <div class="container">
	  <div class="col-sm-4">

        <h4>&copyright;online examination system</h4>

</div>
</body>
<html>


